<?php $__env->startSection('title','Sepet'); ?>

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

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <br>
    <br>
    <?php if(session()->has('mes')): ?>
        <div class="alert alert-<?php echo e(session('mes_tur')); ?> alert-dismissible fade show save" role="alert">
            <strong>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?php echo e(session('mes')); ?></strong>

        </div>
    <?php endif; ?>


    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php if(count(Cart::content())>0): ?>


                        <div class="shop__cart__table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Ürün</th>
                                    <th>Adet Fiyatı</th>
                                    <th>Adet</th>
                                    <th>Tutar</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urunCartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td class="cart__product__item">

                                            <a href="<?php echo e(route('urun',$urunCartItem->options->slug)); ?>"><img
                                                    src="/images/cp-1.jpg" alt=""></a>
                                            <div>

                                                <a href="<?php echo e(route('urun',$urunCartItem->options->slug)); ?>">
                                                    <?php echo e($urunCartItem->name); ?></a>

                                            </div>
                                        </td>
                                        <td class="cart__price"><?php echo e($urunCartItem->price); ?> ₺</td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="<?php echo e($urunCartItem->rowId); ?>" data-adet="<?php echo e($urunCartItem->qty-1); ?>">-</a>
                                            <span><?php echo e($urunCartItem->qty); ?></span>
                                            <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="<?php echo e($urunCartItem->rowId); ?>" data-adet="<?php echo e($urunCartItem->qty+1); ?>">+</a>
                                        </td>
                                        <td class="cart__total"><?php echo e($urunCartItem->subtotal); ?> ₺</td>
                                        <form action="<?php echo e(route('sepet.kaldir',$urunCartItem->rowId)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                           <?php echo method_field('DELETE'); ?>
                                            <td class="cart__close"><button><span>
                                                    <i class="fa fa-minus-circle">
                                                    </i></span></button></td>
                                        </form>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#"><i class="fa fa-arrow-left"></i> &nbsp; Alışverişe Devam Et</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <form action="<?php echo e(route('sepet.bosalt')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" class="btn btn-danger" value="    Sepeti Boşalt    ">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Sepet Toplam</h6>
                        <ul>
                            <li>Ara Toplam <span><?php echo e(Cart::subtotal()); ?> ₺</span></li>
                            <li>KDV <span><?php echo e(Cart::tax()); ?> ₺</span></li>
                            <li>Genel Toplam <span><?php echo e(Cart::total()); ?> ₺</span></li>
                        </ul>
                        <a href="<?php echo e(route('odeme')); ?>" class="primary-btn">Çıkışa Doğru Devam Et</a>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <img src="/images/urunn.png" alt="">
            <?php endif; ?>
        </div>
    </section>
    <!-- Shop Cart Section End -->



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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/sepet.blade.php ENDPATH**/ ?>