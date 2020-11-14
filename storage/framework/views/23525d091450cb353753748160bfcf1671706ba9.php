<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yönetim Paneli</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/yonetim/form/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/yonetim/form/css/util.css">
    <link rel="stylesheet" type="text/css" href="/yonetim/form/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(/yonetim/form/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Eticaret Projesi - Yönetim
					</span>
            </div>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger save">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                * <?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('oturumac')); ?>" method="post" class="login100-form validate-form">
                <?php echo csrf_field(); ?>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Email Girin">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                    <span class="label-input100">Şifre</span>
                    <input class="input100" type="password" name="sifre" placeholder="Şifre Girin">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="beni_hatirla">
                        <label class="label-checkbox100" for="ckb1">
                            Beni Hatırla
                        </label>
                    </div>

                    <div>
                        <a href="<?php echo e(route('anasayfa')); ?>" class="txt1">
                            Siteye Dön
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Giriş Yap
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/yonetim/form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/vendor/bootstrap/js/popper.js"></script>
<script src="/yonetim/form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/vendor/daterangepicker/moment.min.js"></script>
<script src="/yonetim/form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/yonetim/form/js/main.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
<?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/oturumac.blade.php ENDPATH**/ ?>