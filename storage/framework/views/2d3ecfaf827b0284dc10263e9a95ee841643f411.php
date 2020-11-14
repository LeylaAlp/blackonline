<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="<?php echo e(route('yonetim.anasayfa')); ?>">
                        <i class="fas fa-tachometer-alt"></i>Anasayfa</a>
                </li>
                <li>
                    <a href="<?php echo e(route('yonetim.kullanici')); ?>">
                        <i class="fas fa-users"></i>Kullanıcılar</a>
                </li>
                <li>
                    <a href="<?php echo e(route('yonetim.kategori')); ?>">
                        <i class="fas fa-table"></i>Kategoriler</a>
                </li>
                <li>
                    <a href="<?php echo e(route('yonetim.urun')); ?>">
                        <i class="fa fa-square"></i>Ürünler</a>
                </li>
                <li>
                    <a href="<?php echo e(route('yonetim.yorum')); ?>">
                        <i class="fas fa-comments"></i>Yorumlar</a>
                </li>
                <li>
                    <a href="<?php echo e(route('yonetim.siparis')); ?>">
                        <i class="fas fa-shopping-cart"></i>Siparisler</a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<?php /**PATH C:\AppServ\www\Project\resources\views/yonetim/layouts/partials/sidebar.blade.php ENDPATH**/ ?>