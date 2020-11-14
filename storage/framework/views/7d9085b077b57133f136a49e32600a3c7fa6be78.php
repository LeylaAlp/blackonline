    
<?php $__env->startSection('title','Ödeme'); ?>
<?php $__env->startSection('head'); ?>    <!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet">    <!-- Css Styles -->
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="/css/style.css"
      type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>    <!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container"><br> <br> <br> <br>
       <form action="<?php echo e(route('odemeyap')); ?>" method="post" class="checkout__form">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-6"><h5>Fatura Detayı</h5>
                    <div class="row">
                          <div class="col-lg-8">

                              <div class="checkout__form__input"><p>Ad Soyad <span>*</span></p>
                                    <input type="text" name="adsoyad" value="<?php echo e(Auth::user()->adsoyad); ?>"></div>
                            <div class="checkout__form__input"><p>Adres <span>*</span></p>
                               <input type="text" name="adres" value="<?php echo e($kullanici_detay->adres); ?>"
                                     placeholder="Street Address"></div>
                           </div>
                       <div class="col-lg-8">
                          <div class="checkout__form__input"><p>Telefon <span>*</span></p>
                                            <input type="number" name="telefon" value="<?php echo e($kullanici_detay->telefon); ?>"></div>
                                </div>
                            <div class="col-lg-8">
                                 <div class="checkout__form__input"><p>Cep Telefonu <span>*</span></p>
                                       <input type="number" name="ceptelefonu" value="<?php echo e($kullanici_detay->ceptelefonu); ?>">
                                 </div>
                            </div>
                       </div>
                   </div>
                <div class="col-md-6">

                    <?php echo $veri; ?>

                    <div id="iyzipay-checkout-form" class="responsive"></div>
                </div>
                <br><br>
                <div class="section-padding"></div>

            </div>



        </form>

           
    </div>
</section>    <!-- Checkout Section End -->
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



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buyetica/public_html/blackonline.tech/resources/views/odeme.blade.php ENDPATH**/ ?>