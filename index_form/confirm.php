<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <title>Neo Career LP</title>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PJLQ9VQ');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS読込 -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pagetop.css">
    <link href="../js/slick.css" rel="stylesheet" type="text/css">
    <link href="../js/slick-theme.css" rel="stylesheet" type="text/css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="../css/base.css">

    <link rel="stylesheet" href="../css/main.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>
    try {
        Typekit.load({
            async: true
        });
    } catch (e) {}
    </script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="../js/jquery.easeScroll.js"></script>
    <!-- スムーススクロール -->
    <script type="text/javascript">
    $(function() {
        $('a[href^="#"]').on('click', function() {
            var speed = 1000;
            var href = $(this).attr('href');
            var target = $(href == '#' || href == '' ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({
                scrollTop: position
            }, speed, 'swing');
            return false;
        });
    });
    </script>

    <style id='base_val' type='text/css'></style>

    <style type='text/css'>
    table {
        margin: auto;
    }

    /*表示切替*/
    html body .view_pc {
        display: block !important;
    }

    html body table.view_pc {
        display: table !important;
    }

    html body table.view_pc tr {
        display: table !important;
    }

    html body table.view_pc th {
        display: table !important;
    }

    html body table.view_pc td {
        display: table !important;
    }

    html body .view_pctab {
        display: block !important;
    }

    html body table.view_pctab {
        display: table !important;
    }

    html body table.view_pctab tr {
        display: table !important;
    }

    html body table.view_pctab th {
        display: table !important;
    }

    html body table.view_pctab td {
        display: table !important;
    }

    html body .view_tab {
        display: none !important;
    }

    html body .view_sp {
        display: none !important;
    }

    html body .view_tabsp {
        display: none !important;
    }

    @media only screen and (max-width: 1050px) {
        html body .view_pc {
            display: none !important;
        }

        html body .view_pctab {
            display: block !important;
        }

        html body table.view_pctab {
            display: table !important;
        }

        html body table.view_pctab tr {
            display: table !important;
        }

        html body table.view_pctab th {
            display: table !important;
        }

        html body table.view_pctab td {
            display: table !important;
        }

        html body .view_tab {
            display: block !important;
        }

        html body table.view_tab {
            display: table !important;
        }

        html body table.view_tab tr {
            display: table !important;
        }

        html body table.view_tab th {
            display: table !important;
        }

        html body table.view_tab td {
            display: table !important;
        }

        html body .view_sp {
            display: none !important;
        }

        html body .view_tabsp {
            display: block !important;
        }

        html body table.view_tabsp {
            display: table !important;
        }

        html body table.view_tabsp tr {
            display: table !important;
        }

        html body table.view_tabsp th {
            display: table !important;
        }

        html body table.view_tabsp td {
            display: table !important;
        }
    }

    @media only screen and (max-width: 770px) {
        html body .view_pc {
            display: none !important;
        }

        html body .view_pctab {
            display: none !important;
        }

        html body .view_tab {
            display: none !important;
        }

        html body .view_sp {
            display: block !important;
        }

        html body table.view_sp {
            display: table !important;
        }

        html body table.view_sp tr {
            display: table !important;
        }

        html body table.view_sp th {
            display: table !important;
        }

        html body table.view_sp td {
            display: table !important;
        }

        html body .view_tabsp {
            display: block !important;
        }

        html body table.view_tabsp {
            display: table !important;
        }

        html body table.view_tabsp tr {
            display: table !important;
        }

        html body table.view_tabsp th {
            display: table !important;
        }

        html body table.view_tabsp td {
            display: table !important;
        }
    }

    /* エラーメッセージ　赤文字設定 */
    .error_msg {
        color: #ff2e5a !important;
    }
    </style>

    <style type='text/css'>
    @font-face {
        font-family: 'noto_demilight';
        src: url(../assets/css/fonts/NotoSansCJKjp-DemiLight.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_regular';
        src: url(../assets/css/fonts/NotoSansCJKjp-Regular.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_bold';
        src: url(../assets/css/fonts/NotoSansJP-Bold.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_light';
        src: url(../assets/css/fonts/NotoSansJP-Light.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_medium';
        src: url(../assets/css/fonts/NotoSansJP-Medium.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_black';
        src: url(../assets/css/fonts/NotoSansJP-Black.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'co_regular';
        src: url(../assets/css/fonts/CoTextCorp-Regular.ttf);
        font-style: normal;
    }

    .noto_demilight {
        font-family: 'noto_demilight';
    }

    .noto_regular {
        font-family: 'noto_regular';
    }

    .noto_bold {
        font-family: 'noto_bold';
    }

    .noto_light {
        font-family: 'noto_light';
    }

    .noto_medium {
        font-family: 'noto_medium';
    }

    .noto_black {
        font-family: 'noto_black';
    }

    .co_regular {
        font-family: 'co_regular';
    }

    .flex_start {
        align-items: flex-start;
    }

    .inline_block {
        display: inline-block;
    }

    .mg_auto {
        margin: 0 auto;
    }

    .txt_mg_0 {
        margin: 0;
    }

    .txt_p_0 {
        padding: 0;
    }

    .txt_pd_l_foot {
        padding-left: 1.1vw;
    }

    .txt_deco {
        text-decoration: none;
    }

    .bg_wht_grey {
        background-color: #f5f5f5;
    }

    .u_line_d_grey {
        border-bottom: solid 1px #475160;
    }

    .u_line_top_d_grey {
        border-top: solid 1px #475160;
    }

    .u_line_right_d_grey {
        border-right: solid 2px #475160;
    }

    .undrag {
        user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .txt_main_color {
        color: #3a3327;
    }

    .txt_main_color_2 {
        color: #0c2e9f;
    }

    .relative {
        position: relative;
    }
    </style>

    <!-- CUSTOM STYLE -->
    <style>
    table {
        width: 100%;
    }

    th {
        background: #0C2E9F;
        color: #fff;
        /* padding: 24px 70px; */
    }


    td {
        background: #F5F5F5;
        /* padding: 10px 30px; */
        color: #0c2e9f;
    }

    .row-1 {
        background: none;
        padding: 0;
        width: 40%;
    }

    .row-2 {
        background: none;
        color: #3a3327;
        padding: 0;
    }

    tr:not(:last-child) {
        border-bottom: 1px solid #3a3327;
    }



    .accordion-container {
        position: relative;
        background: #fff;
    }

    .accordion-container>h2 {
        text-align: center;
        color: #fff;
        padding-bottom: 5px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    .accordion_item>a {
        position: relative;
        width: 100%;
        height: auto;
        color: #0C2E9F;
    }

    .accordion_item>a i {
        float: right;
        margin-top: 2px;
    }

    /* .accordion_item>a.active {
            background-color: #0C2E9F;
            color: #fff;
        } */

    .content {
        background-color: #fff;
        display: none;

    }

    .content p {
        margin: 0;
    }

    /* .fa-plus:before {
            content: "\f067";
            color: #0C2E9F;
        }

        .fa-minus:before {
            color: #fff;
        } */

    .fa-plus:before {
        color: #3c93c1;
    }

    .fa-minus:before {
        color: #3c93c1;
    }

    .box {
        position: relative;
    }

    .box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 10px;
        padding: 3px;
        background: linear-gradient(90deg, #4388cb, #31a5b0);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
    }

    @media only screen and (max-width: 770px) {
        .sect_17 .wrapper_85 {
            width: 100% !important;
            display: block;
            float: none !important;
            clear: both !important;
        }

        .sect_17 .width_75.f_sub.full_width {
            width: 100% !important;
        }

        .sect_17 .width_35 {
            width: 49.4% !important;
        }

        .sect_17 .width_20 {
            width: 29.4% !important;
        }

        .sect_17 .sclt {
            width: 50% !important;
        }

        .sect_17 .width_75.f_sub.area {
            width: 100% !important;
        }

        .sect_17 .square_btn {
            width: 75% !important;
        }
    }
    </style>

    <link rel="stylesheet" href="../css/sp.css">
</head>

<body>

    <!-- Header -->
    <header>
        <!-- PC -->
        <div class="view_pc">
            <div class="width_100 relative txt_tpad_1 txt_bpad_1 bspace_05">
                <div class="cont_wrapper_70">
                    <div class="width_100 flex flex_center" style="justify-content: flex-start;">
                        <div class="width_20 txt_bpad_05">
                            <a href="index.html" class="" style="display: block;">
                                <div class="width_90 mg_auto">
                                    <img src="../img/header/sym_state_ja_color_po_L.png" alt="" class="fix_zoom undrag">
                                </div>
                            </a>
                        </div>
                        <div class="bg_img width_31 square_btn">
                            <a href="#">
                                <img src="../img/header/bg_header.png" alt="" class="fix_zoom undrag">
                                <p class="tl_50 noto_black font_75 white width_100">24時間受付中！<span class="noto_black"
                                        style="color: #f0e002;">無料</span>相談・資料請求はこちら &nbsp;▶</p>
                            </a>
                        </div>
                        <div class="lspace_05 rspace_05">
                            <p class="noto_bold font_100">電話お問い合わせ</p>
                        </div>
                        <div class="rspace_05">
                            <p class="noto_bold font_100" style="color: #21bddb;">03-6756-0420</p>
                        </div>
                        <div>
                            <p class="noto_bold font_100"> | 平日：10：00～18：00</p>
                        </div>
                    </div>
                    <div class="width_100">
                        <div class="width_100 flex flex_center">
                            <div class="flex flex_center">
                                <a href="#活用ケース" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        ご提供tサービス
                                    </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#当社の強み" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        企業が抱える課題 </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#導入イメージ" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        こんなお悩みを解決できます</p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#料金" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        ネオキャリアの強み </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#導入事例" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        選ばれる理由 </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#よくある質問" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        採用成功事例</p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="#補助金概要" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        よくあるご質問</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOBILE -->
        <div class="view_tabsp fixed_top" style=" z-index: 1000000;">
            <div class="bg_white" style="border-bottom: 3px solid #cbcbcb;">
                <div class="flex flex_center" style="justify-content: space-between;">
                    <div class="width_30 txt_lpad_2">
                        <a href="index.html" class="width_95 mg_auto">
                            <img class="fix_zoom" src="../img/header/sym_state_ja_color_po_L.png" alt="">
                        </a>
                    </div>

                    <div class="width_25">
                    </div>

                    <div class="width_13" style="border-left: 2px solid #cbcbcb; border-right: 2px solid #cbcbcb;">
                        <div class="width_60 txt_tpad_2 txt_bpad_2 mg_auto">
                            <img src="../img/header/mail.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_bold" style="color: #00a3e0; position: relative; top: 1vw;">MAIL</p>
                        </div>
                    </div>

                    <div class="width_10 txt_rpad_1">
                        <div class="width_25 txt_tpad_2 txt_bpad_2 mg_auto">
                            <img src="../img/header/telephon.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_bold" style="color: #00a3e0; position: relative; top: 1.4vw;">TEL</p>
                        </div>
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="width_15" style="background-color: #00a3e0; height: 18vw;">
                        <div class="width_70">
                            <div class="width_100 relative txt_center button_container block flex flex_center"
                                id="toggle" style=" z-index:152;">
                                <div>
                                    <span class="top width_100 mg_auto" style="left: 2vw; top: 5vw;"></span>
                                    <span class="middle width_100 mg_auto" style="left: 2vw; top: 7vw;"></span>
                                    <span class="bottom width_100 mg_auto" style="left: 2vw; top: 9vw;"></span>
                                    <div class="nav_menu"></div>
                                    <p class="font_75 noto_bold white"
                                        style="position: relative; top: 11vw; left: 2vw;">
                                        MENU
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay Menu Open -->
            <div class="overlay" id="overlay" style="z-index:150; overflow-y: scroll; height: 100vh !important;">
                <nav class="overlay-menu">
                    <ul class="width_100 mg_auto flex flex_center">
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#活用ケース"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 5px;">ご提供サービス</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#当社の強み"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 5px;">企業が抱える課題</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center bold"
                                onclick="close_menu();" href="#導入イメージ"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 5px;">こんなお悩みを解決できます</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#料金"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 5px;">ネオキャリアの強み</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#導入事例"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 5px;">選ばれる理由</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#よくある質問"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 5px;">採用成功事例</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="#補助金概要"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 5px;">よくあるご質問</span></a>
                            <div class="space_1"></div>
                        </li>
                    </ul>

                </nav>
            </div>

        </div>
    </header>

    <main>

        <!-- Side Bar Button -->

        <div class="view_pc">
            <div class="bg_img">
                <div class="width_13" style="position: fixed; top: 50%; z-index: 9999; right: 0;">
                    <div class="tr_0" style="z-index: 150;">
                        <div class="width_100">
                            <a href="#"> <img src="../img/sidebar/side_1.png" alt="" class="fix_zoom undrag">
                            </a>
                        </div>
                        <div class="space_05"></div>
                        <div class="width_100">
                            <a href="#"> <img src="../img/sidebar/side_2.png" alt="" class="fix_zoom undrag">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <section class="sect_1">
            <div class="view_pc">
                <div class="wrapper_100 bg_img">
                    <img src="../img/sect_1/main_img.png" alt="" class="fix_zoom undrag">

                    <div class="t50_r0 width_31" style="top: 73.5%; right: 8%;">
                        <div class="bg_img square_btn">
                            <a href="#">
                                <img src="../img/sect_4/bg_btn.png" alt="" class="fix_zoom undrag">
                                <div class="tl_50 width_100">
                                    <div class="flex flex_center bg_img" style="justify-content: center;">
                                        <div>
                                            <p class="noto_regular font_100 white">お気軽にご相談ください</p>
                                            <p class="noto_black font_125 white"><span class="noto_black font_125"
                                                    style="color: #f5fe00">無料</span>相談・資料請求はこちら </p>
                                        </div>
                                        <div class="t50_r0" style="right: 6%;">
                                            <p class="white font_100">▶</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_tabsp">
                <div class="space_5"></div>
                <div class="space_4"></div>
                <div class="wrapper_100 bg_img">
                    <img src="../img/sect_1/main_img_sp.png" alt="" class="fix_zoom undrag">
                    <div class="t0_l50 width_81" style="top: 85.2%; right: 8%;">
                        <div class="bg_img square_btn">
                            <a href="#">
                                <img src="../img/sect_4/bg_btn.png" alt="" class="fix_zoom undrag">
                                <div class="tl_50 width_100">
                                    <div class="flex flex_center bg_img" style="justify-content: center;">
                                        <div>
                                            <p class="noto_regular font_75 white">お気軽にご相談ください</p>
                                            <p class="noto_black font_100 white"><span class="noto_black font_125"
                                                    style="color: #f5fe00">無料</span>相談・資料請求はこちら </p>
                                        </div>
                                        <div class="t50_r0" style="right: 6%;">
                                            <p class="white font_100">▶</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="sect_2">
            <div class="view_pc">
                <div class="wrapper_95">
                    <div class="space_4"></div>
                    <p class="font_150 noto_black txt_bpad_1 txt_center">多くの企業様に<span class="font_150 noto_black"
                            style="color: #31a5b0; ">導入</span>いただいております。</p>
                    <hr class="hr_1 wrapper_5 box_radius_15" style=" border-top: 4px solid #31a5b0;">
                </div>
                <div class="space_4"></div>
                <div class="flex wrapper_100" style="justify-content: center;">
                    <div class="width_15">
                        <img src="../img/sect_2/SBI.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/fullcast.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/JFE.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/Layers.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/WDB.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_5">
                        <img src="../img/sect_2/animal-icon.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/systena.png" alt="" class="fix_zoom undrag">
                    </div>
                </div>
                <div class="space_2"></div>
                <div class="flex wrapper_100" style="justify-content: center;">
                    <div class="width_3">
                        <img src="../img/sect_2/open_house.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/qz.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/arimino.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_4">
                        <img src="../img/sect_2/nishikawa.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_5">
                        <img src="../img/sect_2/fujiya.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/asante.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_10">
                        <img src="../img/sect_2/toa.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_10">
                        <img src="../img/sect_2/kose.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="width_15">
                        <img src="../img/sect_2/krosake.png" alt="" class="fix_zoom undrag">
                    </div>
                </div>
            </div>
            <!-- Tabsp -->
            <div class="view_tabsp">
                <div class="wrapper_95">
                    <div class="space_4"></div>
                    <p class="font_150 noto_black txt_bpad_1 txt_center">多くの企業様に<span class="font_150 noto_black"
                            style="color: #31a5b0; ">導入</span><br>いただいております。</p>
                    <hr class="hr_1 wrapper_25 box_radius_15" style=" border-top: 4px solid #31a5b0;">
                </div>
                <div class="space_4"></div>
                <div class="wrapper_100">
                    <div class="width_100 txt_lpad_05 txt_rpad_05">
                        <img src="../img/sect_2/icon_sp.png" alt="" class="fix_zoom undrag">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="sect_3">
            <div class="view_pc">
                <div class="space_4"></div>
                <div class="wrapper_100">
                    <div class="txt_tpad_2 txt_bpad_2" style="background-color: #f4fbff;">
                        <p class="font_150 noto_black txt_center">ネオキャリアでは業種や業態・採用ターゲットにあわせて、<br>
                            <span class="font_200 noto_black txt_center" style="color: #31a5b0;">最適な採用手法をご案内</span>いたします
                        </p>
                    </div>
                </div>
                <div class="space_2"></div>
                <div class="cont_wrapper_70">
                    <div class="flex">
                        <div class="width_45" style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                            <p class="white noto_black font_150 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 txt_center"
                                style="background-color: #31a5b0;">当社に相談いただくメリット❶</p>
                            <p class="noto_bold font_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1">
                                プロの目線で貴社の隠れた採用課題を発見し、<br>
                                最適な手法のアドバイスをします。</p>
                            <img src="../img/sect_3/19221.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_regular txt_left txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1">
                                自社で採用を考える場合、過去の採用実績をもとに媒体選定や評
                                判を頼りに手法選定を行い、採用活動をすすめることが多いので
                                はないでしょうか？<br>
                                しかし、その年に採用したい人材を過去の採用実績のある手段で
                                集められるとは限りません。<br>
                                年月の経過とともに若い人材はミレニアル世代からZ世代へと変
                                化していき、思考も変わっている中で、自社の新卒採用における
                                本当の課題もブレが生じていることも多くあります。<br>
                                ネオキャリアでは、まず企業様の本当の採用ニーズ、課題を精査
                                し、その時々に見合った採用手法・媒体をご紹介いたします。</p>
                        </div>
                        <div class="width_45" style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3">
                            <p class="white noto_black font_150 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 txt_center"
                                style="background-color: #31a5b0;">当社に相談いただくメリット❷</p>
                            <p class="noto_bold font_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1">
                                200を超える採用手法の中から、第三者目線で<br>
                                貴社にベストな採用手法をご案内します。</p>
                            <img src="../img/sect_3/Thumbs_up.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_regular txt_left txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1">
                                自社にあった採用手法を検討する場合、得られる情報は限定的で
                                ばらつきがあるため、厳密に同じ基準で比較することは困難です。<br> <br>

                                ネオキャリアでは、200を超える採用手法を保有しており、<br>
                                これまで10,000社を超える企業様の採用支援をさせて頂いた実績
                                から、企業様の課題を正確に把握し、ベストな採用手法をご納得
                                頂ける基準でご案内いたします。</p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <p class="txt_center noto_regular font_125">過去の採用経験や自社の実績に囚われてしまうと、貴社の採用を成功させる<br>
                        <span class="noto_black font_125" style="color: #31a5b0;">最適な手法を見失います。</span><br>
                        まずは、新卒採用のプロにお気軽にご相談ください。
                    </p>
                    <div class="space_2"></div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div class="space_4"></div>
                <div class="wrapper_100">
                    <div class="txt_tpad_2 txt_bpad_2" style="background-color: #f4fbff;">
                        <div class="wrapper_80">
                            <p class="font_125 noto_black txt_center">ネオキャリアでは業種や業態・採用ターゲットにあわせて、<br>
                                <span class="font_150 noto_black txt_center"
                                    style="color: #31a5b0;">最適な採用手法をご案内</span>いたします
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space_2"></div>
                <div class="cont_wrapper_70">
                    <div class="flex" style="flex-direction: column;">
                        <div class="width_100" style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                            <p class="white noto_black font_125 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 txt_center"
                                style="background-color: #31a5b0;">当社に相談いただくメリット❶</p>
                            <p class="noto_bold font_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1 txt_center">
                                プロの目線で貴社の隠れた採用課題を発見し、<br>
                                最適な手法のアドバイスをします。</p>
                            <img src="../img/sect_3/19221.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_regular txt_left txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2">
                                自社で採用を考える場合、過去の採用実績をもとに媒体選定や評
                                判を頼りに手法選定を行い、採用活動をすすめることが多いので
                                はないでしょうか？<br>
                                しかし、その年に採用したい人材を過去の採用実績のある手段で
                                集められるとは限りません。<br>
                                年月の経過とともに若い人材はミレニアル世代からZ世代へと変
                                化していき、思考も変わっている中で、自社の新卒採用における
                                本当の課題もブレが生じていることも多くあります。<br>
                                ネオキャリアでは、まず企業様の本当の採用ニーズ、課題を精査
                                し、その時々に見合った採用手法・媒体をご紹介いたします。</p>
                        </div>
                        <div class="space_2"></div>
                        <div class="width_100" style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3">
                            <p class="white noto_black font_125 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 txt_center"
                                style="background-color: #31a5b0;">当社に相談いただくメリット❷</p>
                            <p class="noto_bold font_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1 txt_center">
                                200を超える採用手法の中から、第三者目線で<br>
                                貴社にベストな採用手法をご案内します。</p>
                            <img src="../img/sect_3/Thumbs_up.png" alt="" class="fix_zoom undrag">
                            <p class="font_75 noto_regular txt_left txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2">
                                自社にあった採用手法を検討する場合、得られる情報は限定的で
                                ばらつきがあるため、厳密に同じ基準で比較することは困難です。<br> <br>

                                ネオキャリアでは、200を超える採用手法を保有しており、<br>
                                これまで10,000社を超える企業様の採用支援をさせて頂いた実績
                                から、企業様の課題を正確に把握し、ベストな採用手法をご納得
                                頂ける基準でご案内いたします。</p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <p class="txt_center noto_regular font_125">過去の採用経験や自社の実績に<br>囚われてしまうと、貴社の採用を<br>成功させる
                        <span class="noto_black font_125" style="color: #31a5b0;">最適な手法を見失います。</span><br>
                        まずは、新卒採用のプロにお気軽にご相談ください。
                    </p>
                    <div class="space_2"></div>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="sect_4">
            <div class="view_pc">
                <div class="txt_tpad_3 txt_bpad_3" style="background-color: #31a5b0;">
                    <div class="cont_wrapper_70">
                        <div class="flex flex_center">
                            <div class="width_45">
                                <p class="noto_black font_150 white txt_center">　＼今だけ！／<br>
                                    「新卒手法の選び方ガイド」贈呈</p>
                            </div>
                            <div class="width_45">
                                <div class="bg_img square_btn">
                                    <a href="#">
                                        <img src="../img/sect_4/bg_btn.png" alt="" class="fix_zoom undrag">
                                        <div class="tl_50 width_100">
                                            <p class="noto_black font_125 white"><span class="noto_black font_125"
                                                    style="color: #f5fe00">無料</span>相談・資料請求はこちら> ▶</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_tabsp">
                <div class="txt_tpad_3 txt_bpad_3" style="background-color: #31a5b0;">
                    <div class="cont_wrapper_70">
                        <div class="flex flex_center" style="flex-direction: column;">
                            <div class="width_100">
                                <p class="noto_black font_150 white txt_center">　＼今だけ！／<br>
                                    「新卒手法の選び方ガイド」贈呈</p>
                            </div>
                            <div class="space_2"></div>
                            <div class="bg_img square_btn">
                                <a href="#">
                                    <img src="../img/sect_4/bg_btn.png" alt="" class="fix_zoom undrag">
                                    <div class="tl_50 width_100">
                                        <div class="flex flex_center bg_img" style="justify-content: center;">
                                            <div>
                                                <p class="noto_regular font_100 white">お気軽にご相談ください</p>
                                                <p class="noto_black font_125 white"><span class="noto_black font_125"
                                                        style="color: #f5fe00">無料</span>相談・資料請求はこちら </p>
                                            </div>
                                            <div class="t50_r0" style="right: 6%;">
                                                <p class="white font_100">▶</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="sect_5">
            <div class="view_pc">
                <div style=" background-color: #f0f9ff;">
                    <div class="space_3"></div>
                    <div class="cont_wrapper_70">
                        <p class="txt_center"><span class="noto_black font_200">10,000社</span><span
                                class="noto_black font_150">の採用支援実績を活用し、貴社だけの</span><br>
                            <span class="noto_black font_200"
                                style="color: #31a5b0; line-height: 1;">新卒採用勝ちパターン</span><span
                                class="noto_black font_150">を形成</span>
                        </p>
                        <div class="space_2"></div>
                        <p class="font_100 noto_regular txt_center">新卒採用のトレンドを正しく把握。<br>
                            変わりゆく時代に対応し、貴社にとって最適なプランを提案する。<br>
                            それが新卒採用のプロフェッショナル、ネオキャリアが提供する新卒コンサルティングです。</p>
                        <div class="space_3"></div>

                        <div class="flex flex_center">
                            <div class="">
                                <img src="../img/sect_5/wifi.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/weighing.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/two_persons.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/pencil.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/group.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <div class="flex flex_center">
                            <div class="">
                                <img src="../img/sect_5/computer.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/shakehands.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/youtube.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/book.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="">
                                <img src="../img/sect_5/focus.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>

                        <div class="space_3"></div>
                    </div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div style=" background-color: #f0f9ff;">
                    <div class="space_3"></div>
                    <div class="cont_wrapper_70">
                        <p class="txt_center"><span class="noto_black font_150">10,000社</span><span
                                class="noto_black font_125">の採用支援実績を活用し、貴社だけの</span><br>
                            <span class="noto_black font_150"
                                style="color: #31a5b0; line-height: 1;">新卒採用勝ちパターン</span><span
                                class="noto_black font_125">を形成</span>
                        </p>
                        <div class="space_2"></div>
                        <p class="font_100 noto_regular txt_left">新卒採用のトレンドを正しく把握。<br>
                            変わりゆく時代に対応し、貴社にとって最適なプランを提案する。<br>
                            それが新卒採用のプロフェッショナル、ネオキャリアが提供する新卒コンサルティングです。</p>
                        <div class="space_3"></div>

                        <div class="flex flex_center" style="row-gap: 2vw;">
                            <div class="width_32">
                                <img src="../img/sect_5/wifi.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/weighing.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/two_persons.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/pencil.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/group.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/computer.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/shakehands.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/youtube.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/book.png" alt="" class="fix_zoom undrag">
                            </div>
                            <div class="width_32">
                                <img src="../img/sect_5/focus.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_1"></div>

                        <div class="space_3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6 -->
        <section class="sect_6">
            <div class="view_pc">
                <div class="space_4"></div>
                <div class="bg_white">
                    <div class="cont_wrapper_70">
                        <p class="noto_black font_150 txt_center">従来の採用手法に<span class="noto_black font_150"
                                style="color: #31a5b0;">固執</span>していませんか？</p>
                        <div class="space_1"></div>
                        <p class="noto_regular font_100 txt_center">インターンシップの定着、就活プラットフォームの増加、学生のニーズ多角化、<br>
                            採用活動のデジタル化など、従来のやり方にとらわれず、<br>
                            「変化」し見直していくことが求められています。</p>
                    </div>
                </div>
                <div class="space_4"></div>
                <div style="position: relative;">
                    <div style="background: linear-gradient(90deg, #ecf7fb 50%, #d9eef7 50%);">
                        <div class="cont_wrapper_70 txt_bpad_2 txt_tpad_2">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="width_48">
                                    <p class="noto_bold font_150 txt_bpad_1 txt_center" style="color: #68a1cd;">従来</p>
                                    <img src="../img/sect_6/img_1.png" alt="" class="fix_zoom undrag">
                                    <div class="space_2"></div>
                                    <p class="noto_bold font_100 txt_center">マスに対して告知を行い、大きな母集団を<br>
                                        形成することが当たり前だった。</p>
                                </div>
                                <div class="width_48">
                                    <p class="noto_bold font_150 txt_bpad_1 txt_center" style="color: #68a1cd;">現在</p>
                                    <img src="../img/sect_6/img_2.png" alt="" class="fix_zoom undrag">
                                    <div class="space_2"></div>
                                    <p class="noto_regular font_75 txt_center">プラットフォームの多様化により、学生の選択チャネルも変化！<br>
                                        従来のような大量母集団形成の採用活動施策は困難。</p>
                                    <p class="noto_black font_125" style="color: #408cc7;">新たな採用戦略の検討が必要です！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg_img">
                    <div class="t50_r0" style="width: 24.7%;">
                        <img src="../img/sect_6/bg-right.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="cont_wrapper_70">
                        <div class="space_4"></div>
                        <div class="flex flex_center">
                            <div class="width_50">
                                <p class="noto_regular font_75 txt_left line_h_200">このような時代に求められる採用活動は、採用要件を明確化し、<br>
                                    自社の強みを言語とクリエイティブで可視化させ、<br>
                                    的確に魅力づけを行う、といった広報的観点を<br>
                                    基盤とした戦略的な考え方です。
                                    <br><br>
                                </p>
                                <p class="noto_black font_100 txt_left">「強い採用ブランディング」のために…。</p>
                                <br>
                                <p class="noto_black font_125 txt_left" style="color: #408cc7;">
                                    本質的な企業力・採用力を高めていくことが、<br>
                                    これからの採用活動で <br>
                                    最も重要となるポイントです。</p>
                            </div>
                            <div class="width_50">
                                <img src="../img/sect_6/img_3.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_4"></div>
                    </div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div class="space_4"></div>
                <div class="bg_white">
                    <div class="cont_wrapper_70">
                        <p class="noto_black font_150 txt_center">従来の採用手法に<br><span class="noto_black font_150"
                                style="color: #31a5b0;">固執</span>していませんか？</p>
                        <div class="space_1"></div>
                        <p class="noto_regular font_100 txt_left">インターンシップの定着、就活プラットフォームの増加、学生のニーズ多角化、<br>
                            採用活動のデジタル化など、従来のやり方にとらわれず、<br>
                            「変化」し見直していくことが求められています。</p>
                    </div>
                </div>
                <div class="space_4"></div>
                <div style="position: relative;">
                    <div style="background: linear-gradient(180deg, #ecf7fb 50%, #d9eef7 50%);">
                        <div class="cont_wrapper_70 txt_bpad_2 txt_tpad_2">
                            <div class="flex" style="justify-content: space-between; flex-direction: column;">
                                <div class="width_100">
                                    <p class="noto_bold font_150 txt_bpad_1 txt_center" style="color: #68a1cd;">従来</p>
                                    <img src="../img/sect_6/img_1.png" alt="" class="fix_zoom undrag">
                                    <div class="space_2"></div>
                                    <p class="noto_bold font_100">マスに対して告知を行い、大きな母集団を<br>
                                        形成することが当たり前だった。</p>
                                </div>
                                <div class="width_100">
                                    <p class="noto_bold font_150 txt_bpad_1 txt_center txt_tpad_3"
                                        style="color: #68a1cd;">現在</p>
                                    <img src="../img/sect_6/img_2.png" alt="" class="fix_zoom undrag">
                                    <div class="space_2"></div>
                                    <p class="noto_regular font_75 txt_center">プラットフォームの多様化により、学生の選択チャネルも変化！<br>
                                        従来のような大量母集団形成の採用活動施策は困難。</p>
                                    <div class="space_3"></div>
                                    <!-- <p class="noto_black font_125" style="color: #408cc7;">新たな採用戦略の検討が必要です！</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg_img">
                    <div class="t50_r0 width_48" style="z-index: -150; top: 65%;">
                        <img src="../img/sect_6/bg-right.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="cont_wrapper_70">
                        <div class="space_4"></div>
                        <p class="noto_black font_125 txt_left" style="color: #408cc7;">
                            本質的な企業力・採用力を高めていくことが、
                            これからの採用活動で
                            最も重要となるポイントです。</p>
                        <div class="space_2"></div>
                        <div>
                            <div class="width_100">
                                <img src="../img/sect_6/img_3.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_4"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 7 -->
        <section class="sect_7">
            <div class="view_pc">
                <div style="background-color: #f0f9ff;">
                    <div class="cont_wrapper_70">
                        <div class="space_3"></div>
                        <p class="noto_black font_125 txt_center">このようなお悩みを<span class="noto_black font_125"
                                style="color: #31a5b0;">解決</span>できます</p>
                        <div class="space_2"></div>
                        <div class="flex">
                            <!-- Column 1 -->
                            <div class="width_48 bg_white box">
                                <div class="space_1"></div>
                                <div class="txt_lpad_2 txt_rpad_2">
                                    <p class="noto_black font_125 white box_radius_9999 txt_bpad_1 txt_tpad_1 txt_center"
                                        style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                        母集団形成がうまくいかない</p>
                                    <div class="wrapper_40 txt_tpad_1 txt_bpad_2">
                                        <img src="../img/sect_7/id_pic.png" alt="" class="fix_zoom undrag">
                                    </div>
                                    <!-- List 1 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">ナビサイトに出しても応募が来ない</p>
                                        </div>
                                    </div>
                                    <!-- List 2 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">インターンシップに人がt集まらない</p>
                                        </div>
                                    </div>
                                    <!-- List 3 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">自社に合った媒体を選定したいが全て試すのは
                                                不可能・・・</p>
                                        </div>
                                    </div>
                                    <!-- List 4 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">説明会に人が集まらない</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space_3"></div>
                            </div>
                            <!-- Column 2 -->
                            <div class="width_48 bg_white box">
                                <div class="space_1"></div>
                                <div class="txt_lpad_2 txt_rpad_2">
                                    <p class="noto_black font_125 white box_radius_9999 txt_bpad_1 txt_tpad_1 txt_center"
                                        style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                        内定承諾を得られない</p>
                                    <div class="wrapper_40 txt_tpad_1 txt_bpad_05">
                                        <img src="../img/sect_7/ng_pic.png" alt="" class="fix_zoom undrag">
                                    </div>
                                    <!-- List 1 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">選考辞退が多い</p>
                                        </div>
                                    </div>
                                    <!-- List 2 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">他社との差別化をどうアピールすればよいか
                                                わからない</p>
                                        </div>
                                    </div>
                                    <!-- List 3 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">最新の採用活動の方法や標準・トレンドがわか
                                                らない</p>
                                        </div>
                                    </div>
                                    <!-- List 4 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">入社までのフォローで何をすればいいかわから
                                                ない</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <div class="flex flex_center">
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="line_h_300 noto_black font_100 txt_center">採用担当者の<span
                                        class="noto_black font_100" style="color: #408cc7;">人t手不足</span></p>
                            </div>
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="line_h_300 noto_black font_100 txt_center">募集職種が多く<span
                                        class="noto_black font_100" style="color: #408cc7;">採用フローが複雑</span></p>
                            </div>
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="noto_black font_100 txt_center"><span class="noto_black font_100"
                                        style="color: #408cc7;">現状の課題</span><span class="noto_black font_100"
                                        style="color: #000;">がわからない<br>
                                        発見できていない</span></p>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <div class="flex flex_center">
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="noto_black font_100 txt_center"><span class="noto_black font_100"
                                        style="color: #000;">採用手法の変化に</span><br><span class="noto_black font_100"
                                        style="color: #408cc7;">対応できていない</span></p>
                            </div>
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="noto_black font_100 txt_center"><span class="noto_black font_100"
                                        style="color: #000;">ナビサイトやツールの</span><span class="noto_black font_100"
                                        style="color: #408cc7;">紹介だけでなく
                                        コンサルティングもお願いしたい</span></p>
                            </div>
                            <div class="width_32 box txt_tpad_2 txt_bpad_2 txt_lpad_05 txt_rpad_05">
                                <p class="noto_black font_100 txt_center"><span class="noto_black font_100"
                                        style="color: #000;">自社の課題の</span><br><span class="noto_black font_100"
                                        style="color: #408cc7;">要因分析</span><span class="noto_black font_100"
                                        style="color: #000;">をしたい</span></p>
                            </div>
                        </div>
                        <div class="space_3"></div>
                    </div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div style="background-color: #f0f9ff;">
                    <div class="cont_wrapper_70">
                        <div class="space_3"></div>
                        <p class="noto_black font_125 txt_center">このようなお悩みを<span class="noto_black font_125"
                                style="color: #31a5b0;">解決</span>できます</p>
                        <div class="space_2"></div>
                        <div class="flex" style="flex-direction: column;">
                            <!-- Column 1 -->
                            <div class="width_100 bg_white box">
                                <div class="space_1"></div>
                                <div class="txt_lpad_2 txt_rpad_2 txt_tpad_1">
                                    <p class="noto_black font_125 white box_radius_9999 txt_bpad_1 txt_tpad_1 txt_center"
                                        style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                        母集団形成がうまくいかない</p>
                                    <div class="wrapper_40 txt_tpad_1 txt_bpad_2">
                                        <img src="../img/sect_7/id_pic.png" alt="" class="fix_zoom undrag">
                                    </div>
                                    <!-- List 1 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">ナビサイトに出しても応募が来ない</p>
                                        </div>
                                    </div>
                                    <!-- List 2 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">インターンシップに人がt集まらない</p>
                                        </div>
                                    </div>
                                    <!-- List 3 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">自社に合った媒体を選定したいが全て試すのは
                                                不可能・・・</p>
                                        </div>
                                    </div>
                                    <!-- List 4 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">説明会に人が集まらない</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space_3"></div>
                            </div>
                            <div class="space_1"></div>
                            <!-- Column 2 -->
                            <div class="width_100 bg_white box">
                                <div class="space_1"></div>
                                <div class="txt_lpad_2 txt_rpad_2 txt_tpad_1 txt_bpad_1">
                                    <p class="noto_black font_125 white box_radius_9999 txt_bpad_1 txt_tpad_1 txt_center"
                                        style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                        内定承諾を得られない</p>
                                    <div class="wrapper_40 txt_tpad_1 txt_bpad_05">
                                        <img src="../img/sect_7/ng_pic.png" alt="" class="fix_zoom undrag">
                                    </div>
                                    <!-- List 1 -->
                                    <div class="flex flex_center txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">選考辞退が多い</p>
                                        </div>
                                    </div>
                                    <!-- List 2 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">他社との差別化をどうアピールすればよいか
                                                わからない</p>
                                        </div>
                                    </div>
                                    <!-- List 3 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="border-bottom: 2px solid #c5c5c5; justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">最新の採用活動の方法や標準・トレンドがわか
                                                らない</p>
                                        </div>
                                    </div>
                                    <!-- List 4 -->
                                    <div class="flex txt_lpad_05 txt_rpad_05 txt_bpad_05 txt_tpad_05"
                                        style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_4">
                                            <img src="../img/sect_7/check_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="txt_lpad_05 width_96">
                                            <p class="noto_regular font_100 txt_left">入社までのフォローで何をすればいいかわから
                                                ない</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <div class="flex flex_center" style="flex-direction: column;">
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="line_h_300 noto_black font_100 txt_left">採用担当者の<span
                                            class="noto_black font_100" style="color: #408cc7;">人t手不足</span></p>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="line_h_300 noto_black font_100 txt_left">募集職種が多く<span
                                            class="noto_black font_100" style="color: #408cc7;">採用フローが複雑</span></p>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="noto_black font_100 txt_left"><span class="noto_black font_100"
                                            style="color: #408cc7;">現状の課題</span><span class="noto_black font_100"
                                            style="color: #000;">がわからない
                                            発見できていない</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <div class="flex flex_center" style="flex-direction: column;">
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="noto_black font_100 txt_left"><span class="noto_black font_100"
                                            style="color: #000;">採用手法の変化に</span><span class="noto_black font_100"
                                            style="color: #408cc7;">対応できていない</span></p>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="noto_black font_100 txt_left"><span class="noto_black font_100"
                                            style="color: #000;">ナビサイトやツールの</span><span class="noto_black font_100"
                                            style="color: #408cc7;">紹介だけでなく
                                            コンサルティングもお願いしたい</span></p>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <div class="flex flex_center width_100 box txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_05"
                                style="justify-content: flex-start;">
                                <div class="width_4">
                                    <img src="../img/sect_7/check_icon_sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="width_96 txt_lpad_1">
                                    <p class="noto_black font_100 txt_left"><span class="noto_black font_100"
                                            style="color: #000;">自社の課題の</span><span class="noto_black font_100"
                                            style="color: #408cc7;">要因分析</span><span class="noto_black font_100"
                                            style="color: #000;">をしたい</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="space_3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8 -->
        <section class="sect_8">
            <div class="view_pc">
                <div
                    style="background-image: url('../img/sect_8/bg_img.png'); background-size: cover; background-repeat: no-repeat;">
                    <div class="cont_wrapper_70">
                        <div class="space_5"></div>
                        <div class="space_2"></div>
                        <p class="noto_black font_150 white txt_center">そんな<span class="noto_black font_150"
                                style="color: #fffc04;">課題</span>を<span class="noto_black font_150"
                                style="color: #fffc04;">抱えている</span>企業様は<br>
                            是非ネオキャリアにお任せください。</p>
                        <div class="space_2"></div>
                        <hr class="hr_1 wrapper_10" style="border-top: 3px solid #fff;">
                        <div class="space_2"></div>
                        <p class="noto_regular font_125 white txt_center">無数に存在する新卒採用手法の中から必要なものだけを選定し<br>
                            これらの課題を<span class="noto_bold" style="color: #fcff22;">すべて</span>解決することは至難の業です。</p>
                        <br>
                        <p class="noto_regular font_100 white txt_center">実績豊富な担当者が分析から対策までを貴社に寄り添って行い、<br>
                            全ての課題を解決する「トータルソリューション」を実現いたします。</p>


                        <div class="space_2"></div>
                        <div class="space_5"></div>
                    </div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div
                    style="background-image: url('../img/sect_8/bg_img.png'); background-size: cover; background-repeat: no-repeat;">
                    <div class="cont_wrapper_70">
                        <div class="space_5"></div>
                        <div class="space_2"></div>
                        <p class="noto_black font_150 white txt_center" style="font-size: 5.5vw !important;">そんな<span
                                class="noto_black font_150" style="color: #fffc04;">課題</span>を<span
                                class="noto_black font_150" style="color: #fffc04;">抱えている</span>企業様は<br>
                            是非ネオキャリアにお任せください。</p>
                        <div class="space_2"></div>
                        <hr class="hr_1 wrapper_25" style="border-top: 3px solid #fff;">
                        <div class="space_2"></div>
                        <p class="noto_regular font_125 white txt_left">無数に存在する新卒採用手法の中から必要なものだけを選定し<br>
                            これらの課題を<span class="noto_bold" style="color: #fcff22;">すべて</span>解決することは至難の業です。</p>
                        <br>
                        <p class="noto_regular font_100 white txt_left">実績豊富な担当者が分析から対策までを貴社に寄り添って行い、<br>
                            全ての課題を解決する「トータルソリューション」を実現いたします。</p>


                        <div class="space_2"></div>
                        <div class="space_5"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 9 -->
        <section class="sect_9">
            <div class="view_pc">
                <div class="space_3"></div>
                <div class="wrapper_100 bg_img">

                    <div class="width_50"
                        style="background-image: linear-gradient(to right, #34a1b4 , #418cc8); border-top-right-radius: 60px;">
                        <div class="space_4"></div>

                        <div class="txt_lpad_5 lspace_1">
                            <p class="white noto_black font_150 width_60 mg_auto txt_center"
                                style="border-bottom: 2px solid #fff;">
                                ネオキャリア7つのメソッドで</p>
                            <p class="white noto_black font_150 width_60 mg_auto line_h_200 txt_center"
                                style="border-bottom: 2px solid #fff;">
                                貴社だけの<span class="noto_black" style="color: #fffc04;">新卒採用</span></p>
                            <p class="white noto_black font_150 txt_center"><span class="noto_black"
                                    style="color: #fffc04;">勝ちパターン</span>を策定します</p>
                        </div>
                        <div class="space_4"></div>
                    </div>
                    <div class="cont_wrapper_70">
                        <div class="width_30 tr_0" style="right: 16%;">
                            <img src="../img/sect_9/circle_img.png" alt="" class="fix_zoom undrag">
                        </div>
                    </div>
                </div>
                <div class="space_25"></div>
                <div style="background-color: #deecf7; margin-top: -26vw;">
                    <div class="space_5"></div>

                    <p class="noto_black font_800 txt_left" style="color: #c5dbee;">7methods</p>

                    <div class="cont_wrapper_70">
                        <!-- Box 1 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05"
                                    style="padding: 0.7vw 0 !important;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon_mini.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #0cb9f6;">分析する
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">採用のプロがヒアリング・調査を行い、現状の経営課題や採用課題を
                                                分析。<br>
                                                貴社に合った改善計画に必要な情報を整理します。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #cff1fd;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                        <div class="width_48">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #0cb9f6; letter-spacing: 3px;">経営課題
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        組織能力の低下
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        人的生産性の低下
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        コスト増加
                                                    </p>
                                                    <p class="noto_regular font_75 txt_rpad_05 txt_right">etc…</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_48 txt_lpad_1">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #0cb9f6; letter-spacing: 3px;">経営課題
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        母集団不足
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        説明会会場不足
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #0cb9f6; font-size: 0.8vw;">●</span>
                                                        採用ノウハウ不足
                                                    </p>
                                                    <p class="noto_regular font_75 txt_rpad_05 txt_right">etc…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Box 1 End -->
                        <div class="space_1"></div>
                        <!-- Box 2 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon2.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon2_mini.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #6ed53b;">
                                                        集める
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">「ナビサイト」「イベント」「ダイレクトリクルーティング・スカ
                                                ウト」などの中から、貴社に合った方法を選定・組み合わせてより
                                                多くの学生を集めます。不特定多数を集めるだけではなく、貴社の
                                                採用ターゲットにマッチした学生へアプローチしやすい手法を選定
                                                することで、母集団形成をサポートいたします。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #dbf4ce; padding: 0.7vw 0;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                        <div class="width_32">
                                            <div class="width_100">
                                                <p class="white noto_black font_75 txt_tpad_05 txt_bpad_05 txt_center"
                                                    style="background-color: #6ed53b; letter-spacing: 3px; padding:
                                                    0.7vw 0 !important;">Web
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        各種ナビサイト
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        上位校メディア
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        Web広告
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        SNS広告
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_32">
                                            <div class="width_100">
                                                <p class="white noto_black font_75 txt_bpad_05 txt_tpad_05 txt_center"
                                                    style="background-color: #6ed53b; letter-spacing: 3px; padding:
                                                    0.7vw 0 !important;">イベント
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        ブース型
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        マッチング型
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        ターゲット型
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        オンライン型
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_32">
                                            <div class="width_100">
                                                <p class="white noto_black font_75 txt_center"
                                                    style="background-color: #6ed53b;">
                                                    ダイレクトリクルー<br>
                                                    ティング・スカウト
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        オファー型
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                        成果報酬送客<br><br>
                                                    <div class="space_1" style="height: 1.4vw !important;"></div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #acd598;">
                                <p class="noto_bold font_100 txt_center">（例）</p>
                            </div>
                            <div class="bg_white">
                                <div class="space_1"></div>
                                <div class="flex">
                                    <div class="width_32">
                                        <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05 txt_center"
                                            style="background-color: #44712d;">
                                            各種就職サイトの紹介・効果向上支援</p>
                                        <div class="wrapper_70 txt_tpad_1">
                                            <img src="../img/sect_9/img_1.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                            style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                            載をサポート。さtらに効果が最大になる
                                            掲載方法、設定などをコンサルティング
                                            いたします。</p>
                                    </div>
                                    <div class="width_32">
                                        <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05 txt_center"
                                            style="background-color: #44712d;">
                                            各種就職サイトの紹介・効果向上支援</p>
                                        <div class="wrapper_70 txt_tpad_1">
                                            <img src="../img/sect_9/img_2.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                            style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                            近年インターンシップが重要視される中
                                            で、参加する学生に響く内容づくりや参
                                            加者の増加に向けた施策を企業にあった
                                            方法でサポートいたします。</p>
                                    </div>
                                    <div class="width_32">
                                        <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05 txt_center"
                                            style="background-color: #44712d;">
                                            各種就職サイトの紹介・効果向上支援</p>
                                        <div class="wrapper_70 txt_tpad_1" style="padding-bottom: 1.7vw;">
                                            <img src="../img/sect_9/img_3.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                            style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                            ・ダイレクトリクルーティングを導入した
                                            　が、学生になかなか会えない・成果につ
                                            　ながらない<br>
                                            ・ダイレクトリクルーティングを導入予定だ
                                            　が、どうやっていいのかわからない<br>
                                            このような課題をお持ちの場合もぜひご相談
                                            ください。採用要件にマッチした人材と繋が
                                            るためのノウハウや手法をご提供いたします。</p>
                                    </div>

                                </div>
                                <div class="space_1"></div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <!-- Box 3 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05"
                                    style="padding: 0.8vw 0 !important;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon2.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon2-1.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #6ed53b;">
                                                        惹きつける
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">パンフレット、PR動画やWebサイトをはじめとした採用ツールを最
                                                適活用することで集めた学生たちにより多くの魅力を的確に伝えま
                                                す。軽い興味ではなくしっかりと惹きつけることで、貴社の求人に
                                                深い興味や関心を持つ母集団の形成が成功します。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #dbf4ce;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                        <div class="width_100">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #6ed53b; letter-spacing: 3px;">経営課題
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <div class="mg_auto width_40 txt_tpad_1 txt_bpad_2">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                            採用パンフレット
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                            採用動画、HP
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b; font-size: 0.8vw;">●</span>
                                                            合説装飾
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <!-- Box 4 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05"
                                    style="padding: 1.2vw 0 !important;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon3.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon3-pin.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #eb6d41;">
                                                        繋ぎとめる
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">貴社に応募・内定した学生へも、競合はあらゆる手段で自社の方が
                                                魅力的に見えるようにアピールを続けます。<br>
                                                獲得した内定者が他社に流れてしまわないよう、歩留り改善や内定
                                                者のフォローも徹底してサポートいたします。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #fadacf; padding: 1vw 0;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                        <div class="width_48">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #eb6d41; letter-spacing: 3px;">
                                                    歩留り改善
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #eb6d41; font-size: 0.8vw;">●</span>
                                                        LINE連動型採用管理<br>
                                                        <span class="noto_regular txt_lpad_1">システム（MOCHICA）</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_48 txt_lpad_1">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #eb6d41; letter-spacing: 3px;">
                                                    内定者フォロー
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #eb6d41; font-size: 0.8vw;">●</span>
                                                        内定者研修
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #eb6d41; font-size: 0.8vw;">●</span>
                                                        フォローツール
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <!-- Box 5 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05"
                                    style="padding: 1.2vw 0 !important;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon4.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon4-circle.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #748efd;">
                                                        見極める
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">応募者が本当に自社の採用方針にマッチした人材なのか、しっかり
                                                見極めることも重要です。<br>
                                                ネオキャリアでは面接官のトレーニングやリクルータートレーニン
                                                グなどの企画・運営や各種適性検査の選定を行うことで、見極めの
                                                精度向上に貢献しています。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #dce3fe; padding: 1vw 0;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                        <div class="width_48">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #748efd; letter-spacing: 3px;">
                                                    適性検査
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        Compass
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        アッテル
                                                    </p>
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        ダイヤモンドシリーズなど
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_48 txt_lpad_1">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #748efd; letter-spacing: 3px;">
                                                    研修サービス
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        面接官トレーニング・
                                                        　リクルータートレーニ
                                                        　ングなどの企画・運営
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <!-- Box 6 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 bg_white txt_tpad_05 txt_bpad_05"
                                    style="padding: 1.2vw 0 !important;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon4.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon4-light.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #748efd;">
                                                        採用力の向上
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">貴社に適切な手法を提示するだけでなく、根本的な「採用力向上」
                                                のサポートをいたします。<br>
                                                人員不足を解消するために、採用業務全体のアウトソーシングサー
                                                ビスの提供や、第三者視点によるコンサルティングで貴社の採用活
                                                動における問題点を抽出し、改善いたします。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #dce3fe; padding: 1vw 0;">
                                    <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                        <div class="width_48">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #748efd;">
                                                    採用アウトソーシング
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        カスタマイズ可能な<br>
                                                        　採用業務全般のアウ<br>
                                                        　トソーシング
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="width_48 txt_lpad_1">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #748efd; letter-spacing: 3px;">
                                                    コンサルティング
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff; height: 7vw;">
                                                    <p class="noto_regular font_75 txt_left"><span
                                                            style="color: #748efd; font-size: 0.8vw;">●</span>
                                                        戦略設計からコンテン
                                                        　ツ制作まで、幅広くニ
                                                        　ーズに合わせたサービ
                                                        　ス提供が可能
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_1"></div>
                        <!-- Box 7 -->
                        <div style="border:2px solid #8b929f;">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="width_55 txt_tpad_05 txt_bpad_05"
                                    style="padding: 1.9vw 0 !important; background-color: #f2f1d0;">
                                    <div class="flex flex_center txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                        style="justify-content: flex-start;">
                                        <div class="width_18">
                                            <img src="../img/sect_9/left_icon5.png" alt="" class="fix_zoom undrag">
                                        </div>
                                        <div class="width_82 txt_lpad_1">
                                            <div class="flex flex_center" style="justify-content: flex-start;">
                                                <div class="width_7 txt_bpad_05">
                                                    <img src="../img/sect_9/left_icon5-flag.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="width_93 txt_lpad_05">
                                                    <p class="txt_left noto_black font_150" style="color: #ff5d5d;">
                                                        支援する
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="txt_left noto_regular font_75">各種ツールやプラットフォームを導入・実施するまでの支援はもち
                                                ろん、採用活動結果の短期的な振り返りや、入社までのフォローな
                                                ど、採用活動終了までを丁寧にサポートいたします。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="width_45" style="background-color: #f5d5bd; padding: 1vw 0;">
                                    <div class="flex txt_lpad_2 txt_rpad_2">
                                        <div class="width_100">
                                            <div class="width_100">
                                                <p class="white noto_black font_100 txt_center"
                                                    style="background-color: #ff5d5d;">
                                                    導入完了～入社までを継続的に支援
                                                </p>
                                                <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                    style="background-color: #fff;">
                                                    <div class="mg_auto width_70 txt_tpad_05 txt_bpad_05">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #ff5d5d; font-size: 0.8vw;">●</span>
                                                            商材導入に関する進捗管理
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #ff5d5d; font-size: 0.8vw;">●</span>
                                                            導入効果の短期的な振り返り
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #ff5d5d; font-size: 0.8vw;">●</span>
                                                            新たな課題の抽出と対応策の検討
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #ff5d5d; font-size: 0.8vw;">●</span>
                                                            対応策の進捗確認
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #ff5d5d; font-size: 0.8vw;">●</span>
                                                            入社までの継続的なフォロー
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space_3"></div>
                </div>
            </div>
            <!-- tabsp -->
            <div class="view_tabsp">
                <div style="background-color: #deecf7;">
                    <div class="space_3"></div>
                    <div class="wrapper_100 bg_img">
                        <div class="width_70"
                            style="background-image: linear-gradient(to right, #34a1b4 , #418cc8); border-top-right-radius: 60px;">
                            <div class="space_4"></div>
                            <div>
                                <p class="white noto_black font_100 width_95 mg_auto txt_center"
                                    style="border-bottom: 2px solid #fff;">
                                    ネオキャリア7つのメソッドで</p>
                                <p class="white noto_black font_125 width_95 mg_auto line_h_200 txt_center"
                                    style="border-bottom: 2px solid #fff;">
                                    貴社だけの<span class="noto_black" style="color: #fffc04;">新卒採用</span></p>
                                <p class="white noto_black font_125 width_95 mg_auto txt_center"><span
                                        class="noto_black" style="color: #fffc04;">勝ちパターン</span>を策定します</p>
                            </div>
                            <div class="space_4"></div>
                        </div>
                        <div class="cont_wrapper_70">
                            <div class="width_100" style="margin-top: 30vw;">
                                <img src="../img/sect_9/circle_img.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="t0_l50" style="top: 25%;">
                            <p class="noto_black font_400 txt_left" style="color: #c5dbee; font-size: 19vw !important;">
                                7methods</p>
                        </div>
                    </div>
                    <div class="space_3"></div>
                    <div>
                        <div class="cont_wrapper_70">
                            <!-- Box 1 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05"
                                        style="padding: 0.7vw 0 !important;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_30" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_1.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon_mini.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #0cb9f6;">
                                                            分析する
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">採用のプロがヒアリング・調査を行い、現状の経営課題や採用課題を
                                                    分析。<br>
                                                    貴社に合った改善計画に必要な情報を整理します。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #cff1fd;">
                                        <div class="flex txt_tpad_2 txt_bpad_2 txt_lpad_2 txt_rpad_2">
                                            <div class="width_48">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #0cb9f6; letter-spacing: 3px;">経営課題
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            組織能力の低下
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            人的生産性の低下
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            コスト増加
                                                        </p>
                                                        <p class="noto_regular font_75 txt_rpad_05 txt_right">etc…</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_48 txt_lpad_1">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #0cb9f6; letter-spacing: 3px;">経営課題
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            母集団不足
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            説明会会場不足
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #0cb9f6;">●</span>
                                                            採用ノウハウ不足
                                                        </p>
                                                        <p class="noto_regular font_75 txt_rpad_05 txt_right">etc…</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Box 1 End -->
                            <div class="space_5"></div>
                            <!-- Box 2 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_30" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_2.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon2_mini.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #6ed53b;">
                                                            集める
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">「ナビサイト」「イベント」「ダイレクトリクルーティング・スカ
                                                    ウト」などの中から、貴社に合った方法を選定・組み合わせてより
                                                    多くの学生を集めます。不特定多数を集めるだけではなく、貴社の
                                                    採用ターゲットにマッチした学生へアプローチしやすい手法を選定
                                                    することで、母集団形成をサポートいたします。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #dbf4ce; padding: 0.7vw 0;">
                                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                            <div class="width_32">
                                                <div class="width_100">
                                                    <p class="white noto_black font_75 txt_tpad_05 txt_bpad_05 txt_center"
                                                        style="background-color: #6ed53b; letter-spacing: 3px; padding:
                                                    2.1vw 0 !important;">Web
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            各種ナビサイト
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            上位校メディア
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            Web広告
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            SNS広告
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_32">
                                                <div class="width_100">
                                                    <p class="white noto_black font_75 txt_bpad_05 txt_tpad_05 txt_center"
                                                        style="background-color: #6ed53b; letter-spacing: 3px; padding:
                                                    2.1vw 0 !important;">イベント
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            ブース型
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            マッチング型
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            ターゲット型
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            オンライン型
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_32">
                                                <div class="width_100">
                                                    <p class="white noto_black font_75 txt_center"
                                                        style="background-color: #6ed53b;">
                                                        ダイレクトリクルー<br>
                                                        ティング・スカウト
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05" style="background-color: #fff; padding-bottom: 4.6vw
                                                        !important;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            オファー型
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #6ed53b;">●</span>
                                                            成果報酬送客<br><br>
                                                        <div class="space_1" style="height: 1.4vw !important;">
                                                        </div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div style="background-color: #acd598;">
                                    <p class="noto_bold font_100">（例）</p>
                                </div> -->
                                <!-- <div class="bg_white">
                                    <div class="space_1"></div>
                                    <div class="flex">
                                        <div class="width_32">
                                            <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05"
                                                style="background-color: #44712d;">
                                                各種就職サイトの紹介・効果向上支援</p>
                                            <div class="wrapper_70 txt_tpad_1">
                                                <img src="img/sect_9/img_1.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                                style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                                載をサポート。さtらに効果が最大になる
                                                掲載方法、設定などをコンサルティング
                                                いたします。</p>
                                        </div>
                                        <div class="width_32">
                                            <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05"
                                                style="background-color: #44712d;">
                                                各種就職サイトの紹介・効果向上支援</p>
                                            <div class="wrapper_70 txt_tpad_1">
                                                <img src="img/sect_9/img_2.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                                style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                                近年インターンシップが重要視される中
                                                で、参加する学生に響く内容づくりや参
                                                加者の増加に向けた施策を企業にあった
                                                方法でサポートいたします。</p>
                                        </div>
                                        <div class="width_32">
                                            <p class="noto_black font_100 white box_radius_25 txt_tpad_05 txt_bpad_05"
                                                style="background-color: #44712d;">
                                                各種就職サイトの紹介・効果向上支援</p>
                                            <div class="wrapper_70 txt_tpad_1" style="padding-bottom: 1.7vw;">
                                                <img src="img/sect_9/img_3.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <p class="txt_left noto_regular font_75 txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1"
                                                style="background-color: #f2f2f2; height: 12vw;">マイナビなどの大規模ナビサイトへの掲
                                                ・ダイレクトリクルーティングを導入した
                                                　が、学生になかなか会えない・成果につ
                                                　ながらない<br>
                                                ・ダイレクトリクルーティングを導入予定だ
                                                　が、どうやっていいのかわからない<br>
                                                このような課題をお持ちの場合もぜひご相談
                                                ください。採用要件にマッチした人材と繋が
                                                るためのノウハウや手法をご提供いたします。</p>
                                        </div>

                                    </div>
                                    <div class="space_1"></div>
                                </div> -->
                            </div>
                            <div class="space_5"></div>
                            <!-- Box 3 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05"
                                        style="padding: 0.8vw 0 !important;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_30" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_2.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon2-1.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #6ed53b;">
                                                            惹きつける
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">
                                                    パンフレット、PR動画やWebサイトをはじめとした採用ツールを最
                                                    適活用することで集めた学生たちにより多くの魅力を的確に伝えま
                                                    す。軽い興味ではなくしっかりと惹きつけることで、貴社の求人に
                                                    深い興味や関心を持つ母集団の形成が成功します。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #dbf4ce;">
                                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                            <div class="width_100">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #6ed53b; letter-spacing: 3px;">経営課題
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <div class="mg_auto width_40 txt_tpad_1 txt_bpad_2">
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #6ed53b;">●</span>
                                                                採用パンフレット
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #6ed53b;">●</span>
                                                                採用動画、HP
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #6ed53b;">●</span>
                                                                合説装飾
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_5"></div>
                            <!-- Box 4 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05"
                                        style="padding: 1.2vw 0 !important;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_30" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_3.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon3-pin.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #eb6d41;">
                                                            繋ぎとめる
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">貴社に応募・内定した学生へも、競合はあらゆる手段で自社の方が
                                                    魅力的に見えるようにアピールを続けます。<br>
                                                    獲得した内定者が他社に流れてしまわないよう、歩留り改善や内定
                                                    者のフォローも徹底してサポートいたします。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #fadacf; padding: 1vw 0;">
                                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                            <div class="width_48">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #eb6d41; letter-spacing: 3px;">
                                                        歩留り改善
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #eb6d41;">●</span>
                                                            LINE連動型採用管理<br>
                                                            <span
                                                                class="noto_regular txt_lpad_1">システム（MOCHICA）<br><br><br></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_48 txt_lpad_1">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #eb6d41; letter-spacing: 3px;">
                                                        内定者フォロー
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #eb6d41;">●</span>
                                                            内定者研修
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #eb6d41;">●</span>
                                                            フォローツール<br><br><br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_5"></div>
                            <!-- Box 5 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05"
                                        style="padding: 1.2vw 0 !important;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_40" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_4.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon4-circle.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #748efd;">
                                                            見極める
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">応募者が本当に自社の採用方針にマッチした人材なのか、しっかり
                                                    見極めることも重要です。<br>
                                                    ネオキャリアでは面接官のトレーニングやリクルータートレーニン
                                                    グなどの企画・運営や各種適性検査の選定を行うことで、見極めの
                                                    精度向上に貢献しています。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #dce3fe; padding: 1vw 0;">
                                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                            <div class="width_48">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #748efd; letter-spacing: 3px;">
                                                        適性検査
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            Compass
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            アッテル
                                                        </p>
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            ダイヤモンドシリーズなど
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_48 txt_lpad_1">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #748efd; letter-spacing: 3px;">
                                                        研修サービス
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            面接官トレーニング・
                                                            　リクルータートレーニ
                                                            　ングなどの企画・運営
                                                            <br><br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_5"></div>
                            <!-- Box 6 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 bg_white txt_tpad_05 txt_bpad_05"
                                        style="padding: 1.2vw 0 !important;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_40" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_4.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon4-light.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #748efd;">
                                                            採用力の向上
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">貴社に適切な手法を提示するだけでなく、根本的な「採用力向上」
                                                    のサポートをいたします。<br>
                                                    人員不足を解消するために、採用業務全体のアウトソーシングサー
                                                    ビスの提供や、第三者視点によるコンサルティングで貴社の採用活
                                                    動における問題点を抽出し、改善いたします。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #dce3fe; padding: 1vw 0;">
                                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_2 txt_rpad_2">
                                            <div class="width_48">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #748efd;">
                                                        採用アウトソーシング
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            カスタマイズ可能な<br>
                                                            　採用業務全般のアウ<br>
                                                            　トソーシング<br><br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="width_48 txt_lpad_1">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #748efd; letter-spacing: 3px;">
                                                        コンサルティング
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <p class="noto_regular font_75 txt_left"><span
                                                                style="color: #748efd;">●</span>
                                                            戦略設計からコンテン
                                                            　ツ制作まで、幅広くニ
                                                            　ーズに合わせたサービ
                                                            　ス提供が可能
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_5"></div>
                            <!-- Box 7 -->
                            <div class="bg_img" style="border:2px solid #8b929f;">
                                <div>
                                    <div class="width_100 txt_tpad_05 txt_bpad_05"
                                        style="padding: 1.9vw 0 !important; background-color: #f2f1d0;">
                                        <div class="flex flex_center txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                            style="justify-content: flex-start;">
                                            <div class="tl_0 width_35" style="top: -6%; left: 4%;">
                                                <img src="../img/sect_9/icon_5.png" alt="" class="fix_zoom undrag">
                                            </div>
                                            <div class="width_82 txt_lpad_1">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_10 txt_bpad_05">
                                                        <img src="../img/sect_9/left_icon5-flag.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="width_90 txt_lpad_05">
                                                        <p class="txt_left noto_black font_150" style="color: #ff5d5d;">
                                                            支援する
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="txt_left noto_regular font_75">各種ツールやプラットフォームを導入・実施するまでの支援はもち
                                                    ろん、採用活動結果の短期的な振り返りや、入社までのフォローな
                                                    ど、採用活動終了までを丁寧にサポートいたします。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width_100" style="background-color: #f5d5bd; padding: 1vw 0;">
                                        <div class="flex txt_lpad_2 txt_rpad_2 txt_tpad_1 txt_bpad_1">
                                            <div class="width_100">
                                                <div class="width_100">
                                                    <p class="white noto_black font_100 txt_center"
                                                        style="background-color: #ff5d5d;">
                                                        導入完了～入社までを継続的に支援
                                                    </p>
                                                    <div class="txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                                        style="background-color: #fff;">
                                                        <div class="mg_auto width_70 txt_tpad_05 txt_bpad_05">
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #ff5d5d;">●</span>
                                                                商材導入に関する進捗管理
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #ff5d5d;">●</span>
                                                                導入効果の短期的な振り返り
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #ff5d5d;">●</span>
                                                                新たな課題の抽出と対応策の検討
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #ff5d5d;">●</span>
                                                                対応策の進捗確認
                                                            </p>
                                                            <p class="noto_regular font_75 txt_left"><span
                                                                    style="color: #ff5d5d;">●</span>
                                                                入社までの継続的なフォロー
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 10 -->
        <section class="sect_10">
            <!-- View PC -->
            <div class="view_pc">
                <div class="space_3"></div>
                <div class="cont_wrapper_70">
                    <p class="noto_black font_150 txt_center"><span class="noto_black"
                            style="color: #31a5b0;">業界トップクラス</span>、200を超える多彩な商材・手法の中から<br>
                        最適なプランニングをいたします。</p>
                    <div class="space_3"></div>
                    <!-- 1 -->
                    <div class="flex">
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos_2.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 2 -->
                    <div class="flex">
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos_3.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_80 mg_auto">
                                <img src="../img/sect_10/logos_4.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 3 -->
                    <div class="flex">
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_5.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_6.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 4 -->
                    <div class="flex">
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_90 mg_auto">
                                <img src="../img/sect_10/logos_7.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="width_48" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_8.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_3"></div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div class="space_3"></div>
                <div class="cont_wrapper_70">
                    <p class="noto_black font_150 txt_center"><span class="noto_black"
                            style="color: #31a5b0;">業界トップクラス</span>、200を超える多彩な商材・手法の中から<br>
                        最適なプランニングをいたします。</p>
                    <div class="space_3"></div>
                    <!-- 1 -->
                    <div class="flex">
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos_2.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 2 -->
                    <div class="flex">
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1">
                                <img src="../img/sect_10/logos_3.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_80 mg_auto">
                                <img src="../img/sect_10/logos_4.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 3 -->
                    <div class="flex">
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_5.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_6.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 4 -->
                    <div class="flex">
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">就職サイト</p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_90 mg_auto">
                                <img src="../img/sect_10/logos_7.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <div class="width_100" style="border: 2px solid #d0d0d0;">
                            <p class="noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_center"
                                style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                                ダイレクトリクルーティング
                            </p>
                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1 width_70 mg_auto">
                                <img src="../img/sect_10/logos_8.png" alt="" class="fix_zoom undrag">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_3"></div>
            </div>
        </section>

        <!-- Section 11 -->
        <section class="sect_11">
            <!-- View PC -->
            <div class="view_pc">
                <div style="background-color: #deecf7;">
                    <div class="space_4"></div>
                    <div class="cont_wrapper_70">
                        <p class="noto_black font_150 txt_center">支援実績<span class="noto_black"
                                style="color: #31a5b0;">10,000</span>社突破！<br>
                            ネオキャリアが選ばれる<span class="noto_black" style="color: #31a5b0;">3つの理由</span></p>
                        <div class="space_3"></div>
                        <div class="flex" style="justify-content: space-between;">
                            <!-- Column 1 -->
                            <div
                                class="bg_img width_32 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_05 txt_rpad_05 txt_tpad_05 txt_bpad_05"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">01</p>
                                </div>
                                <div class="space_2"></div>
                                <div class="wrapper_70">
                                    <img src="../img/sect_11/shakehand.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">ワンストップで新卒採用を<br>
                                    解決できる。</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left">求人広告や合同企業説明会だけではなく、<br>
                                    採用管理ツール、採用動画、採用パンフレ
                                    ット、採用アウトソーシング、送客サービ
                                    スなど新卒採用のありとあらゆる課題を一
                                    貫してサポートする体制が整っています。
                                    課題に合わせて最適なツールを導入できる
                                    点は他社にない強みです。</p>
                            </div>
                            <!-- Column 2 -->
                            <div
                                class="bg_img width_32 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_05 txt_rpad_05 txt_tpad_05 txt_bpad_05"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">02</p>
                                </div>
                                <div class="space_2"></div>
                                <div class="wrapper_20">
                                    <img src="../img/sect_11/book.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">商材数も<br>
                                    業界トップクラス</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left">課題に合わせ、最適な商材をご提案。<br>
                                    一社一社異なる課題に向き合います。<br>
                                    採用のエキスパートがコンサルティングを
                                    行い、200以上の商材の中から、時代と各
                                    企業に合った「一番成果を出せる商材の組
                                    み合わせ」をご提案いたします。
                                </p>
                            </div>
                            <!-- Column 3 -->
                            <div
                                class="bg_img width_32 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_05 txt_rpad_05 txt_tpad_05 txt_bpad_05"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">03</p>
                                </div>
                                <div class="space_2"></div>
                                <div class="wrapper_20">
                                    <img src="../img/sect_11/cup.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">新卒採用支援数、トップクラス<br>
                                    延べ10,000社以上の採用をご支援</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left">豊富な採用ノウハウがあるからできる採
                                    用力UPの秘訣をお伝えします。<br>
                                    少しのテクニックで（例えば求人広告の
                                    表記の仕方、オプションの使い方など）
                                    採用率を向上させます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space_4"></div>
                </div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div style="background-color: #deecf7;">
                    <div class="space_4"></div>
                    <div class="cont_wrapper_70">
                        <p class="noto_black font_150 txt_center">支援実績 <br><span class="noto_black"
                                style="color: #31a5b0;">10,000</span>社突破！<br>
                            ネオキャリアが選ばれる <br><span class="noto_black font_150" style="color: #31a5b0;">3つの理由</span></p>
                        <div class="space_3"></div>
                        <div class="flex" style="justify-content: space-between;">
                            <!-- Column 1 -->
                            <div
                                class="bg_img width_100 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">01</p>
                                </div>
                                <div class="space_5"></div>
                                <div class="wrapper_70">
                                    <img src="../img/sect_11/shakehand.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">ワンストップで新卒採用を
                                    解決できる。</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left txt_bpad_1">求人広告や合同企業説明会だけではなく、
                                    採用管理ツール、採用動画、採用パンフレ
                                    ット、採用アウトソーシング、送客サービ
                                    スなど新卒採用のありとあらゆる課題を一
                                    貫してサポートする体制が整っています。<br>
                                    課題に合わせて最適なツールを導入できる
                                    点は他社にない強みです。</p>
                            </div>
                            <div class="space_3"></div>
                            <!-- Column 2 -->
                            <div
                                class="bg_img width_100 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">02</p>
                                </div>
                                <div class="space_5"></div>
                                <div class="wrapper_20">
                                    <img src="../img/sect_11/book-sp.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">商材数も
                                    業界トップクラス</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left txt_bpad_1">課題に合わせ、最適な商材をご提案。
                                    一社一社異なる課題に向き合います。<br>
                                    採用のエキスパートがコンサルティングを
                                    行い、200以上の商材の中から、時代と各
                                    企業に合った「一番成果を出せる商材の組
                                    み合わせ」をご提案いたします。
                                </p>
                            </div>
                            <div class="space_3"></div>
                            <!-- Column 3 -->
                            <div
                                class="bg_img width_100 bg_white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2 box_radius_10">
                                <div class="tl_0" style="left: 5%; top: -4%;">
                                    <p class="noto_black font_125 white box_radius_5 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1"
                                        style="background-image: linear-gradient(to right, #34a1b4 , #408dc6);">03</p>
                                </div>
                                <div class="space_5"></div>
                                <div class="wrapper_20">
                                    <img src="../img/sect_11/cup.png" alt="" class="fix_zoom undrag">
                                </div>
                                <div class="space_1"></div>
                                <p class="noto_black font_100 txt_center" style="color: #3c93c1;">新卒採用支援数、トップクラス<br>
                                    延べ10,000社以上の採用をご支援</p>
                                <div class="space_1"></div>
                                <hr class="wrapper_20 hr_1" style="border-top: 4px solid #3c93c1;">
                                <div class="space_1"></div>
                                <p class="noto_regular font_75 txt_left txt_bpad_1">豊富な採用ノウハウがあるからできる採
                                    用力UPの秘訣をお伝えします。<br>
                                    少しのテクニックで（例えば求人広告の
                                    表記の仕方、オプションの使い方など）
                                    採用率を向上させます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space_4"></div>
                </div>
            </div>

        </section>

        <!-- Section 12 -->
        <section class="sect_12">
            <!-- View PC -->
            <div class="view_pc">
                <div
                    style="background-image: url('../img/sect_12/bg_overlay.png'); background-size: cover; background-repeat: no-repeat;">
                    <div class="space_5"></div>
                    <div class="cont_wrapper_70">
                        <p class="white noto_black font_100 txt_bpad_05 txt_center">ネオキャリアのサービスは、「ナビサイトを紹介する」だけではありません。
                        </p>
                        <div class="hr_1 width_63 mg_auto" style="border-top: 2px solid #baccd3;"></div>
                        <div class="space_1"></div>
                        <p class="noto_bold font_150 white txt_center">最適な採用手法のコンサルティングから<br>
                            <span class="noto_bold" style="color:#fcff10;">無料</span>で実施します。
                        </p>
                    </div>
                    <div class="space_5"></div>
                </div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div
                    style="background-image: url('../img/sect_12/bg_overlay.png'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                    <div class="space_5"></div>
                    <div class="cont_wrapper_70 txt_center">
                        <p class="white noto_black font_100 txt_bpad_05 "> <span
                                class="white noto_black font_100 txt_bpad_05"
                                style="border-bottom: 2px solid #baccd3; padding-bottom: 1px;">ネオキャリアのサービスは、</span>
                            <br>
                        <div class="space_05"></div> <span class="white noto_black font_100 txt_bpad_05 tspace_1"
                            style="border-bottom: 2px solid #baccd3;padding-bottom: 1px;">「ナビサイトを紹介する」だけでは</span>
                        <br>
                        <div class="space_05"></div> <span class="white noto_black font_100 txt_bpad_05 txt_tpad_05"
                            style="border-bottom: 2px solid #baccd3;padding-bottom: 1px;">ありません。</span>
                        </p>
                        <div class="space_1"></div>
                        <p class="noto_bold font_150 white txt_tpad_1">最適な採用手法の <br> コンサルティングから<br>
                            <span class="noto_bold" style="color:#fcff10;">無料</span>で実施します。
                        </p>
                    </div>
                    <div class="space_5"></div>
                </div>
            </div>
        </section>

        <!-- Section 13 -->
        <section class="sect_13">
            <!-- View PC -->
            <div class="view_pc">
                <div class="cont_wrapper_70">
                    <div class="space_3"></div>
                    <p class="noto_black font_150 txt_center">導入事例</p>
                    <div class="space_2"></div>
                    <!-- Case 01 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：01</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_lpad_1">戦略的な採用チャネルの選択で<span
                                            class="noto_black" style="color: #ffd200;">採用人数が約10倍に！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">不動産</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">100名～300名</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マイナビ、マッチングイベント、採用アウトソーシング</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular">社員の紹介で2-3名を採用していた</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">採用人数を25名に一気に拡大したかったが、<br>
                                                そのためのノウハウがなかった</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font_200" style="color: #3c93c1;">▶</p>
                                </div>
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black">採用目標25名を達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black txt_left">上位校学生（国公立・GMARCH）も8名を達成<br>
                                                （当初想定は2-3名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_3" style="right: 2%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->
                            <!-- ACCORDION 1 -->
                            <div class="box_radius_0">
                                <div class="accordion_item" style="background-color: #3c93c1;">
                                    <a class="accordion_header flex flex_center"
                                        style="padding: 10px; cursor: pointer;">
                                        <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                            施策を見る
                                            <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                style="position: relative; right: -48%;"></i>
                                        </p>
                                    </a>

                                    <div class="content">
                                        <!-- Point 1 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_2"
                                                style="background-color: #d8e9f3;">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">01</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80 txt_lpad_2">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                            採用競合がいない採用チャネルに参加</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用競合がどのようなチャネルを利用しているかを知
                                                        らなかったため、戦略的に採用チャネルを調べていな
                                                        かった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あらゆる採用チャネルから採用競合があまりアプローチ
                                                        できていないチャネルを発見
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あ具体的には小規模マッチングイベントで不動産投資会社
                                                        としてオンリーワンなポジションを築き、8名の採用を
                                                        実現した
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Point 2 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                <div class="flex flex_center">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">02</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                            人事担当者の工数や負荷が激減</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        内定者フォローは上手く行えていたが、採用人数が増
                                                        加することによって、フォローの工数が不足する可能
                                                        性があった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用工数の増加によって、内定者フォローが手薄になる
                                                        ことを事前に予期し、採用アウトソーシングを導入した。
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        結果として、人事担当の負担が減り、内定者フォローに
                                                        十分な工数をさける状態を作った。
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 02 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：02</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_lpad_1">採用ターゲットを明確にすることで<span
                                            class="noto_black" style="color: #ffd200;">母集団が約10倍に！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">飲食</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">300名～1000名</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">30名～100名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マｲナビ、キャリタス就活、web広告、採用アウトソーシング</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">採用目標20名に対して6名しか採用できていなか<br>
                                                った</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">特に母集団形成に課題があった</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font_200" style="color: #3c93c1;">▶</p>
                                </div>
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black">採用目標30名に対して20名の実績ができた</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black txt_left">エントリー200名から2,000名に増加<br><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_3" style="right: 2%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->
                            <!-- ACCORDION 1 -->
                            <div class="box_radius_0">
                                <div class="accordion_item" style="background-color: #3c93c1;">
                                    <a class="accordion_header flex flex_center"
                                        style="padding: 10px; cursor: pointer;">
                                        <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                            施策を見る
                                            <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                style="position: relative; right: -48%;"></i>
                                        </p>
                                    </a>

                                    <div class="content">
                                        <!-- Point 1 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_2"
                                                style="background-color: #d8e9f3;">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">01</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80 txt_lpad_2">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                            採用競合がいない採用チャネルに参加</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用競合がどのようなチャネルを利用しているかを知
                                                        らなかったため、戦略的に採用チャネルを調べていな
                                                        かった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あらゆる採用チャネルから採用競合があまりアプローチ
                                                        できていないチャネルを発見
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あ具体的には小規模マッチングイベントで不動産投資会社
                                                        としてオンリーワンなポジションを築き、8名の採用を
                                                        実現した
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Point 2 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                <div class="flex flex_center">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">02</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                            人事担当者の工数や負荷が激減</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        内定者フォローは上手く行えていたが、採用人数が増
                                                        加することによって、フォローの工数が不足する可能
                                                        性があった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用工数の増加によって、内定者フォローが手薄になる
                                                        ことを事前に予期し、採用アウトソーシングを導入した。
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        結果として、人事担当の負担が減り、内定者フォローに
                                                        十分な工数をさける状態を作った。
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 03 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：03</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_lpad_1">
                                        <span class="noto_black" style="color: #ffd200;">理系学生に刺さる原稿やツール</span><span
                                            class="noto_black" style="color: #fff;">で採用目標を達成!</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">石油</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">300名～1000名</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マイナビ、マイナビ高専イベント、動画、パンフレット制作</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">採用目標8名に対して実績5名</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">特に理系学生の母集団形成に苦戦していた<br><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font_200" style="color: #3c93c1;">▶</p>
                                </div>
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black">採用目標8名に対して実績8名の目標達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black txt_left">理系学生の母集団形成が昨年対比120%を実現<br>
                                                （うち、高専生2名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_3" style="right: 2%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->
                            <!-- ACCORDION 1 -->
                            <div class="box_radius_0">
                                <div class="accordion_item" style="background-color: #3c93c1;">
                                    <a class="accordion_header flex flex_center"
                                        style="padding: 10px; cursor: pointer;">
                                        <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                            施策を見る
                                            <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                style="position: relative; right: -48%;"></i>
                                        </p>
                                    </a>

                                    <div class="content">
                                        <!-- Point 1 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_2"
                                                style="background-color: #d8e9f3;">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">01</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80 txt_lpad_2">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                            採用競合がいない採用チャネルに参加</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用競合がどのようなチャネルを利用しているかを知
                                                        らなかったため、戦略的に採用チャネルを調べていな
                                                        かった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あらゆる採用チャネルから採用競合があまりアプローチ
                                                        できていないチャネルを発見
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あ具体的には小規模マッチングイベントで不動産投資会社
                                                        としてオンリーワンなポジションを築き、8名の採用を
                                                        実現した
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Point 2 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                <div class="flex flex_center">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">02</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                            人事担当者の工数や負荷が激減</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        内定者フォローは上手く行えていたが、採用人数が増
                                                        加することによって、フォローの工数が不足する可能
                                                        性があった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用工数の増加によって、内定者フォローが手薄になる
                                                        ことを事前に予期し、採用アウトソーシングを導入した。
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        結果として、人事担当の負担が減り、内定者フォローに
                                                        十分な工数をさける状態を作った。
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 04 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：04</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_lpad_1">採用時期や採用チャネルの戦略的な変更で<span
                                            class="noto_black" style="color: #ffd200;">採用実績0名から大きな飛躍！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">石油</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">300名～1000名</p>
                                </div>
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マイナビ、マイナビ高専イベント、動画、パンフレット制作</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">採用目標8名に対して実績5名</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">特に理系学生の母集団形成に苦戦していた<br><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font_200" style="color: #3c93c1;">▶</p>
                                </div>
                                <div class="bg_img width_48 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black">採用目標8名に対して実績8名の目標達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #007dc5; font-size: 0.8vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_black txt_left">理系学生の母集団形成が昨年対比120%を実現<br>
                                                （うち、高専生2名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_3" style="right: 2%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->
                            <!-- ACCORDION 1 -->
                            <div class="box_radius_0">
                                <div class="accordion_item" style="background-color: #3c93c1;">
                                    <a class="accordion_header flex flex_center"
                                        style="padding: 10px; cursor: pointer;">
                                        <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                            施策を見る
                                            <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                style="position: relative; right: -48%;"></i>
                                        </p>
                                    </a>

                                    <div class="content">
                                        <!-- Point 1 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_2"
                                                style="background-color: #d8e9f3;">
                                                <div class="flex flex_center" style="justify-content: flex-start;">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">01</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80 txt_lpad_2">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                            採用競合がいない採用チャネルに参加</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用競合がどのようなチャネルを利用しているかを知
                                                        らなかったため、戦略的に採用チャネルを調べていな
                                                        かった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_1-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あらゆる採用チャネルから採用競合があまりアプローチ
                                                        できていないチャネルを発見
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        あ具体的には小規模マッチングイベントで不動産投資会社
                                                        としてオンリーワンなポジションを築き、8名の採用を
                                                        実現した
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Point 2 -->
                                        <div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                <div class="flex flex_center">
                                                    <div class="width_8 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                        style="background-color: #31a5b0;">
                                                        <p class="txt_center noto_black font_100 white line_h_100">
                                                            Point<br><span class="noto_black font_100 white">02</span>
                                                        </p>
                                                    </div>
                                                    <div class="width_80">
                                                        <p class="txt_left noto_black font_125"><span class="noto_black"
                                                                style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                            人事担当者の工数や負荷が激減</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space_2"></div>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        内定者フォローは上手く行えていたが、採用人数が増
                                                        加することによって、フォローの工数が不足する可能
                                                        性があった。
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="font_200" style="color: #3c93c1;">
                                                ▼
                                            </p>
                                            <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                style="border: 2px solid #c7c7c7;">
                                                <div class="wrapper_40">
                                                    <img src="../img/sect_13/poing_2-2.png" alt=""
                                                        class="fix_zoom undrag">
                                                </div>
                                                <div class="space_2"></div>
                                                <ul class="width_88 mg_auto">
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        採用工数の増加によって、内定者フォローが手薄になる
                                                        ことを事前に予期し、採用アウトソーシングを導入した。
                                                    </li>
                                                    <li class="txt_left noto_regular font_100"
                                                        style="list-style-type: disc;">
                                                        結果として、人事担当の負担が減り、内定者フォローに
                                                        十分な工数をさける状態を作った。
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_3"></div>
                    <!-- Button -->
                    <div class="square_btn wrapper_25 txt_tpad_1 txt_bpad_1 box_radius_10"
                        style=" background-image: linear-gradient(to right, #f4882d , #fb6b48);">
                        <a href="#">
                            <div class="bg_img">
                                <div class="tl_0" style="left: 7%;">
                                    <p class="white font_125">▶</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125">もっと見る</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="space_3"></div>
                </div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div class="cont_wrapper_70">
                    <div class="space_3"></div>
                    <p class="noto_black font_150 txt_center">導入事例</p>
                    <div class="space_2"></div>
                    <!-- Case 01 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2" style="background-color: #3c93c1;">
                            <div class="space_2"></div>
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：01</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_left">戦略的な採用チャネルの選択で<span class="noto_black"
                                            style="color: #ffd200;">採用人数が約10倍に！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <!-- style="justify-content: flex-start; column-gap: 1vw;" -->
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div class="bspace_1">
                                <div>
                                    <p class="white noto_regular font_75 txt_lpad_05 txt_bpad_1">不動産</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1 lspace_05"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_1">100名～300名</p>
                                </div>

                                <div class="width_25"></div>

                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_05">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center">
                                <div class="width_26">
                                    <p class="white noto_bold font_75 txt_lpad_05 txt_rpad_05"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div class="width_73">
                                    <p class="white noto_regular font_75 txt_left txt_lpad_1 txt_tpad_05">
                                        マイナビ、マッチングイベント、採用アウトソーシング</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular">社員の紹介で2-3名を採用していた</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div>
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05">
                                            <p class="font_100 noto_regular txt_left">採用人数を25名に一気に拡大したかったが、<br>
                                                そのためのノウハウがなかった</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 0 auto;">
                                    <p class="font_200 flex flex_center" style="color: #3c93c1; margin 0 auto;">▼</p>
                                </div>
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">採用目標25名を達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">上位校学生（国公立・GMARCH）も8名を達成
                                                （当初想定は2-3名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_7" style="right: 5%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->

                            <!-- Accordion -->
                            <div class="view_tabsp" style="padding-top: 10vw; margin-top: -10vw;">
                                <div class="space_1"></div>
                                <!-- ACCORDION 1 -->
                                <div class="box_radius_0">
                                    <div class="accordion_item" style="background-color: #3c93c1;">
                                        <a class="accordion_header flex flex_center"
                                            style="padding: 10px; cursor: pointer;">
                                            <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                                施策を見る
                                                <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                    style="position: relative; right: -35%;"></i>
                                            </p>
                                        </a>

                                        <div class="content">
                                            <!-- Point 1 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                                採用競合がいない採用チャネルに参加</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用競合がどのようなチャネルを利用しているかを知
                                                            らなかったため、戦略的に採用チャネルを調べていな
                                                            かった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あらゆる採用チャネルから採用競合があまりアプローチ
                                                            できていないチャネルを発見
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あ具体的には小規模マッチングイベントで不動産投資会社
                                                            としてオンリーワンなポジションを築き、8名の採用を
                                                            実現した
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Point 2 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">02</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                                人事担当者の工数や負荷が激減</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            内定者フォローは上手く行えていたが、採用人数が増
                                                            加することによって、フォローの工数が不足する可能
                                                            性があった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用工数の増加によって、内定者フォローが手薄になる
                                                            ことを事前に予期し、採用アウトソーシングを導入した。
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            結果として、人事担当の負担が減り、内定者フォローに
                                                            十分な工数をさける状態を作った。
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="space_1"></div>
                            </div>

                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 02 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2" style="background-color: #3c93c1;">
                            <div class="space_2"></div>
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：02</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_left">採用ターゲットを明確にすることで<span
                                            class="noto_black" style="color: #ffd200;">母集団が約10倍に！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div class="bspace_1">
                                <div>
                                    <p class="white noto_regular font_75 txt_lpad_05 txt_bpad_1">不動産</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1 lspace_05"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_1">100名～300名</p>
                                </div>

                                <div class="width_25"></div>

                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_05">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center">
                                <div class="width_26">
                                    <p class="white noto_bold font_75 txt_lpad_05 txt_rpad_05"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div class="width_73">
                                    <p class="white noto_regular font_75 txt_left txt_lpad_1 txt_tpad_05">
                                        マｲナビ、キャリタス就活、web広告、採用アウトソーシング</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">採用目標20名に対して6名しか採用できていなか
                                                った</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">特に母集団形成に課題があった</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 0 auto;">
                                    <p class="font_200 flex flex_center" style="color: #3c93c1;margin 0 auto;">▼</p>
                                </div>
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black">採用目標30名に対して20名の実績ができた</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">エントリー200名から2,000名に増加<br><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_7" style="right: 5%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->

                            <!-- Accordion -->
                            <div class="view_tabsp" style="padding-top: 10vw; margin-top: -10vw;">
                                <div class="space_1"></div>
                                <!-- ACCORDION 1 -->
                                <div class="box_radius_0">
                                    <div class="accordion_item" style="background-color: #3c93c1;">
                                        <a class="accordion_header flex flex_center"
                                            style="padding: 10px; cursor: pointer;">
                                            <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                                施策を見る
                                                <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                    style="position: relative; right: -35%;"></i>
                                            </p>
                                        </a>

                                        <div class="content">
                                            <!-- Point 1 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                                採用競合がいない採用チャネルに参加</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用競合がどのようなチャネルを利用しているかを知
                                                            らなかったため、戦略的に採用チャネルを調べていな
                                                            かった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あらゆる採用チャネルから採用競合があまりアプローチ
                                                            できていないチャネルを発見
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あ具体的には小規模マッチングイベントで不動産投資会社
                                                            としてオンリーワンなポジションを築き、8名の採用を
                                                            実現した
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Point 2 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">02</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                                人事担当者の工数や負荷が激減</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            内定者フォローは上手く行えていたが、採用人数が増
                                                            加することによって、フォローの工数が不足する可能
                                                            性があった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用工数の増加によって、内定者フォローが手薄になる
                                                            ことを事前に予期し、採用アウトソーシングを導入した。
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            結果として、人事担当の負担が減り、内定者フォローに
                                                            十分な工数をさける状態を作った。
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                            </div>

                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 03 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：03</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_left">
                                        <span class="noto_black" style="color: #ffd200;">理系学生に刺さる原稿やツール</span><span
                                            class="noto_black" style="color: #fff;">で採用目標を達成!</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div class="bspace_1">
                                <div>
                                    <p class="white noto_regular font_75 txt_lpad_05 txt_bpad_1">不動産</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1 lspace_05"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_1">100名～300名</p>
                                </div>

                                <div class="width_25"></div>

                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_05">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マイナビ、マイナビ高専イベント、動画、パンフレット制作</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">採用目標8名に対して実績5名</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">特に理系学生の母集団形成に苦戦していた<br><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 0 auto;">
                                    <p class="font_200 flex flex_center" style="color: #3c93c1;margin 0 auto;">▼</p>
                                </div>
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">採用目標8名に対して実績8名の目標達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">理系学生の母集団形成が昨年対比120%を実現
                                                （うち、高専生2名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_7" style="right: 5%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->

                            <!-- Accordion -->
                            <div class="view_tabsp" style="padding-top: 10vw; margin-top: -10vw;">
                                <div class="space_1"></div>
                                <!-- ACCORDION 1 -->
                                <div class="box_radius_0">
                                    <div class="accordion_item" style="background-color: #3c93c1;">
                                        <a class="accordion_header flex flex_center"
                                            style="padding: 10px; cursor: pointer;">
                                            <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                                施策を見る
                                                <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                    style="position: relative; right: -35%;"></i>
                                            </p>
                                        </a>

                                        <div class="content">
                                            <!-- Point 1 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                                採用競合がいない採用チャネルに参加</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用競合がどのようなチャネルを利用しているかを知
                                                            らなかったため、戦略的に採用チャネルを調べていな
                                                            かった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あらゆる採用チャネルから採用競合があまりアプローチ
                                                            できていないチャネルを発見
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あ具体的には小規模マッチングイベントで不動産投資会社
                                                            としてオンリーワンなポジションを築き、8名の採用を
                                                            実現した
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Point 2 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">02</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                                人事担当者の工数や負荷が激減</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            内定者フォローは上手く行えていたが、採用人数が増
                                                            加することによって、フォローの工数が不足する可能
                                                            性があった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用工数の増加によって、内定者フォローが手薄になる
                                                            ことを事前に予期し、採用アウトソーシングを導入した。
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            結果として、人事担当の負担が減り、内定者フォローに
                                                            十分な工数をさける状態を作った。
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                            </div>

                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Case 04 -->
                    <div style="box-shadow: 0 0 10px 0px #d3d3d3; border: 1px solid #d3d3d3;">
                        <div class="txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2" style="background-color: #3c93c1;">
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div>
                                    <p class="noto_bold font_75 bg_white txt_lpad_05 txt_rpad_05 box_radius_25"
                                        style="color: #3c93c1;">CASE：04</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_125 txt_left">採用時期や採用チャネルの戦略的な変更で<span
                                            class="noto_black" style="color: #ffd200;">採用実績0名から大きな飛躍！</span>
                                    </p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <div class="hr_1" style="border-top: 1px solid #fff;"></div>
                            <div class="space_1"></div>
                            <!-- 1 -->
                            <div class="flex flex_center" style="justify-content: flex-start;">
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #1b599f; border: 1px solid #fff;">業界</p>
                                </div class="bspace_1">
                                <div>
                                    <p class="white noto_regular font_75 txt_lpad_05 txt_bpad_1">不動産</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1 lspace_05"
                                        style="background-color: #748efd; border: 1px solid #fff;">従業員数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_1">100名～300名</p>
                                </div>

                                <div class="width_25"></div>

                                <div class="bspace_1">
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #eb6d41; border: 1px solid #fff;">採用人数</p>
                                </div>
                                <div class="bspace_1">
                                    <p class="white noto_regular font_75 txt_lpad_05">10名～30名</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                            <!-- 2 -->
                            <div class="flex flex_center" style="justify-content: flex-start; column-gap: 1vw;">
                                <div>
                                    <p class="white noto_bold font_75 txt_lpad_1 txt_rpad_1"
                                        style="background-color: #e4007f; border: 1px solid #fff;">利用サービス</p>
                                </div>
                                <div>
                                    <p class="white noto_regular font_75">マイナビ、マイナビ高専イベント、動画、パンフレット制作</p>
                                </div>
                            </div>
                            <div class="space_05"></div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_95">
                            <div class="flex flex_center" style="justify-content: space-between;">
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 1px solid #c7c7c7;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #4b4b4b;">Before</p>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">採用目標8名に対して実績5名</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #9f9f9f; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_regular txt_left">特に理系学生の母集団形成に苦戦していた<br><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 0 auto;">
                                    <p class="font_200 flex flex_center" style="color: #3c93c1;margin 0 auto;">▼</p>
                                </div>
                                <div class="bg_img width_100 txt_tpad_2 txt_bpad_2 txt_lpad_1 txt_rpad_1"
                                    style="border: 2px solid #007dc5;">
                                    <div class="tl_0" style="top: -15%; left: 3%;">
                                        <p class="box_radius_25 noto_black font_100 white txt_tpad_05 txt_bpad_05 txt_lpad_2 txt_rpad_2"
                                            style="background-color: #007dc5;">After</p>
                                    </div>
                                    <div class="flex flex_center" style="justify-content: flex-start;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95 txt_left">
                                            <p class="font_100 noto_black">採用目標8名に対して実績8名の目標達成</p>
                                        </div>
                                    </div>
                                    <div class="flex" style="justify-content: flex-start; align-items: baseline;">
                                        <div class="width_5">
                                            <p style="color: #007dc5; font-size: 2vw;">●</p>
                                        </div>
                                        <div class="txt_lpad_05 width_95">
                                            <p class="font_100 noto_black txt_left">理系学生の母集団形成が昨年対比120%を実現
                                                （うち、高専生2名）</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space_1"></div>
                            <!-- <div class="txt_tpad_1 txt_bpad_1 bg_img" style="background-color: #3c93c1;">
                                <div class="t50_r0 width_7" style="right: 5%;">
                                    <a href="#"><img src="img/sect_13/plus_icon.png" alt="" class="fix_zoom undrag"></a>
                                </div>
                                <p class="noto_black font_125 white">施策を見る</p>
                            </div> -->

                            <!-- Accordion -->
                            <div class="view_tabsp" style="padding-top: 10vw; margin-top: -10vw;">
                                <div class="space_1"></div>
                                <!-- ACCORDION 1 -->
                                <div class="box_radius_0">
                                    <div class="accordion_item" style="background-color: #3c93c1;">
                                        <a class="accordion_header flex flex_center"
                                            style="padding: 10px; cursor: pointer;">
                                            <p class="noto_black font_125 white width_85 flex
                                                    flex_center" style="justify-content: center;">
                                                施策を見る
                                                <i class="fa fa-plus bg_white txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05 box_radius_9999"
                                                    style="position: relative; right: -35%;"></i>
                                            </p>
                                        </a>

                                        <div class="content">
                                            <!-- Point 1 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">01</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">母集団形成手法の変更</span><br>
                                                                採用競合がいない採用チャネルに参加</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用競合がどのようなチャネルを利用しているかを知
                                                            らなかったため、戦略的に採用チャネルを調べていな
                                                            かった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_80">
                                                        <img src="../img/sect_13/poing_1-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あらゆる採用チャネルから採用競合があまりアプローチ
                                                            できていないチャネルを発見
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            あ具体的には小規模マッチングイベントで不動産投資会社
                                                            としてオンリーワンなポジションを築き、8名の採用を
                                                            実現した
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Point 2 -->
                                            <div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_1 txt_bpad_1" style="background-color: #d8e9f3;">
                                                    <div class="flex flex_center">
                                                        <div class="width_15 txt_tpad_1 txt_bpad_1 box_radius_9999"
                                                            style="background-color: #31a5b0;">
                                                            <p class="txt_center noto_black font_75 white line_h_100">
                                                                Point<br><span
                                                                    class="noto_black font_100 white">02</span>
                                                            </p>
                                                        </div>
                                                        <div class="width_80">
                                                            <p class="txt_left noto_black font_100"><span
                                                                    class="noto_black"
                                                                    style="color: #31a5b0;">採用アウトソーシングの導入</span><br>
                                                                人事担当者の工数や負荷が激減</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space_2"></div>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            内定者フォローは上手く行えていたが、採用人数が増
                                                            加することによって、フォローの工数が不足する可能
                                                            性があった。
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="font_200" style="color: #3c93c1;">
                                                    ▼
                                                </p>
                                                <div class="txt_tpad_2 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                                    style="border: 2px solid #c7c7c7;">
                                                    <div class="wrapper_60">
                                                        <img src="../img/sect_13/poing_2-2.png" alt=""
                                                            class="fix_zoom undrag">
                                                    </div>
                                                    <div class="space_2"></div>
                                                    <ul class="width_88 mg_auto">
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            採用工数の増加によって、内定者フォローが手薄になる
                                                            ことを事前に予期し、採用アウトソーシングを導入した。
                                                        </li>
                                                        <li class="txt_left noto_regular font_75"
                                                            style="list-style-type: disc;">
                                                            結果として、人事担当の負担が減り、内定者フォローに
                                                            十分な工数をさける状態を作った。
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                            </div>

                            <div class="space_1"></div>
                        </div>
                    </div>
                    <div class="space_3"></div>
                    <!-- Button -->
                    <div class="square_btn wrapper_60 txt_tpad_1 txt_bpad_1 box_radius_5"
                        style=" background-image: linear-gradient(to right, #f4882d , #fb6b48);">
                        <a href="#">
                            <div class="bg_img">
                                <div class="tl_0" style="left: 7%;">
                                    <p class="white font_125">▶</p>
                                </div>
                                <div>
                                    <p class="white noto_black font_100">もっと見る</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="space_3"></div>
                </div>
            </div>
        </section>

        <!-- Section 14 -->
        <section class="sect_14">
            <!-- View PC -->
            <div class="view_pc">
                <div style="background-color: #deecf7;">
                    <div class="space_3"></div>
                    <div class="cont_wrapper_70">
                        <p class="noto_black font_125 txt_center">よくある<span class="noto_black"
                                style="color: #31a5b0;">ご質問</span>
                        </p>
                        <div class="space_2"></div>
                        <!-- Q-1 -->
                        <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                            style="background-color: #31a5b0; justify-content: flex-start;">
                            <div class="bg_white box_radius_9999">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold"
                                    style="color: #31a5b0;">Q
                                </p>
                            </div>
                            <div>
                                <p class="txt_lpad_1 font_100 noto_bold white">ネオキャリア経由でナビサイトやイベントなどの手法を探すメリットは？</p>
                            </div>
                        </div>
                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                            style="background-color: #fff; justify-content: baseline;">
                            <div class="width_4">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                    style="background-color: #cc1e47;">A
                                </p>
                            </div>
                            <div class="width_96">
                                <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                    ネオキャリアでは豊富な実績から貴社の現在の課題を解決するために最適なナビサイトをご提案いたします。<br>
                                    ただ紹介して終わりではなく、そのナビサイトを選んだ理由に沿ってナビサイトごとの最適な掲載方法までを<br>
                                    強力にサポートするため、ただ掲載するだけに比べ圧倒的な成果向上が期待できます。</p>
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <!-- Q-2 -->
                        <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                            style="background-color: #31a5b0; justify-content: flex-start;">
                            <div class="bg_white box_radius_9999">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold"
                                    style="color: #31a5b0;">Q
                                </p>
                            </div>
                            <div>
                                <p class="txt_lpad_1 font_100 noto_bold white">料金は事前にわかりますか？
                                </p>
                            </div>
                        </div>
                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                            style="background-color: #fff; justify-content: baseline;">
                            <div class="width_4">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                    style="background-color: #cc1e47;">A
                                </p>
                            </div>
                            <div class="width_96">
                                <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                    はい。支援内容によって金額は異なりますが、まずはお打ち合わせした上で、支援内容に応じてお見積りさせて
                                    いただきますので、お気軽に<span class="noto_regular"
                                        style="color: #3399ff; text-decoration: underline;">お問い合わせ</span>ください。
                                </p>
                            </div>
                        </div>
                        <div class="space_2"></div>
                        <!-- Q-3 -->
                        <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                            style="background-color: #31a5b0; justify-content: flex-start;">
                            <div class="bg_white box_radius_9999">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold"
                                    style="color: #31a5b0;">Q
                                </p>
                            </div>
                            <div>
                                <p class="txt_lpad_1 font_100 noto_bold white">
                                    何から改善すべきか、何が課題なのかもわかっていない状況なのですが、依頼できますか？
                                </p>
                            </div>
                        </div>
                        <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                            style="background-color: #fff; justify-content: baseline;">
                            <div class="width_4">
                                <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                    style="background-color: #cc1e47;">A
                                </p>
                            </div>
                            <div class="width_96">
                                <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                    もちろん可能です。<br>
                                    現状行われている施策を詳細にヒアリングし、認識すべき課題を分析する工程から支援いたします。<br>
                                    まずは是非、<span class="noto_regular"
                                        style="color: #3399ff; text-decoration: underline;"">無料相談</span>をご活用ください。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" space_3">
                            </div>
                        </div>
                    </div>

                    <!-- View SP -->
                    <div class="view_tabsp">
                        <div style="background-color: #deecf7;">
                            <div class="space_5"></div>
                            <div class="cont_wrapper_70">
                                <p class="noto_black font_125 txt_center">よくある<span class="noto_black"
                                        style="color: #31a5b0;">ご質問</span>
                                </p>
                                <div class="space_5"></div>
                                <!-- Q-1 -->
                                <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #31a5b0; justify-content: flex-start;">
                                    <div class="bg_white box_radius_9999 width_10">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_125 noto_bold"
                                            style="color: #31a5b0;">Q
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_bold white txt_left">
                                            ネオキャリア経由でナビサイトやイベントなどの手法を探すメリットは？</p>
                                    </div>
                                </div>
                                <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #fff; justify-content: baseline;">
                                    <div class="width_9">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                            style="background-color: #cc1e47;">A
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                            ネオキャリアでは豊富な実績から貴社の現在の課題を解決するために最適なナビサイトをご提案いたします。<br>
                                            ただ紹介して終わりではなく、そのナビサイトを選んだ理由に沿ってナビサイトごとの最適な掲載方法までを
                                            強力にサポートするため、ただ掲載するだけに比べ圧倒的な成果向上が期待できます。</p>
                                    </div>
                                </div>
                                <div class="space_3"></div>
                                <!-- Q-2 -->
                                <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #31a5b0; justify-content: flex-start;">
                                    <div class="bg_white box_radius_9999 width_10">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_125 noto_bold"
                                            style="color: #31a5b0;">Q
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_bold white txt_left">料金は事前にわかりますか？
                                        </p>
                                    </div>
                                </div>
                                <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #fff; justify-content: baseline;">
                                    <div class="width_9">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                            style="background-color: #cc1e47;">A
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                            はい。支援内容によって金額は異なりますが、まずはお打ち合わせした上で、支援内容に応じてお見積りさせて
                                            いただきますので、お気軽に<span class="noto_regular"
                                                style="color: #3399ff; text-decoration: underline;">お問い合わせ</span>ください。
                                        </p>
                                    </div>
                                </div>
                                <div class="space_3"></div>
                                <!-- Q-3 -->
                                <div class="flex flex_center txt_tpad_05 txt_bpad_05 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #31a5b0; justify-content: flex-start;">
                                    <div class="bg_white box_radius_9999 width_10">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_125 noto_bold"
                                            style="color: #31a5b0;">Q
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_bold white txt_left">
                                            何から改善すべきか、何が課題なのかもわかっていない状況なのですが、依頼できますか？
                                        </p>
                                    </div>
                                </div>
                                <div class="flex txt_tpad_1 txt_bpad_1 txt_lpad_05 txt_rpad_05"
                                    style="background-color: #fff; justify-content: baseline;">
                                    <div class="width_9">
                                        <p class="txt_tpad_05 txt_bpad_05 txt_lpad_1 txt_rpad_1 font_100 noto_bold white box_radius_9999"
                                            style="background-color: #cc1e47;">A
                                        </p>
                                    </div>
                                    <div class="width_89">
                                        <p class="txt_lpad_1 font_100 noto_regular txt_left">
                                            もちろん可能です。<br>
                                            現状行われている施策を詳細にヒアリングし、認識すべき課題を分析する工程から支援いたします。<br>
                                            まずは是非、<span class="noto_regular"
                                                style="color: #3399ff; text-decoration: underline;"">無料相談</span>をご活用ください。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" space_5">
                                    </div>
                                </div>
                            </div>
        </section>

        <!-- Section 15 -->
        <section class="sect_15">
            <!-- View PC -->
            <div class="view_pc">
                <div style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                    <div class="cont_wrapper_70">
                        <p class="white noto_black font_150 txt_tpad_1 txt_bpad_1 txt_center"><span class="noto_black"
                                style="color: #f9fc08;">無料相談</span>お申込み・資料請求・お問い合わせフォーム</p>
                    </div>
                </div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                    <div class="cont_wrapper_70">
                        <p class="white noto_black font_150 txt_tpad_1 txt_bpad_1 txt_center"><span class="noto_black"
                                style="color: #f9fc08;">無料相談</span>お申込み ・<br>資料請求・お問い合わせフォーム</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 16 -->
        <section class="sect_16">
            <!-- View PC -->
            <div class="view_pc">
                <div style="background-color: #ebeaea;">
                    <div class="cont_wrapper_70">
                        <div class="txt_tpad_2 txt_bpad_2">
                            <p class="txt_center"><span class="font_125 noto_bold"
                                    style="color: #31a5b0;">✓まずは無料相談を利用したい　✓すぐに資料請求したい</span><br>
                                <span class="noto_bold font_100"
                                    style="color: #4b4b4b;">など、気になる点やご要望をお気軽にお問い合わせください。</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View SP -->
            <div class="view_tabsp">
                <div style="background-color: #ebeaea;">
                    <div class="cont_wrapper_70">
                        <div class="txt_tpad_4 txt_bpad_4">
                            <p class="txt_center"><span class="font_100 noto_bold"
                                    style="color: #31a5b0;">✓まずは無料相談を利用したい
                                    <br>　✓すぐに資料請求したい</span><br>
                                <span class="noto_bold font_100" style="color: #4b4b4b;">など、気になる点やご要望を<br>
                                    お気軽にお問い合わせください。</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 17 -->
        <section class="sect_17" id="confirm_form">
            <div class="cont_wrapper_70">
                <div class="space_10 view_tabsp"></div>
                <div class="space_3"></div>
                <form method="post" action="#form" enctype="multipart/form-data" novalidate>
                    <!-- 1 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">お問い合わせ内容 <span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub txt_left">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo ($_POST['inquiry'][0]) ? $_POST['inquiry'][0] . " / " : ""; ?>
                                <?php echo ($_POST['inquiry'][1]) ? $_POST['inquiry'][1] . " / " : ""; ?>
                                <?php echo ($_POST['inquiry'][2]) ? $_POST['inquiry'][2] . " / " : ""; ?>
                                <?php echo ($_POST['inquiry'][3]) ? $_POST['inquiry'][3] . " / " : ""; ?>
                                <?php echo ($_POST['inquiry'][4]) ? $_POST['inquiry'][4] . " / " : ""; ?>
                                <?php echo ($_POST['inquiry'][5]) ? $_POST['inquiry'][5] . " / " : ""; ?>
                            </p>
                        </div>
                    </div>
                    <div class="view_sp">
                        <div class="hr_1" style="border-top: 2px solid #d6d6d6;"></div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 2 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">会社名 <span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['company_name']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 3 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">氏名 <span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width flex"
                            style="justify-content: flex-start; column-gap: 1vw;">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['name_fname'] . " " . $clean['name_lname']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 4 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">氏名（カナ）<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width flex"
                            style="justify-content: flex-start; column-gap: 1vw;">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['kana_fname'] . " " . $clean['kana_lname']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 5 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">メールアドレス<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 full_width f_sub">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['email']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 6 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">電話番号<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width flex flex_center"
                            style="justify-content: flex-start; column-gap: 1vw;">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['tel1'] . " " . $clean['tel2'] . " " . $clean['tel3']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- 7 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">リモート勤務中の連絡先<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #31a5b0;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width flex flex_center"
                            style="justify-content: flex-start; column-gap: 1vw;">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['remote_tel1'] . " " . $clean['remote_tel2'] . " " . $clean['remote_tel3']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 8 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">役職<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #31a5b0;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub txt_left">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['job']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 9 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">会社所在地<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #cc1e47;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub full_width txt_left">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['location']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 10 -->
                    <div class="flex_1 flex_center wrapper_85">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">現状の課題、利用目的<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #31a5b0;">必須</span></label>
                            <p class="noto_bold font_75" style="color: #b5b5b5;">（複数選択可能）</p>
                        </div>
                        <div class="width_75 f_sub txt_left txt_lpad_1">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo ($_POST['purpose'][0]) ? $_POST['purpose'][0] . " / " : ""; ?>
                                <?php echo ($_POST['purpose'][1]) ? $_POST['purpose'][1] . " / " : ""; ?>
                                <?php echo ($_POST['purpose'][2]) ? $_POST['purpose'][2] . " / " : ""; ?>
                                <?php echo ($_POST['purpose'][3]) ? $_POST['purpose'][3] . " / " : ""; ?>
                                <?php echo ($_POST['purpose'][4]) ? $_POST['purpose'][4] . " / " : ""; ?>
                                <?php echo ($_POST['purpose'][5]) ? $_POST['purpose'][5] . " / " : ""; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <!-- 11 -->
                    <div class="flex_1 wrapper_85 full_width" style="justify-content: flex-start;">
                        <div class="width_25 f_sub txt_left">
                            <label for="" class="noto_bold font_75">自由記入欄<span
                                    class="white noto_bold font_75 txt_lpad_05 txt_rpad_05 box_radius_25 lspace_05"
                                    style="background-color: #31a5b0;">必須</span></label>
                        </div>
                        <div class="width_75 f_sub area">
                            <p class="noto_regular font_75 txt_left">
                                <?php echo $clean['content']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <!-- Button -->
                    <input type="submit" name="btn_submit" value="送信する"
                        class="white noto_black font_75 square_btn wrapper_25 txt_tpad_1 txt_bpad_1 box_radius_10"
                        style=" background-image: linear-gradient(to right, #f4882d , #fb6b48);"><br>
                    <input type="submit" name="btn_back" value="入力画面に戻る"
                        class="white noto_black font_75 square_btn wrapper_25 txt_tpad_1 txt_bpad_1 box_radius_10"
                        style=" background-image: linear-gradient(to right, #f4882d , #fb6b48);">
                    <div class="space_2"></div>

                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][0]; ?>">
                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][1]; ?>">
                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][2]; ?>">
                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][3]; ?>">
                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][4]; ?>">
                    <input type="hidden" name="inquiry[]" value="<?php echo $_POST['inquiry'][5]; ?>">
                    <input type="hidden" name="company_name" value="<?php echo $clean['company_name']; ?>">
                    <input type="hidden" name="name_fname" value="<?php echo $clean['name_fname']; ?>">
                    <input type="hidden" name="name_lname" value="<?php echo $clean['name_lname']; ?>">
                    <input type="hidden" name="kana_fname" value="<?php echo $clean['kana_fname']; ?>">
                    <input type="hidden" name="kana_lname" value="<?php echo $clean['kana_lname']; ?>">
                    <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
                    <input type="hidden" name="tel1" value="<?php echo $clean['tel1']; ?>">
                    <input type="hidden" name="tel2" value="<?php echo $clean['tel2']; ?>">
                    <input type="hidden" name="tel3" value="<?php echo $clean['tel3']; ?>">
                    <input type="hidden" name="remote_tel1" value="<?php echo $clean['remote_tel1']; ?>">
                    <input type="hidden" name="remote_tel2" value="<?php echo $clean['remote_tel2']; ?>">
                    <input type="hidden" name="remote_tel3" value="<?php echo $clean['remote_tel3']; ?>">
                    <input type="hidden" name="job" value="<?php echo $clean['job']; ?>">
                    <input type="hidden" name="location" value="<?php echo $clean['location']; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][0]; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][1]; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][2]; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][3]; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][4]; ?>">
                    <input type="hidden" name="purpose[]" value="<?php echo $_POST['purpose'][5]; ?>">
                    <input type="hidden" name="content" value="<?php echo $clean['content']; ?>">
                </form>
                <div class="space_3"></div>
            </div>
        </section>

    </main>

    <footer>
        <div class="view_pc">
            <div style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                <div class="cont_wrapper_70">
                    <div class="space_4"></div>
                    <div class="wrapper_20">
                        <img src="../img/footer/neo_career_logo.png" alt="" class="fix_zoom undrag">
                    </div>

                    <div class="width_100 relative txt_tpad_2 txt_bpad_1 bspace_05">
                        <div class="width_100">
                            <div class="width_100 flex flex_center">
                                <div class="flex flex_center">
                                    <a href="#活用ケース" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            ご提供tサービス
                                        </p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#当社の強み" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            企業が抱える課題 </p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#導入イメージ" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            こんなお悩みを解決できます</p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#料金" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            ネオキャリアの強み </p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#導入事例" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            選ばれる理由 </p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#よくある質問" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            採用成功事例</p>
                                    </a>
                                </div>

                                <div class="flex flex_center">
                                    <a href="#補助金概要" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 white">
                                            よくあるご質問</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                </div>
            </div>
            <div class="wrapper_100">
                <div style="background-color: #296ca1;">
                    <p class="noto_demilight font_75 txt_center white txt_bpad_05 txt_tpad_05">
                        <a href="#" target="_blank" class="noto_demilight font_75 txt_center white">
                            ©NEO CAREER</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- View SP -->
        <div class="view_tabsp">
            <div style=" background-image: linear-gradient(to right, #34a1b4 , #408dc6);">
                <div class="cont_wrapper_100">
                    <div class="space_4"></div>
                    <div class="wrapper_50">
                        <img src="../img/footer/neo_career_logo.png" alt="" class="fix_zoom undrag">
                    </div>
                    <div class="space_4"></div>
                    <div class="width_100 relative txt_tpad_2">
                        <div class="width_100">
                            <div class="width_100 flex flex_center" style="background-color: #352d2d;">
                                <div class="flex flex_center width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#活用ケース" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            ご提供tサービス
                                        </p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#活用ケース">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#当社の強み" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            企業が抱える課題 </p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#当社の強み">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#導入イメージ" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            こんなお悩みを解決できます</p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#導入イメージ">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#料金" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            ネオキャリアの強み </p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#料金">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#導入事例" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            選ばれる理由 </p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#導入事例">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img"
                                    style="border-bottom: 2px solid #d6d6d6;">
                                    <a class="width_80 txt_left" href="#よくある質問" style="display: block;">
                                        <p class="noto_regular txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            採用成功事例</p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#よくある質問">&#10095;</a>
                                        </div>
                                    </a>

                                </div>

                                <div class="flex flex_center  width_100 bg_img">
                                    <a class="width_80 txt_left" href="#補助金概要" style="display: block;">
                                        <p class="noto_regular  txt_mg_0 font_75 txt_tpad_2 txt_bpad_2 white">
                                            よくあるご質問</p>
                                        <div class="noto_regular txt_mg_0 font_100 white"><a
                                                class="noto_regular txt_mg_0 font_100 white" href="#補助金概要">&#10095;</a>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper_100">
                <div style="background-color: #296ca1;">
                    <p class="noto_demilight font_75 txt_center white txt_bpad_05 txt_tpad_05">
                        <a href="#" target="_blank" class="noto_demilight font_75 txt_center white">
                            ©NEO CAREER</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ACCORDION -->
    <script>
    $(document).ready(function() {
        $(".accordion_item > a").on("click", function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".content")
                    .slideUp(200);
                $(".accordion_item > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");

                $(".accordion_item > a p")
                    .removeClass("white")
                    .addClass("white");

                $(".accordion_item > a img")
                    .removeClass("opened")
                    .addClass("closed");

            } else {
                $(".accordion_item > a i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");

                $(".accordion_item > a p")
                    .removeClass("white")
                    .addClass("white");

                $(this)
                    .find("i")
                    .removeClass("fa-plus")
                    .addClass("fa-minus")

                $(this)
                    .find("p")
                    .removeClass("white")
                    .addClass("white")

                $(".accordion_item > a").removeClass("active");
                $(this).addClass("active");
                $(".content").slideUp(200);
                $(this)
                    .siblings(".content")
                    .slideDown(200);
            }
        });
    });
    </script>



    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <script>
    $("html").easeScroll();

    // Navigation
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    function close_menu() {
        $('#toggle').toggleClass('active');
        $('#overlay').toggleClass('open');
    }
    </script>

    <script>
    $.fn.scrollView = function() {
        return this.each(function() {
            $('html, body').animate({
                scrollTop: $(this).offset().top - 100
            }, 1000);
        });
    }

    function check() {
        if ($('#confirm_form').is(':visible')) {
            // we're empty. do stuff.
            $('#confirm_form').scrollView();
        }
    }

    check();
    </script>

</body>

</html>