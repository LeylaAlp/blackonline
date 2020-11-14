<?php $__env->startSection('title','Sipariş Yönetimi'); ?>


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
                                <strong>Siparis <?php echo e($entry->id >0 ? 'Güncelle' : 'Kayıt'); ?> </strong> Formu
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo e(route('yonetim.siparis.kaydet',$entry->id)); ?>" method="post"
                                      enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ad Soyad</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="adsoyad"
                                                   value="<?php echo e(old('adsoyad',$entry->adsoyad)); ?>"
                                                   placeholder="Ad Soyad Giriniz" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Telefon</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="telefon"
                                                   value="<?php echo e(old('telefon',$entry->telefon)); ?>"
                                                   placeholder="Telefon Giriniz" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Cep Telefonu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="ceptelefonu"
                                                   value="<?php echo e(old('ceptelefonu',$entry->ceptelefonu)); ?>"
                                                   placeholder="Cep Telefonu Giriniz" class="form-control">
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Adres</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="adres" rows="5"
                                                      placeholder="Adres Giriniz"
                                                      class="form-control"><?php echo e(old('adres',$entry->adres)); ?></textarea>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="durum" class=" form-control-label">Durum</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="durum" id="select" class="form-control">
                                                <option <?php echo e(old('durum',$entry->durum) == 'Siparişiniz Alındı' ? 'selected' : ''); ?>>
                                                    Siparişiniz Alındı
                                                </option>

                                                <option <?php echo e(old('durum',$entry->durum) == 'Ödeme Onaylandı' ? 'selected' : ''); ?>>
                                                    Ödeme Onaylandı
                                                </option>

                                                <option <?php echo e(old('durum',$entry->durum) == 'Kargoya Verildi' ? 'selected' : ''); ?>>
                                                    Kargoya Verildi
                                                </option>

                                                <option <?php echo e(old('durum',$entry->durum) == 'Sipariş Tamamlandı' ? 'selected' : ''); ?>>
                                                    Sipariş Tamamlandı
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> <?php echo e($entry->id >0 ? 'Güncelle' : 'Kaydet'); ?>

                                    </button>


                                </form>

                                <br>
                                <br>

                                <table>
                                    <thead>
                                    <tr>
                                        <th>Ürün</th>
                                        <th>Tutar &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                                        <th>Adet &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</th>
                                        <th>Ara Toplam</th>
                                        <th>Durum</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $entry->sepet->sepet_urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sepet_urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td class="cart__product__item">
                                                <a  href="<?php echo e(route('urun',$sepet_urun->urun->slug)); ?>"><img width="130" height="150"
                                                        src="<?php echo e($sepet_urun->urun->detay->urun_resmi!=null ?
                                             asset('/images/urunler/'.$sepet_urun->urun->detay->urun_resmi) : 'http://via.placeholder.com/130x150?text=UrunResmi'); ?>" alt=""></a>
                                                <div class="cart__product__item__title">
                                                    <h6><a href="<?php echo e(route('urun',$sepet_urun->urun->slug)); ?>">
                                                            <br>
                                                            <?php echo e($sepet_urun->urun->urun_adi); ?></a></h6>
                                                            <br>
                                                </div>
                                            </td>
                                            <td><?php echo e($sepet_urun->fiyati); ?> ₺</td>
                                            <td>
                                                <div>
                                                    <span>  <?php echo e($sepet_urun->adet); ?> adet &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</span>
                                                </div>
                                            </td>

                                            <td><?php echo e($sepet_urun->fiyati * $sepet_urun->adet); ?> ₺</td>
                                            <td><?php echo e($sepet_urun->durum); ?></td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th colspan="3" class="text-right">Toplam Tutar</th>
                                        <td colspan="1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo e($entry->siparis_tutari); ?>

                                            ₺
                                        </td>
                                    </tr>

                                    <tr>
                                        <th colspan="3" class="text-right">Toplam Tutar (KDV'li)</th>
                                        <td colspan="1"> &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;<?php echo e($entry->siparis_tutari * ((100+config('cart.tax'))/100)); ?> ₺
                                        </td>
                                    </tr>

                                    <tr>
                                        <th colspan="3" class="text-right">Durum</th>
                                        <td colspan="1">&nbsp;&nbsp;&nbsp; <?php echo e($entry->durum); ?></td>
                                    </tr>

                                    </tbody>
                                </table>


                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/siparis/form.blade.php ENDPATH**/ ?>