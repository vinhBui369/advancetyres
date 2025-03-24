<?php

$footer = get_field('footer', 'option');
$hotline_1 = isset($footer['hotline_1']) ? esc_html($footer['hotline_1']) : '';
$hotline_2 = isset($footer['hotline_2']) ? esc_html($footer['hotline_2']) : '';
?>

<div class="topbar">
    <div class="container">
        <div class="left">
            <ul class="list-menu has-toggle social-media">
            </ul>
        </div>
        <a class="right" href="tel:<?= $hotline_1 ?>" title="Phone"><i class="fa fa-phone-square"></i> <?= $hotline_1 ?></a>
        <span class="right" style="margin:0 5px;display:inline-block;"></span>
        <a class="right" href="tel:<?= $hotline_2 ?>" title="Phone"><i class="fa fa-phone-square"></i> <?= $hotline_2 ?></a>
    </div>
    <!--End topbar-->
</div>
<div class="middle-header">
    <div class="container">
        <div class="header-main">
            <div class="menu-bar hidden-lg">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="logo">
                <a href="<?= HOME_URL ?>" class="logo-wrapper " title="<?= get_bloginfo('name') ?>">
                    <img class="img-responsive" src="<?= THEME_ASSETS ?>/images/logo.png" alt="<?= get_bloginfo('name') ?>">
                </a>
            </div>
            <div class="main-nav">
                <nav>
                    <ul id="nav" class="nav hidden-sm hidden-xs">
                        <li class="hidden-sm hidden-xs nav-item active"><a class="nav-link" href="<?= HOME_URL ?>" title="Trang chủ">Trang chủ</a></li>
                        <li class="hidden-sm hidden-xs nav-item "><a class="nav-link" href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="hidden-sm hidden-xs nav-item  has-dropdown">
                            <a href="/collections/all" title="Sản phẩm" class="nav-link">Sản phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP XE TẢI MỎ" href="/lop-xe-tai-mo">LỐP XE TẢI
                                        MỎ</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CẢNG" href="/lop-cang">LỐP CẢNG</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CẨU CHUYÊN DỤNG" href="/lop-cau-chuyen-dung">LỐP CẨU CHUYÊN DỤNG</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CÔNG TRÌNH" href="/lop-cong-trinh">LỐP CÔNG
                                        TRÌNH</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-sm hidden-xs nav-item "><a class="nav-link" href="/tin-tuc" title="Tin tức">Tin tức</a></li>
                        <li class="hidden-sm hidden-xs nav-item "><a class="nav-link" href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        <!-- menu mobile -->
                        <li class="hidden-lg hidden-md nav-item active"><a class="nav-link" href="<?= HOME_URL ?>" title="Trang chủ">Trang chủ</a></li>
                        <li class="hidden-lg hidden-md nav-item "><a class="nav-link" href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="hidden-lg hidden-md nav-item  has-dropdown">
                            <a href="/collections/all" title="Sản phẩm" class="nav-link">Sản phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP XE TẢI MỎ" href="/lop-xe-tai-mo">LỐP XE TẢI
                                        MỎ</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CẢNG" href="/lop-cang">LỐP CẢNG</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CẨU CHUYÊN DỤNG" href="/lop-cau-chuyen-dung">LỐP CẨU CHUYÊN DỤNG</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" title="LỐP CÔNG TRÌNH" href="/lop-cong-trinh">LỐP CÔNG
                                        TRÌNH</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-lg hidden-md nav-item "><a class="nav-link" href="/tin-tuc" title="Tin tức">Tin tức</a></li>
                        <li class="hidden-lg hidden-md nav-item "><a class="nav-link" href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                    <ul class="nav hidden-lg nav-mobile">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= HOME_URL ?>" title="Trang chủ">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gioi-thieu" title="Giới thiệu">
                                Giới thiệu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/collections/all" class="nav-link" title="Sản phẩm">
                                Sản phẩm
                            </a>
                            <span class="open-close2">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                            <ul class="sub-menu-1" style="display: none">


                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/lop-xe-tai-mo" title="LỐP XE TẢI MỎ">
                                        <span>LỐP XE TẢI MỎ</span>
                                    </a>
                                </li>



                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/lop-cang" title="LỐP CẢNG">
                                        <span>LỐP CẢNG</span>
                                    </a>
                                </li>



                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/lop-cau-chuyen-dung" title="LỐP CẨU CHUYÊN DỤNG">
                                        <span>LỐP CẨU CHUYÊN DỤNG</span>
                                    </a>
                                </li>



                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/lop-cong-trinh" title="LỐP CÔNG TRÌNH">
                                        <span>LỐP CÔNG TRÌNH</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tin-tuc" title="Tin tức">
                                Tin tức
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lien-he" title="Liên hệ">
                                Liên hệ
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>