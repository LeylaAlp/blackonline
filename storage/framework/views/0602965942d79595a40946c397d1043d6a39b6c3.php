<?php $__env->startSection('title','Kategori'); ?>

<?php $__env->startSection('content'); ?>



    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">


                                <form class="form-header" action="<?php echo e(route('yonetim.kategori')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input class="au-input au-input--xl" type="text" name="aranan" value="<?php echo e(old('aranan')); ?>" placeholder="Ad, Email Ara.." />
&nbsp;
                                    <select name="ust_id"  class="form-control">
                                        <option value="">Seçiniz</option>
                                        <?php $__currentLoopData = $anakategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('ust_id') == $kategori->id ? 'selected': ''); ?>><?php echo e($kategori->kategori_adi); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    &nbsp;&nbsp;

                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <a href="<?php echo e(route('yonetim.kategori')); ?>"><button class="au-btn--submit" type="submit">
                                            <span>  Temizle </span>
                                        </button></a>

                                </form>
                                <a href="<?php echo e(route('yonetim.kategori.yeni')); ?>">
                                    <button class="btn btn-primary btn-md">
                                        <i class="zmdi zmdi-plus"></i> Yeni
                                    </button>
                                </a>
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
                                        <th>Slug</th>
                                        <th>Üst Kategori</th>
                                        <th>Kategori Adı</th>
                                        <th>Kayıt Tarihi</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if(count($list)==0): ?>
                                        <td colspan="7">
                                           <h4> Kayıt Bulunamadı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                        </td>
                                        <?php else: ?>
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($entry->id); ?></td>
                                            <td><?php echo e($entry->slug); ?></td>
                                            <td><?php echo e($entry->ust_kategori->kategori_adi); ?></td>
                                            <td><?php echo e($entry->kategori_adi); ?></td>
                                            <td><?php echo e($entry->olusturulma_tarihi->isoFormat('LLLL')); ?></td>

                                            <td>
                                                <a href="<?php echo e(route('yonetim.kategori.duzenle',$entry->id)); ?>"><span
                                                        class="btn-outline-success">Düzenle</span></a>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)"><span id="<?php echo e($entry->id); ?>"
                                                                                   class="btn-outline-danger">Sil</span></a>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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
                    location.href = "/yonetim/kategori/sil/" + destroy_id;

                },
                function () {
                    alertify.error('Silme İşlemi Başarısız!')
                }
            )


        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/kategori/index.blade.php ENDPATH**/ ?>