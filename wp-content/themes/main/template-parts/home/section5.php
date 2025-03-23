<?php

$home_news = get_field('home_news', 'option');
$title = isset($home_news['title']) ? $home_news['title'] : '';
$link = !empty($home_news['link']) ? esc_url($home_news['link']) : '#';
?>
<section class="awe-section-9">
    <div class="bg-grey pt-30 pb-20">
        <div class="container">
            <div class="title-text2">
                <h2><a href="<?= $link ?>" title="<?= $title ?>"><?= $title ?></a></h2>
            </div>
            <div class="content-blog bg-white">
                <div class="owl-carousel owl-blog-index owl-loaded owl-drag" data-dot="true" data-lg-items="3" data-md-items="3" data-height="false" data-xs-items="2" data-xxs-items="1" data-sm-items="2">
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

                            <div class="item_wrap_blog">
                                <div class="blog-img">
                                    <a href="<?php the_permalink() ?>" title="<?= get_the_title() ?>">

                                        <img class=" lazyloaded"
                                            data-src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>"
                                            alt="<?= get_the_title() ?>"
                                            src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>">

                                    </a>
                                </div>
                                <div class="date">
                                    <p><?php echo get_the_date('d/m/Y'); ?></p>
                                </div>
                                <div class="content__">
                                    <h3 class="h4">
                                        <a class="text2line"
                                            title="<?= get_the_title() ?>"
                                            href="<?php the_permalink() ?>"><?= get_the_title() ?></a>
                                    </h3>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>