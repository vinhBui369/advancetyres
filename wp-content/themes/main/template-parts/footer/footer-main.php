<?php

$footer = get_field('footer', 'option');
$address = isset($footer['address']) ? wp_kses_post($footer['address']) : '';
$hotline_1 = isset($footer['hotline_1']) ? esc_html($footer['hotline_1']) : '';
$hotline_2 = isset($footer['hotline_2']) ? esc_html($footer['hotline_2']) : '';
$email = isset($footer['email']) ? esc_html($footer['email']) : '';
$copyright = isset($footer['copyright']) ? esc_html($footer['copyright']) : '';
?>
<div class="back-to-top show"><i class="fa fa fa-arrow-up"></i></div>
<div class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <div class="row">

                <div class="block block-cs col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="footer-widget">

                        <a href="/" class="logo-wrapper " title="CÔNG TY TNHH LỐP SAMSON VIỆT NAM">
                            <img class="img-responsive"
                                src="<?= THEME_ASSETS ?>/images/logo.png"
                                alt="CÔNG TY TNHH LỐP SAMSON VIỆT NAM">
                        </a>

                        <ul class="list-menu infomation" style="display: block;">
                            <li class="item">

                                <div class="address">
                                    <?= $address ?>
                                </div>
                                <div class="phone"><b>Hotline:</b>

                                    <a href="tel:<?= $hotline_1 ?>" title="Phone"><?= $hotline_1 ?></a>

                                    <i> / </i>
                                    <a href="tel:<?= $hotline_2  ?>" title="Phone"><?= $hotline_2 ?></a>
                                </div>

                                <div class="email"><b>Email:</b>
                                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block block-cs col-xs-12 col-sm-4 col-md-2 col-lg-2 col-md-offset-1">
                    <div class="footer-widget">
                        <h4>
                            <span>Thông tin</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </h4>
                        <ul class="list-menu has-toggle">
                            <li><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            <li><a href="/tin-tuc" title="Tin tức">Tin tức</a></li>
                            <li><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="block block-cs col-xs-12 col-sm-4 col-md-2 col-lg-2">
                    <div class="footer-widget">
                        <h4>
                            <span>Sản phẩm</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </h4>
                        <ul class="list-menu has-toggle">

                            <li><a href="/lop-xe-tai-mo" title="LỐP XE TẢI MỎ">LỐP XE TẢI MỎ</a></li>

                            <li><a href="/lop-cang" title="LỐP CẢNG">LỐP CẢNG</a></li>

                            <li><a href="/lop-cau-chuyen-dung" title="LỐP CẨU CHUYÊN DỤNG">LỐP CẨU CHUYÊN
                                    DỤNG</a></li>

                            <li><a href="/lop-cong-trinh" title="LỐP CÔNG TRÌNH">LỐP CÔNG TRÌNH</a></li>

                        </ul>
                    </div>
                </div>
                <div class="block block-cs col-xs-12 col-sm-4 col-md-2 col-lg-2">
                    <div class="footer-widget">
                        <h4>
                            <span>Lốp xe</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </h4>
                        <ul class="list-menu has-toggle">

                            <li><a href="/" title="Trang chủ">Trang chủ</a></li>

                            <li><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>

                            <li><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright clearfix">
    <div class="container">
        <div class="inner clearfix">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center copy-right-text">
                        <?= $copyright ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>