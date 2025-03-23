<?php
get_header();
$id_post = get_the_ID();
$slug_category =  get_the_category($id_post)[0]->slug;
$name_category =  get_the_category($id_post)[0]->name;

// ignore this current post
$args1 = array(
    'post_type' => 'post',
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

<div class="container article-wraper">
    <div class="row flex-wrap">
        <section class="right-content col-lg-9 col-md-9 ">
            <article class="article-main bg-grey" itemscope="" itemtype="">
                <meta itemprop="mainEntityOfPage" content="/lop-xe-advance-dung-co-tot-khong-danh-gia-chat-luong-lop-advance-tai-viet-nam">
                <meta itemprop="description" content="">
                <meta itemprop="author" content="Minh Huyền">
                <meta itemprop="headline" content="<?= get_the_title() ?>">
                <meta itemprop="image" content="https:https://bizweb.dktcdn.net/100/380/977/articles/truckatlas.jpeg?v=1589883317933">
                <meta itemprop="datePublished" content="19-05-2020">
                <meta itemprop="dateModified" content="18-05-2020">
                <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                        <img src="//bizweb.dktcdn.net/100/380/977/themes/759269/assets/logo.png?1734335154245" alt="CÔNG TY TNHH LỐP SAMSON VIỆT NAM">
                        <meta itemprop="url" content="https://bizweb.dktcdn.net/100/380/977/themes/759269/assets/logo.png?1734335154245">
                        <meta itemprop="width" content="200">
                        <meta itemprop="height" content="49">
                    </div>
                    <meta itemprop="name" content="CÔNG TY TNHH LỐP SAMSON VIỆT NAM">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php the_content() ?>
                    </div>
                    <div class="col-lg-12 share">
                        <div class="social-media" data-permalink="<?php the_permalink() ?>">
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

                    <div class="col-lg-12 space-30">
                        <div class="related-blog-title">
                            <h2> Tin liên quan</h2>
                        </div>
                        <div class="list-blogs related-blogs">
                            <?php
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

                    <div class="col-xs-12">


                        <form method="post" action="/posts/lop-xe-advance-dung-co-tot-khong-danh-gia-chat-luong-lop-advance-tai-viet-nam/comments" id="article_comments" accept-charset="UTF-8"><input name="FormType" type="hidden" value="article_comments"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-916ef16ab0eb41fca5ce3c033469c811" name="Token" value="03AFcWeA4TSyGigD1XW8ZgSguX0UspMo_ZS6ym1Xw2NvAxw5wCnhdyuo4tcEC8AlQFWaGlfbxZASn1W9nXYVLrhN8vhtwtf7DOmS4g2Q3fEf0RFHQdTDcaQn2xC-g3UbbzLeZy_vnL9rDNS5GRE0Vv7n86zShZKAmXmm7jUsYnQO9pU_m7l3VuvRk-usKsUUKtFTPWG683lP4sIcxUntCTmRhlzvi3WMbQ8MbYrgP3UrbY3KMvZtSCCnkMhze7XLHCa0uO3avCb4_aWue4aT4nbaMtsYVfQ23ucWE1fG_8pC_Cd_89FTryD_zyLCwa1K0wFi585oMVRMc6atjot8bOoRLcwcHlZk6z1ar8jtfArCojW1GUO9Ij5CWJEK2tbbqfyYSM5LVTNV_6js4tNu-oFDd7Umol8v5af2mnN5LFbChyfrdbhJt-SDM9RzVZSMQ3ZhjHEKBqrG5cRZqYqeTlj52z3HEP5Da5gA63BN0XggJRMrsJoAZaL_1SdPfI2gNIiH0-2GxTRaveh6j5n7TaXG3Hu_FdjVyq12kzdMQrdqJ7FyKAEmjqhC8JvMJu73iICJB_k6CVMyCfZIKeEFwZkA8cIebH-W9x0BjFLL-cBkw_4YJ4Mve5-7U_tNVdDGvly5GYn-VtMA3Ht_5Lwys5jsA_H_Zz_3XkNcYTYomMJBAdxqKxTN9n_FBwhyaoh5wQ0C3dgI7akuyPqFm6JbO_5l_aMBWvYtAGCsRUYAtMnk8-voFQH2j6pyS2z3Wran84hsNXpALQAd7CfYY795HBd_mfFNUS5Fv2fAwFjL2EeyEPNEOXeMAH08t5nQRCxhuhZPGD_l7AjZF7LTjPKhAorfuYTORiQFtpuoepHEeBz57Ep_X803232l4xrE2iw1CccHKQ_T-KzHGcwSw_VSI6Lc4VUMDJFToa5_78fVw0fd7M_njZZZ0G10g">
                            <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                            <script>
                                grecaptcha.ready(function() {
                                    grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                        action: "article_comments"
                                    }).then(function(token) {
                                        document.getElementById("Token-916ef16ab0eb41fca5ce3c033469c811").value = token
                                    });
                                });
                            </script>

                            <div class="col-lg-12">
                                <div class="form-coment margin-bottom-30">
                                    <div class="row">
                                        <div class="">
                                            <h5 class="title-form-coment">VIẾT BÌNH LUẬN CỦA BẠN:</h5>
                                        </div>
                                        <fieldset class="form-group col-xs-12 col-sm-12 col-md-12">
                                            <input placeholder="Họ tên" type="text" class="form-control form-control-lg" value="" id="full-name" name="Author" required="">
                                        </fieldset>
                                        <fieldset class="form-group col-xs-12 col-sm-12 col-md-12">
                                            <input placeholder="Email" type="email" class="form-control form-control-lg" value="" id="email" name="Email" required="">
                                        </fieldset>
                                        <fieldset class="form-group col-xs-12 col-sm-12 col-md-12">
                                            <textarea placeholder="Nội dung" class="form-control form-control-lg" id="comment" name="Body" rows="6" required=""></textarea>
                                        </fieldset>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </div>
                                    </div>
                                </div> <!-- End form mail -->
                            </div>
                        </form>
                    </div>

                </div>
            </article>
        </section>

        <aside class="left left-content col-lg-3 col-md-3 ">

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
