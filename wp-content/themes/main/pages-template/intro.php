<?php /* Template Name: introduce */
get_header();
$categories = get_terms(array(
    'taxonomy' => 'categories-collections',
    'hide_empty' => false,
    'parent' => 2,
));
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
                        <li><strong><span itemprop="title"><?php the_title() ?></span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page">
    <div class="container">
        <div class="row flex-wrap">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
                <div class="page-title category-title hidden">
                    <h1 class="title-head"><a href="#">Giới thiệu ADVANCE VIỆT NAM</a></h1>
                </div>
                <div class="content-page rte">
                    <?php the_content() ?>
                </div>
            </div>
            <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3 space-30 left-content">


                <aside class="aside-item collection-category">
                    <div class="aside-title">
                        <h2 class="title-head margin-top-0"><span>Danh mục </span></h2>
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
                <div class="sticky-top60">
                </div>
            </aside>
        </div>
    </div>
</div>
<?php
get_footer();
