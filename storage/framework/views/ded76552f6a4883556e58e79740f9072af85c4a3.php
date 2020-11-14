<?php $__env->startSection('title','Kategori Yönetimi'); ?>

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
                                <strong>Kategori <?php echo e($entry->id >0 ? 'Güncelle' : 'Kayıt'); ?> </strong> Formu
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo e(route('yonetim.kategori.kaydet',$entry->id)); ?>" method="post"
                                      enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>


                                    <div class="row form-group">

                                        <?php if($entry->kategori_resmi != null): ?>
                                            <img src="/images/kategori/<?php echo e($entry->kategori_resmi); ?>" alt="Kategori Resmi"
                                                 style="height: 120px; margin-right: 20px;" class="pull-left">

                                            <div class="col-12 col-md-9">
                                                <label for="text-input" class=" form-control-label">Kategori Resmi</label>
                                                <br>
                                                <br>
                                                <input type="file" name="kategori_resmi" class="form-control">
                                                <small style="color:red;"> Sadece Ana Kategorilere Resim Ekleyiniz !</small>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-md-3">
                                                <label for="text-input" class=" form-control-label">Kategori Resmi</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" name="kategori_resmi" class="form-control">
                                                <small style="color:red;"> Sadece Ana Kategorilere Resim Ekleyiniz !</small>

                                            </div>
                                        <?php endif; ?>

                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Üst Kategori</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="ust_id" id="select" class="form-control">
                                                <option value=""><?php echo e($entry->ust_kategori->kategori_adi); ?></option>
                                                <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->kategori_adi); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Kategori Adı</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="email-input" name="kategori_adi"
                                                   value="<?php echo e(old('kategori_adi',$entry->kategori_adi)); ?>"
                                                   placeholder="Kategori Adı Giriniz"
                                                   class="form-control">
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Slug</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden"  name="original_slug"
                                                   value="<?php echo e(old('slug',$entry->slug)); ?>">

                                            <input type="text" id="text-input" name="slug"
                                                   value="<?php echo e(old('slug',$entry->slug)); ?>"
                                                   placeholder="Slug Değeri Giriniz" class="form-control">
                                        </div>
                                    </div>


                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> <?php echo e($entry->id >0 ? 'Güncelle' : 'Kaydet'); ?>

                                        </button>
                                    </div>


                                </form>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/kategori/form.blade.php ENDPATH**/ ?>