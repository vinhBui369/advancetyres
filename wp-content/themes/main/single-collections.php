<?php
get_header();
$id_post = get_the_ID();

// get taxonomy by post id

$terms = get_the_terms($id_post, 'categories-collections');
$slug_category = $terms[0]->slug;
$name_category = $terms[0]->name;
$term_id_category = $terms[0]->term_id;


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
<script src="<?= THEME_ASSETS ?>/js/jquery.js" type="text/javascript"></script>

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
                            <a itemprop="url" href="<?= get_term_link($term_id_category) ?>" title="<?= $name_category ?>">
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
                                    <a href="javascript:void(0)" class="large_image_url" data-rel="">
                                        <div class="zoomWrapper">
                                            <img id="zoom_01" class="img-responsive center-block has-zoom" src="<?= get_the_post_thumbnail_url() ?>" alt="lop-advance-16-00-25rtg-32pr-e-3" data-zoom-image="<?= get_the_post_thumbnail_url() ?>">
                                        </div>
                                    </a>
                                    <div class="hidden">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 details-pro">
                            <h1 class="title-head" itemprop="name"><?= get_the_title() ?></h1>
                            <div class="details-sticky details-pro">
                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <link itemprop="availability" href="http://schema.org/InStock">
                                    <div class="information">
                                        <p><span>Thương hiệu:</span><?= get_field('brand', $id_post) ?></p>
                                        <p class="inventory_quantity">
                                            <span>Tình trạng: </span>
                                            <?= get_field('status', $id_post) ?>
                                        </p>
                                    </div>
                                    <div class="price-box clearfix">
                                        <div class="special-price"><span class="price product-price">Liên hệ </span> </div> <!-- Hết hàng -->

                                    </div>
                                </div>
                            </div>

                            <div class="product-summary">
                                <div class="rte margin-bottom-0">
                                    <?php the_content() ?>
                                </div>
                            </div>



                            <div class="social-sharing">






                                <div class="social-media" data-permalink="https://advancetyres.com.vn/lop-advance-16-00-25rtg-32pr-e-3">
                                    <label>Chia sẻ: </label>
                                    <a target="_blank" href="//www.facebook.com/sharer.php?u=<?php the_permalink() ?>" class="share-facebook" title="Chia sẻ lên Facebook">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>
                                    <a target="_blank" href="//twitter.com/share?url=<?php the_permalink() ?>" class="share-twitter" title="Chia sẻ lên Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" href="//pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/380/977/articles/truckatlas.jpeg?v=1589883317933" class="share-pinterest" title="Chia sẻ lên pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" href="//plus.google.com/share?url=<?php the_permalink() ?>" class="share-google" title="+1">
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
                                <?php
                                $the_query1 = new WP_Query($args1);
                                if ($the_query1->have_posts()):
                                    while ($the_query1->have_posts()): $the_query1->the_post() ?>
                                        <div class="list-item">
                                            <div class="thumb-imagtes">

                                                <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">
                                                    <img src="<?= get_the_post_thumbnail_url() ?>">
                                                </a>
                                            </div>
                                            <div class="product-info-text">
                                                <h3 class="product-name text2line"><a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>"><?= get_the_title() ?></a></h3>

                                                <div class="price-box clearfix">
                                                    <div class="special-price clearfix">
                                                        <span class="price product-price">Liên hệ</span>
                                                    </div>
                                                </div>

                                                <div class="bizweb-product-reviews-badge" data-id="34417436"></div>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif;
                                wp_reset_postdata(); ?>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-lg-12 col-md-12 margin-top-40 margin-bottom-30">
                    <!-- Nav tabs -->
                    <div class="banner-page-detail">
                        <a href="#" class="effect-hover-banner">
                            <img width="100%" src="<?= THEME_ASSETS ?>/images/aside_banner.jpg" alt="images" class="img-responsive">
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
                                <?= get_field('product_information', $id_post) ?>
                            </div>
                        </div>


                        <div id="tab-2" class="tab-content ">
                            <?= get_field('policy', $id_post) ?>
                        </div>


                    </div>
                </div>

            </div>





            <div class="related-product pt-30">
                <div class="title-text">
                    <h3><a href="/lop-cang" title="Sản phẩm liên quan">Sản phẩm liên quan</a></h3>
                </div>
                <div class="products  owl-carousel owl-theme products-view-grid owl-loaded owl-drag" data-nav="true" data-lg-items="5" data-md-items="5" data-sm-items="3" data-xs-items="3" data-xss-items="2" data-margin="10">
                    <?php
                    $the_query1 = new WP_Query($args1);
                    if ($the_query1->have_posts()):
                        while ($the_query1->have_posts()): $the_query1->the_post() ?>
                            <div class="product-box  ">
                                <div class="product-thumbnail">
                                    <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>" class="image_thumb">
                                        <img class="img-responsive center-block ls-is-cached lazyloaded" data-src="<?= get_the_post_thumbnail_url() ?>" src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">

                                    </a>
                                    <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-34417436" enctype="multipart/form-data">

                                            <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='<?php the_permalink() ?>'">
                                                <i class="fa fa-link"></i></button>

                                        </form>
                                    </div>
                                    <a href="<?php the_permalink() ?>" data-handle="lop-advance-18-00-25-40pr-ind-4" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text2line"><a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>"><?= get_the_title() ?></a></h3>
                                    <div class="price-box clearfix">
                                        <div class="special-price clearfix">
                                            <span class="price product-price">Liên hệ</span>
                                        </div>
                                    </div>
                                    <div class="bizweb-product-reviews-badge" data-id="34417436"></div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="https://www.elevateweb.co.uk/wp-content/themes/radial/jquery.elevatezoom.min.js"></script>
<script>
    jQuery(document).ready(function() {
        /*begin variant image*/
        if (jQuery(window).width() > 1200) {
            jQuery('#zoom_01').elevateZoom({
                gallery: 'gallery_01',
                zoomWindowWidth: 420,
                zoomWindowHeight: 500,
                zoomWindowOffetx: 10,
                easing: true,
                scrollZoom: false,
                cursor: 'pointer',
                galleryActiveClass: 'active',
                imageCrossfade: true
            });
        };
    });
</script>
<?php
get_footer();
