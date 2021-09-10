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
    <title>Medical-Wi-Fi</title>

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/pagetop.css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
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

    <script type="text/javascript" src="js/jquery.easeScroll.js"></script>

    <!-- バリデーション読込 -->
    <link rel="stylesheet" href="../js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css"
        type="text/css" />
    <script src="../js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js"
        type="text/javascript" charset="utf-8"></script>
    <script src="../js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript"
        charset="utf-8"></script>
    <script>
    $(function() {
        jQuery("#form form").validationEngine();
    });
    </script>

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
        src: url(assets/css/fonts/NotoSansCJKjp-DemiLight.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_regular';
        src: url(assets/css/fonts/NotoSansCJKjp-Regular.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_bold';
        src: url(assets/css/fonts/NotoSansJP-Bold.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_light';
        src: url(assets/css/fonts/NotoSansJP-Light.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_medium';
        src: url(assets/css/fonts/NotoSansJP-Medium.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'co_regular';
        src: url(assets/css/fonts/CoTextCorp-Regular.ttf);
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

    .accordion_item>a.active {
        background-color: #0C2E9F;
        color: #fff;
    }

    .content {
        background-color: #fff;
        display: none;

    }

    .content p {
        margin: 0;
    }

    .fa-plus:before {
        content: "\f067";
        color: #0C2E9F;
    }

    .fa-minus:before {
        color: #fff;
    }

    /* Input */
    input[type='radio'] {
        -webkit-appearance: none;
        width: 1vw;
        height: 1vw;
        border-radius: 50%;
        outline: none;
        border: 2px solid #0b2d9f;
    }

    input[type='radio']:before {
        content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
    }

    input[type='radio']:checked:before {
        background: #0b2d9f;
    }

    /* Input End*/

    .form-btn-wrap {
        position: relative;
        display: block;
        width: 100%;
        background-color: #0b2d9f;
        box-shadow: 0px .6vw #021969;
    }

    .form-btn-wrap input[type="submit"] {
        background: none;
    }

    .form-btn-wrap::after {
        content: '▶';
        color: #FFFFFF;
        font-size: 1vw;
        position: absolute;
        top: 50%;
        right: 11%;
        transform: translate(0, -50%);
    }

    .required_span {
        top: -.5vw;
    }

    @media only screen and (max-width: 1050px) {
        /* .ml-30 {
            margin-left: 30vw;
        } */

        .required_span {
            top: -2vw;
        }

        .form-btn-wrap::after {
            font-size: 3vw;
        }

        input[type='radio'] {
            -webkit-appearance: none;
            width: 4vw;
            height: 4vw;
            /* border-radius: 50%; */
            outline: none;
            border: 2px solid #0b2d9f;
        }
    }
    </style>
    <link rel="stylesheet" href="css/sp.css">
</head>

<body>

    <!-- Header -->
    <header>
        <!-- PC -->
        <div class="view_pc">
            <div class="width_100 relative txt_tpad_1 txt_bpad_1 bspace_05">
                <div class="cont_wrapper_65">
                    <div class="width_22 txt_bpad_05">
                        <a href="index.html" class="" style="display: block;">
                            <div class="width_100 mg_auto">
                                <img src="img/main_logo.png" alt="Medical-Wi-Fi" class="fix_zoom undrag">
                            </div>
                        </a>
                    </div>
                    <div class="width_100">
                        <div class="width_100 flex flex_center" style="justify-content: space-between;">
                            <div class="flex flex_center">
                                <a href="..#活用ケース" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        活用ケース
                                    </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#当社の強み" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        当社の強み </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#導入イメージ" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        導入イメージ</p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#料金" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        料金 </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#導入事例" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        導入事例 </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#よくある質問" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        よくある質問</p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="..#補助金概要" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05">
                                        補助金概要</p>
                                </a>
                            </div>

                            <div class="width_22">
                                <a href="contact-form.php" class="square_btn" style="display: block;">
                                    <p class="noto_bold txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 box_radius_10 flex flex_center"
                                        style="border: 4px solid #ff6900; color: #ff6900; justify-content: center;">
                                        <img class="txt_rpad_05 width_10" src="img/contact_icon.png">お問い合わせ
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOBILE -->
        <div class="view_tabsp fixed_top" style=" z-index: 1000000;">
            <div class="bg_white">
                <div class="cont_wrapper_65 flex flex_center txt_tpad_2 txt_bpad_2">
                    <div class="width_50 mg_auto flex flex_center">
                        <a href="index.html" class="width_95 mg_auto">
                            <img class="fix_zoom" src="img/main_logo.png" alt="Medical-Wi-Fi">
                        </a>
                    </div>
                    <div class="width_10">
                    </div>

                    <div class="width_28">
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="width_10 mg_auto">

                        <div class="width_100 relative txt_center button_container block flex flex_center" id="toggle"
                            style=" z-index:152;">
                            <span class="top width_100 mg_auto"></span>
                            <span class="middle width_100 mg_auto"></span>
                            <span class="bottom width_100 mg_auto"></span>
                            <div class="nav_menu"></div>
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
                                onclick="close_menu();" href="..#活用ケース"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">活用ケース</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="..#当社の強み"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">当社の強み</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center bold"
                                onclick="close_menu();" href="..#導入イメージ"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 10px;">導入イメージ</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="..#料金"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 10px;">料金</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="..#導入事例"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">導入事例</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="..#よくある質問"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">よくある質問</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="..#補助金概要"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">補助金概要</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="contact-form.php"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">お問い合わせ</span></a>
                            <div class="space_1"></div>
                        </li>
                    </ul>

                </nav>
            </div>

        </div>
    </header>

    <main>

        <!-- Section 1 -->
        <section class="sect_1">
            <div class="">
                <div class="wrapper_100 box_radius_15" style="background-color: #f5f5f5;">
                    <!-- Spacing -->
                    <div class="space_5 view_pc"></div>
                    <div class="space_3 view_tabsp"></div>
                    <div class="space_10 view_tabsp"></div>
                    <p class="noto_regular font_150 wrapper_65 txt_bpad_05 view_pc"
                        style="border-bottom: 2px solid #0c2e9f;">
                        導入に関するお問い合わせ
                    </p>
                    <p class="noto_regular font_125 wrapper_65 txt_bpad_05 view_tabsp"
                        style="border-bottom: 2px solid #0c2e9f;">
                        導入に関するお問い合わせ
                    </p>
                    <p class="noto_bold font_125">Contact</p>
                    <!-- Spacing -->
                    <div class="space_5"></div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="sect_2">
            <!-- Spacing -->
            <div class="space_5"></div>
            <div class="cont_wrapper_65">
                <p class="noto_demilight font_100">必要事項をご記入の上、「ご確認する」ボタンを押してください。<br>
                    <span class="noto_demilight font_100 red">※印は必須入力項目です。</span>
                </p>
                <!-- Spacing -->
                <div class="space_3"></div>
                <!-- View PC -->
                <div class="view_pc">
                    <div class="flex flex_center">
                        <!-- 1 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style="background-color: #0b2d9f; justify-content: start;">
                            <span class="noto_demilight font_100 bg_white txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05"
                                style="color: #0c2e9f;">1</span><span
                                class="white noto_demilight font_100 txt_lpad_1">内容入力</span>
                        </p>
                        <!-- Arrow -->
                        <div class="width_2">
                            <img class="fix_zoom" src="img/contact_form/flow_arrow.png" alt="">
                        </div>
                        <!-- 2 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style=" justify-content: start; border: 1px solid #0b2d9f;">
                            <span class="noto_demilight white font_100 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05"
                                style="background-color: #0b2d9f;">2</span><span
                                class="noto_demilight font_100 txt_lpad_1" style="color: #0c2e9f;">内容確認</span>
                        </p>
                        <!-- Arrow -->
                        <div class="width_2">
                            <img class="fix_zoom" src="img/contact_form/flow_arrow.png" alt="">
                        </div>
                        <!-- 3 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style=" justify-content: start; border: 1px solid #0b2d9f;">
                            <span class="noto_demilight white font_100 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05"
                                style="background-color: #0b2d9f;">3</span><span
                                class="noto_demilight font_100 txt_lpad_1" style="color: #0c2e9f;">完了</span>
                        </p>
                    </div>
                </div>
                <!-- View SP -->
                <div class="view_tabsp">
                    <div class="flex flex_center">
                        <!-- 1 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style="background-color: #0b2d9f; justify-content: start;">
                            <span
                                class="noto_demilight font_100 bg_white txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 mg_auto"
                                style="color: #0c2e9f;">1</span><span
                                class="white noto_demilight font_100 mg_auto">内容入力</span>
                        </p>
                        <!-- Arrow -->
                        <div class="width_2">
                            <img class="fix_zoom" src="img/contact_form/flow_arrow.png" alt="">
                        </div>
                        <!-- 2 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style=" justify-content: start; border: 1px solid #0b2d9f;">
                            <span
                                class="noto_demilight white font_100 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 mg_auto"
                                style="background-color: #0b2d9f;">2</span><span class="noto_demilight font_100 mg_auto"
                                style="color: #0c2e9f;">内容確認</span>
                        </p>
                        <!-- Arrow -->
                        <div class="width_2">
                            <img class="fix_zoom" src="img/contact_form/flow_arrow.png" alt="">
                        </div>
                        <!-- 3 -->
                        <p class="width_30 txt_tpad_1 txt_bpad_1 flex flex_center txt_lpad_2 txt_rpad_2"
                            style=" justify-content: start; border: 1px solid #0b2d9f; flex-direction: column;">
                            <span
                                class="noto_demilight white font_100 txt_lpad_1 txt_rpad_1 txt_tpad_05 txt_bpad_05 mg_auto"
                                style="background-color: #0b2d9f;">3</span><span class="noto_demilight font_100 mg_auto"
                                style="color: #0c2e9f;">完了</span>
                        </p>
                    </div>
                </div>
                <!-- Spacing -->
                <div class="space_4"></div>
                <!-- Title -->
                <p class="font_200 noto_bold txt_left txt_bpad_1">基本情報</p>
                <div class="wrapper_100" style="background-color: #efefef;">
                    <!-- Spacing -->
                    <div class="space_3"></div>
                    <form method="post" action="#form" enctype="multipart/form-data" novalidate>
                        <!-- Radio Button 1 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_2 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">お客様属性<span class="font_75 required_span"
                                            style="position: relative; color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <ul class="flex_1 flex_center">
                                        <li class="width_25 f_sub flex flex_center" style="justify-content: start;">
                                            <input type="radio" value="病院" name="customer_attr"
                                                class="validate[required]"
                                                <?php if( !empty($clean['customer_attr']) && $clean['customer_attr'] === "病院" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                病院
                                            </span>
                                        </li>
                                        <li class="width_25 f_sub flex flex_center" style="justify-content: start;">
                                            <input type="radio" value="クリニック" name="customer_attr"
                                                class="validate[required]"
                                                <?php if( !empty($clean['customer_attr']) && $clean['customer_attr'] === "クリニック" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                クリニック
                                            </span>
                                        </li>
                                        <li class="width_25 f_sub flex flex_center" style="justify-content: start;">
                                            <input type="radio" value="介護施設" name="customer_attr"
                                                class="validate[required]"
                                                <?php if( !empty($clean['customer_attr']) && $clean['customer_attr'] === "介護施設" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                介護施設
                                            </span>
                                        </li>
                                        <li class="width_25 f_sub flex flex_center" style="justify-content: start;">
                                            <input type="radio" value="その他" name="customer_attr"
                                                class="validate[required]"
                                                <?php if( !empty($clean['customer_attr']) && $clean['customer_attr'] === "その他" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                その他
                                            </span>
                                        </li>
                                    </ul>
                                    <?php if( !empty($error['customer_attr']) ): ?>
                                    <p class="error_msg bold txt_left font_75"
                                        style="margin: 0 0 0 auto; padding-top: 5px;">
                                        <?php echo $error['customer_attr']; ?></p>
                                    <?php endif; ?>
                                </li>


                            </ul>
                        </div>
                        <!-- Input 1 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">会社名<span
                                            style="font-size: 12px; position: relative; top: -6px; color: red;"></span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text" name="company_name" id="input-company"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['company_name']) ){ echo $clean['company_name']; } ?>"
                                        style="border: none;">
                                    <?php if( !empty($error['company_name']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['company_name']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Input 2 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">お名前<span class="font_75 required_span"
                                            style="position: relative; color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>"
                                        style="border: none;" id="input-name" name="your_name">
                                    <?php if( !empty($error['your_name']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['your_name']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Input 3 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">フリガナ<span class="font_75 required_span"
                                            style="position: relative; color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['furigana']) ){ echo $clean['furigana']; } ?>"
                                        id="input-furigana" name="furigana" style="border: none;">
                                    <?php if( !empty($error['furigana']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['furigana']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Input 4 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">電話番号<span class="font_75 required_span"
                                            style=" position: relative;color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['tel']) ){ echo $clean['tel']; } ?>"
                                        id="input-tel" name="tel" style="border: none;">
                                    <?php if( !empty($error['tel']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['tel']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Input 5 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">メールアドレス<span
                                            class="font_75 required_span"
                                            style="position: relative;color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>"
                                        id="input-email" name="email" style="border: none;">
                                    <?php if( !empty($error['email']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['email']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Input 6 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100 line_h_100">メールアドレス<span
                                            class="font_75 required_span"
                                            style="position: relative;color: red;">※</span><br><span
                                            class="font_75 noto_regular">(確認用)</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text"
                                        class="validate[required] box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        value="<?php if( !empty($clean['confirm-email']) ){ echo $clean['confirm-email']; } ?>"
                                        id="input-email" name="confirm-email" style="border: none;">
                                    <?php if( !empty($error['confirm-email']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['confirm-email']; ?></p>
                                    <?php endif; ?>

                                    <?php if( !empty($error['checkmail']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['checkmail']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Radio Button 2 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_2 txt_tpad_2 txt_lpad_1 txt_rpad_1 bspace_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100">お問い合わせ種別<span
                                            class="font_75 required_span"
                                            style="position: relative;color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <ul class="flex_1 flex_center">
                                        <li class="width_30 flex flex_center f_sub" style="justify-content: start;">
                                            <input type="radio" value="新規導入の検討" name="inquiry_type"
                                                class="validate[required]"
                                                <?php if( !empty($clean['inquiry_type']) && $clean['inquiry_type'] === "新規導入の検討" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                新規導入の検討
                                            </span>
                                        </li>
                                        <li class="width_30 flex flex_center f_sub" style="justify-content: start;">
                                            <input type="radio" value="見積もり相談" name="inquiry_type"
                                                class="validate[required]"
                                                <?php if( !empty($clean['inquiry_type']) && $clean['inquiry_type'] === "見積もり相談" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                見積もり相談
                                            </span>
                                        </li>
                                        <li class="width_30 flex flex_center f_sub" style="justify-content: start;">
                                            <input type="radio" value="その他のご相談" name=inquiry_type
                                                class="validate[required]"
                                                <?php if( !empty($clean['inquiry_type']) && $clean['inquiry_type'] === "その他のご相談" ){ echo 'checked'; } ?>>
                                            <span class="noto_regular font_100 txt_lpad_05">
                                                その他のご相談
                                            </span>
                                        </li>
                                        <li class="width_10 f_sub"></li>
                                    </ul>
                                    <?php if( !empty($error['inquiry_type']) ): ?>
                                    <p class="error_msg bold txt_left txt_left font_75"
                                        style="margin: 0 0 0 auto; padding-top: 5px;">
                                        <?php echo $error['inquiry_type']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- TextArea 1 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1" style="justify-content: start; align-items:
                                    start;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100 line_h_100">お問い合わせ内容<span
                                            class="font_75 required_span"
                                            style="position: relative;color: red;">※</span></label>
                                </li>
                                <li class="width_77 f_sub">
                                    <textarea rows="8" cols="50" name="contents" id="input-text"
                                        class="validate[required] width_100 box_radius_10 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        style="border: none; resize: none;"><?php if( !empty($clean['contents']) ){ echo $clean['contents']; } ?></textarea>
                                    <?php if( !empty($error['contents']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['contents']; ?></p>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <!-- Spacing -->
                        <div class="space_3"></div>
                        <p class="font_200 noto_bold txt_left txt_bpad_1 wrapper_90 txt_lpad_1">施設情報</p>
                        <!-- Input 7 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_tpad_1 txt_lpad_1 txt_rpad_1"
                                style="justify-content: start; border-bottom: 1px solid #adadad;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100 line_h_100">所在地</label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text" id="input-location" name="location"
                                        class="box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        style="border: none;"
                                        value="<?php if( !empty($clean['location']) ){ echo $clean['location']; } ?>">
                                </li>
                            </ul>
                        </div>
                        <!-- Input 8 -->
                        <div class="wrapper_90">
                            <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_tpad_1 txt_lpad_1 txt_rpad_1"
                                style="justify-content: start;">
                                <li class="width_23 f_sub">
                                    <label for="" class="noto_regular font_100 line_h_100">施設名</label>
                                </li>
                                <li class="width_77 f_sub">
                                    <input type="text" id="input-facility" name="facility"
                                        class="box_radius_10 width_100 txt_bpad_1 txt_tpad_1 txt_lpad_05 font_100"
                                        style="border: none;"
                                        value="<?php if( !empty($clean['facility']) ){ echo $clean['facility']; } ?>">
                                </li>
                            </ul>
                        </div>
                        <!-- Spacing -->
                        <div class="space_4"></div>
                        <!-- Button -->
                        <!-- PC -->
                        <div class="view_pc">
                            <div
                                class="form-btn-wrap wrapper_35 txt_tpad_1 txt_bpad_1 white box_radius_9999 square_btn">
                                <input type="submit" name="btn_confirm" value="確認する"
                                    class="form-btn white noto_bold font_125 width_100">
                            </div>
                        </div>
                        <!-- SP -->
                        <div class="view_tabsp">
                            <div
                                class="form-btn-wrap wrapper_75 txt_tpad_1 txt_bpad_1 white box_radius_9999 square_btn">
                                <input type="submit" name="btn_confirm" value="確認する"
                                    class="form-btn white noto_bold font_125 width_100">
                            </div>
                        </div>

                        <!-- Spacing -->
                        <div class="space_4"></div>
                </div>
                </form>
            </div>
        </section>


        <!-- Spacing -->
        <div class="space_5"></div>
        <div class="space_1"></div>

    </main>

    <footer>
        <div class="">
            <div class="wrapper_100">
                <p class="noto_demilight font_75 txt_center white txt_bpad_05 txt_tpad_05"
                    style="background-color: #0b2d9f;">
                    <a href="https://www.fibergate.co.jp/" target="_blank"
                        class="noto_demilight font_75 txt_center white">
                        Copyright (C) 2021 Fibergate Inc. all rights reserved.</a>
                </p>
            </div>
        </div>
    </footer>

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

</body>

</html>