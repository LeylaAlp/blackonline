

<header class="header trans_300">

    <?php if(session()->has('me')): ?>
        <div class="alert alert-<?php echo e(session('me_tur')); ?> alert-dismissible fade show save" role="alert">
            <strong>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?php echo e(session('me')); ?></strong>

        </div>
    <?php endif; ?>


    <?php if(session()->has('mesajj')): ?>
        <div class="alert alert-<?php echo e(session('mesajj_tur')); ?> alert-dismissible fade show save" role="alert">
            <strong>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?php echo e(session('mesajj')); ?></strong>

        </div>
    <?php endif; ?>


<?php if(session()->has('mesaj')): ?>
        <div class="alert alert-<?php echo e(session('mesaj_tur')); ?> alert-dismissible fade show save" role="alert">
            <strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?php echo e(session('mesaj')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php endif; ?>


        <?php if(session()->has('message')): ?>
            <div class="alert alert-<?php echo e(session('message_tur')); ?> alert-dismissible fade show" role="alert">
                <strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                    <?php echo e(session('message')); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php endif; ?>


    <!-- Top Navigation -->

    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">100 TL ve üzeri alışverişlerinizde kargo ücretsiz !</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">

                            <!-- Currency / Language / My Account -->


                            
                                
                                    
                                    
                                
                                
                                    
                                    
                                    
                                    
                                
                            
                            <li class="account">

                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="#">
                                        &nbsp; &nbsp;  Hesap &nbsp; &nbsp;
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                <ul class="account_selection">
                                    <li><a href="<?php echo e(route('kullanici.oturumac')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Giriş Yap</a></li>
                                    <li><a href="<?php echo e(route('kullanici.kaydol')); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Kayıt Ol</a></li>
                                </ul>
                                <?php endif; ?>

                                <?php if(auth()->guard()->check()): ?>
                                        <a href="#">
                                           Hesabım
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                <ul class="account_selection">

                                    <li><a href="<?php echo e(route('siparisler')); ?>">Siparislerim</a></li>
                                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').
submit()">Çıkış</a>
                                        <form id="logout-form" action="<?php echo e(route('kullanici.oturumukapat')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>

                                    </li>

                                </ul>
                                <?php endif; ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="<?php echo e(route('anasayfa')); ?>"><img style="width:250px" src="images/logoo.svg"></a>
                    </div>
                    &nbsp; &nbsp;&nbsp;
                    <nav class="navbar">
                        
                            
                            
                            
                            
                            
                            
                        
                        <ul class="navbar_user">
                            <li>
                                <div class="s128">
                                    <form method="POST" action="<?php echo e(route('urun_ara')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="inner-form">
                                            <div class="row">
                                                <div class="input-field first" id="first">
                                                    <input  name="aranan" class="input" id="inputFocus" type="text" placeholder="Keyword"
                                                    value="<?php echo e(old('aranan')); ?>"/>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </li>
                            &nbsp; &nbsp;
                            <li class="checkout">
                                <a href="<?php echo e(route('sepet')); ?>">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="checkout_items" class="checkout_items"><?php echo e(Cart::count()); ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="fs_menu_overlay"></div>




<script>
    var btnDelete = document.getElementById('clear');
    var inputFocus = document.getElementById('inputFocus');
    //- btnDelete.on('click', function(e) {
    //-   e.preventDefault();
    //-   inputFocus.classList.add('isFocus')
    //- })
    //- inputFocus.addEventListener('click', function() {
    //-   this.classList.add('isFocus')
    //- })
    btnDelete.addEventListener('click', function(e)
    {
        e.preventDefault();
        inputFocus.value = ''
    })
    document.addEventListener('click', function(e)
    {
        if (document.getElementById('first').contains(e.target))
        {
            inputFocus.classList.add('isFocus')
        }
        else
        {
            // Clicked outside the box
            inputFocus.classList.remove('isFocus')
        }
    });

</script>
<?php /**PATH /home/buyetica/public_html/blackonline.tech/resources/views/layouts/partials/navbar.blade.php ENDPATH**/ ?>