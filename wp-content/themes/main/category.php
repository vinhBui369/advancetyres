<?php
get_header();

$cat = get_queried_object();
$cat_id = $cat->term_id;
$cat_name = $cat->name;
$cat_description = $cat->description;
$cat_link = get_category_link($cat_id);

?>
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 a-left">
                <div class="breadcrumb-container">
                    <div class="title-page"><?= $cat_name ?></div>
                    <ul class="breadcrumb" itemscope="" itemtype="">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        <li><strong><span itemprop="<?= $cat_name ?>"><?= $cat_name ?></span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row flex-wrap">
        <section class="right-content col-lg-9 col-md-9 ">
            <div class="box-heading hidden">
                <h1 class="title-head"><?= $cat_name ?></h1>
            </div>
            <section class="list-blogs blog-main flex-margin-20">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post() ?>
                        <article class="blog-item">
                            <div class="blog-item-thumbnail">
                                <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>
                            <div class="date">
                                <p>
                                    T<?= get_the_date('m'); ?>
                                </p>
                                <p>
                                    <?= get_the_date('d'); ?>
                                </p>
                            </div>
                            <div class="blog-item-info">
                                <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">
                                    <h3 class="blog-item-name"><?= get_the_title() ?></h3>
                                </a>
                                <p class="blog-item-summary margin-bottom-5">
                                    <?= get_the_excerpt(); ?>
                                </p>
                            </div>
                        </article>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </section>
        </section>
        <aside class="left left-content col-lg-3 col-md-3  space-30">

            <aside class="aside-item collection-category">
                <div class="aside-title">
                    <h2 class="title-head margin-top-0"><span>Danh mục </span></h2>
                </div>
                <div class="categories-box">
                    <ul class="lv1">



                        <li class="nav-item nav-items ">
                            <a href="/lop-xe-tai-mo" title="LỐP XE TẢI MỎ">
                                LỐP XE TẢI MỎ</a>
                        </li>



                        <li class="nav-item nav-items ">
                            <a href="/lop-cang" title="LỐP CẢNG">
                                LỐP CẢNG</a>
                        </li>



                        <li class="nav-item nav-items ">
                            <a href="/lop-cau-chuyen-dung" title="LỐP CẨU CHUYÊN DỤNG">
                                LỐP CẨU CHUYÊN DỤNG</a>
                        </li>



                        <li class="nav-item nav-items ">
                            <a href="/lop-cong-trinh" title="LỐP CÔNG TRÌNH">
                                LỐP CÔNG TRÌNH</a>
                        </li>


                    </ul>
                </div>
            </aside>
            <div class="sticky-top60">
                <div class="aside-item">
                    <div class="aside-title">
                        <div class="title-head margin-top-0">

                            <a href="/tin-tuc" title="Bài viết liên quan">
                                <h2>Bài viết liên quan</h2>
                            </a>

                        </div>
                    </div>

                    <div class="list-blogs">
                        <?php
                        $args1 = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                        );
                        $the_query1 = new WP_Query($args1);
                        if ($the_query1->have_posts()):
                            while ($the_query1->have_posts()): $the_query1->the_post() ?>
                                <article class="blog-item blog-item-list">
                                    <h3 class="blog-item-name">
                                        <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">
                                            <?= get_the_title() ?>
                                        </a>
                                    </h3>
                                </article>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
<?php
get_footer();
