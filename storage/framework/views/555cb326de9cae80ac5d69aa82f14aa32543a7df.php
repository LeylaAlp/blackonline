
<?php $__env->startSection('title', $kategoriler->kategori_adi); ?>
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/categories_responsive.css">
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">




                <?php if(count($urunler)==0): ?>
                    <img src="/images/hata-kategori.png" alt="">
                  <?php else: ?>



                <!-- Breadcrumbs -->

                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="<?php echo e(route('anasayfa')); ?>">Anasayfa</a></li>
                            <li class="active"><a href="<?php echo e(route('kategori',$kategoriler->slug)); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo e($kategoriler->kategori_adi); ?></a></li>
                        </ul>
                    </div>



                    <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5><?php echo e($kategoriler->kategori_adi); ?></h5>
                        </div>
                        <ul class="sidebar_categories">
                            <?php $__currentLoopData = $alt_kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alt_kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('kategori',$alt_kategori->slug)); ?>"><?php echo e($alt_kategori->kategori_adi); ?></a></li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>



                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Show</span>
                                            <span class="num_sorting_text">6</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>6</span></li>
                                                <li class="num_sorting_btn"><span>12</span></li>
                                                <li class="num_sorting_btn"><span>24</span></li>
                                            </ul>
                                        </li>
                                    </ul>


                                </div>

                                <!-- Product Grid -->

                                <div class="product-grid">

                                    <!-- Product 1 -->

                                    <?php $__currentLoopData = $urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="product-item men">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <a href="<?php echo e(route('urun',$urun->slug)); ?>"><img src="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>" alt=""></a>
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a></h6>
                                                <div class="product_price"><?php echo e($urun->fiyati); ?> ₺</div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">Sepete Ekle</a></div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>







                                <br>
                                <br>
                                <br>

                                <?php echo e($urunler->links()); ?>


                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_bottom clearfix">
                                    <ul class="product_sorting">
                                        <li>
                                            <span>Show:</span>
                                            <span class="num_sorting_text">04</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>01</span></li>
                                                <li class="num_sorting_btn"><span>02</span></li>
                                                <li class="num_sorting_btn"><span>03</span></li>
                                                <li class="num_sorting_btn"><span>04</span></li>
                                            </ul>
                                        </li>
                                    </ul>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                    <?php endif; ?>

            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="/js/categories_custom.js"></script>    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buyetica/public_html/blackonline.tech/resources/views/kategori.blade.php ENDPATH**/ ?>