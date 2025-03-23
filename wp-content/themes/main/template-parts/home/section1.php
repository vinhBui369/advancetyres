<?php

$home_banner = get_field('home_banner', 'option');

?>
<section class="awe-section-1">
    <div class="padding-pl0-767 wrap-slider">
        <?php if ($home_banner): ?>
            <div class="home-slider owl-carousel owl-loaded owl-drag" data-lg-items="1" data-md-items="1"
                data-sm-items="1" data-xs-items="1" data-margin="0" data-nav="true" data-animateout="fadeOut">
                <?php foreach ($home_banner as $key => $value): ?>
                    <?php
                    $link = isset($value['link']) ? esc_url($value['link']) : '#';
                    $image = isset($value['image']) ? esc_url($value['image']) : NOT_IMAGE;
                    $image_mobile = isset($value['image_mobile']) ? esc_url($value['image_mobile']) : $image;
                    ?>
                    <div class="item">
                        <a href="<?= $link ?>" class="clearfix" title="">
                            <picture>
                                <source media="(max-width: 580px)" src="<?php echo $image_mobile; ?>">
                                <img class="img-responsive center-block" src="<?= $image ?>" alt="">
                            </picture>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif; ?>
    </div>
</section>
