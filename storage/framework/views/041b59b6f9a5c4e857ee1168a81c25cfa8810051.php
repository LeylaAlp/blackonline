<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $__env->yieldContent('title','Yönetim Paneli'); ?></title>

   <?php echo $__env->make('yonetim.layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>

</head>

<body class="animsition">
<div class="page-wrapper">

    <?php echo $__env->make('yonetim.layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('yonetim.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->yieldContent('content'); ?>
</div>



<div class="col-md-12">
    <div class="copyright">
        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
    </div>
</div>

<!-- Jquery JS-->
<!-- Bootstrap JS-->
<script src="/yonetim/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/yonetim/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/yonetim/vendor/slick/slick.min.js">
</script>
<script src="/yonetim/vendor/wow/wow.min.js"></script>
<script src="/yonetim/vendor/animsition/animsition.min.js"></script>
<script src="/yonetim/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>

<script src="/yonetim/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/yonetim/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/yonetim/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/yonetim/vendor/select2/select2.min.js">
</script>

<script src="/yonetim/js/main.js"></script>

<?php echo $__env->yieldContent('footer'); ?>


</body>

</html>
<!-- end document-->
<?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/layouts/master.blade.php ENDPATH**/ ?>