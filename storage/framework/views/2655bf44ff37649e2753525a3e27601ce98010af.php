
<?php $__env->startSection('title',$urun->urun_adi); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/styles/single_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/single_responsive.css">


    



<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="<?php echo e(route('anasayfa')); ?>">Anasayfa</a></li>
                        <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('kategori',$kategori->slug)); ?>"><i class="fa fa-angle-right"
                                                                                     aria-hidden="true">
                                    </i><?php echo e($kategori->kategori_adi); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo e($urun->urun_adi); ?>

                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <!--   -->
                                <ul>
                                    <li><img height="135px" src="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>" alt=""
                                             data-image="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>">
                                    </li>
                                    <li class="active"><img height="135px"
                                                            src="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>" alt=""
                                                            data-image="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>">
                                    </li>
                                    <li><img height="135px" src="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>" alt=""
                                             data-image="/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background"
                                     style="background-image:url(/images/urunler/<?php echo e($urun->detay->urun_resmi); ?>)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">

                        <h2><?php echo e($urun->urun_adi); ?></h2>
                        <p><?php echo e($urun->aciklama); ?></p>
                    </div>
                    <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                        <span class="ti-truck"></span><span>Ücretsiz Teslimat</span>
                    </div>
                    <br>
                    <br>
                    <?php echo e($urun->urun_id); ?>


                    <div class="product_price"><?php echo e($urun->fiyati); ?> ₺</div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <form action="<?php echo e(route('sepet.ekle')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                        <button type="submit" class="btn btn-danger btn-md btn-block">
                            Sepete Ekle
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <!-- Tabs -->

    <div class="tabs_section_container">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabs_container">
                        <ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                            <li class="tab active" data-active-tab="tab_1"><span>Yorumlar (<?php echo e(count($comment)); ?>)</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">


                    <!-- Tab Reviews -->

                    <div id="tab_1" class="tab_container active">
                        <div class="row">


                            <!-- Kullanici Review -->

                            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="user_review_container d-flex flex-column flex-sm-row">
                                    <div class="user">
                                        <div>
                                            <img width="200" height="200" src="/images/profil.png" alt="">
                                        </div>
                                        <div class="user_rating">
                                        </div>
                                    </div>
                                    
                                    <h1></h1>
                                    <div class="review">

                                        <div class="review_date"><?php echo e($com->olusturulma_tarihi->isoFormat('LLLL')); ?></div>
                                        <div class="user_name"><?php echo e($com->kullanici->adsoyad); ?></div>
                                        <p><?php echo e($com->yorum); ?></p>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            

                            <?php if(auth()->guard()->check()): ?>

                            <!-- Add Review -->
                                <div class="col-lg-6 add_review_col">

                                    <div class="add_review">
                                        <form id="review_form" action="<?php echo e(route('yorum.kaydet',$urun->slug)); ?>"
                                              method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div>
                                                <h1>Yorumunuz:</h1>
                                                <textarea id="review_message" class="input_review" name="yorum"
                                                          placeholder="Urun Hakkında Deneyimlerinizi Belirtiniz"
                                                          rows="4" cols="18" required
                                                          data-error="Please, leave us a review."></textarea>
                                            </div>
                                            <div class="text-left text-sm-right">

                                                <input type="hidden" name="id" value="<?php echo e($urun->id); ?>">
                                                <button id="review_submit" type="submit"
                                                        class="red_button review_submit_btn trans_300" value="Submit">
                                                    Gönder
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php if(auth()->guard()->guest()): ?>
                            <!-- Add Review -->
                                <div class="col-lg-12 add_review_col">

                                    <div class="add_review">
                                        <div width="120">
                                            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                                Ürün Hakkında Yorum Yapabilmek İçin Lütfen <a style="color:red" href="<?php echo e(route('kullanici.oturumac')); ?>">Giriş</a>
                                                veya <a style="color:red" href="<?php echo e(route('kullanici.kaydol')); ?>">Kayıt</a>  Yapınız !</h1>

                                        </div>
                                        <div class="text-left text-sm-right">

                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>


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


<?php $__env->startSection('footer'); ?>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="/js/single_custom.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buyetica/public_html/blackonline.tech/resources/views/urun.blade.php ENDPATH**/ ?>