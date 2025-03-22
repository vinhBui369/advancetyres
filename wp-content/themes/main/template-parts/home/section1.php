<?php

$home_banner = get_field('home_banner', 'option');

?>
<section class="awe-section-1">
    <div class="padding-pl0-767 wrap-slider">
        <?php if ($home_banner): ?>
            <div class="home-slider owl-carousel owl-loaded owl-drag" data-lg-items="1" data-md-items="1"
                data-sm-items="1" data-xs-items="1" data-margin="0" data-nav="true" data-animateout="fadeOut">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php foreach ($home_banner as $key => $value): ?>
                            <?php
                            $link = isset($value['link']) ? esc_url($value['link']) : '#';
                            $image = isset($value['image']) ? esc_url($value['image']) : NOT_IMAGE;
                            $image_mobile = isset($value['image_mobile']) ? esc_url($value['image_mobile']) : $image;
                            ?>
                            <div class="owl-item ">
                                <div class="item">
                                    <a href="<?= $link ?>" class="clearfix" title="">
                                        <picture>
                                            <source media="(max-width: 580px)" src="<?php echo $image_mobile; ?>">
                                            <img class="img-responsive center-block" src="<?= $image ?>" alt="">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        <?php endif; ?>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        var home_owl = $('.home-slider');
        $('.home-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            // navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        });
        $(".home-slider .owl-next").click(function() {
            home_owl.trigger("next.owl.carousel");
        });

        $(".home-slider .owl-prev").click(function() {
            home_owl.trigger("prev.owl.carousel", [300]); //300 is the speed
        });
    });
</script>