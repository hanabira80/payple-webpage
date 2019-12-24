<?php include("include/header.php");?>

        <section>
            <article class="full_page sub_01_02">
                <div class="article_stripe"></div>
                <div class="backdrop"></div>
                <div class="width_limiter main_view">
                    <div class="left_area__main_view t2">
                        <div class="main_tit ">
                            정기배송, 구독 서비스를 위한<br />
                            카드 정기결제
                        </div>
                        <div class="sub_tit ">
                            정기배송, 구독 서비스를 운영 중이신가요?<br />
                            편리한 페이플 카드 정기결제를 이용해보세요.<br />
                            사용자의 카드등록만으로 정기결제가 가능합니다.<br />
                        </div>
                    </div>
                </div>
                <style>
                    .temp_remote {
                        position: absolute;
                        top: 180px;
                        right: 0;
                        background: #fff;
                        padding: 1rem 1rem;
                        border-radius: 0 0 0 4px;
                        transform: translate3d(100%, 0, 0);
                        transition: all ease 0.3s;
                    }
                    .temp_remote.active {
                        transform: translate3d(0, 0, 0);
                    }
                    .temp_active,
                    .temp_close {
                        display: none;
                        position: absolute;
                        right: 100%;
                        top: 0;
                        width: 40px;
                        height: 40px;
                        line-height: 40px;
                        text-align: center;
                        color: hotpink;
                        background: #fff;
                        border-radius: 4px 0 0 4px;
                        font-size: 0;
                        cursor: pointer;
                    }
                    .temp_active i,
                    .temp_close i {
                        font-size: 32px;
                    }
                    .temp_remote .temp_active {
                        display: block;
                    }
                    .temp_remote .temp_close {
                        display: none;
                    }
                    .temp_remote.active .temp_active {
                        display: none;
                    }
                    .temp_remote.active .temp_close {
                        display: block;
                    }
                    .temp_templete li {
                        padding: 0.4rem 0;
                        cursor: pointer;
                        text-align: right;
                        border-bottom: 1px solid #eee;
                        line-height: 20px;
                    }
                    .temp_templete li i {
                        opacity: 0;
                    }
                    .temp_templete li.active {
                        color: #7852e8;
                        font-weight: 500;
                    }
                    .temp_templete li.active i {
                        opacity: 1;
                        margin: 0 0.8rem 0.4rem 0;
                    }
                </style>
                <div class="temp_remote">
                    <div class="temp_active"><i class="material-icons"> build </i></div>
                    <div class="temp_close"><i class="material-icons"> close </i></div>
                    <ul class="temp_templete">
                        <li class="active"><i class="material-icons"> check </i>1번 이미지</li>
                        <li><i class="material-icons"> check </i>2번 이미지</li>
                        <li><i class="material-icons"> check </i>3번 이미지</li>
                        <li><i class="material-icons"> check </i>4번 이미지</li>
                        <li><i class="material-icons"> check </i>5번 이미지</li>
                        <li><i class="material-icons"> check </i>6번 이미지</li>
                        <li><i class="material-icons"> check </i>7번 이미지</li>
                        <li><i class="material-icons"> check </i>8번 이미지</li>
                        <li><i class="material-icons"> check </i>9번 이미지</li>
                        <li><i class="material-icons"> check </i>10번 이미지</li>
                        <li><i class="material-icons"> check </i>11번 이미지</li>
                        <li><i class="material-icons"> check </i>12번 이미지</li>
                        <li><i class="material-icons"> check </i>13번 이미지</li>
                        <li><i class="material-icons"> check </i>14번 이미지</li>
                    </ul>
                </div>
                <script>
                    $(document).ready(function() {
                        $(".temp_active, .temp_close").click(function() {
                            $(".temp_remote").toggleClass("active");
                        });
                        $(".temp_templete li").click(function() {
                            var i = $(this).index() + 1;
                            console.log(i);
                            $(".temp_templete li").removeClass("active");
                            $(this).addClass("active");
                            $("article.full_page").css("background-image", "url(img/sub/sub_bg_01_" + i + ".png)");
                        });
                    });
                </script>
            </article>
            <!-- <article class="">
                <div class="article_stripe"></div>
                <div class="tit_box__article width_limiter ">
                    <h3 class="main_tit__article">
                        1분이면 계좌등록과 결제 끝
                    </h3>
                    <h4 class="sub_tit__article">
                        [안내 문구 추가]
                    </h4>
                </div>
                <div class="width_limiter space_setter__article_content">
                    <ul class="card_img_big_title dp_flex flc_wrap flc_jc_sr">
                        <li>
                            <div class="icon_box">
                                <img class="thumb" src="img/sub/002.jpg" alt="" />
                            </div>
                            <div class="font fsz_12 fw_md fcl_main has_font_spacer_b_12 ">
                                Step. 1
                            </div>
                            <div class="font fsz_22 ff_gf fcl_bold align_center">
                                계좌정보 입력하고
                            </div>
                        </li>
                        <li>
                            <div class="icon_box">
                                <img class="thumb" src="img/sub/002.jpg" alt="" />
                            </div>
                            <div class="font fsz_12 fw_md fcl_main  has_font_spacer_b_16 ">
                                Step. 2
                            </div>
                            <div class="font fsz_22 ff_gf fcl_bold align_center">
                                인증만 하면
                            </div>
                        </li>
                        <li>
                            <div class="icon_box">
                                <img class="thumb" src="img/sub/003.jpg" alt="" />
                            </div>
                            <div class="font fsz_12 fw_md fcl_main  has_font_spacer_b_16 ">
                                Step. 3
                            </div>
                            <div class="font fsz_22 ff_gf fcl_bold align_center">
                                결제와 계좌등록 완료
                            </div>
                        </li>
                    </ul>
                </div>
            </article> -->

            <article class="">
                <div class="article_stripe"></div>
                <div class="tit_box__article width_limiter ">
                    <h3 class="main_tit__article">
                        카드정보 입력만으로 편리하게 카드등록
                    </h3>
                    <h4 class="sub_tit__article">
                        정기결제를 위한 카드등록은 쉽습니다. 사용자의 카드정보 입력으로 카드정보 확인과 함께 카드등록이 완료됩니다.
                    </h4>
                </div>
                <div class="width_limiter space_setter__article_content">
                    <div class="video_box has_frame">
                        <div class="ratio_setter_hd">
                            <iframe
                                width="1280"
                                height="720"
                                src="//www.youtube.com/embed/2ecOqK93-NE?VQ=HD720&autoplay=0&loop=1&rel=0&showinfo=0&controls= 0&enablejsapi=1&wmode=transparent&hd=1"
                                wmode="Opaque"
                                frameborder="0"
                                allowfullscreen=""
                            ></iframe>
                        </div>
                    </div>
                </div>
            </article>

            <article class="has_line">
                <div class="article_stripe"></div>
                <div class="tit_box__article width_limiter ">
                    <h3 class="main_tit__article">
                        적용화면
                    </h3>
                    <h4 class="sub_tit__article">
                        페이플 고객사에 실제 적용되어 있는 카드 정기결제 화면입니다.
                    </h4>
                </div>
                <div class="width_limiter space_setter__article_content dp_flex flc_nowrap flc_jc_center flc_al_center">
                    <div class="pc_frame">
                        <div class="ratio_setter">
                            <div class="img_frame">
                                <img class="res" src="img/main/frame_pc_header.svg" alt="" />
                            </div>
                            <div class="swiper-container slider_main_pc">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_pc_frame_02.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_pc_frame_03.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_pc_frame_04.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_pc_frame_05.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="device_list dp_flex flc_nowrap flc_jc_center flc_al_center">
                        <!-- <li class="tablet_land">
                                <div class="swiper-container slider_main_mo">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="res" src="img/main/slider_main_mo_frame_01.png" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="res" src="img/main/slider_main_mo_frame_02.png" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="res" src="img/main/slider_main_mo_frame_03.png" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="res" src="img/main/slider_main_mo_frame_04.png" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="res" src="img/main/slider_main_mo_frame_05.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        <li class="phone_big">
                            <div class="swiper-container slider_main_mo">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_mo_frame_02.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_mo_frame_03.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_mo_frame_04.png" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="res" src="img/main/slider_main_mo_frame_05.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="">
                <div class="article_stripe"></div>
                <div class="tit_box__article width_limiter ">
                    <h3 class="main_tit__article">
                        간편한 결제모듈 연동
                    </h3>
                    <h4 class="sub_tit__article">
                        페이플은 모든 개발환경을 지원하기 위해 자바스크립트 방식의 API를 제공합니다.
                    </h4>
                </div>
                <div class="width_limiter space_setter__article_content">
                    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/atelier-sulphurpool-dark.min.css" />
                    <!-- shades-of-purple, tomorrow-night-blue, tomorrow-night-eighties,atelier-sulphurpool-dark,dracula,night-owl -->
                    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
                    <div class="code_box">
                        <pre>
                            <code class="language-js"><!-- payple js 호출 -->
