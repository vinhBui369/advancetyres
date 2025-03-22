<a class="btn-call-now" href="tel:0376877668">
    <i class="fa fa-phone"></i>
    <span> 037 687 7668</span>
</a>
<a class="btn-call-now v2" href="tel:0813132686">
    <i class="fa fa-phone"></i>
    <span>081 313 2686</span>
</a>
<style>
    /* hotline */
    .btn-call-now {
        display: flex;
        align-items: center;
        position: fixed;
        width: 200px;
        bottom: 20px;
        background: rgba(183, 1, 0, 0.74);
        -webkit-box-shadow: 0 0 5px #ddd;
        -moz-box-shadow: 0 0 5px #ddd;
        box-shadow: 0 0 5px #ddd;
        z-index: 99;
        left: 20px;
        top: initial !important;
        color: #FFF;
        font-weight: 700;
        font-size: 125%;
        border-radius: 25px;
        padding: 5px;
        -moz-animation-duration: 500ms;
        -moz-animation-name: calllink;
        -moz-animation-iteration-count: infinite;
        -moz-animation-direction: alternate;
        -webkit-animation-duration: 500ms;
        -webkit-animation-name: calllink;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
        animation-duration: 500ms;
        animation-name: calllink;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    a.btn-call-now.v2 {
        bottom: 70px;
    }

    .btn-call-now .fa {
        color: #b70100;
        font-size: 23px;
        background: #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 20px;
        margin-right: 5px;
        text-align: center;
    }

    @keyframes calllink {
        0% {
            color: #eba11e;
        }

        50% {
            color: #fff;
        }

        100% {
            color: #ebfa48;
        }
    }

    @media (max-width:767px) {
        .btn-call-now span {
            display: none;
        }

        .btn-call-now .fa {
            margin: 0;
        }

        .btn-call-now {
            width: initial;
            min-width: initial
        }
    }
</style>
<div id="_zalo" style="position: FIXED; Z-INDEX: 99999; BOTTOM: 88px; right: 17px;">
    <a href="https://zalo.me/0376877668" target="_blank" alt="chat zalo">
        <img border="0" src="./assets/icon-menu-right2.png" alt="zalo" title="zalo" style="width: 50px;">
    </a>
</div>