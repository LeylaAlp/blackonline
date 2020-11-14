<?php $__env->startSection('title','Anasayfa'); ?>


<?php $__env->startSection('content'); ?>

    <!-- Slider -->


    <div class="main_slider" style="background-image:url(/images/slider_1.jpg)">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h4>
                            <a href="<?php echo e(route('urun',$urunler_slider->slug)); ?>"><?php echo e($urunler_slider->urun_adi); ?></a>
                        </h4>
                        <br>
                        <h2>Sepette %30'a Varan İndirim Fırsatı</h2>
                        <br>
                        <br>


                        <form action="<?php echo e(route('sepet.ekle')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($urunler_slider->id); ?>">
                            <button class="btn btn-danger" type="submit">Satın Al</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner">
        <div class="container">
            <div class="row">

                <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center"
                             style="background-image:url(/images/kategori/<?php echo e($kategori->kategori_resmi); ?>)">
                            <div class="banner_category">
                                <a href="<?php echo e(route('kategori',$kategori->slug)); ?>"><?php echo e($kategori->kategori_adi); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>

    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Yeni Gelenler</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="btn btn-danger active">
                                <a href="<?php echo e(route('anasayfa')); ?>">Genel</a>
                            </li>
                            <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="btn btn-danger">
                                    <a href="?order=<?php echo e($kategori->kategori_adi); ?>"> <?php echo e($kategori->kategori_adi); ?> </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                        <?php $__currentLoopData = $urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="product-item">
                                <div class="product discount">
                                    <div class="product_image">
                                        <a href="<?php echo e(route('urun',$urun->slug)); ?>"><img
                                                style="height:250px;" src="<?php echo e($urun->detay->urun_resmi!=null ?
                                             asset('/images/urunler/'.$urun->detay->urun_resmi) : 'http://via.placeholder.com/400x485?text=UrunResmi'); ?>"></a>
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    
                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                href="<?php echo e(route('urun',$urun->slug)); ?>"><?php echo e($urun->urun_adi); ?></a>
                                        </h6>
                                        <div class="product_price"><?php echo e($urun->fiyati); ?> ₺</div>
                                    </div>

                                </div>
                                <form action="<?php echo e(route('sepet.ekle')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                                    <button class="red_button add_to_cart_button" type="submit"><i>Satın Al</i></button>
                                </form>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deal of the week -->

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <a href="<?php echo e(route('urun',$urun_gunun_firsati->slug)); ?>"><img src="/images/deal_ofthe_week.png"
                                                                                     alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>
                                <a href="<?php echo e(route('urun',$urun_gunun_firsati->slug)); ?>"><?php echo e($urun_gunun_firsati->urun_adi); ?></a>
                            </h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Day</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Hours</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Mins</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Sec</div>
                            </li>
                        </ul>
                        <form action="<?php echo e(route('sepet.ekle')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                            <button class="red_button deal_ofthe_week_button" type="submit"><i>Hemen Satın Al</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>En Çok Satanlar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div class="owl-carousel owl-theme product_slider">

                            <!-- Slide 1 -->

                            <?php $__currentLoopData = $urunler_cok_satan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cok_satan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="owl-item product_slider_item">
                                    <div class="product-item">
                                        <div class="product discount">
                                            <div class="product_image">
                                                <a href="<?php echo e(route('urun',$cok_satan->slug)); ?>"><img
                                                        style="height:250px;" src="<?php echo e($cok_satan->detay->urun_resmi!=null ?
                                             asset('/images/urunler/'.$cok_satan->detay->urun_resmi) : 'http://via.placeholder.com/400x485?text=UrunResmi'); ?>"></a>
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            
                                            <div class="product_info">
                                                <h6 class="product_name"><a
                                                        href="<?php echo e(route('urun',$cok_satan->slug)); ?>"><?php echo e($cok_satan->urun_adi); ?></a>
                                                </h6>
                                                <div class="product_price"><?php echo e($cok_satan->fiyati); ?> ₺</div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="<?php echo e(route('sepet.ekle')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                                        <button class="red_button add_to_cart_button" type="submit"><i>Satın Al</i>
                                        </button>
                                    </form>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>


                        <div
                            class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div
                            class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Benefit -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cach on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/anasayfa.blade.php ENDPATH**/ ?>