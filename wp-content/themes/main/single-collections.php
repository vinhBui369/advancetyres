<?php
get_header();
$id_post = get_the_ID();

// get taxonomy by post id

$terms = get_the_terms($id_post, 'categories-collections');
$slug_category = $terms[0]->slug;
$name_category = $terms[0]->name;


// ignore this current post
$args1 = array(
    'post_type' => 'collections',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'post__not_in' => array($id_post)
);

?>

<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 a-left">
                <div class="breadcrumb-container">
                    <div class="title-page"><?php the_title() ?></div>
                    <ul class="breadcrumb" itemscope="" itemtype="">
                        <li class="home">
                            <a itemprop="url" href="<?= HOME_URL ?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>

                        <li>
                            <a itemprop="url" href="<?= HOME_URL . '/' . $slug_category ?>" title="<?= $name_category ?>">
                                <span itemprop="title"><?= $name_category ?>
                                </span>
                            </a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        <li><strong><span itemprop="title"><?= get_the_title() ?></span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12 details-product">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4 col-md-6">
                            <div class="relative product-image-block no-thum">
                                <div class="large-image">

                                    <a href="//bizweb.dktcdn.net/thumb/1024x1024/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b-41f35426-fe29-4236-8f57-715e77b3b7a1.png?v=1706512465843" class="large_image_url" data-rel="prettyPhoto[product-gallery]">
                                        <div style="height:349px;width:349px;" class="zoomWrapper"><img id="zoom_01" class="img-responsive center-block has-zoom" src="//bizweb.dktcdn.net/thumb/grande/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b-41f35426-fe29-4236-8f57-715e77b3b7a1.png?v=1706512465843" alt="lop-advance-16-00-25rtg-32pr-e-3" style="position: absolute;"></div>
                                    </a>

                                    <div class="hidden">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 details-pro">
                            <h1 class="title-head" itemprop="name">Lốp ADVANCE 16.00-25RTG 32PR E-3</h1>
                            <div class="details-sticky details-pro">
                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <link itemprop="availability" href="http://schema.org/InStock">
                                    <div class="information">
                                        <p><span>Thương hiệu:</span> Đang cập nhật</p>
                                        <p class="inventory_quantity">
                                            <span>Tình trạng: </span>



                                            Còn hàng



                                        </p>

                                    </div>
                                    <div class="price-box clearfix">

                                        <div class="special-price"><span class="price product-price">Liên hệ </span> </div> <!-- Hết hàng -->

                                    </div>
                                </div>
                                <div class="form-product">
                                    <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">

                                        <div class="box-variant clearfix ">

                                            <input type="hidden" name="variantId" value="108942022">

                                        </div>
                                        <div class="form-group form-groupx hidden">

                                            <div class="custom custom-btn-number form-control ">
                                                <span class="quantity-span hidden">Số lượng:</span>
                                                <span class="qtyminus" data-field="quantity">-</span>
                                                <input type="text" class="input-text qty" data-field="quantity" value="1" maxlength="3" id="qty" name="quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                                <span class="qtyplus" data-field="quantity">+</span>
                                            </div>


                                            <button type="submit" class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">
                                                <span>Đặt hàng</span>
                                            </button>

                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="product-summary">
                                <div class="rte margin-bottom-0">

                                    <p><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;"><strong><a href="http://advancetyres.vn">CÔNG TY TNHH LỐP SAMSON VIỆT NAM</a></strong>&nbsp;- nhà phân phối&nbsp;độc quyền của thương hiệu&nbsp;ADVANCE &amp; SAMSON&nbsp;tại Việt Nam.&nbsp;<strong><a href="http://advancetyres.vn">LỐP SAMSON VN</a>&nbsp;</strong>chuyên cung cấp hai loại lốp chính là <strong><a href="https://advancetyres.vn/lop-xe-tai-mo">Lốp Xe Tải Mỏ</a>,</strong>&nbsp;<strong><a href="https://advancetyres.vn/lop-cang">Lốp Cảng</a></strong>, <strong><a href="https://advancetyres.vn/lop-cong-trinh">Lốp Công Trình</a></strong>, <strong><a href="https://advancetyres.vn/lop-cau-chuyen-dung">Lốp Cẩu Chuyên Dụng</a></strong> nhằm đáp ứng nhu cầu đa dạng của khách hàng,&nbsp;cam kết cung cấp sản phẩm chất lượng cao, đáp ứng đầy đủ các yêu cầu kỹ thuật và an toàn trong nhiều lĩnh vực khác nhau.</span></span></p>

                                </div>
                            </div>



                            <div class="social-sharing">






                                <div class="social-media" data-permalink="https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3">
                                    <label>Chia sẻ: </label>

                                    <a target="_blank" href="//www.facebook.com/sharer.php?u=https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3" class="share-facebook" title="Chia sẻ lên Facebook">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>



                                    <a target="_blank" href="//twitter.com/share?url=https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3" class="share-twitter" title="Chia sẻ lên Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>



                                    <a target="_blank" href="//pinterest.com/pin/create/button/?url=https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b-41f35426-fe29-4236-8f57-715e77b3b7a1.png?v=1706512465843" class="share-pinterest" title="Chia sẻ lên pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>





                                    <a target="_blank" href="//plus.google.com/share?url=https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3" class="share-google" title="+1">
                                        <i class="fa fa-google-plus"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                        <aside class="aside-item wrap-product-hot page-product product-hot-details style-scroll col-md-3 col-lg-3">
                            <div class="aside-title">
                                <h2 class="title-head margin-top-0"><a href="cac-loai-lop-xe" title="Sản phẩm khác">Sản phẩm khác</a></h2>
                            </div>

                            <div class="list-product-slidebar">
























                                <div class="list-item">
                                    <div class="thumb-imagtes">

                                        <a href="/lop-advance-18-00-25-40pr-ind-4" title="Lốp ADVANCE 18.00-25 40PR IND-4">
                                            <img src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-9495df00-84aa-427d-b363-2b121bfe2adc.png?v=1706513072930" alt="Lốp ADVANCE 18.00-25 40PR IND-4">
                                        </a>
                                    </div>
                                    <div class="product-info-text">
                                        <h3 class="product-name text2line"><a href="/lop-advance-18-00-25-40pr-ind-4" title="Lốp ADVANCE 18.00-25 40PR IND-4">Lốp ADVANCE 18.00-25 40PR IND-4</a></h3>

                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34417436"></div>
                                    </div>
                                </div>






















                                <div class="list-item">
                                    <div class="thumb-imagtes">

                                        <a href="/lop-advance-16-00-25rtg-32pr-e-3" title="Lốp ADVANCE 16.00-25RTG 32PR E-3">
                                            <img src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b-41f35426-fe29-4236-8f57-715e77b3b7a1.png?v=1706512465843" alt="Lốp ADVANCE 16.00-25RTG 32PR E-3">
                                        </a>
                                    </div>
                                    <div class="product-info-text">
                                        <h3 class="product-name text2line"><a href="/lop-advance-16-00-25rtg-32pr-e-3" title="Lốp ADVANCE 16.00-25RTG 32PR E-3">Lốp ADVANCE 16.00-25RTG 32PR E-3</a></h3>

                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34417326"></div>
                                    </div>
                                </div>






















                                <div class="list-item">
                                    <div class="thumb-imagtes">

                                        <a href="/lop-advance-14-00-24-28pr-ind-4" title="Lốp ADVANCE 14.00-24 28PR IND-4">
                                            <img src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-c18331cd-9df0-4bc3-b621-64144ed6ccef.png?v=1706512051300" alt="Lốp ADVANCE 14.00-24 28PR IND-4">
                                        </a>
                                    </div>
                                    <div class="product-info-text">
                                        <h3 class="product-name text2line"><a href="/lop-advance-14-00-24-28pr-ind-4" title="Lốp ADVANCE 14.00-24 28PR IND-4">Lốp ADVANCE 14.00-24 28PR IND-4</a></h3>

                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34417279"></div>
                                    </div>
                                </div>






















                                <div class="list-item">
                                    <div class="thumb-imagtes">

                                        <a href="/lop-advance-18-00r33-glr04" title="Lốp ADVANCE 18.00R33 ★★★ GLR04 E-4">
                                            <img src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/glr04.png?v=1705723572567" alt="Lốp ADVANCE 18.00R33 ★★★ GLR04 E-4">
                                        </a>
                                    </div>
                                    <div class="product-info-text">
                                        <h3 class="product-name text2line"><a href="/lop-advance-18-00r33-glr04" title="Lốp ADVANCE 18.00R33 ★★★ GLR04 E-4">Lốp ADVANCE 18.00R33 ★★★ GLR04 E-4</a></h3>

                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34323334"></div>
                                    </div>
                                </div>






















                                <div class="list-item">
                                    <div class="thumb-imagtes">

                                        <a href="/lop-advance-16-00-24-32pr-e-3" title="Lốp ADVANCE 16.00-25 36PR E-3">
                                            <img src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b.png?v=1705723138230" alt="Lốp ADVANCE 16.00-25 36PR E-3">
                                        </a>
                                    </div>
                                    <div class="product-info-text">
                                        <h3 class="product-name text2line"><a href="/lop-advance-16-00-24-32pr-e-3" title="Lốp ADVANCE 16.00-25 36PR E-3">Lốp ADVANCE 16.00-25 36PR E-3</a></h3>

                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34323282"></div>
                                    </div>
                                </div>

                            </div>

                        </aside>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-lg-12 col-md-12 margin-top-40 margin-bottom-30">
                    <!-- Nav tabs -->
                    <div class="banner-page-detail">
                        <a class="effect-hover-banner" href="https://advancetyres.vn/" title="Công ty TNHH Lốp SAMSON Việt Nam">
                            <img class="img-responsive" src="//bizweb.dktcdn.net/100/380/977/themes/759269/assets/banner_detail_product.jpg?1734335154245" alt="Công ty TNHH Lốp SAMSON Việt Nam">
                        </a>
                    </div>

                    <div class="product-tab e-tabs">
                        <ul class="tabs tabs-title clearfix">

                            <li class="tab-link current" data-tab="tab-1">
                                <h4><span>Thông tin sản phẩm</span></h4>
                            </li>


                            <li class="tab-link" data-tab="tab-2">
                                <h4><span>Chính sách</span></h4>
                            </li>


                        </ul>

                        <div id="tab-1" class="tab-content current">
                            <div class="rte wrap-box-readmore">

                                <p><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;"><strong>THÔNG SỐ KỸ THUẬT</strong></span></span></p>
                                <table style="border-collapse:collapse; width:552pt; border:0.5pt solid black" width="735">
                                    <colgroup>
                                        <col span="3" style="width:56pt" width="75">
                                        <col span="3" style="width:68pt" width="90">
                                        <col span="2" style="width:56pt" width="75">
                                        <col style="width:68pt" width="90">
                                    </colgroup>
                                    <tbody>
                                        <tr height="41" style="height:30.6pt">
                                            <td class="xl65" height="41" style="border:0.5pt solid black; height:30.6pt; width:56pt; text-align:center; vertical-align:middle; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">SIZE</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">GAI LỐP</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">PLY RATING</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">CHỈ SỐ TẢI TRỌNG (KG)</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">ĐƯỜNG KÍNH TỔNG THỂ (mm)</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">BỀ RỘNG MẶT LỐP (mm)</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">TIÊU CHUẨN VÀNH</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">ÁP SUẤT<br>
                                                                        HƠI LỐP</span></span></span></span></span></span></td>
                                            <td class="xl66" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:0.5pt solid black; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-weight:700"><span style="font-family:Arial,sans-serif"><span style="font-style:normal"><span style="text-decoration:none">ĐỘ SÂU GAI (mm)</span></span></span></span></span></span></td>
                                        </tr>
                                        <tr height="19" style="height:14.4pt">
                                            <td class="xl67" height="19" style="border:none; border-bottom:0.5pt solid black; height:14.4pt; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:0.5pt solid black; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">16.00-25</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">E-3</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">32</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">16900</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">1490</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">430</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">11.25</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:56pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="75"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10.5 Bar</span></span></span></span></span></span></td>
                                            <td class="xl68" style="border:none; border-bottom:0.5pt solid black; width:68pt; border-image:initial; text-align:center; vertical-align:middle; border-top:none; border-right:0.5pt solid black; border-left:none; white-space:normal; padding-top:1px; padding-right:1px; padding-left:1px" width="90"><span style="font-size:14px;"><span style="color:black"><span style="font-family:Arial,sans-serif"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">30</span></span></span></span></span></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;"><strong><a href="http://advancetyres.vn">CÔNG TY TNHH LỐP SAMSON VIỆT NAM</a></strong>&nbsp;- nhà phân phối&nbsp;độc quyền của thương hiệu&nbsp;ADVANCE &amp; SAMSON&nbsp;tại Việt Nam.&nbsp;<strong><a href="http://advancetyres.vn">LỐP SAMSON VN</a>&nbsp;</strong>chuyên cung cấp hai loại lốp chính là <strong><a href="https://advancetyres.vn/lop-xe-tai-mo">Lốp Xe Tải Mỏ</a>,</strong>&nbsp;<strong><a href="https://advancetyres.vn/lop-cang">Lốp Cảng</a></strong>, <strong><a href="https://advancetyres.vn/lop-cong-trinh">Lốp Công Trình</a></strong>, <strong><a href="https://advancetyres.vn/lop-cau-chuyen-dung">Lốp Cẩu Chuyên Dụng</a></strong> nhằm đáp ứng nhu cầu đa dạng của khách hàng,&nbsp;cam kết cung cấp sản phẩm chất lượng cao, đáp ứng đầy đủ các yêu cầu kỹ thuật và an toàn trong nhiều lĩnh vực khác nhau.</span></span></p>

                            </div>
                        </div>


                        <div id="tab-2" class="tab-content ">
                            Công ty TNHH Lốp SAMSON Việt Nam cam kết cung cấp sản phẩm chất lượng cao, đáp ứng đầy đủ các yêu cầu kỹ thuật và an toàn trong lĩnh vực vận tải và cảng vận tải.
                        </div>


                    </div>
                </div>

            </div>





            <div class="related-product pt-30">
                <div class="title-text">
                    <h3><a href="/lop-cang" title="Sản phẩm liên quan">Sản phẩm liên quan</a></h3>
                </div>
                <div class="products  owl-carousel owl-theme products-view-grid owl-loaded owl-drag" data-nav="true" data-lg-items="5" data-md-items="5" data-sm-items="3" data-xs-items="3" data-xss-items="2" data-margin="10">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1327px;">
                            <div class="owl-item active" style="width: 255.4px; margin-right: 10px;">
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="/lop-advance-18-00-25-40pr-ind-4" title="Lốp ADVANCE 18.00-25 40PR IND-4" class="image_thumb">

                                            <img class="img-responsive center-block ls-is-cached lazyloaded" data-src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-9495df00-84aa-427d-b363-2b121bfe2adc.png?v=1706513072930" alt="Lốp ADVANCE 18.00-25 40PR IND-4" src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-9495df00-84aa-427d-b363-2b121bfe2adc.png?v=1706513072930">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34417436" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='/lop-advance-18-00-25-40pr-ind-4'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="/lop-advance-18-00-25-40pr-ind-4" data-handle="lop-advance-18-00-25-40pr-ind-4" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a href="/lop-advance-18-00-25-40pr-ind-4" title="Lốp ADVANCE 18.00-25 40PR IND-4">Lốp ADVANCE 18.00-25 40PR IND-4</a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34417436"></div>
                                    </div>



                                </div>
                            </div>
                            <div class="owl-item active" style="width: 255.4px; margin-right: 10px;">
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="/lop-advance-14-00-24-28pr-ind-4" title="Lốp ADVANCE 14.00-24 28PR IND-4" class="image_thumb">

                                            <img class="img-responsive center-block ls-is-cached lazyloaded" data-src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-c18331cd-9df0-4bc3-b621-64144ed6ccef.png?v=1706512051300" alt="Lốp ADVANCE 14.00-24 28PR IND-4" src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-c18331cd-9df0-4bc3-b621-64144ed6ccef.png?v=1706512051300">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34417279" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='/lop-advance-14-00-24-28pr-ind-4'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="/lop-advance-14-00-24-28pr-ind-4" data-handle="lop-advance-14-00-24-28pr-ind-4" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a href="/lop-advance-14-00-24-28pr-ind-4" title="Lốp ADVANCE 14.00-24 28PR IND-4">Lốp ADVANCE 14.00-24 28PR IND-4</a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34417279"></div>
                                    </div>



                                </div>
                            </div>
                            <div class="owl-item active" style="width: 255.4px; margin-right: 10px;">
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="/lop-advance-16-00-24-32pr-e-3" title="Lốp ADVANCE 16.00-25 36PR E-3" class="image_thumb">

                                            <img class="img-responsive center-block ls-is-cached lazyloaded" data-src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b.png?v=1705723138230" alt="Lốp ADVANCE 16.00-25 36PR E-3" src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3-66cfb3de-6681-4ff7-98cf-5e94d575500b.png?v=1705723138230">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34323282" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='/lop-advance-16-00-24-32pr-e-3'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="/lop-advance-16-00-24-32pr-e-3" data-handle="lop-advance-16-00-24-32pr-e-3" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a href="/lop-advance-16-00-24-32pr-e-3" title="Lốp ADVANCE 16.00-25 36PR E-3">Lốp ADVANCE 16.00-25 36PR E-3</a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34323282"></div>
                                    </div>



                                </div>
                            </div>
                            <div class="owl-item active" style="width: 255.4px; margin-right: 10px;">
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="/lop-advance-14-00-24-32pr-e-3" title="Lốp ADVANCE 14.00-24 32PR E-3" class="image_thumb">

                                            <img class="img-responsive center-block lazyloaded" data-src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3.png?v=1705723063317" alt="Lốp ADVANCE 14.00-24 32PR E-3" src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-3.png?v=1705723063317">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34323274" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='/lop-advance-14-00-24-32pr-e-3'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="/lop-advance-14-00-24-32pr-e-3" data-handle="lop-advance-14-00-24-32pr-e-3" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a href="/lop-advance-14-00-24-32pr-e-3" title="Lốp ADVANCE 14.00-24 32PR E-3">Lốp ADVANCE 14.00-24 32PR E-3</a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34323274"></div>
                                    </div>



                                </div>
                            </div>
                            <div class="owl-item active" style="width: 255.4px; margin-right: 10px;">
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="/lop-advance-14-00-24-32pr-e-4a" title="Lốp ADVANCE 14.00-24 32PR E-4A" class="image_thumb">

                                            <img class="img-responsive center-block lazyloaded" data-src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-4a.png?v=1705723040680" alt="Lốp ADVANCE 14.00-24 32PR E-4A" src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/e-4a.png?v=1705723040680">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34323272" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='/lop-advance-14-00-24-32pr-e-4a'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="/lop-advance-14-00-24-32pr-e-4a" data-handle="lop-advance-14-00-24-32pr-e-4a" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a href="/lop-advance-14-00-24-32pr-e-4a" title="Lốp ADVANCE 14.00-24 32PR E-4A">Lốp ADVANCE 14.00-24 32PR E-4A</a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="34323272"></div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php
get_footer();
