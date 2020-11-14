<?php $__env->startSection('title','Yorumlar'); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">





                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">


                                <form class="form-header" action="<?php echo e(route('yonetim.yorum')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input class="au-input au-input--xl" type="text" name="aranan" value="<?php echo e(old('aranan')); ?>" placeholder="Yorum Ara.." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <a class="au-btn--submit" type="button" href="<?php echo e(route('yonetim.yorum')); ?>">
                                        <span class="btn-outline-danger">  Temizle </span>
                                    </a>


                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-30">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Yorum</th>
                                        <th>Kayıt Tarihi</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($entry->id); ?></td>
                                            <td><?php echo e($entry->kullanici->email); ?></td>
                                            <td><?php echo e(substr($entry->yorum,0,70)); ?>...</td>

                                            <td><?php echo e($entry->olusturulma_tarihi->isoFormat('LLLL')); ?></td>

                                            <td>
                                                <a href="<?php echo e(route('yonetim.yorum.duzenle',$entry->id)); ?>"><span
                                                        class="btn-outline-success">İncele</span></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><span id="<?php echo e($entry->id); ?>"
                                                                                   class="btn-outline-danger">Sil</span></a>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php echo e($list->links()); ?>


                        <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(".btn-outline-danger").click(function () {
            destroy_id = $(this).attr('id');
            alertify.confirm('Silme İşlemini Onaylayın', 'Bu işlem Geri Alınamaz!',
                function () {
                    location.href = "/yonetim/yorum/sil/" + destroy_id;

                },
                function () {
                    alertify.error('Silme İşlemi Başarısız!')
                }
            )


        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/yorum/index.blade.php ENDPATH**/ ?>