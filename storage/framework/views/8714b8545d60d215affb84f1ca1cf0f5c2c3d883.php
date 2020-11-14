<?php $__env->startSection('title','Yorum Yönetimi'); ?>


<?php $__env->startSection('head'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">


                    <?php if(session()->has('mesaj')): ?>
                        <div class="alert alert-<?php echo e(session('mesaj_tur')); ?> alert-dismissible fade show save"
                             role="alert">
                            <strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                                <?php echo e(session('mesaj')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Yorum  </strong> Formu
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post"
                                      enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ürün Resmi</label>
                                        </div>                                         <img src="/images/urunler/<?php echo e($entry->urun->detay->urun_resmi); ?>" alt="Ürün Resmi"
                                                 style="height: 120px; width:100px; margin-right: 20px;" class="pull-left">

                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ürün Adı</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="urun_adi"
                                                   value="<?php echo e($entry->urun->urun_adi); ?>"
                                                  class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Yorum</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="yorum" id="" cols="80" rows="10" disabled><?php echo e($entry->yorum); ?></textarea>
                                        </div>
                                    </div>


                                    <br>


                                </form>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/yorum/form.blade.php ENDPATH**/ ?>