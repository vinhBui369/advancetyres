<?php


$categories = get_terms(array(
    'taxonomy' => 'categories-collections',
    'hide_empty' => false,
    'parent' => 2,
));
?>
<?php foreach ($categories as $value): ?>
    <?php
    $args = array(
        'post_type' => 'collections',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories-collections',
                'field' => 'term_id',
                'terms' => $value->term_id,
            ),
        ),
    ); ?>
    <section class="awe-section-6">
        <div class="product bg-grey">
            <div class="container">
                <div class="title-text">
                    <h2><a href="lop-cong-trinh-lop-cau-chuyen-dung" title="<?= $value->name ?>"><?= $value->name ?></a></h2>
                </div>
                <div class="banner-product bg-white">
                    <a class="banner" href="lop-cong-trinh-lop-cau-chuyen-dung" title="<?= $value->name ?>">

                        <img class="img-responsive ls-is-cached lazyloaded"
                            data-src="<?= get_field('image', $value) ?>"
                            alt="images"
                            src="<?= get_field('image', $value) ?>">
                    </a>
                    <div class="owl-carousel slider-nav-top owl-loaded owl-drag" data-nav="true" data-lg-items="4" data-md-items="3" data-height="false" data-xs-items="3" data-xss-items="2" data-sm-items="2">
                        <?php
                        $the_query1 = new WP_Query($args);
                        if ($the_query1->have_posts()):
                            while ($the_query1->have_posts()): $the_query1->the_post() ?>
                                <div class="product-box  ">
                                    <div class="product-thumbnail">

                                        <a href="<?php the_permalink() ?>"
                                            title="<?= get_the_title() ?>"
                                            class="image_thumb">

                                            <img class="img-responsive center-block "
                                                src="<?= get_the_post_thumbnail_url() ?>"
                                                data-lazyload="<?= get_the_post_thumbnail_url() ?>"
                                                alt="<?= get_the_title() ?>">

                                        </a>

                                        <div class="product-action clearfix hidden-md hidden-sm hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid"
                                                data-id="product-actions-38943440" enctype="multipart/form-data">

                                                <button class="btn-cart btn btn-gray  left-to" title="Xem chi tiết"
                                                    type="button"
                                                    onclick="window.location.href='<?php the_permalink() ?>'">
                                                    <i class="fa fa-link"></i></button>

                                            </form>
                                        </div>


                                        <a href="<?php the_permalink() ?>"
                                            data-handle="copy-of-lop-advance-445-95r25-16-00r25-glb07"
                                            class="btn-white btn_view btn right-to quick-view" title="Xem nhanh">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                    <div class="product-info a-left">
                                        <h3 class="product-name text2line"><a
                                                href="<?php the_permalink() ?>"
                                                title="<?= get_the_title() ?>"><?= get_the_title() ?></a></h3>



                                        <div class="price-box clearfix">
                                            <div class="special-price clearfix">
                                                <span class="price product-price">Liên hệ</span>
                                            </div>
                                        </div>

                                        <div class="bizweb-product-reviews-badge" data-id="38943440"></div>
                                    </div>



                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>