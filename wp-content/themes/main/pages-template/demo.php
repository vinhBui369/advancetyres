<?php /* Template Name: Contact */
get_header();
$id = get_the_ID();
$page_contact_map = get_field('page_contact_map', $id);
$page_contact_title_contact_information = get_field('page_contact_title_contact_information', $id);
$page_contact_contact_information = get_field('page_contact_contact_information', $id);
$page_contact_address = get_field('page_contact_address', $id);
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
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        <li><strong><span itemprop="title"><?php the_title() ?></span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-sm-12 margin-bottom-30 margin-top-20">
            <div class="box-maps pagecontact_ggmap">
                <?= $page_contact_map ?>
            </div>
        </div>
        <div class="col-sm-4">
            <h1 class="title-head page_title margin-bottom-5"><?= $page_contact_title_contact_information ?></h1>
            <p>
                <?= $page_contact_contact_information ?>
            </p>
            <div class="contact-box-info clearfix margin-bottom-30">
                <?= $page_contact_address ?>
            </div>
        </div>
        <div class="col-sm-8">
            <div id="login">
                <h2 class="title-head"><span> Gửi tin nhắn cho chúng tôi</span></h2>
                <form method="post" action="/postcontact" id="contact" accept-charset="UTF-8"><input name="FormType" type="hidden" value="contact"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-b22e355f6800484492a174977ecb6585" name="Token" value="03AFcWeA7RaFVXq_4qU4qOkeeWa6mqXqxGzZH0ZUds1i1F68ikH2QoHPAs1VyUWo19kG5qDura3fHAln8XYRxvilyGE1bfL8aToGMEK_xUPUHnenZUzLR3b8AIyUVchcxOx4Eigda3h2reKfKrbvFqQhZYD1jJsrrUv1agp5s5sWoB3euI5UJ5tjgzOHX_w4LXpkiMXuRxShi-D4fPl282KgUD9QhAXWLc6vu4R4c2ppnuUQP89B3zPf-Bun24mt0zl5jU4Vle2RmIvIpFDNIZmwSCM4Arz3N5RprphEjLhhPpEFOUoLt3_i8fyWAXdJZ8g1HJqx2tzavcrrmOiflQIGESWFxHKeN9CzxXzIingsHvtMm-q_PZ6d_0baXVu-XcMKE6ZwKSI2tblx7xEh2T6f4fkGF4Erqt-QzVuMUXS8o2O734ydQ3lmawauh3blpPTo7oISyca7TM_WFIN4KfIUgkoFTrk-8ZZwBumZDfvfIvv-KGMAajpP3wkX6kllgQxCZ0ndSSLfsv4ckcYuVBya1Bwo_lYOQeex89n0GT2Y_wz771HqVtiDZTSlKkDMkcG4pgDmDRL-ZIm5Ktw2pc3wEggUoVBxW8JMxTiX2_KVHC-1Xfu44_yPVkyGBvyK1j_jHXxH5WnAZJ6xYHZLSxGGdHKeCTSgFgIANfpzQh-Flh9UAj8ZUlrmuFpkKMdJiDD-bFHvMXN86psQZ-0W2U4ivgD2XIG_sVN_NG1nmMGkZz_2UW_F92N2bxTswY2m6lQdYEInrsEPqc2toVaRas5HQbzAoyFVOjHy_GGDH4Db2dX-rvqa0DsxeNdwR7QwbsdNUkFSb0pehyaq0JnAC-jQBcTzJcRV-ocJmrTYp0EeK_l7ALXz7nAz_M9e9xci3feZqQscyLvtpT22Jxk3QlJjgZW7xmxk7JUpmHz71W44KmoEgUs8KYnGI">
                    <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                    <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                action: "contact"
                            }).then(function(token) {
                                document.getElementById("Token-b22e355f6800484492a174977ecb6585").value = token
                            });
                        });
                    </script>


                    <p id="errorFills" style="margin-bottom:10px; color: red;"></p>
                    <div id="emtry_contact" class="form-signup form_contact clearfix">
                        <div class="row row-8Gutter">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <input type="text" placeholder="Họ tên*" name="contact[name]" id="name" class="form-control  form-control-lg" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <input type="email" placeholder="Email*" name="contact[email]" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" id="email" class="form-control form-control-lg" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <input type="text" placeholder="Điện thoại*" name="contact[phone]" class="form-control form-control-lg" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required="">
                                </fieldset>
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <textarea name="contact[body]" placeholder="Nhập nội dung*" id="comment" class="form-control form-control-lg" rows="6" required=""></textarea>
                        </fieldset>
                        <div>
                            <button type="submit" class="btn btn-primary" style="padding:0 40px;text-transform: inherit;">Gửi liên hệ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>