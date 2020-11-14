<?php $__env->startSection('title','Ödeme'); ?>

<?php $__env->startSection('head'); ?>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <form action="<?php echo e(route('odemeyap')); ?>" method="post" class="checkout__form">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Fatura Detayı</h5>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Kredi Kartı Numarası <span>*</span></p>
                                    <input type="text" name="kart_numarasi">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Ad Soyad <span>*</span></p>
                                    <input type="text" name="adsoyad" value="<?php echo e(Auth::user()->adsoyad); ?>" >
                                </div>

                                <div class="checkout__form__input">
                                    <p>Adres <span>*</span></p>
                                    <input type="text" name="adres" value="<?php echo e($kullanici_detay->adres); ?>" placeholder="Street Address">
                                </div>

                            </div>
                            <div  class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Telefon <span>*</span></p>
                                    <input type="number" name="telefon" value="<?php echo e($kullanici_detay->telefon); ?>">
                                </div>
                            </div>
                            <div  class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Cep Telefonu <span>*</span></p>
                                    <input type="number" name="ceptelefonu" value="<?php echo e($kullanici_detay->ceptelefonu); ?>">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Siparişiniz</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>
                                        <span class="top__text">Ürün</span>
                                        <span class="top__text__right">Fiyat</span>
                                    </li>
                                    <li>01. Chain buck bag <span>$ 300.0</span></li>

                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Ara Toplam <span><?php echo e(Cart::subtotal()); ?></span></li>
                                    <li>Toplam <span><?php echo e(Cart::total()); ?></span></li>
                                </ul>
                            </div>

                            <button type="submit" class="site-btn">Ödeme Yap</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->



    <?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nicescroll.min.js"></script>
    <script src="/js/main.js"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/odeme.blade.php ENDPATH**/ ?>