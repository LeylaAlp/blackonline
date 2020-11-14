<h1><?php echo e(config('app.name')); ?></h1>
<p>Merhaba <?php echo e($kullanici->adsoyad); ?>, Kaydınız Başarılı Bir Şekilde Oluşturuldu</p>
<p>Kaydınızı Aktifleştirmek için <a href="<?php echo e(config('app.url')); ?>/kullanici/aktiflestir/<?php echo e($kullanici->aktivasyon_anahtari); ?>">tıklayınız</a>
Veya aşağıdaki bağlantıyı tarayıcınızda açınız</p>
<p><?php echo e(config('app.url')); ?>/kullanici/aktiflestir/<?php echo e($kullanici->aktivasyon_anahtari); ?></p>
<?php /**PATH C:\AppServ\www\Project\resources\views/emails/kullanici_kayit.blade.php ENDPATH**/ ?>