<script src="https://cpay.payple.kr/js/cpay.payple.1.0.1.js"></script>

<!-- 가맹점 주문페이지 '결제하기' 버튼 액션 -->
<script>
    $(document).ready(function() {
        $("#payAction").on("click", function(event) {
            var obj = new Object();

            obj.PCD_CPAY_VER = "1.0.1";
            obj.PCD_PAY_TYPE = "card";
            obj.PCD_PAY_WORK = pay_work;
            obj.PCD_CARD_VER = "01";

            PaypleCpayAuthCheck(obj);
            event.preventDefault();
        });
    });
</script></code>
                        </pre>
                        <div class="btn_box align_center">
                            <a
                                class="btn btn_md btn_rounded cl_info"
                                href="https://github.com/PAYPLECORP/manual_card"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="fa fa-github" aria-hidden="true"></i> API 문서 자세히 보기
                            </a>
                        </div>
                    </div>
                </div>

                <script>
    
                    document.querySelectorAll("code").forEach(function(element) {
                        element.innerHTML = element.innerHTML.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
                    });
                    hljs.initHighlightingOnLoad();
                                </script>
            </article>

            <article class="has_line">
                <div class="article_stripe"></div>

                <div class="tit_box__article width_limiter ">
                    <h3 class="main_tit__article">
                        다른 결제방식이 필요하신가요?
                        <!-- <img class="logo_in_text__lg" src="img/common/logo_full.svg" alt="" />
                        의 다양한 결제 방식을 확인해보세요. -->
                    </h3>
                    <h4 class="sub_tit__article">
                        페이플은 여러 분야, 다양한 방식의 결제에 대응하기 위한 다양한 서비스를 제공하고 있습니다.
                    </h4>
                </div>

                <div class="width_limiter space_setter__article_content main_introduce">
                    <div class="left_area__main_introduce">
                        <ul class="device_list tab_ctn_box_img_step">
                            <li class="phone_big">
                                <div class="area_setter">
                                    <div class="tab_ctn_img_step tab_ctn_img_step_info js_target_tab_ctn_img_step2_info">
                                        <div class="">
                                            <p class="font fsz_12 fcl_main has_font_spacer_b_12 align_center">
                                                필요한 결제방식을 선택해주세요.
                                            </p>
                                            <p class="font fsz_10 fcl_txt has_font_spacer_b_12 align_center">
                                                실제 사용된 예시를 살펴 보실수 있습니다.
                                            </p>
                                            <img class="res" src="img/main/info_tab_btn_box_step_2.svg" alt="" />
                                        </div>
                                    </div>
                                    <div class="tab_ctn_img_step js_target_tab_ctn_img_step_2 is_show_ani" depth="1_1">
                                        <img class="res" src="img/main/tab_ctn_img_step_001.png" alt="" />
                                    </div>
                                    <div class="tab_ctn_img_step js_target_tab_ctn_img_step_2" depth="1_2">
                                        <img class="res" src="img/main/tab_ctn_img_step_02.png" alt="" />
                                    </div>
                                    <div class="tab_ctn_img_step js_target_tab_ctn_img_step_2" depth="2_1">
                                        <img class="res" src="img/main/tab_ctn_img_step_03.png" alt="" />
                                    </div>
                                    <div class="tab_ctn_img_step js_target_tab_ctn_img_step_2" depth="2_2">
                                        <img class="res" src="img/main/tab_ctn_img_step_04.png" alt="" />
                                    </div>
                                    <div class="tab_ctn_img_step js_target_tab_ctn_img_step_2" depth="2_3">
                                        <img class="res" src="img/main/tab_ctn_img_step_05.png" alt="" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right_area__main_introduce">
                        <div class="card_stripe_thumbnail">
                            <div class="thumbnail cmz_card_payment"></div>
                            <div class="btn_box align_left tab_step_module">
                                <div class="tab_btn_box_step_2 js_frag_tab_btn_step_2 is_show_ani" kind="0">
                                    <div class="btn btn_sm btn_rounded cl_scs js_trigger_tab_btn_step_2" depth="1_1">
                                        정기결제
                                    </div>
                                    <div class="btn btn_sm btn_rounded js_trigger_tab_btn_step_2" depth="1_2">
                                        앱카드결제
                                    </div>
                                </div>
                                <div class="tab_btn_box_step_2 js_frag_tab_btn_step_2" kind="1">
                                    <div class="btn btn_sm btn_rounded js_trigger_tab_btn_step_2 " depth="2_1">
                                        정기결제
                                    </div>
                                    <div class="btn btn_sm btn_rounded js_trigger_tab_btn_step_2" depth="2_2">
                                        간편결제
                                    </div>
                                    <div class="btn btn_sm btn_rounded js_trigger_tab_btn_step_2" depth="2_3">
                                        일회성결제
                                    </div>
                                </div>
                                <div class="tab_btn_box_step_1">
                                    <div class="btn btn_md_sub btn_rounded js_trigger_tab_btn_step_1 cl_info" kind="0">
                                        카드결제
                                    </div>
                                    <div class="btn btn_md_sub btn_rounded js_trigger_tab_btn_step_1" kind="1">
                                        계좌이체
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $(".js_trigger_tab_btn_step_1").click(function() {
                                        var kd = $(this).attr("kind");
                                        //console.log(kd);
                                        if (!$(this).hasClass("cl_info")) {
                                            $(".js_trigger_tab_btn_step_1").removeClass("cl_info");
                                            $(".js_trigger_tab_btn_step_1")
                                                .eq(kd)
                                                .addClass("cl_info");
                                            $(".js_frag_tab_btn_step_2").removeClass("is_show_ani");
                                            $(".js_frag_tab_btn_step_2[kind=" + kd + "]").addClass("is_show_ani");
                                            $(".js_trigger_tab_btn_step_2").removeClass("cl_scs");
                                            $(".js_target_tab_ctn_step_2").removeClass("is_show_ani");
                                            $(".js_target_tab_ctn_step2_info").removeClass("is_show_ani");
                                            $(".js_target_tab_ctn_step2_info[kind=" + kd + "]").addClass("is_show_ani");
                                            $(".js_target_tab_ctn_img_step_2").removeClass("is_show_ani");
                                            $(".js_target_tab_ctn_img_step2_info").addClass("is_show_ani");
                                        } else {
                                        }
                                    });
                                    $(".js_trigger_tab_btn_step_2").click(function() {
                                        var dp = $(this).attr("depth");
                                        //console.log(dp);
                                        $(".js_target_tab_ctn_step2_info").removeClass("is_show_ani");
                                        $(".js_target_tab_ctn_img_step2_info").removeClass("is_show_ani");
                                        $(".js_trigger_tab_btn_step_2").removeClass("cl_scs");
                                        $(".js_trigger_tab_btn_step_2[depth=" + dp + "]").addClass("cl_scs");
                                        $(".js_target_tab_ctn_step_2").removeClass("is_show_ani");
                                        $(".js_target_tab_ctn_step_2[depth=" + dp + "]").addClass("is_show_ani");
                                        $(".js_target_tab_ctn_img_step_2").removeClass("is_show_ani");
                                        $(".js_target_tab_ctn_img_step_2[depth=" + dp + "]").addClass("is_show_ani");
                                    });
                                });
                            </script>
                            <div class="tab_ctn_box_step">
                                <div class="tab_ctn_step js_target_tab_ctn_step2_info" kind="0">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            <b class=" fcl_scs fsz_14 has_font_spacer_b_20">필요한 결제방식을 선택해주세요.</b><br />
                                            <b class="fcl_bold">정기결제</b><br />
                                            정기구독, 정기배송을 위한 결제입니다.<br />
                                            <b class="fcl_bold">앱카드결제</b><br />
                                            온라인 쇼핑몰을 위한 앱카드결제입니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step2_info" kind="1">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            <b class=" fcl_scs fsz_14 has_font_spacer_b_20">필요한 결제방식을 선택해주세요.</b><br />
                                            <b class="fcl_bold">정기결제</b><br />
                                            정기구독, 정기배송을 위한 결제입니다.<br />
                                            <b class="fcl_bold">간편결제</b><br />
                                            재방문 회원을 위한 비밀번호 간편결제입니다.<br />
                                            <b class="fcl_bold">일회성결제</b><br />
                                            공인인증서없는 실시간계좌이체입니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step_2 is_show_ani" depth="1_1">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            정기배송, 유료멤버십 서비스를 운영 중이신가요?<br />
                                            편리한 페이플 카드정기결제로 결제전환율을 높여보세요.<br />
                                            사용자가 최초 카드등록만 하면 모든 절차가 완료됩니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step_2" depth="1_2">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            정기결제와 함께 앱카드결제가 필요하신가요?<br />
                                            한 번의 결제모듈 연동개발로 정기결제, 앱카드결제 모두 도입이 가능합니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step_2" depth="2_1">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            정기배송, 유료멤버십 서비스를 운영 중이신가요?<br />
                                            편리한 페이플 계좌정기결제(자동이체)로 결제전환율을 높여보세요.<br />
                                            사용자가 최초 계좌등록만 하면 매월 사용자의 계좌에서 자동으로 출금됩니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step_2" depth="2_2">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            자체 간편결제가 필요하신가요? <br />
                                            페이플이 고객사만의 간편결제가 되어 드립니다.<br />
                                            고객사의 회원이 최초 계좌등록만 하면 이후에는 결제비밀번호만으로 결제가 완료됩니다.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab_ctn_step js_target_tab_ctn_step_2" depth="2_3">
                                    <div class="ctn_box">
                                        <p class="font fsz_12 fcl_txt ">
                                            PG의 실시간계좌이체는 너무 불편하시죠?<br />
                                            페이플 일회성 계좌이체는 앱 설치, 공인인증서가 필요없기 때문에 사용자가 편리하게 계좌이체로 결제할 수 있는
                                            서비스입니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>


        <script src="./js/common.js"></script>
        <script src="./js/sub.js"></script>
<?php include("include/footer.php");?>