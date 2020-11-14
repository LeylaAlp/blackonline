<?php $__env->startSection('title','Ürün Yönetimi'); ?>


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
                                <strong>Ürün <?php echo e($entry->id >0 ? 'Güncelle' : 'Kayıt'); ?> </strong> Formu
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo e(route('yonetim.urun.kaydet',$entry->id)); ?>" method="post"
                                      enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>


                                    <div class="row form-group">


                                        <?php if($entry->detay->urun_resmi != null): ?>
                                            <img src="/images/urunler/<?php echo e($entry->detay->urun_resmi); ?>" alt="Ürün Resmi"
                                                 style="height: 200px; margin-right: 20px;" class="pull-left">

                                            <div class="col-12 col-md-9">
                                                <label for="text-input" class=" form-control-label">Ürün Resmi</label>
                                                <br>
                                                <br>
                                                <input type="file" name="urun_resmi" class="form-control">
                                            </div>
                                        <?php else: ?>
                                            <div class="col-md-3">
                                                <label for="text-input" class=" form-control-label">Ürün Resmi</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" name="urun_resmi" class="form-control">
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ürün Adı</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="urun_adi"
                                                   value="<?php echo e(old('urun_adi',$entry->urun_adi)); ?>"
                                                   placeholder="Ürün Adını Giriniz" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Slug</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" id="email-input" name="original_slug"
                                                   value="<?php echo e($entry->slug); ?>">
                                            <input type="text" id="email-input" name="slug"
                                                   value="<?php echo e(old('slug',$entry->slug)); ?>" placeholder="Slug Giriniz"
                                                   class="form-control">
                                        </div>
                                    </div>



                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Açıklama</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="aciklama" id="editor" rows="5"
                                                      placeholder="Açıklama Giriniz"
                                                      class="form-control"><?php echo e(old('aciklama',$entry->aciklama)); ?></textarea>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Fiyat</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="fiyati"
                                                   value="<?php echo e(old('fiyati', $entry->fiyati)); ?>"
                                                   placeholder="Fiyatı  Giriniz"
                                                   class="form-control">
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Kategoriler</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategoriler[]" id="select" class="form-control" multiple>
                                                <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($kategori->id); ?>" <?php echo e(collect(old('kategoriler',$urun_kategorileri))->contains($kategori->id) ? 'selected' : ''); ?>>
                                                        <?php echo e($kategori->kategori_adi); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row form-group">

                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <label class=" form-control-label">Slider'da Göster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;</label>
                                                        <input type="hidden" id="checkbox1" name="goster_slider"
                                                               value="0"
                                                               class="form-check-input">
                                                        <input type="checkbox" id="checkbox1" name="goster_slider"
                                                               value="1"
                                                               class="form-check-input" <?php echo e(old('goster_slider',$entry->detay->goster_slider) ? 'checked' : ''); ?>>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <label class=" form-control-label">Günün Fırsatın'da Göster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;</label>
                                                        <input type="hidden" id="checkbox1" name="goster_gunun_firsati"
                                                               value="0"
                                                               class="form-check-input">
                                                        <input type="checkbox" id="checkbox1"
                                                               name="goster_gunun_firsati" value="1"
                                                               class="form-check-input" <?php echo e(old('goster_gunun_firsati',$entry->detay->goster_gunun_firsati) ? 'checked' : ''); ?>>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <label class=" form-control-label">Öne Çıkanlar'da Göster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;</label>
                                                        <input type="hidden" id="checkbox1" name="goster_one_cikan"
                                                               value="0"
                                                               class="form-check-input">
                                                        <input type="checkbox" id="checkbox1" name="goster_one_cikan"
                                                               value="1"
                                                               class="form-check-input" <?php echo e(old('goster_one_cikan',$entry->detay->goster_one_cikan) ? 'checked' : ''); ?>>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <label class=" form-control-label">Çok Satanlar'da Göster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;</label>
                                                        <input type="hidden" id="checkbox1" name="goster_cok_satan"
                                                               value="0"
                                                               class="form-check-input">
                                                        <input type="checkbox" id="checkbox1" name="goster_cok_satan"
                                                               value="1"
                                                               class="form-check-input" <?php echo e(old('goster_cok_satan',$entry->detay->goster_cok_satan) ? 'checked' : ''); ?>>
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <label class=" form-control-label">İndirimli Ürünler'de Göster&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;</label>
                                                        <input type="hidden" id="checkbox1" name="goster_indirimli"
                                                               value="0"
                                                               class="form-check-input">
                                                        <input type="checkbox" id="checkbox1" name="goster_indirimli"
                                                               value="1"
                                                               class="form-check-input" <?php echo e(old('goster_indirimli',$entry->detay->goster_indirimli) ? 'checked' : ''); ?>>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--  FİLEMANAGER -->

                                    
                    
                            
                                
                            
                        
                                        
                                    
                                    

                                    

                                        
                                            
                                        
                                    

                                <!--  FİLEMANAGER -->


                                </form>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>



    <script>

        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace( 'editor',options );




        $(function () {



            $('#select').select2({
                placeholder: '                   '
            });



            $('#lfm').filemanager('image');
        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/urun/form.blade.php ENDPATH**/ ?>