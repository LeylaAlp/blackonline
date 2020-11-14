<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Siparis;
use \Iyzipay\Options;
use Illuminate\Support\Facades\Session;
use App\Models\Kategori;
use \Iyzipay\Model\CheckoutForm;
use App\Models\Kullanici;
//use PharIo\Manifest\Url;
use Illuminate\Support\Facades\URL;
use Config;

class OdemeController extends Controller
{
      public function index(Request $request)
    {


        $data         = [];
        $categoryMenu = Kategori::orderBy('kategori_adi', 'asc')->get();
        $user_detail  = Auth::user()->detay;
        $user         = Auth::user();
        $order        = Cart::total();
        $random       = rand(1, 10000);

        $data["user_detail"]  = $user_detail;
        $data["user"]         = $user;
        $data["order"]        = $order;
        $data["categoryMenu"] = $categoryMenu;

        session()->put('order_no', $random);

        $form                   = [];
        $form['sessionOrderNo'] = session('order_no');
        $form['orderPrice']     = $order;
        $form['basketID']       = session('aktif_sepet_id');
        $form['route']          = 'siparisler';
        $form['userID']         = Auth::id();
        $form['name']           = Auth::user()->adsoyad;
        $form['surname']        = Auth::user()->adsoyad;
        $form['phone']          = Auth::user()->detay->telefon;
        $form['email']          = "mail@gmail.com";
        $form['city']           = Auth::user()->detay->adres;
        $form['country']        = Auth::user()->detay->adres;
        $form['zipcode']        = "34732";
        $form['address']        = Auth::user()->detay->adres;



        require (base_path('vendor/iyzico/iyzipay-php/IyzipayBootstrap.php'));
        \IyzipayBootstrap::init();
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-itfoV6ntQuSVW8ljpbNXfQP80LWLTzMQ");
        $options->setSecretKey("sandbox-FZnBFSJ4hoiDqDJhvcJPxvWJTO7T4NWG");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");

        $request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($form['sessionOrderNo']);
        $request->setPrice("1");
        $request->setPaidPrice($form['orderPrice']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);
        $request->setBasketId($form['basketID']);
        $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
        $request->setCallbackUrl(route("siparisler"));
        $request->setEnabledInstallments(array(2, 3, 6, 9));

        $buyer = new \Iyzipay\Model\Buyer();
        $buyer->setId($form['userID']);
        $buyer->setName($form['name']);
        $buyer->setSurname($form['surname']);
        $buyer->setGsmNumber($form['phone']);
        $buyer->setEmail($form['email']);
        $buyer->setIdentityNumber("74300864791");
        $buyer->setLastLoginDate("2015-10-05 12:43:35");
        $buyer->setRegistrationDate("2013-04-21 15:12:09");
        $buyer->setRegistrationAddress($form['address']);
        $buyer->setIp($_SERVER["REMOTE_ADDR"]);
        $buyer->setCity($form['city']);
        $buyer->setCountry($form['country']);
        $buyer->setZipCode($form['zipcode']);
        $request->setBuyer($buyer);

        $shippingAddress = new \Iyzipay\Model\Address();
        $shippingAddress->setContactName($form['name']);
        $shippingAddress->setCity($form['city']);
        $shippingAddress->setCountry($form['country']);
        $shippingAddress->setAddress($form['address']);
        $shippingAddress->setZipCode($form['zipcode']);
        $request->setShippingAddress($shippingAddress);

        $billingAddress = new \Iyzipay\Model\Address();
        $billingAddress->setContactName($form['name']);
        $billingAddress->setCity($form['city']);
        $billingAddress->setCountry($form['country']);
        $billingAddress->setAddress($form['address']);
        $billingAddress->setZipCode($form['zipcode']);
        $request->setBillingAddress($billingAddress);

        $basketItems = array();
        $firstBasketItem = new \Iyzipay\Model\BasketItem();
        $firstBasketItem->setId($form['sessionOrderNo']);
        $firstBasketItem->setName("Binocular");
        $firstBasketItem->setCategory1("Collectibles");
        $firstBasketItem->setCategory2("Accessories");
        $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $firstBasketItem->setPrice("0.3");
        $basketItems[0] = $firstBasketItem;

        $secondBasketItem = new \Iyzipay\Model\BasketItem();
        $secondBasketItem->setId("BI102");
        $secondBasketItem->setName("Game code");
        $secondBasketItem->setCategory1("Game");
        $secondBasketItem->setCategory2("Online Game Items");
        $secondBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
        $secondBasketItem->setPrice("0.5");
        $basketItems[1] = $secondBasketItem;

        $thirdBasketItem = new \Iyzipay\Model\BasketItem();
        $thirdBasketItem->setId("BI103");
        $thirdBasketItem->setName("Usb");
        $thirdBasketItem->setCategory1("Electronics");
        $thirdBasketItem->setCategory2("Usb / Cable");
        $thirdBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $thirdBasketItem->setPrice("0.2");
        $basketItems[2] = $thirdBasketItem;
        $request->setBasketItems($basketItems);

  //$request->setCallbackUrl(URL::signedRoute('siparisler', ['user' => auth()->id()]));

        $checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, $options);

        $veri = $checkoutFormInitialize->getCheckoutFormContent();




        if(!Auth::check()){
            return redirect()->route('kullanici.oturumac')
                ->with('mesajj','Ödeme İşlemi İçin Giriş Yapmanız veya Kayıt Olmanız Gerekmektedir !')
                ->with('mesajj_tur','danger');
        }else if(count(Cart::content())==0){
            return redirect()->route('anasayfa')
                ->with('mesaj','Ödeme İşlemi İçin Sepetinizde Ürün Bulunmalıdır !')
                ->with('mesaj_tur','danger');
        }

        $kullanici_detay=Auth::user()->detay;


        return view('odeme',compact("kullanici_detay","veri"));


    }




    public function odemeyap(Request $request, Options $options, Kullanici $user)
    {



$options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-itfoV6ntQuSVW8ljpbNXfQP80LWLTzMQ");
        $options->setSecretKey("sandbox-FZnBFSJ4hoiDqDJhvcJPxvWJTO7T4NWG");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");

    $token=$_POST['token'];
    $request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
    $request->setLocale(\Iyzipay\Model\Locale::TR);
    $request->setConversationId(rand(1,10000));
    $request->setToken("$token");


    $checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, $options);



$order                   = [];
        $order['adsoyad']           = Auth::user()->adsoyad;
        $order['adres']        = Auth::user()->detay->adres;
        $order['telefon']          = Auth::user()->detay->telefon;
        $order['ceptelefonu']        = Auth::user()->detay->ceptelefonu;
        $order['sepet_id']      = session('aktif_sepet_id');
        $order['taksit_sayisi']   = 1;
        $order['durum']         = "Your order has been received";
        $order['banka'] = "Credit Cart";
        $order['siparis_tutari']    = Cart::total();
        $order['token']          = $token;
        $order['siparis_no']       = session('order_no');


        Siparis::create($order);
        Cart::destroy();
        session()->forget('aktif_sepet_id');
        session()->forget('siparis_no');


      $siparisler=Siparis::with('sepet')
            ->whereHas('sepet',function($query){
                $query->where('kullanici_id',Auth::id());
            })
            ->orderByDesc('olusturulma_tarihi')->get();

        return view('siparisler',compact("siparisler"));
       




    }



}












