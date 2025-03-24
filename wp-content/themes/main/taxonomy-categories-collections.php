<?php
get_header();



// query custom post type with meta_query , field is true or false
$best_selling_products = array(
    'post_type' => 'collections',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => 'best_selling_products',
            'value' => '1',
            'compare' => '==',
        ),
    ),
);


// get all custorm taxonomy categories-collections ignore parent taxonomy 
$categories = get_terms(array(
    'taxonomy' => 'categories-collections',
    'hide_empty' => false,
    'parent' => 2,
));


// query all post type collections and pagination
$args = array(
    'post_type' => 'collections',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
);



?>
<script src="<?= THEME_ASSETS ?>/js/jquery.js" type="text/javascript"></script>
<style>
    .products-view-list .row-gutter-14 {
        display: none;
    }

    .products-view-grid .row-noGutter {
        display: none;
    }


    .paginate_links {
        width: 100%;
        text-align: center;
        margin: 20px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .shop-pag .paginate_links .page-numbers {
        float: left;
        margin: 2.5px;
        width: 40px;
        background: #fff;
        text-align: center;
        height: 40px;
        font-size: 16px;
        line-height: 30px;
        color: #333;
        border-radius: 0;
        border: none;
        text-decoration: none;
        border: 1px solid #e1e1e1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }

    @media (max-width: 767px) {
        .shop-pag .paginate_links .page-numbers {
            width: 25px;
            height: 25px;
            line-height: 25px;
            padding: initial;
            margin: 1.5px;
        }
    }

    .shop-pag .paginate_links .page-numbers.current {
        background-color: #183685;
        border-color: #183685;
        color: #fff;
    }
</style>
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 a-left">
                <div class="breadcrumb-container">
                    <div class="title-page">Tất cả sản phẩm</div>
                    <ul class="breadcrumb" itemscope="" itemtype="">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        <li><strong><span itemprop="title"> Tất cả sản phẩm</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="best-seller-product">
        <div class="title-text3">
            <h3><a href="cac-loai-lop-xe" title="Sản phẩm bán chạy">Sản phẩm bán chạy</a></h3>
        </div>
        <div class="wrap-product-sale bg-white">
            <div class="wrap-text-right">

                <div class="owl-carousel slider-nav-top slider-nav-right group-2-product no-group fix-border-owl owl-loaded owl-drag" data-lg-items="3" data-md-items="3" data-sm-items="1" data-xs-items="1" data-margin="0" data-dot="true">
                    <?php $the_query = new WP_Query($best_selling_products);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();  ?>
                            <div class="product-box  ">
                                <div class="product-thumbnail">
                                    <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>" class="image_thumb">
                                        <img class="img-responsive center-block " src="//bizweb.dktcdn.net/thumb/large/100/380/977/products/ind-4-9495df00-84aa-427d-b363-2b121bfe2adc.png?v=1706513072930" alt="<?= get_the_title() ?>">
                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text2line"><a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>"><?= get_the_title() ?></a></h3>
                                    <div class="price-box clearfix">
                                        <div class="special-price clearfix">
                                            <span class="price product-price">Liên hệ</span>
                                        </div>
                                    </div>
                                    <div class="bizweb-product-reviews-badge" data-id="<?= get_the_ID() ?>"></div>
                                    <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="<?= get_the_ID() ?>" enctype="multipart/form-data">
                                            <button class="btn-cart btn btn-gray  left-to" title="Chi tiết" type="button" onclick="window.location.href='<?php the_permalink() ?>'">
                                                Chi tiết</button>
                                        </form>
                                    </div>
                                    <a href="<?php the_permalink() ?>" data-handle="lop-advance-18-00-25-40pr-ind-4" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="row flex-wrap">

        <section class="main_container collection col-lg-9 col-md-9 col-md-push-3 col-lg-push-3">
            <div class="category-products">
                <div class="sortPagiBar">
                    <div class="row">
                        <div class="col-xs-5 col-md-6 col-sm-6">
                            <div class="hidden-xs button-change-view">
                                <a href="javascript:void(0)" data-view="grid">
                                    <span class="btn button-view-mode view-mode-grid active ">
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a href="javascript:void(0)" data-view="list">
                                    <span class="btn button-view-mode view-mode-list ">
                                        <i class="fa fa-th-list" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="tt hidden">
                                    <div id="ttfix" class="hidden-sm hidden-xs">
                                        Hiển thị <span>1</span> - <span>16</span> trong tổng số <span></span> sản phẩm
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 text-xs-left text-sm-right">
                            <div id="sort-by">
                                <label class="left">Sắp xếp: </label>
                                <ul>
                                    <li><span class="val">Thứ tự</span>
                                        <ul class="ul_2">
                                            <li><a href="javascript:;" onclick="sortby('')">Mặc định</a></li>
                                            <li><a href="javascript:;" onclick="sortby('alpha-asc')">A → Z</a></li>
                                            <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z → A</a></li>
                                            <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                            <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                            <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                            <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="products-view products-view-grid">
                    <div class="row row-gutter-14">
                        <?php
                        $the_query1 = new WP_Query($args);
                        if ($the_query1->have_posts()):
                            while ($the_query1->have_posts()): $the_query1->the_post() ?>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                    <div class="product-box  ">
                                        <div class="product-thumbnail">

                                            <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>" class="image_thumb">

                                                <img class="img-responsive center-block " src="<?= get_the_post_thumbnail_url() ?>" data-lazyload="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">

                                            </a>

                                            <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="<?= get_the_ID() ?>" enctype="multipart/form-data">

                                                    <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết" type="button" onclick="window.location.href='<?php the_permalink() ?>'">
                                                        <i class="fa fa-link"></i></button>

                                                </form>
                                            </div>


                                            <a href="<?php the_permalink() ?>" data-handle="copy-of-lop-advance-445-95r25-16-00r25-glb07" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
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
                                            <div class="bizweb-product-reviews-badge" data-id="<?= get_the_ID() ?>"></div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="row row-noGutter">
                        <?php
                        $the_query1 = new WP_Query($args);
                        if ($the_query1->have_posts()):
                            while ($the_query1->have_posts()): $the_query1->the_post() ?>
                                <div class="col-xs-12">
                                    <div class="product-box">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                <div class="product-thumbnail f-left">
                                                    <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">
                                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                                <div class="product-info f-left">
                                                    <h3 class="product-name"><a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>"><?= get_the_title() ?></a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price clearfix">
                                                            <span class="price product-price">Liên hệ</span>
                                                        </div>
                                                    </div>

                                                    <div class="bizweb-product-reviews-badge" data-id="34323190"></div>

                                                    <div class="action-box-list-item">
                                                        <form action="/cart/add" method="post" class="variants pro-action-btn margin-top-15" data-id="product-actions-34323190" enctype="multipart/form-data">



                                                        </form>


                                                        <a href="<?php the_permalink() ?>" data-handle="lop-advance-18-00-25-44pr-e-4j" class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </section>
                <div class="shop-pag text-xs-right">

                    <nav>
                        <?php wp_paginate_paged($the_query1) ?>
                    </nav>



                </div>


            </div>
        </section>

        <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9">

            <aside class="aside-item collection-category">
                <div class="aside-title">
                    <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>
                </div>
                <div class="categories-box">
                    <ul class="lv1">
                        <?php foreach ($categories as $value): ?>
                            <li class="nav-item nav-items ">
                                <a href="<?= get_term_link($value->term_id) ?>" title="<?= $value->name ?>"> <?= $value->name ?> </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </aside>

            <div class="aside-filter">

                <div class="aside-title">
                    <h2 class="title-head margin-top-0"><span>ADVANCE</span></h2>
                </div>

                <div class="filter-container">
                    <div class="filter-container__selected-filter" style="display: none;">
                        <div class="filter-container__selected-filter-header clearfix">
                            <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                            <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="filter-container__selected-filter-list">
                            <ul></ul>
                        </div>
                    </div>









                </div>

            </div>

            <aside class="banner-sidebar">
                <a href="#" class="effect-hover-banner">
                    <img width="100%" src="<?= THEME_ASSETS ?>/images/aside_banner.jpg" alt="images" class="img-responsive">
                </a>
            </aside>

        </aside>
        <div id="open-filters" class="open-filters hidden-lg hidden-md">
            <i class="fa fa-filter"></i>
            <span></span>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        jQuery('.button-change-view a').click(function() {
            var view = jQuery(this).attr('data-view');
            jQuery('.button-change-view a span').removeClass('active');
            jQuery(this).find('span').addClass('active');
            if (view == 'grid') {
                jQuery('.products-view ').addClass('products-view-grid');
                jQuery('.products-view ').removeClass('products-view-list');
            } else {
                jQuery('.products-view ').addClass('products-view-list');
                jQuery('.products-view ').removeClass('products-view-grid');
            }
        });
    });
</script>
<?php
get_footer();
