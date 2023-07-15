<?php
session_start();
require_once("config/config.php");

$sql_portfolio_sam = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 1");
$sql_portfolio_dongtrung = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 2");
$sql_portfolio_nam = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 3");
$sql_portfolio_yen = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 4");
$sql_portfolio_nhunghuou = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 5");
$sql_portfolio_ancungnguu = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 6");
$sql_portfolio_tinhdauthongdo = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 7");
$sql_portfolio_matong = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 8");
$sql_portfolio_khoangchat = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 9");
$sql_portfolio_samngoclinh = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 11");
$sql_portfolio_samlaichau = mysqli_query($conn, "SELECT * FROM portfolio INNER JOIN categories ON portfolio.id_category = categories.id_category WHERE portfolio.id_category = 12");

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">

<head id="Head1" prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Cache-control" content="public">
    <title>Công Ty Onplaza - Thế giới dinh dưỡng</title>
    <meta name="description" content="Dinh dưỡng Việt Pháp, Dinh dưỡng sức khỏe, Chăm sóc sức khỏe, Thế giới dinh dưỡng, Thế giới chăm sóc sức khỏe,">
    <meta name="keywords" content="">
    <meta name="dc.language" content="VN">
    <meta name="dc.source" content="https://onplaza.vn/">
    <meta name="dc.relation" content="https://onplaza.vn/">

    <meta name="dc.title" content="Công Ty Onplaza - Thế giới dinh dưỡng">
    <meta name="dc.keywords" content="">
    <meta name="dc.subject" content="Công Ty Onplaza - Thế giới dinh dưỡng">
    <meta name="dc.description" content="Dinh dưỡng Việt Pháp, Dinh dưỡng sức khỏe, Chăm sóc sức khỏe, Thế giới dinh dưỡng, Thế giới chăm sóc sức khỏe,">
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/khH7Ei3klcvfRI74FvDcfuOo/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-UL4gpwnwxxxsV0iKJbujQODc2RZ+xFJZbe1zrnAFA+voyVvurFjSZH6kO9Nz+rpI"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.clarity.ms/s/0.7.8/clarity.js"></script>
    <script async="" src="https://www.clarity.ms/tag/9301me865a?ref=bwt"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-DKLCST0PP1&amp;l=dataLayer&amp;cx=c"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NSJGFXL"></script>
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
        })(window, document, 'script', 'dataLayer', 'GTM-NSJGFXL');
    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-173996513-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-173996513-1');
    </script>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Onplaza Việt Pháp - Thế Giới dinh dưỡng">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:title" content="Công Ty Onplaza - Thế giới dinh dưỡng">
    <meta property="og:description" content="Dinh dưỡng Việt Pháp, Dinh dưỡng sức khỏe, Chăm sóc sức khỏe, Thế giới dinh dưỡng, Thế giới chăm sóc sức khỏe,">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#d92b34">
    <meta property="og:image:width" content="600 ">
    <meta property="og:image:alt" content="Công Ty Onplaza - Thế giới dinh dưỡng">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="googlebot" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link type="image/x-icon" href="https://onplaza.vn/favicon.ico" rel="icon">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/base.prod.css">

    <link rel="stylesheet" href="assets/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/home.css">

    <link rel="alternate" type="application/rss+xml" title="Onplaza Việt Pháp - Thế Giới dinh dưỡng Feed" href="https://onplaza.vn/rss.xml">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/578172086/?random=1688460228868&amp;cv=11&amp;fst=1688460228868&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He36s0&amp;u_w=1366&amp;u_h=768&amp;url=https%3A%2F%2Fonplaza.vn%2F&amp;ref=https%3A%2F%2Fonplaza.vn%2Fgia-dong-trung-ha-thao&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=C%C3%B4ng%20Ty%20Onplaza%20-%20Th%E1%BA%BF%20gi%E1%BB%9Bi%20dinh%20d%C6%B0%E1%BB%A1ng&amp;auid=568503462.1688460212&amp;uaa=x86&amp;uab=64&amp;uafvl=Not.A%252FBrand%3B8.0.0.0%7CChromium%3B114.0.5735.199%7CGoogle%2520Chrome%3B114.0.5735.199&amp;uamb=0&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;data=Event%3D%3BItems%3D%3BValue%3D&amp;rfmt=3&amp;fmt=4"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>



<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSJGFXL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <script src='https://www.google.com/recaptcha/api.js?hl=vi' async defer></script> -->
    <div class="popup-login-resgister hide">
        <div id="popup_hide">
            <div class="close_popup" onclick="HideLoginPopup()">
                <i class="las la-times"></i>
            </div>
            <div class="tab_login">
                <div class="wrapper_log">
                    <ul class="login_select cls">
                        <li class="login   cls active"><a href="#login-now">Đăng nhập</a>
                        </li>
                        <li class="register cls"><a href="#register-now">Tạo tài khoản</a></li>
                    </ul>
                </div>

                <div class="website_login" id="login-now" style="display: block;">

                    <form action="" name="login_form" class="login_form" method="post" onsubmit="javascript: return checkFormsubmit_login();">
                        <div class="row-register cf ">
                            <label for="username">Email</label>
                            <input type="text" name="username" id="email_login" value="" class="txt-login" placeholder="Email" required="">
                        </div>
                        <div class="row-register cf ">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password_login" class="txt-login pass" autocomplete="off" placeholder="Mật khẩu" required="">
                        </div>
                        <div class="cls save_resetpass">

                            <div class="reset_pass">
                                Quên mật khẩu? Nhấn vào
                                <a onclick="OpenforgetPass()" href="javascript:void(0);" class="forget"> đây?</a>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="wrapper-bt-register">
                            <div class="row-register cf ">
                                <input type="button" name="login" class="lg login btn-submit signin-submit" value="Đăng nhập">
                            </div>


                        </div>
                        <div class="clear"></div>
                        <input type="hidden" name="return" value="Lw==">
                        <input type="hidden" name="module" value="users">
                        <input type="hidden" name="view" value="users">
                        <input type="hidden" name="task" value="login_save">
                        <input type="hidden" name="Itemid" value="1lang=vi">

                    </form>
                    <div class="social_login">
                        <a class="login_fb" title="Đăng nhập bằng Facebook" href="https://www.facebook.com/v2.2/dialog/oauth?client_id=195212498275883&amp;state=b0c23585203b018e9e24eb5de1878809&amp;response_type=code&amp;sdk=php-sdk-5.6.2&amp;redirect_uri=https%3A%2F%2Fonplaza.vn%2Fface_login.html&amp;scope=email%2Cpublic_profile">

                            <i class="lab la-facebook-f"></i>
                            Đăng nhập bằng Facebook

                        </a>
                        <a class="login_gg" title="Đăng nhập bằng Google" href="#google_login" data-url="https://onplaza.vn/index.php?module=users&amp;view=google&amp;raw=1&amp;task=google_login&amp;Itemid=10" data-width="800" data-height="500" data-id="google-login" onclick="openPopupWindow(this);">
                            <i class="lab la-google-plus"></i>
                            Đăng nhập bằng Google
                        </a>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="website_login regis_user hide" id="register-now" style="display: none;">
                    <div class="box-register">
                        <form action="" name="register_form" class="register_form" method="post" onsubmit="javascript: return checkFormsubmit();">

                            <div class="message"></div>
                            <div class="form-login">
                                <div class="row-register cf ">
                                    <label for="full_name">Họ và tên</label>
                                    <input placeholder="Họ và tên" type="text" id="full_name" name="name" class="txtinput fr txt-login" value="">
                                </div>
                                <div class="row-register cf ">
                                    <label for="telephone">Số điện thoại</label>
                                    <input required="" placeholder="Số điện thoại" type="tel" name="telephone" id="telephone" class="txtinput numberCheck fr txt-login" value="">
                                </div>
                                <div class="row-register cf ">
                                    <label for="email">Email</label>
                                    <input placeholder="Email" type="text" id="email" name="email" class="txtinput fr txt-login" value="">
                                </div>
                                <div class="row-register cf ">
                                    <label for="password">Mật khẩu</label>
                                    <input required="" placeholder="Mật khẩu" type="password" name="r_password" id="password" class="txtinput fr txt-login" autocomplete="off">
                                </div>
                                <div class="row-register2 cf ">
                                    <label id="gender2" for="gender">Giới tính</label>
                                    <div class="value_gender cls">
                                        <label class="itemmale">
                                            <input type="radio" id="male" checked="" name="gender" value="male">
                                            <span class="radio-fake"></span>
                                            <label for="male">Nam</label>
                                        </label>
                                        <label class="itemfemale">
                                            <input type="radio" id="female" name="gender" value="female">
                                            <span class="radio-fake"></span>
                                            <label for="female">Nữ</label>
                                        </label>
                                    </div>
                                </div>
                                <div class="clear"></div>



                                <div class="row-register row-register-sl cf ">
                                    <label for="date">Ngày sinh</label>
                                    <div class="date_l">
                                        <select class="date" name="date" id="date">
                                            <option value="">Ngày</option>
                                            <?php
                                            $i;
                                            for ($i = 1; $i <= 31; $i++) {
                                            ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <select class="month" name="month" id="month">
                                            <option value="">Tháng</option>
                                            <?php
                                            $i;
                                            for ($i = 1; $i <= 12; $i++) {
                                            ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <select class="year" name="year" id="year">
                                            <option value="">Năm</option>
                                            <?php
                                            $i;
                                            for ($i = 1970; $i <= 2023; $i++) {
                                            ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <div class="row-register cf row-register-btn">
                                    <div class=" wrapper-bt-register wrapper-bt-register-btn">
                                        <input type="button" class="submitbt login btn-submit register-submit" name="submitbt" value="Tạo tài khoản">
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <input type="hidden" name="return" value="Lw==">
                            <input type="hidden" name="module" value="users">
                            <input type="hidden" name="view" value="users">
                            <input type="hidden" name="Itemid" value="1lang=vi">
                            <input type="hidden" name="task" value="register_save">
                        </form>

                    </div>
                    <div class="text-bot">
                        Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán
                        theo <a href="" title="Điều khoản sử dụng">điều kiện sử dụng và chính sách của Thế Giới Dinh
                            Dưỡng</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab_reset_pass hide">
            <div class="title">Quên mật khẩu</div>
            <div class="divforget">
                <form action="" name="forget_form" class="forget_form" method="post">
                    <div class="form-login">
                        <div class="row-register" width="183">
                            <label for="email">Email</label>
                            <input placeholder="Email" class="txt-login" type="text" name="email">
                        </div>
                        <div class="row-register row-register-capcha">
                            <label for="txtCaptcha">Mã hiển thị</label>
                            <input type="text" placeholder="Mã hiển thị" id="txtCaptcha" value="" name="txtCaptcha" maxlength="10" size="7" class="capcha txt-login">
                            <div class="clear"></div>
                            <a href="javascript:changeCaptcha();" title="Click here to change the captcha" class="code-view">
                                <label></label>
                                <img id="imgCaptcha" src="https://onplaza.vn/libraries/jquery/ajax_captcha/create_image.php">
                            </a>
                        </div>
                        <div class="row-register submit_check">
                            <label for="submit"></label>
                            <input type="submit" class="submitbt btn-submit" name="submitbt" value="Đồng ý">
                        </div>
                    </div>
                    <input type="hidden" name="return" value="Lw==">
                    <input type="hidden" name="module" value="users">
                    <input type="hidden" name="view" value="users">
                    <input type="hidden" name="task" value="forget_save">
                </form>
            </div>
        </div>



    </div>
    <div class="menu_head">
        <div class="wrapper_top cls">
            <div class="phone left_item">
                <ul>
                    <li>HN: <a href="tel:0969531991">096 953 1991</a></li>
                    <li>TH: <a href="tel:0969531991">096 953 1991</a></li>
                    <li>HCN: <a href="tel:0969531991">096 953 1991</a></li>
                </ul>
            </div>
            <div class="register right_item">

                <div class="share_fast1">

                    <div class="fb share_item">
                        <a class="facebook-icon" href="https://www.facebook.com/congtyonplazavietphap" title="Link Facebook" rel="nofollow" target="_blank">
                            <i class="lab la-facebook-square"></i>
                        </a>
                    </div>


                    <div class="tw share_item">
                        <a class="twitter-icon" href="https://twitter.com/onplazavietphap" title="Link twitter" rel="nofollow" target="_blank">
                            <i class="lab la-twitter-square"></i>
                        </a>
                    </div>

                    <div class="yt share_item">
                        <a class="instagram-icon" href="https://www.instagram.com/onplazavietphap/" title="Link instagram" rel="nofollow" target="_blank">
                            <i class="lab la-instagram"></i>

                        </a>
                    </div>

                    <div class="yt share_item">
                        <a class="youtube-icon" href="https://www.youtube.com/channel/UCkbeOd2V_R8awMKRPjhgNng" title="Link youtube" rel="nofollow" target="_blank">
                            <i class="lab la-youtube"></i>

                        </a>
                    </div>


                    <div class="clear"></div>
                </div>

                <div class="logs">
                    <a onclick="OpenLoginPopup()" class="login user_item" title="Tài khoản" href="javascript:void(0)">
                        Tài khoản</a>



                </div> <!-- end logs -->
                <div class="pc_shopcart">

                    <div class="shopcart_simple block_content fl">
                        <div class="count">
                            <a class="buy_img" href="https://onplaza.vn/gio-hang.html" title="Giỏ hàng thanh toán" rel="nofollow">
                                <i class="las la-shopping-cart"></i>

                                <span>Giỏ hàng (0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
    <div class="header_wraper cls">

        <div class="home_index ">

            <div id="nav-mainmenu" class="menu-fixed-bar hidden-md hidden-sm hidden-xs nav-mainmenu-black" style="top: 0px; position: relative;">
                <div class="header_left head-t">
                </div>
                <div class="logo_top">
                    <h1> <a class="logo" href="index.php" title="Onplaza Việt Pháp - Thế Giới dinh dưỡng">
                            <img class="logo_img" src="assets/img/logo/logo.gif" alt="Onplaza Việt Pháp - Thế Giới dinh dưỡng">
                        </a>
                    </h1>
                    <div class="search_home">

                        <div id="search" class="search search-contain s_close ">
                            <div class="search-content">
                                <form action="" name="search_form" id="search_form2" method="get" onsubmit="javascript: submit_form_search22();return false;">

                                    <input type="text" value="" placeholder="Nhập từ khoá tìm kiếm..." id="keyword2" name="keyword" class="keyword input-text" autocomplete="off">
                                    <button type="submit" class="button-search button_s">


                                        <i class="las la-search"></i>

                                    </button>
                                    <input type="hidden" name="module" value="news">
                                    <input type="hidden" name="module" id="link_search2" value="https://onplaza.vn/tim-kiem/keyword.html">
                                    <input type="hidden" name="view" value="search">
                                    <input type="hidden" name="Itemid" value="10">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="dcjq-mega-menu-mobile" id="menu-mobile-mega">
                    <div class="sb-toggle-left navbar-left">

                        <svg width="15" height="15" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
                            <g>
                                <path d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z">
                                </path>
                                <path d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z">
                                </path>
                                <path d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z">
                                </path>
                            </g>
                        </svg>
                    </div>


                </div>
                <div class="mobile_shopcart">

                    <div class="shopcart_simple block_content fl">
                        <div class="count">
                            <a class="buy_img" href="https://onplaza.vn/gio-hang.html" title="Giỏ hàng thanh toán" rel="nofollow">
                                <i class="las la-shopping-cart"></i>

                                <span>0</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product_menu" id="product_menu_mobile">
                    <div class="menu_label product_menu_normal active" data-id="product_menu_ul">
                        <span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M63,33C28.262,33,0,61.262,0,96c0,34.738,28.262,63,63,63s63-28.262,63-63S97.738,33,63,33z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M63,193c-34.738,0-63,28.262-63,63c0,34.738,28.262,63,63,63s63-28.262,63-63C126,221.262,97.738,193,63,193z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M63,353c-34.738,0-63,28.262-63,63c0,34.738,28.262,63,63,63s63-28.262,63-63C126,381.262,97.738,353,63,353z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M465,49H207c-25.916,0-47,21.084-47,47s21.084,47,47,47h258c25.916,0,47-21.084,47-47S490.916,49,465,49z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M465,209H207c-25.916,0-47,21.084-47,47s21.084,47,47,47h258c25.916,0,47-21.084,47-47S490.916,209,465,209z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M465,369H207c-25.916,0-47,21.084-47,47s21.084,47,47,47h258c25.916,0,47-21.084,47-47S490.916,369,465,369z">
                                        </path>
                                    </g>
                                </g>
                            </svg></span>
                    </div>
                </div>
                <div class="wrapper_menupc">
                    <div class="dcjq-mega-menu-product cls">


                        <ul id="megamenu" class="menu mypopup">
                            <li class="cat_level_0 level_0 sort">
                                <a href="javascript:void(0)" id="menu_item_861" class="menu_item_a" title="Sản phẩm">
                                    <span class="icon_svg cls">

                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M467,61H165c-24.82,0-45,20.19-45,45c0,24.82,20.18,45,45,45h302c24.81,0,45-20.18,45-45C512,81.19,491.81,61,467,61z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M467,211H165c-24.82,0-45,20.19-45,45c0,24.82,20.18,45,45,45h302c24.81,0,45-20.18,45-45C512,231.19,491.81,211,467,211z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M467,361H165c-24.82,0-45,20.19-45,45c0,24.82,20.18,45,45,45h302c24.81,0,45-20.18,45-45C512,381.19,491.81,361,467,361z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M45,61C20.18,61,0,81.19,0,106c0,24.82,20.18,45,45,45c24.81,0,45-20.18,45-45C90,81.19,69.81,61,45,61z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M45,211c-24.82,0-45,20.19-45,45c0,24.82,20.18,45,45,45c24.81,0,45-20.18,45-45C90,231.19,69.81,211,45,211z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M45,361c-24.82,0-45,20.19-45,45c0,24.82,20.18,45,45,45c24.81,0,45-20.18,45-45C90,381.19,69.81,361,45,361z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>


                                    </span>
                                    Sản phẩm <span class="drop_down">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                            <g>
                                                <g id="arrow-drop-down">
                                                    <polygon points="0,63.75 127.5,191.25 255,63.75 		"></polygon>
                                                </g>
                                            </g>

                                        </svg>
                                    </span>
                                </a>



                                <div class="highlight active_homepr product_home_active active_nohover">



                                    <div class="highlight1 container cls">
                                        <div class="menu-child_list">





                                            <!--	LEVEL 1			-->



                                            <div class="sub-menu sub-menu-level1 has_child  ">

                                                <a href="sanphamduoclieu.php" class="level_0 sort sub-menu-item" data-menu_tags="908" id="menu_item_908" title="Dược liệu cao cấp">
                                                    <span class="icon"><svg height="30" viewBox="-22 0 511 511.998" width="30" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m414.707031 38.105469c-9.679687-19.546875-28.664062-31.691407-31.242187-33.277344l-7.859375-4.828125-7.855469 4.828125c-2.582031 1.585937-21.570312 13.734375-31.25 33.285156-21.828125-1.617187-42.601562 7.957031-45.367188 9.292969l-9.148437 4.402344.617187 9.113281h-27.03125c-24.816406 0-45.011718 20.195313-45.011718 45.011719 0 4.925781.859375 9.71875 2.5625 14.355468-20.84375 19.773438-32.570313 46.714844-32.570313 75.671876v70.042968c-6.921875 3.273438-14.476562 4.980469-22.207031 4.980469-53.941406 0-97.828125 43.882813-97.828125 97.828125v21.75l20.335937-7.726562c36.6875-13.941407 75.125-21.269532 114.320313-21.796876-13.929687 18.492188-35.933594 29.976563-59.632813 29.976563h-37.210937c-53.929687 0-97.828125 45-97.828125 99.230469v21.75l20.332031-7.726563c40.558594-15.414062 80.558594-23.226562 118.890625-23.226562h25.824219c64.035156 0 121.71875-36.6875 149.03125-94.105469 44.5-12.769531 76.03125-54.027344 76.03125-100.953125v-90.023437c0-6.984376-.679687-13.84375-2.023437-20.550782 20.9375 7.679688 44.226562 3.558594 47.566406 2.902344l9.929687-1.949219 1.914063-9.933593c.644531-3.351563 4.894531-27.789063-3.707032-49.136719 21.117188-18.210938 23.15625-51.636719 23.328126-55.746094l.40625-9.714844-8.699219-4.335937c-2.695313-1.34375-22.925781-10.992188-44.617188-9.390625zm-121.449219 322.902343h-37.6875v30h22.273438c-24.738281 37.105469-66.53125 60.027344-112.296875 60.027344h-25.820313c-34.300781 0-69.660156 5.652344-105.429687 16.832032 9.351563-26.933594 34.902344-46.839844 64.03125-46.839844h37.210937c45.148438 0 83.453126-28.613282 98.28125-68.835938l3.199219-8.640625c-6.980469-7.339843-6.390625-6.964843-13.609375-15.433593-11.242187 1.738281-17.640625 2.882812-23.667968 2.882812-35.921876 0-71.296876 5.230469-105.472657 15.574219 9.226563-26.503907 34.464844-45.582031 64.078125-45.582031 30.355469 0 48.480469-16.359376 52.210938-18.253907v-11.753906h60.019531v-30.011719h-60.019531v-45.011718c0-23.746094 11.128906-45.628907 30.53125-60.042969l12.226562-9.085938-9.265625-12.085937c-2.34375-3.058594-3.480469-5.9375-3.480469-8.808594 0-8.273438 6.730469-15.003906 15.003907-15.003906h33.6875c3.605469 9.3125 9.148437 19.070312 17.660156 26.371094-8.597656 21.34375-4.347656 45.777343-3.703125 49.125l1.914062 9.933593 9.925782 1.953125c12.449218 2.441406 29.285156 2.519532 43.0625-1.433594 1.648437 6.167969 2.484375 12.546876 2.484375 19.078126v15.003906h-60.019531v30.011718h60.019531v45.011719c0 5.117188-.542969 10.132813-1.542969 15.003907h-58.476562v30h44.925781c-20.742188 27.605468-48.941407 28.757812-52.253907 30.015624zm128.828126-264.582031c-.46875.265625-.53125.265625-24.90625 8.476563l15.289062 16.964844c6.015625 6.671874 7.269531 18.71875 7.058594 28.03125-9.5.253906-22.152344-.972657-28.707032-7.53125-1.367187-1.363282-1.976562-2.703126-15.210937-24.09375-13.226563 21.371093-13.84375 22.726562-15.21875 24.101562-6.511719 6.507812-19.035156 7.808594-28.6875 7.542969-.203125-9.175781.984375-21.328125 7.042969-28.050781l15.289062-16.964844c-24.667968-8.304688-24.4375-8.207032-24.910156-8.476563-7.972656-4.601562-12.472656-16.375-14.714844-25.757812 8.1875-2.382813 18.855469-4.132813 26.867188-1.226563l16.773437 6.085938 3.117188-17.570313c1.476562-8.3125 8.371093-16.195312 14.441406-21.566406 6.03125 5.34375 12.960937 13.25 14.4375 21.566406l3.117187 17.570313 16.773438-6.085938c7.972656-2.894531 18.351562-1.148437 26.246094 1.214844-1.972656 9.351562-6.164063 21.191406-14.097656 25.769531zm0 0">
                                                            </path>
                                                        </svg></span>
                                                    Dược liệu cao cấp </a>



                                                <div class="wraper_item cls " alt="Dược liệu cao cấp" data-menu_tags="908" data-menu_idt="0" style="background-image: url(https://onplaza.vn/images/menus/nen1_1595813703.png.webp); display: block;">

                                                    <div class="product_item cls">


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="nhansamhanquoc.php" title="Nhân sâm hàn quốc">
                                                                Nhân sâm hàn quốc
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_sam as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="dongtrunghathao.php" title="Đông trùng hạ thảo">
                                                                Đông trùng hạ thảo
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_dongtrung as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>


                                                            </ul>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="namlinhchihanquoc.php" title="Nấm linh chi Hàn Quốc">
                                                                Nấm linh chi Hàn Quốc
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_nam as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>


                                                            </ul>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="yensaokhanhhoa.php" title="Yến sào Khánh Hoà">
                                                                Yến sào Khánh Hoà
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_yen as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="nhunghuou.php" title="Nhung hươu">
                                                                Nhung hươu
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_nhunghuou as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="ancungnguu.php" title="An cung ngưu">
                                                                An cung ngưu
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_ancungnguu as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>


                                                        <div class="item cls ">
                                                            <a class="item_lv1" href="tinhdauthongdo.php" title="Tinh dầu thông đỏ">
                                                                Tinh dầu thông đỏ
                                                            </a>
                                                        </div>


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="matongnguyenchat.php" title="Mật Ong Nguyên Chất">
                                                                Mật Ong Nguyên Chất
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_matong as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>











                                            <!--	end LEVEL 1			-->








                                            <!--	LEVEL 1			-->









                                            <div class="sub-menu sub-menu-level1 has_child  ">

                                                <a href="thucphamchucnang.php" class="level_0 sort sub-menu-item" data-menu_tags="909" id="menu_item_909" title="Thực phẩm chức năng">
                                                    <span class="icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M468.523,6.592C466.88,2.603,462.976,0,458.667,0C44.694,0,0,171.563,0,245.333c0,26.539,5.888,51.328,17.515,73.664
    c1.792,3.456,5.333,5.653,9.216,5.739c3.669-0.107,7.531-1.941,9.472-5.333C64.15,271.104,143.296,151.893,274.006,88.555
    c5.355-2.56,11.755-0.363,14.293,4.907c2.56,5.312,0.341,11.712-4.949,14.272c-9.856,4.779-19.328,9.984-28.608,15.381
    c-3.541,2.069-6.976,4.267-10.453,6.421c-5.227,3.243-10.389,6.549-15.424,9.963c-5.013,3.371-9.963,6.827-14.827,10.368
    c-1.515,1.109-2.965,2.24-4.459,3.371C79.488,250.176,0,404.821,0,458.667c0,5.888,4.779,10.667,10.667,10.667
    s10.667-4.779,10.667-10.667c0-17.195,11.712-52.053,33.877-93.632c32.171,26.304,75.456,40.299,126.123,40.299
    c136.981,0,165.675-130.347,181.077-200.384c20.736-94.251,66.368-149.312,103.787-186.752
    C469.27,15.147,470.166,10.581,468.523,6.592z"></path>
                                                                </g>
                                                            </g>

                                                        </svg></span>
                                                    Thực phẩm chức năng </a>


                                                <div class="wraper_item cls" data-menu_tags="909" data-menu_idt="1">
                                                    <div class="product_item cls">


                                                        <div class="item cls ">
                                                            <a class="item_lv1" href="khoangchatvitamin.php" title="Khoáng chất - Vitamin">
                                                                Khoáng chất - Vitamin
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>











                                            <!--	end LEVEL 1			-->








                                            <!--	LEVEL 1			-->









                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="thuonghieu.php" class="level_0 sort sub-menu-item" data-menu_tags="910" id="menu_item_910" title="Sản phẩm thương hiệu">
                                                    <span class="icon"><svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m337.903 358.822 23.413-37.992 42.252-14.41 4.681-44.377 31.789-31.295-15.114-42.006 15.114-42.007-31.788-31.295-4.681-44.376-42.252-14.41-23.413-37.993-44.285 5.347-37.619-24.008-37.619 24.01-44.284-5.347-23.413 37.992-42.252 14.41-4.681 44.376-31.789 31.295 15.114 42.007-15.114 42.007 31.788 31.294 4.681 44.377 42.252 14.41 23.413 37.992 44.285-5.346 37.619 24.009 37.619-24.009zm-211.332-170.079c0-71.367 58.062-129.429 129.429-129.429s129.429 58.062 129.429 129.429-58.062 129.429-129.429 129.429-129.429-58.062-129.429-129.429z">
                                                            </path>
                                                            <path d="m256 89.333c-54.815 0-99.41 44.595-99.41 99.41s44.595 99.41 99.41 99.41 99.41-44.595 99.41-99.41-44.595-99.41-99.41-99.41z">
                                                            </path>
                                                            <path d="m211.299 384.568-52.68 6.36-27.833-45.167-9.462-3.226-40.813 127.566 73.475-4.041 57.485 45.94 33.828-105.732z">
                                                            </path>
                                                            <path d="m381.214 345.762-27.834 45.166-52.679-6.36-34 21.7 33.828 105.732 57.485-45.94 73.475 4.041-40.813-127.566z">
                                                            </path>
                                                        </svg></span>
                                                    Sản phẩm thương hiệu </a>


                                                <div class="wraper_item cls" data-menu_tags="910" data-menu_idt="2">

                                                </div>



                                            </div>











                                            <!--	end LEVEL 1			-->








                                            <!--	LEVEL 1			-->









                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="quabieucaocap.php" class="level_0 sort sub-menu-item" data-menu_tags="911" id="menu_item_911" title="Quà biếu cao cấp">
                                                    <span class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M32,271.692v192c0,17.664,14.368,32,32,32h160v-224H32z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M480,143.692H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.824-25.952,25.824-68.192,0-94.144
    c-25.088-25.28-68.8-25.216-93.856,0c-13.888,13.92-50.688,70.592-45.6,108.448h-2.304c5.056-37.856-31.744-94.528-45.6-108.448
    c-25.088-25.216-68.8-25.216-93.856,0C89.6,61.196,89.6,103.436,115.36,129.388c4.384,4.416,10.624,9.344,17.888,14.304H32
    c-17.632,0-32,14.368-32,32v48c0,8.832,7.168,16,16,16h208v-64h64v64h208c8.832,0,16-7.168,16-16v-48
    C512,158.06,497.664,143.692,480,143.692z M222.112,142.636c0,0-1.344,1.056-5.92,1.056c-22.112,0-64.32-22.976-78.112-36.864
    c-13.408-13.504-13.408-35.52,0-49.024c6.496-6.528,15.104-10.112,24.256-10.112c9.12,0,17.728,3.584,24.224,10.112
    C208.128,79.5,229.568,134.924,222.112,142.636z M295.776,143.692c-4.544,0-5.888-1.024-5.888-1.056
    c-7.456-7.712,13.984-63.136,35.552-84.832c12.896-13.024,35.456-13.088,48.48,0c13.44,13.504,13.44,35.52,0,49.024
    C360.128,120.716,317.92,143.692,295.776,143.692z"></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M288,271.692v224h160c17.664,0,32-14.336,32-32v-192H288z">
                                                                    </path>
                                                                </g>
                                                            </g>

                                                        </svg></span>
                                                    Quà biếu cao cấp </a>


                                                <div class="wraper_item cls" data-menu_tags="911" data-menu_idt="3">

                                                </div>



                                            </div>











                                            <!--	end LEVEL 1			-->








                                            <!--	LEVEL 1			-->









                                            <div class="sub-menu sub-menu-level1 has_child  ">

                                                <a href="samvietnam.php" class="level_0 sort sub-menu-item" data-menu_tags="1021" id="menu_item_1021" title="Sâm Việt Nam">
                                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                                                            </path>
                                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                                                            </path>
                                                        </svg></span>
                                                    Sâm Việt Nam </a>


                                                <div class="wraper_item cls" data-menu_tags="1021" data-menu_idt="4">
                                                    <div class="product_item cls">


                                                        <div class="item cls cat_item2">
                                                            <a class="item_lv1" href="samngoclinh.php" title="Sâm ngọc linh">
                                                                Sâm ngọc linh
                                                            </a>
                                                            <ul class="item_lv2">
                                                                <?php
                                                                foreach ($sql_portfolio_samngoclinh as $item) {
                                                                ?>
                                                                    <li><a href="nhansam6tuoi.php" title="Nhân sâm tươi 6 năm tuổi">
                                                                            <?= $item['name_portfolio'] ?>
                                                                        </a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>


                                                        <div class="item cls ">
                                                            <a class="item_lv1" href="samlaichau.php" title="Sâm Lai Châu">
                                                                Sâm Lai Châu
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>











                                            <!--	end LEVEL 1			-->



                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!--	CHILDREN				-->
                        </ul>
                    </div>
                    <div class="dcjq-mega-menu cls">
                        <div class="sb-toggle-left navbar-left">
                            <svg width="15" height="15" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
                                <g>
                                    <path d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z">
                                    </path>
                                    <path d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z">
                                    </path>
                                    <path d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z">
                                    </path>
                                </g>
                            </svg>
                        </div>


                        <ul id="megamenu" class="menu mypopup">








                            <li class="cat_level_0 level_0 sort menu_level_0" id=" level_865">
                                <a href="gioithieu.php" id="menu_item_865" class="menu_item_a" title="Giới thiệu">Giới
                                    thiệu </a>
                            </li>







                            <li class="cat_level_0 level_0 sort menu_level_0" id=" level_870">

                                <a href="#" id="menu_item_870" class="menu_item_a" title="Khuyến mãi">
                                    Khuyến mãi </a>

                                <!--	LEVEL 1			-->
                                <!--	end LEVEL 1			-->

                            </li>







                            <li class="cat_level_0 level_0 sort menu_level_0" id=" level_883">

                                <a href="tintuc.php" id="menu_item_883" class="menu_item_a" title="Tin tức">
                                    Tin tức <span class="drop_down">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                            <g>
                                                <g id="arrow-drop-down">
                                                    <polygon points="0,63.75 127.5,191.25 255,63.75 		"></polygon>
                                                </g>
                                            </g>

                                        </svg>
                                    </span>
                                </a>

                                <!--	LEVEL 1			-->
                                <div class="highlight">


                                    <div class="highlight1 container cls">
                                        <div class="menu-child_list">



                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="duoclieu.php" class="level_0 sort sub-menu-item" data-menu_tags="961" id="menu_item_961" title="Dược liệu">
                                                    <span class="icon"></span>
                                                    Dược liệu </a>



                                            </div>





                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="suckhoe.php" class="level_0 sort sub-menu-item" data-menu_tags="907" id="menu_item_907" title="Sức khỏe">
                                                    <span class="icon"></span>
                                                    Sức khỏe </a>



                                            </div>





                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="benhhoc.php" class="level_0 sort sub-menu-item" data-menu_tags="1020" id="menu_item_1020" title="Bệnh học">
                                                    <span class="icon"></span>
                                                    Bệnh học </a>



                                            </div>





                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="tintucyensao.php" class="level_0 sort sub-menu-item" data-menu_tags="1017" id="menu_item_1017" title="Tin Tức Yến Sào">
                                                    <span class="icon"></span>
                                                    Tin Tức Yến Sào </a>



                                            </div>





                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="tintucdongtrung.php" class="level_0 sort sub-menu-item" data-menu_tags="1018" id="menu_item_1018" title="Tin tức Đông Trùng">
                                                    <span class="icon"></span>
                                                    Tin tức Đông Trùng </a>



                                            </div>





                                            <div class="sub-menu sub-menu-level1   ">

                                                <a href="tinnhansam.php" class="level_0 sort sub-menu-item" data-menu_tags="962" id="menu_item_962" title="Tin Nhân sâm">
                                                    <span class="icon"></span>
                                                    Tin Nhân sâm </a>



                                            </div>


                                        </div>





                                    </div>
                                    <div class="menu_desc"></div>
                                </div>
                                <!--	end LEVEL 1			-->

                            </li>







                            <li class="cat_level_0 level_0 sort menu_level_0" id=" level_871">

                                <a href="chinhsachbaomat.php" id="menu_item_871" class="menu_item_a" title="Chính sách">
                                    Chính sách </a>

                                <!--	LEVEL 1			-->
                                <!--	end LEVEL 1			-->

                            </li>







                            <li class="cat_level_0 level_0 sort menu_level_0" id=" level_884">

                                <a href="lienhe.php" id="menu_item_884" class="menu_item_a" title="Liên hệ">
                                    Liên hệ </a>

                                <!--	LEVEL 1			-->
                                <!--	end LEVEL 1			-->

                            </li>


                            <!--	CHILDREN				-->
                        </ul>
                    </div>
                </div>
                <div class="header_right head-t">
                </div>

                <div class="search_home">

                    <div id="search" class="search search-contain s_close ">
                        <div class="search-content">
                            <form action="" name="search_form" id="search_form_home" method="get" onsubmit="javascript: submit_form_search_home();return false;">

                                <input type="text" value="" placeholder="Nhập từ khoá tìm kiếm..." id="keyword_home" name="keyword" class="keyword input-text" autocomplete="off">
                                <button type="submit" class="button-search button_s">


                                    <svg x="0px" y="0px" viewBox="0 0 485.213 485.213" style="enable-background:new 0 0 485.213 485.213;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951
                C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46
                c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465
                C318.424,257.208,257.206,318.416,181.956,318.416z"></path>
                                                <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324
                c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z"></path>
                                            </g>
                                        </g>

                                    </svg>

                                </button>
                                <input type="hidden" name="module" value="news">
                                <input type="hidden" name="module" id="link_search_home" value="https://onplaza.vn/tim-kiem/keyword.html">
                                <input type="hidden" name="view" value="search">
                                <input type="hidden" name="Itemid" value="10">
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="modal-menu-full-screen"></div>


            <div id="menu_mb">
                <div class="dcjq-mega-menu-mobile cls">


                    <ul id="megamenu3" class="menu mypopup">
                        <li class="hide_nows">
                            <a href="javascript:void(0)" class="close-off" onclick="closeNav()">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;" xml:space="preserve">
                                    <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85 c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563 c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85 l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554 L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li class="level_0 sort home "><a class="menu_item_a" href="https://onplaza.vn/" title="Onplaza Việt Pháp - Thế Giới dinh dưỡng" rel="home">Trang chủ</a> </li>
                        <li class="level_0 sort login">
                            <a onclick="OpenLoginPopup()" class="menu_item_a" href="javascript:void(0)" title="Đăng ký">Đăng ký <span>|</span> </a> <a id="login_nw" onclick="OpenLoginPopup()" class="menu_item_a" href="javascript:void(0)" title="Đăng nhập"> Đăng nhập</a>
                        </li>
                        <div class="clear"></div>







                        <li class="level_0 sort " id="level_865">
                            <a href="gioithieu.php" id="menu_item_865" class="menu_item_a" title="Giới thiệu">Giới thiệu
                            </a>
                        </li>







                        <li class="level_0 sort " id="level_870">
                            <a href="#" id="menu_item_870" class="menu_item_a" title="Khuyến mãi">
                                Khuyến mãi </a>

                            <!--	LEVEL 1			-->
                            <!--	end LEVEL 1			-->

                        </li>







                        <li class="level_0 sort " id="level_883">
                            <a href="tintuc.php" id="menu_item_883" class="menu_item_a" title="Tin tức">
                                Tin tức </a>

                            <!--	LEVEL 1			-->
                            <span class="drop_down">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                    <g>
                                        <g id="arrow-drop-down">
                                            <polygon points="0,63.75 127.5,191.25 255,63.75 		"></polygon>
                                        </g>
                                    </g>

                                </svg>
                            </span>
                            <div class="highlight">
                                <ul class="highlight1 container">



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="duoclieu.php" class="level_0 sort sub-menu-item" id="menu_item_961" title="Dược liệu">
                                                Dược liệu </a>

                                        </div>





                                    </li>



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="suckhoe.php" class="level_0 sort sub-menu-item" id="menu_item_907" title="Sức khỏe">
                                                Sức khỏe </a>

                                        </div>





                                    </li>



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="benhhoc.php" class="level_0 sort sub-menu-item" id="menu_item_1020" title="Bệnh học">
                                                Bệnh học </a>

                                        </div>





                                    </li>



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="tintucyensao.php" class="level_0 sort sub-menu-item" id="menu_item_1017" title="Tin Tức Yến Sào">
                                                Tin Tức Yến Sào </a>

                                        </div>





                                    </li>



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="tintucdongtrung.php" class="level_0 sort sub-menu-item" id="menu_item_1018" title="Tin tức Đông Trùng">
                                                Tin tức Đông Trùng </a>

                                        </div>





                                    </li>



                                    <li class="sub-menu sub-menu-level1  ">
                                        <div class="images-sub-menu1">
                                            <a href="tinnhansam.php" class="level_0 sort sub-menu-item" id="menu_item_962" title="Tin Nhân sâm">
                                                Tin Nhân sâm </a>

                                        </div>





                                    </li>







                                </ul>
                                <div class="menu_desc"></div>
                            </div>
                            <!--	end LEVEL 1			-->

                        </li>







                        <li class="level_0 sort " id="level_871">
                            <a href="chinhsachbaomat.php" id="menu_item_871" class="menu_item_a" title="Chính sách">
                                Chính sách </a>

                            <!--	LEVEL 1			-->
                            <!--	end LEVEL 1			-->

                        </li>







                        <li class="level_0 sort " id="level_884">
                            <a href="lienhe.php" id="menu_item_884" class="menu_item_a" title="Liên hệ">
                                Liên hệ </a>

                            <!--	LEVEL 1			-->
                            <!--	end LEVEL 1			-->

                        </li>

                        <!--	CHILDREN				-->
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_menu_mobile">
                <div class="product_menu" id="product_menu_mobile">

                    <div id="product_menu_ul" class="menu">
                        <ul class="product_menu_ul_innner scroll-bar">

                            <li class="hide_nows">
                                Sản phẩm
                                <a href="javascript:void(0)" class="close-off" onclick="closeNpr()">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;" xml:space="preserve">
                                        <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85 c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563 c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85 l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554 L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z">
                                        </path>
                                    </svg>

                                </a>
                            </li>
                            <div class="clear"></div>

                            <div class="content_lv0 cls">

                                <!--	LEVEL 0			-->
                                <li class="level_0 activated li-product-menu-item  closed" id="li-menu_item_965">

                                    <a href="javascript:void(0)" id="menu_item_965" class="menu_item_a wp_item click_acitvepr" title="Dược liệu cao cấp">

                                        <span class="svg_cat"><svg height="30" viewBox="-22 0 511 511.998" width="30" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m414.707031 38.105469c-9.679687-19.546875-28.664062-31.691407-31.242187-33.277344l-7.859375-4.828125-7.855469 4.828125c-2.582031 1.585937-21.570312 13.734375-31.25 33.285156-21.828125-1.617187-42.601562 7.957031-45.367188 9.292969l-9.148437 4.402344.617187 9.113281h-27.03125c-24.816406 0-45.011718 20.195313-45.011718 45.011719 0 4.925781.859375 9.71875 2.5625 14.355468-20.84375 19.773438-32.570313 46.714844-32.570313 75.671876v70.042968c-6.921875 3.273438-14.476562 4.980469-22.207031 4.980469-53.941406 0-97.828125 43.882813-97.828125 97.828125v21.75l20.335937-7.726562c36.6875-13.941407 75.125-21.269532 114.320313-21.796876-13.929687 18.492188-35.933594 29.976563-59.632813 29.976563h-37.210937c-53.929687 0-97.828125 45-97.828125 99.230469v21.75l20.332031-7.726563c40.558594-15.414062 80.558594-23.226562 118.890625-23.226562h25.824219c64.035156 0 121.71875-36.6875 149.03125-94.105469 44.5-12.769531 76.03125-54.027344 76.03125-100.953125v-90.023437c0-6.984376-.679687-13.84375-2.023437-20.550782 20.9375 7.679688 44.226562 3.558594 47.566406 2.902344l9.929687-1.949219 1.914063-9.933593c.644531-3.351563 4.894531-27.789063-3.707032-49.136719 21.117188-18.210938 23.15625-51.636719 23.328126-55.746094l.40625-9.714844-8.699219-4.335937c-2.695313-1.34375-22.925781-10.992188-44.617188-9.390625zm-121.449219 322.902343h-37.6875v30h22.273438c-24.738281 37.105469-66.53125 60.027344-112.296875 60.027344h-25.820313c-34.300781 0-69.660156 5.652344-105.429687 16.832032 9.351563-26.933594 34.902344-46.839844 64.03125-46.839844h37.210937c45.148438 0 83.453126-28.613282 98.28125-68.835938l3.199219-8.640625c-6.980469-7.339843-6.390625-6.964843-13.609375-15.433593-11.242187 1.738281-17.640625 2.882812-23.667968 2.882812-35.921876 0-71.296876 5.230469-105.472657 15.574219 9.226563-26.503907 34.464844-45.582031 64.078125-45.582031 30.355469 0 48.480469-16.359376 52.210938-18.253907v-11.753906h60.019531v-30.011719h-60.019531v-45.011718c0-23.746094 11.128906-45.628907 30.53125-60.042969l12.226562-9.085938-9.265625-12.085937c-2.34375-3.058594-3.480469-5.9375-3.480469-8.808594 0-8.273438 6.730469-15.003906 15.003907-15.003906h33.6875c3.605469 9.3125 9.148437 19.070312 17.660156 26.371094-8.597656 21.34375-4.347656 45.777343-3.703125 49.125l1.914062 9.933593 9.925782 1.953125c12.449218 2.441406 29.285156 2.519532 43.0625-1.433594 1.648437 6.167969 2.484375 12.546876 2.484375 19.078126v15.003906h-60.019531v30.011718h60.019531v45.011719c0 5.117188-.542969 10.132813-1.542969 15.003907h-58.476562v30h44.925781c-20.742188 27.605468-48.941407 28.757812-52.253907 30.015624zm128.828126-264.582031c-.46875.265625-.53125.265625-24.90625 8.476563l15.289062 16.964844c6.015625 6.671874 7.269531 18.71875 7.058594 28.03125-9.5.253906-22.152344-.972657-28.707032-7.53125-1.367187-1.363282-1.976562-2.703126-15.210937-24.09375-13.226563 21.371093-13.84375 22.726562-15.21875 24.101562-6.511719 6.507812-19.035156 7.808594-28.6875 7.542969-.203125-9.175781.984375-21.328125 7.042969-28.050781l15.289062-16.964844c-24.667968-8.304688-24.4375-8.207032-24.910156-8.476563-7.972656-4.601562-12.472656-16.375-14.714844-25.757812 8.1875-2.382813 18.855469-4.132813 26.867188-1.226563l16.773437 6.085938 3.117188-17.570313c1.476562-8.3125 8.371093-16.195312 14.441406-21.566406 6.03125 5.34375 12.960937 13.25 14.4375 21.566406l3.117187 17.570313 16.773438-6.085938c7.972656-2.894531 18.351562-1.148437 26.246094 1.214844-1.972656 9.351562-6.164063 21.191406-14.097656 25.769531zm0 0">
                                                </path>
                                            </svg></span>

                                        <span class="text-menu">Dược liệu cao cấp</span>

                                    </a>
                                    <div class="clear"></div>
                                    <ul class="child_menu_down  " id="child_menu_down_965">
                                        <li class=" child_down_968 cls">

                                            <a class="pr_child" data-id="965" href="javascript:void(0)" id="menu_item_968" title="Nhân sâm Hàn Quốc">




                                                <span class="text-menu">Nhân sâm Hàn Quốc</span>
                                            </a>
                                        </li>
                                        <li class=" child_down_976 cls">

                                            <a class="pr_child" data-id="965" href="javascript:void(0)" id="menu_item_976" title="Đông trùng hạ thảo">




                                                <span class="text-menu">Đông trùng hạ thảo</span>
                                            </a>
                                        </li>
                                        <li class=" child_down_981 cls">

                                            <a class="pr_child" data-id="965" href="javascript:void(0)" id="menu_item_981" title="Nấm linh chi Hàn Quốc">




                                                <span class="text-menu">Nấm linh chi Hàn Quốc</span>
                                            </a>
                                        </li>
                                        <li class=" child_down_984 cls">

                                            <a class="pr_child" data-id="965" href="javascript:void(0)" id="menu_item_984" title="Yến sào Khánh Hoà">




                                                <span class="text-menu">Yến sào Khánh Hoà</span>
                                            </a>
                                        </li>
                                        <li class=" child_down_994 cls">

                                            <a class="pr_child" data-id="965" href="javascript:void(0)" id="menu_item_994" title="Nhung hươu">




                                                <span class="text-menu">Nhung hươu</span>
                                            </a>
                                        </li>


                                    </ul>
                                </li>

                                <!--	LEVEL 0			-->
                                <li class="level_0  li-product-menu-item  closed" id="li-menu_item_966">

                                    <a href="thucphamchucnang.php" id="menu_item_966" class="menu_item_a wp_item click_acitvepr" title="Thực phẩm chức năng">

                                        <span class="svg_cat"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0">
                                                <defs>
                                                    <clipPath id="id1">
                                                        <path d="M 2.449219 5.457031 L 26.402344 5.457031 L 26.402344 22.878906 L 2.449219 22.878906 Z M 2.449219 5.457031 " clip-rule="nonzero"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#id1)">
                                                    <path fill="rgb(85.488892%, 14.509583%, 11.369324%)" d="M 23.734375 5.457031 L 5.121094 5.457031 C 3.652344 5.457031 2.460938 6.65625 2.460938 8.136719 L 2.460938 20.195312 C 2.460938 21.675781 3.652344 22.878906 5.121094 22.878906 L 23.734375 22.878906 C 25.203125 22.878906 26.390625 21.675781 26.390625 20.195312 L 26.390625 8.136719 C 26.390625 6.65625 25.203125 5.457031 23.734375 5.457031 Z M 23.734375 5.457031 " fill-opacity="1" fill-rule="nonzero"></path>
                                                </g>
                                                <path fill="rgb(100%, 100%, 0%)" d="M 15.589844 12.851562 L 14.425781 9.238281 L 13.261719 12.851562 L 9.492188 12.851562 L 12.542969 15.085938 L 11.375 18.699219 L 14.425781 16.464844 L 17.476562 18.699219 L 16.3125 15.085938 L 19.363281 12.851562 Z M 15.589844 12.851562 " fill-opacity="1" fill-rule="nonzero"></path>
                                            </svg></span>

                                        <span class="text-menu">Thực phẩm chức năng</span>

                                    </a>
                                </li>

                                <!--	LEVEL 0			-->
                                <li class="level_0  li-product-menu-item  closed" id="li-menu_item_967">

                                    <a href="thuonghieu.php" id="menu_item_967" class="menu_item_a wp_item click_acitvepr" title="Sản phẩm thương hiệu">

                                        <span class="svg_cat"><svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m337.903 358.822 23.413-37.992 42.252-14.41 4.681-44.377 31.789-31.295-15.114-42.006 15.114-42.007-31.788-31.295-4.681-44.376-42.252-14.41-23.413-37.993-44.285 5.347-37.619-24.008-37.619 24.01-44.284-5.347-23.413 37.992-42.252 14.41-4.681 44.376-31.789 31.295 15.114 42.007-15.114 42.007 31.788 31.294 4.681 44.377 42.252 14.41 23.413 37.992 44.285-5.346 37.619 24.009 37.619-24.009zm-211.332-170.079c0-71.367 58.062-129.429 129.429-129.429s129.429 58.062 129.429 129.429-58.062 129.429-129.429 129.429-129.429-58.062-129.429-129.429z">
                                                </path>
                                                <path d="m256 89.333c-54.815 0-99.41 44.595-99.41 99.41s44.595 99.41 99.41 99.41 99.41-44.595 99.41-99.41-44.595-99.41-99.41-99.41z">
                                                </path>
                                                <path d="m211.299 384.568-52.68 6.36-27.833-45.167-9.462-3.226-40.813 127.566 73.475-4.041 57.485 45.94 33.828-105.732z">
                                                </path>
                                                <path d="m381.214 345.762-27.834 45.166-52.679-6.36-34 21.7 33.828 105.732 57.485-45.94 73.475 4.041-40.813-127.566z">
                                                </path>
                                            </svg></span>

                                        <span class="text-menu">Sản phẩm thương hiệu</span>

                                    </a>
                                </li>

                                <!--	LEVEL 0			-->
                                <li class="level_0  li-product-menu-item  closed" id="li-menu_item_1008">

                                    <a href="vienhongsam.php" id="menu_item_1008" class="menu_item_a wp_item click_acitvepr" title="Viên Hồng Sâm">

                                        <span class="svg_cat"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0">
                                                <defs>
                                                    <clipPath id="id1">
                                                        <path d="M 2.449219 5.457031 L 26.402344 5.457031 L 26.402344 22.878906 L 2.449219 22.878906 Z M 2.449219 5.457031 " clip-rule="nonzero"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#id1)">
                                                    <path fill="rgb(85.488892%, 14.509583%, 11.369324%)" d="M 23.734375 5.457031 L 5.121094 5.457031 C 3.652344 5.457031 2.460938 6.65625 2.460938 8.136719 L 2.460938 20.195312 C 2.460938 21.675781 3.652344 22.878906 5.121094 22.878906 L 23.734375 22.878906 C 25.203125 22.878906 26.390625 21.675781 26.390625 20.195312 L 26.390625 8.136719 C 26.390625 6.65625 25.203125 5.457031 23.734375 5.457031 Z M 23.734375 5.457031 " fill-opacity="1" fill-rule="nonzero"></path>
                                                </g>
                                                <path fill="rgb(100%, 100%, 0%)" d="M 15.589844 12.851562 L 14.425781 9.238281 L 13.261719 12.851562 L 9.492188 12.851562 L 12.542969 15.085938 L 11.375 18.699219 L 14.425781 16.464844 L 17.476562 18.699219 L 16.3125 15.085938 L 19.363281 12.851562 Z M 15.589844 12.851562 " fill-opacity="1" fill-rule="nonzero"></path>
                                            </svg></span>

                                        <span class="text-menu">Viên Hồng Sâm</span>

                                    </a>
                                </li>
                            </div>


                            <!--	LEVEL 0			-->


                            <!--	LEVEL 1			-->
                            <div class="cat_filters_home_wrapper  cat_filters_965">
                                <ul class="cat_filters_home_ul">

                                    <li class="sub-menu sub-menu-level1  child_type_968 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="nhansamhanquoc.php" id="menu_item_968" title="Nhân sâm Hàn Quốc">
                                            Nhân sâm Hàn Quốc </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="nhansam6tuoi.php" id=" menu_item_969" title="Nhân sâm tươi">


                                                        <img class="lazy after-lazy" alt="Nhân sâm tươi" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452420.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452420.jpg.webp" style="display: inline;">
                                                        <span>Nhân sâm tươi</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="hongsamcukho.php" id=" menu_item_970" title="Hồng sâm củ khô">


                                                        <img class="lazy after-lazy" alt="Hồng sâm củ khô" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452415.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452415.jpg.webp" style="display: inline;">
                                                        <span>Hồng sâm củ khô</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="caohongsam.php" id=" menu_item_971" title="Cao hồng sâm">


                                                        <img class="lazy after-lazy" alt="Cao hồng sâm" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452448.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452448.jpg.webp" style="display: inline;">
                                                        <span>Cao hồng sâm</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="nuochongsam.php" id=" menu_item_972" title="Nước hồng sâm">


                                                        <img class="lazy after-lazy" alt="Nước hồng sâm" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452409.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452409.jpg.webp" style="display: inline;">
                                                        <span>Nước hồng sâm</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="samtammatong.php" id=" menu_item_973" title="Sâm tẩm mật ong">


                                                        <img class="lazy after-lazy" alt="Sâm tẩm mật ong" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452402.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452402.jpg.webp" style="display: inline;">
                                                        <span>Sâm tẩm mật ong</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="trasam.php" id=" menu_item_974" title="Trà sâm">


                                                        <img class="lazy after-lazy" alt="Trà sâm" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452395.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601452395.jpg.webp" style="display: inline;">
                                                        <span>Trà sâm</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_968  ">

                                                    <a href="keosam.php" id=" menu_item_975" title="Kẹo sâm">


                                                        <img class="lazy after-lazy" alt="Kẹo sâm" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601453799.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601453799.jpg.webp" style="display: inline;">
                                                        <span>Kẹo sâm</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>


                                    <li class="sub-menu sub-menu-level1  child_type_976 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="dongtrunghathao.php" id="menu_item_976" title="Đông trùng hạ thảo">
                                            Đông trùng hạ thảo </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu  sub-menu-level2 cls child_of_976  ">

                                                    <a href="dongtrungtaytang.php" id=" menu_item_977" title="Đông trùng Tây Tạng">


                                                        <span>Đông trùng Tây Tạng</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_976  ">

                                                    <a href="namdongtrunghathao.php" id=" menu_item_978" title="Nấm Đông Trùng Hạ Thảo">


                                                        <span>Nấm Đông Trùng Hạ Thảo</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_976  ">

                                                    <a href="viendongtrunghathao.php" id=" menu_item_979" title="Viên Đông trùng hạ thảo">


                                                        <span>Viên Đông trùng hạ thảo</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_976  ">

                                                    <a href="nuocdongtrunghathao.php" id=" menu_item_980" title="Nước đông trùng hạ thảo">


                                                        <span>Nước đông trùng hạ thảo</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>


                                    <li class="sub-menu sub-menu-level1  child_type_981 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="namlinhchihanquoc.php" id="menu_item_981" title="Nấm linh chi Hàn Quốc">
                                            Nấm linh chi Hàn Quốc </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_981  ">

                                                    <a href="namlinhchido.php" id=" menu_item_982" title="Nấm linh chi đỏ">


                                                        <img class="lazy after-lazy" alt="Nấm linh chi đỏ" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601454184.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601454184.jpg.webp" style="display: inline;">
                                                        <span>Nấm linh chi đỏ</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_981  ">

                                                    <a href="namlinhchivang.php" id=" menu_item_983" title="Nấm linh chi vàng">


                                                        <span>Nấm linh chi vàng</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu icon_level2 sub-menu-level2 cls child_of_981  ">

                                                    <a href="caonamlinhchi.php" id=" menu_item_985" title="Cao nấm linh chi">


                                                        <img class="lazy after-lazy" alt="Cao nấm linh chi" src="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601454492.jpg" srcset="https://onplaza.vn/images/menus/2020/09/30/resized/menu_1601454492.jpg.webp" style="display: inline;">
                                                        <span>Cao nấm linh chi</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_981  ">

                                                    <a href="namlinhchithuonghoang.php" id=" menu_item_986" title="Nấm linh chi thượng hoàng">


                                                        <span>Nấm linh chi thượng hoàng</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_981  ">

                                                    <a href="namlinhchithailat.php" id=" menu_item_987" title="Nấm linh chi thái lát">


                                                        <span>Nấm linh chi thái lát</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_981  ">

                                                    <a href="tranamlinhchi.php" id=" menu_item_988" title="Trà nấm linh chi">


                                                        <span>Trà nấm linh chi</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>


                                    <li class="sub-menu sub-menu-level1  child_type_984 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="yensaokhanhhoa.php" id="menu_item_984" title="Yến sào Khánh Hoà">
                                            Yến sào Khánh Hoà </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu  sub-menu-level2 cls child_of_984  ">

                                                    <a href="yentinhchenguyento.php" id=" menu_item_989" title="Yến tinh chế nguyên tổ">


                                                        <span>Yến tinh chế nguyên tổ</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_984  ">

                                                    <a href="yensochenguyento.php" id=" menu_item_990" title="Yến sơ chế nguyên tổ">


                                                        <span>Yến sơ chế nguyên tổ</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_984  ">

                                                    <a href="yenhuyetnguyento.php" id=" menu_item_991" title="Yến huyết nguyên tổ">


                                                        <span>Yến huyết nguyên tổ</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_984  ">

                                                    <a href="yenhongnguyento.php" id=" menu_item_992" title="Yến hồng nguyên tổ">


                                                        <span>Yến hồng nguyên tổ</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_984  ">

                                                    <a href="nuocyensanest.php" id=" menu_item_993" title="Nước yến sanest">


                                                        <span>Nước yến sanest</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>


                                    <li class="sub-menu sub-menu-level1  child_type_994 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="https://onplaza.vn/nhung-huou" id="menu_item_994" title="Nhung hươu">
                                            Nhung hươu </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu  sub-menu-level2 cls child_of_994  ">

                                                    <a href="nhunghuoutuoi.php" id=" menu_item_995" title="Nhung hươu tươi">


                                                        <span>Nhung hươu tươi</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_994  ">

                                                    <a href="caobanlong.php" id=" menu_item_996" title="Cao ban long">


                                                        <span>Cao ban long</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_994  ">

                                                    <a href="nhunghuoukhothailat.php" id=" menu_item_997" title="Nhung hươu khô thái lát">


                                                        <span>Nhung hươu khô thái lát</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>


                                    <li class="sub-menu sub-menu-level1  child_type_998 child_of_965  ">

                                        <a class="pr_cls1 level_pr" href="ancungnguu.php" id="menu_item_998" title="An cung ngưu">
                                            An cung ngưu </a>

                                        <!--	LEVEL 2			-->
                                        <div class="cat_filters_home_wrapper_sub_level2 cls">
                                            <ul class="cat_filters_home_ul">

                                                <li class="sub-menu  sub-menu-level2 cls child_of_998  ">

                                                    <a href="ancungnguutrungquoc.php" id=" menu_item_999" title="An cung ngưu trung quốc">


                                                        <span>An cung ngưu trung quốc</span>

                                                    </a>
                                                </li>

                                                <li class="sub-menu  sub-menu-level2 cls child_of_998  ">

                                                    <a href="ancungnguuhanquoc.php" id=" menu_item_1000" title="An cung ngưu hàn quốc">


                                                        <span>An cung ngưu hàn quốc</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="bt_after_child"></span>

                                    </li>



                                </ul>
                            </div>
                            <span class="bt_after"></span>

                            <div class="clear"></div>


                            <!--	LEVEL 0			-->


                            <!--	LEVEL 1			-->

                            <div class="clear"></div>


                            <!--	LEVEL 0			-->


                            <!--	LEVEL 1			-->

                            <div class="clear"></div>


                            <!--	LEVEL 0			-->


                            <!--	LEVEL 1			-->

                            <div class="clear"></div>

                            <!--	CHILDREN				-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slideshow_countdown cls">
                <div class="slideshow">


                    <div id="pav-slideShow">
                        <div id="fs-slider-home1">

                            <div class="item">


                                <a href="" title="">


                                    <img src="assets/img/banner/banner1.png" srcset="assets/img/banner/banner1.png">
                                </a>
                                <div class="container">
                                    <div class="slide-content">





                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>

                </div>


            </div>








            <div class="clear"> </div>


            <style>
                .background_all {}
            </style>
            <!-- <div class="background_all" alt="Thế giới dinh dưỡng" style="background-image: url(https://onplaza.vn/images/background/compress/trang_tintuc_1591873805.jpg.webp); display: block;background-color:#140600;background-position:unset" nhansamhanquoc.php>
                <div class="main_wrapper  main_wrapper_home  container">

                    <div class="main-area main-area-1col main-area-full">
                    </div>
                    <div class="clear"></div>
                </div>
            </div> -->


            <div class="clear"></div>



            <!--Trên Footer-->



            <div class="introdu pos1">
                <div class="wraper_block" style="background-color:#140600">
                    <div class="block_landingpages landingpages- landingpages_0 block" id="block_id_146">

                        <div class="landingpages landingpages_js">
                            <div class="container">
                                <div id="imce" class="row">
                                    <div id="ivzm" class="cell"><img id="ipu9v" src="assets/img/img/danhmucsanpham.png">
                                        <div id="iwh99" class="row">
                                            <div id="in7x9" class="cell card"><a href="dongtrunghathao.php" id="i6p0h" title="Đông trùng hạ thảo"><img id="ipvu8" src="assets/img/cat/cat1.png"></a>
                                            </div>
                                            <div id="inlj" class="cell card"><a href="namlinhchihanquoc.php" id="intmp" title="Nấm linh chi"><img src="assets/img/cat/cat2.png" id="ip7w2"></a></div>
                                            <div id="iwqnz" class="cell card"><a href="yensaokhanhhoa.php" id="iwwj7" title="Yến xào"><img src="assets/img/cat/cat3.png" id="imc5f"></a></div>
                                            <div id="is4k2" class="cell card"><a href="nhunghuou.php" id="iz6w7" title="Nhung hươu"><img src="assets/img/cat/cat4.png" id="idzd2"></a></div>
                                            <div id="i4icf" class="cell card card_none"><a href="ancungnguu.php" id="ik4jc" title="An cung ngưu"><img src="assets/img/cat/cat5.png" id="iyca3"></a></div>
                                        </div>
                                        <div id="i16j" class="row hide_mobile">
                                            <div id="i02g" class="cell card2"><a id="izn0j" title="Sâm ngọc linh" href="samngoclinh.php"><img id="ibwqh" src="assets/img/cat/cat6.png"></a>
                                            </div>
                                            <div id="il7rb" class="cell card2"><a title="" href="dongtrunghathao.php" id="i5ecg"><img src="assets/img/cat/cat7.png" id="iea3t"></a></div>
                                            <div id="i9h4f" class="cell card2"><a title="" href="yensaokhanhhoa.php" id="i1jpv"><img src="assets/img/cat/cat8.png" id="imi8i"></a></div>
                                            <div id="i9exn" class="cell card2"><a title="" href="samngoclinh.php" id="ia0sl"><img src="assets/img/cat/cat9.png" id="iu7ib"></a></div>
                                            <div id="io5j3" class="cell card2"><a title="" href="nhunghuou.php" id="i8w1r"><img src="assets/img/cat/cat10.png" id="ih2cr"></a></div>
                                            <div id="i641n" class="cell card2"><a title="" href="ancungnguu.php" id="i3yka"><img src="assets/img/cat/cat11.png" id="iyh3z"></a></div>
                                            <div id="itaeg" class="cell card2"><a title="" href="matongnguyenchat.php" id="itl27"><img src="assets/img/cat/cat12.png" id="ismk1"></a></div>
                                            <div id="ifo7g" class="cell card2"><a title="" href="namlinhchihanquoc.php" id="i569z"><img src="assets/img/cat/cat13.png" id="iozwv"></a></div>
                                            <div id="i6pcx" class="cell card2"><a title="" href="ruousamngoclinh.php" id="iclbk"><img src="assets/img/cat/cat14.png" id="if88k"></a></div>
                                            <div id="if50k" class="cell card2 card2_none"><a title="" href="ancungnguu.php" id="in09x"><img src="assets/img/cat/cat15.png" id="i2pyq"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="wraper_block">
                    <div class="block_products_home products_home-_products_list products_home_1 block" id="block_id_121">
                        <div class="wapper-content-page product_home_content" id="products-cat">
                            <div class="banner_home menu_sticky banner_39 sticky_1">
                                <a href="dongtrunghathao.php" title="Giá đông trùng hạ thảo">
                                    <img class="lazy after-lazy" alt="Giá đông trùng hạ thảo" src="assets/img/banner/banner2.png" srcset="assets/img/banner/banner2.png" style="display: inline;">
                                </a>
                            </div>

                            <div class="cat_item_store lazy after-lazy" alt="Giá đông trùng hạ thảo" style="background-image: url(&quot;https://onplaza.vn/images/products/cat/compress/product_back1_1590059181.jpg.webp&quot;); display: block;">
                                <div class="container">

                                    <div class="product_ajj">
                                        <div class="products_home_slideshow" id="products_home_slideshow_39">
                                            <!--	EACH Product				-->
                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/dong-trung-ha-thao-nguyen-con-loai-20ghop-d003/" title="Đông trùng hạ thảo nguyên con loại 20g/hộp D003 (D400-20V1)">

                                                            <img class="lazy after-lazy" alt="Đông trùng hạ thảo nguyên con loại 20g/hộp D003 (D400-20V1)" src="https://onplaza.vn/images/products/2022/12/08/resized/avata-d003_1670489130.jpg" srcset="https://onplaza.vn/images/products/2022/12/08/resized/avata-d003_1670489130.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/dong-trung-ha-thao-nguyen-con-loai-20ghop-d003/" title="Đông trùng hạ thảo nguyên con loại 20g/hộp D003 (D400-20V1)" class="name">
                                                            Đông trùng hạ thảo nguyên con loại 20g/hộp D003 (D400-20V1)
                                                        </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">22.000.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">32.000.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/dong-trung-ha-thao-nguyen-con-loai-20ghop-d003/" title="Mua sản phẩm Đông trùng hạ thảo nguyên con loại 20g/hộp D003 (D400-20V1)">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="dongtrungtaytang.php-cao-cap-hop-100gr/" title="Đông trùng hạ thảo Tây Tạng cao cấp hộp 100gr loại 500 – 600 con (D600-100V1)">

                                                            <img class="lazy after-lazy" alt="Đông trùng hạ thảo Tây Tạng cao cấp hộp 100gr loại 500 – 600 con (D600-100V1)" src="https://onplaza.vn/images/products/2020/08/03/resized/dtht-tay-tang-hop-cao-cap-hop-100-gr-loai-500-600-con_1596443642.jpg" srcset="https://onplaza.vn/images/products/2020/08/03/resized/dtht-tay-tang-hop-cao-cap-hop-100-gr-loai-500-600-con_1596443642.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="dongtrungtaytang.php-cao-cap-hop-100gr/" title="Đông trùng hạ thảo Tây Tạng cao cấp hộp 100gr loại 500 – 600 con (D600-100V1)" class="name">
                                                            Đông trùng hạ thảo Tây Tạng cao cấp hộp 100gr loại 500 – 600
                                                            con... </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">83.000.000₫</span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="dongtrungtaytang.php-cao-cap-hop-100gr/" title="Mua sản phẩm Đông trùng hạ thảo Tây Tạng cao cấp hộp 100gr loại 500 – 600 con (D600-100V1)">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="dongtrungtaytang.php-nguyen-con-d001/" title="Đông trùng hạ thảo Tây Tạng hộp 5g - D001 (D400-5V1)">

                                                            <img class="lazy after-lazy" alt="Đông trùng hạ thảo Tây Tạng hộp 5g - D001 (D400-5V1)" src="https://onplaza.vn/images/products/2020/07/10/resized/dtht-tay-tang-nguyen-con-cao-cap-loai-5-g-hop-d001_1594348810.jpg" srcset="https://onplaza.vn/images/products/2020/07/10/resized/dtht-tay-tang-nguyen-con-cao-cap-loai-5-g-hop-d001_1594348810.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="dongtrungtaytang.php-nguyen-con-d001/" title="Đông trùng hạ thảo Tây Tạng hộp 5g - D001 (D400-5V1)" class="name">
                                                            Đông trùng hạ thảo Tây Tạng hộp 5g - D001 (D400-5V1) </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">6.500.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">7.857.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="dongtrungtaytang.php-nguyen-con-d001/" title="Mua sản phẩm Đông trùng hạ thảo Tây Tạng hộp 5g - D001 (D400-5V1)">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/dong-trung-ha-thao-han-quoc-60-vien-hop-go-cao-cap-d023/" title="Đông trùng hạ thảo Hàn Quốc 60 viên hộp gỗ cao cấp D023">

                                                            <img class="lazy after-lazy" alt="Đông trùng hạ thảo Hàn Quốc 60 viên hộp gỗ cao cấp D023" src="https://onplaza.vn/images/products/2023/03/29/resized/avatar-d023_1680078110.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/avatar-d023_1680078110.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/dong-trung-ha-thao-han-quoc-60-vien-hop-go-cao-cap-d023/" title="Đông trùng hạ thảo Hàn Quốc 60 viên hộp gỗ cao cấp D023" class="name">
                                                            Đông trùng hạ thảo Hàn Quốc 60 viên hộp gỗ cao cấp D023 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.350.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">2.428.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/dong-trung-ha-thao-han-quoc-60-vien-hop-go-cao-cap-d023/" title="Mua sản phẩm Đông trùng hạ thảo Hàn Quốc 60 viên hộp gỗ cao cấp D023">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/dtht-hop-go-vang-60-goi-cao-cap-d043/" title="Đông trùng hạ thảo hộp gỗ vàng 60 gói cao cấp D043">

                                                            <img class="lazy after-lazy" alt="Đông trùng hạ thảo hộp gỗ vàng 60 gói cao cấp D043" src="https://onplaza.vn/images/products/2023/03/29/resized/avatar-d043_1680078100.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/avatar-d043_1680078100.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/dtht-hop-go-vang-60-goi-cao-cap-d043/" title="Đông trùng hạ thảo hộp gỗ vàng 60 gói cao cấp D043" class="name">
                                                            Đông trùng hạ thảo hộp gỗ vàng 60 gói cao cấp D043 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.300.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.857.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/dtht-hop-go-vang-60-goi-cao-cap-d043/" title="Mua sản phẩm Đông trùng hạ thảo hộp gỗ vàng 60 gói cao cấp D043">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="namdongtrunghathao.php-de-vuong-a5000/" title="Nấm Đông trùng hạ thảo Đế Vương A5000 D231">

                                                            <img class="lazy after-lazy" alt="Nấm Đông trùng hạ thảo Đế Vương A5000 D231" src="https://onplaza.vn/images/products/2022/12/09/resized/avata-d231_1670558498.jpg" srcset="https://onplaza.vn/images/products/2022/12/09/resized/avata-d231_1670558498.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="namdongtrunghathao.php-de-vuong-a5000/" title="Nấm Đông trùng hạ thảo Đế Vương A5000 D231" class="name">
                                                            Nấm Đông trùng hạ thảo Đế Vương A5000 D231 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">4.000.000₫</span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="namdongtrunghathao.php-de-vuong-a5000/" title="Mua sản phẩm Nấm Đông trùng hạ thảo Đế Vương A5000 D231">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>


                                            <!--	end EACH Product				-->

                                        </div>

                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="banner_home menu_sticky banner_42 sticky_2">
                                <a href="nhansamhanquoc.php" title="Sâm Hàn Quốc">
                                    <img class="lazy after-lazy" alt="Sâm Hàn Quốc" src="assets/img/banner/banner3.png" srcset="assets/img/banner/banner3.png" style="display: inline;">
                                </a>
                            </div>

                            <div class="cat_item_store lazy after-lazy" alt="Sâm Hàn Quốc" style="background-image: url(assets/img/background/bg1.png); display: block;">
                                <div class="container">

                                    <div class="product_ajj">
                                        <div class="products_home_slideshow" id="products_home_slideshow_42">
                                            <!--	EACH Product				-->
                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/sam-tuoi-han-quoc-cao-cap-6-cu-kg-ns004/" title="Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004">

                                                            <img class="lazy after-lazy" alt="Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004" src="https://onplaza.vn/images/products/2023/03/29/resized/ns004-avatar_1680078879.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/ns004-avatar_1680078879.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/sam-tuoi-han-quoc-cao-cap-6-cu-kg-ns004/" title="Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004" class="name">
                                                            Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">2.200.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">3.570.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/sam-tuoi-han-quoc-cao-cap-6-cu-kg-ns004/" title="Mua sản phẩm Sâm tươi Hàn Quốc cao cấp loại 6 củ/kg NS004">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="caohongsam.php-han-quoc-cao-cap-6-nam-tuoi-hop-2-lo-ns035/" title="Cao hồng sâm Hàn Quốc cao cấp 6 năm tuổi hộp 2 lọ NS035">

                                                            <img class="lazy after-lazy" alt="Cao hồng sâm Hàn Quốc cao cấp 6 năm tuổi hộp 2 lọ NS035" src="https://onplaza.vn/images/products/2023/03/29/resized/ns035-avatar_1680078983.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/ns035-avatar_1680078983.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="caohongsam.php-han-quoc-cao-cap-6-nam-tuoi-hop-2-lo-ns035/" title="Cao hồng sâm Hàn Quốc cao cấp 6 năm tuổi hộp 2 lọ NS035" class="name">
                                                            Cao hồng sâm Hàn Quốc cao cấp 6 năm tuổi hộp 2 lọ NS035 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">999.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.430.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="caohongsam.php-han-quoc-cao-cap-6-nam-tuoi-hop-2-lo-ns035/" title="Mua sản phẩm Cao hồng sâm Hàn Quốc cao cấp 6 năm tuổi hộp 2 lọ NS035">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/pocheon-nuoc-hong-sam-cao-ly-nguyen-chat-80ml30-goi-ns223/" title="POCHEON nước hồng sâm Cao Ly nguyên chất 80ml30 gói NS223">

                                                            <img class="lazy after-lazy" alt="POCHEON nước hồng sâm Cao Ly nguyên chất 80ml30 gói NS223" src="https://onplaza.vn/images/products/2023/03/29/resized/ns223-avatar_1680079003.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/ns223-avatar_1680079003.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/pocheon-nuoc-hong-sam-cao-ly-nguyen-chat-80ml30-goi-ns223/" title="POCHEON nước hồng sâm Cao Ly nguyên chất 80ml30 gói NS223" class="name">
                                                            POCHEON nước hồng sâm Cao Ly nguyên chất 80ml30 gói NS223
                                                        </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.200.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">2.140.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/pocheon-nuoc-hong-sam-cao-ly-nguyen-chat-80ml30-goi-ns223/" title="Mua sản phẩm POCHEON nước hồng sâm Cao Ly nguyên chất 80ml30 gói NS223">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/hong-sam-thai-lat-tam-mat-ong-6-nam-tuoi-cao-cap-bio-apgold-han-quoc-ns030/" title="Hồng sâm thái lát tẩm mật ong 6 năm tuổi cao cấp Bio Apgold Hàn Quốc NS030">

                                                            <img class="lazy after-lazy" alt="Hồng sâm thái lát tẩm mật ong 6 năm tuổi cao cấp Bio Apgold Hàn Quốc NS030" src="https://onplaza.vn/images/products/2020/07/27/resized/hong-sam-thai-lat-tam-mat-ong-6-nam-tuoi-cao-cap-bio-apgold-han-quoc-ns030_1595820536.jpg" srcset="https://onplaza.vn/images/products/2020/07/27/resized/hong-sam-thai-lat-tam-mat-ong-6-nam-tuoi-cao-cap-bio-apgold-han-quoc-ns030_1595820536.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/hong-sam-thai-lat-tam-mat-ong-6-nam-tuoi-cao-cap-bio-apgold-han-quoc-ns030/" title="Hồng sâm thái lát tẩm mật ong 6 năm tuổi cao cấp Bio Apgold Hàn Quốc NS030" class="name">
                                                            Hồng sâm thái lát tẩm mật ong 6 năm tuổi cao cấp Bio Apgold
                                                            Hàn... </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">980.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.400.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/hong-sam-thai-lat-tam-mat-ong-6-nam-tuoi-cao-cap-bio-apgold-han-quoc-ns030/" title="Mua sản phẩm Hồng sâm thái lát tẩm mật ong 6 năm tuổi cao cấp Bio Apgold Hàn Quốc NS030">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/hong-sam-nguyen-cu-say-kho-han-quoc-hop-thiec-do-300g-ns074/" title="Hồng Sâm Nguyên Củ Sấy Khô Hàn Quốc hộp thiếc đỏ loại 300g NS074">

                                                            <img class="lazy after-lazy" alt="Hồng Sâm Nguyên Củ Sấy Khô Hàn Quốc hộp thiếc đỏ loại 300g NS074" src="https://onplaza.vn/images/products/2022/10/07/resized/hong-sam-nguyen-cu-say-kho-300gr-hop-do-ns074_1665127239.jpg" srcset="https://onplaza.vn/images/products/2022/10/07/resized/hong-sam-nguyen-cu-say-kho-300gr-hop-do-ns074_1665127239.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/hong-sam-nguyen-cu-say-kho-han-quoc-hop-thiec-do-300g-ns074/" title="Hồng Sâm Nguyên Củ Sấy Khô Hàn Quốc hộp thiếc đỏ loại 300g NS074" class="name">
                                                            Hồng Sâm Nguyên Củ Sấy Khô Hàn Quốc hộp thiếc đỏ loại 300g
                                                            NS074 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">2.400.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">3.430.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/hong-sam-nguyen-cu-say-kho-han-quoc-hop-thiec-do-300g-ns074/" title="Mua sản phẩm Hồng Sâm Nguyên Củ Sấy Khô Hàn Quốc hộp thiếc đỏ loại 300g NS074">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/nuoc-ep-hong-sam-han-quoc-6-nam-tuoi-hop-30-ns046/" title="Nước ép hồng sâm Hàn Quốc 6 năm tuổi hộp 30 gói NS046">

                                                            <img class="lazy after-lazy" alt="Nước ép hồng sâm Hàn Quốc 6 năm tuổi hộp 30 gói NS046" src="https://onplaza.vn/images/products/2023/03/29/resized/ns046avatar_1680078991.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/ns046avatar_1680078991.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/nuoc-ep-hong-sam-han-quoc-6-nam-tuoi-hop-30-ns046/" title="Nước ép hồng sâm Hàn Quốc 6 năm tuổi hộp 30 gói NS046" class="name">
                                                            Nước ép hồng sâm Hàn Quốc 6 năm tuổi hộp 30 gói NS046 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">750.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.070.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/nuoc-ep-hong-sam-han-quoc-6-nam-tuoi-hop-30-ns046/" title="Mua sản phẩm Nước ép hồng sâm Hàn Quốc 6 năm tuổi hộp 30 gói NS046">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>


                                            <!--	end EACH Product				-->

                                        </div>

                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="banner_home menu_sticky banner_4 sticky_3">
                                <a href="yensaokhanhhoa.php" title="Yến sào Khánh Hoà">
                                    <img class="lazy after-lazy" alt="Yến sào Khánh Hoà" src="assets/img/banner/banner4.png" srcset="assets/img/banner/banner4.png" style="display: inline;">
                                </a>
                            </div>

                            <div class="cat_item_store lazy after-lazy" alt="Yến sào Khánh Hoà" style="background-image: url(assets/img/background/bg2.png); display: block;">
                                <div class="container">

                                    <div class="product_ajj">
                                        <div class="products_home_slideshow" id="products_home_slideshow_4">
                                            <!--	EACH Product				-->
                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-100g-y014/" title="Yến trắng tinh chế Khánh Hòa hộp 100g Y014 | Onplaza">

                                                            <img class="lazy after-lazy" alt="Yến trắng tinh chế Khánh Hòa hộp 100g Y014 | Onplaza" src="https://onplaza.vn/images/products/2023/03/29/resized/y014--avatar_1680065112.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y014--avatar_1680065112.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-100g-y014/" title="Yến trắng tinh chế Khánh Hòa hộp 100g Y014 | Onplaza" class="name">
                                                            Yến trắng tinh chế Khánh Hòa hộp 100g Y014 | Onplaza </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">6.600.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">9.100.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-100g-y014/" title="Mua sản phẩm Yến trắng tinh chế Khánh Hòa hộp 100g Y014 | Onplaza">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-hop-qua-tang-100g-y017/" title="Tổ yến tinh chế Khánh Hòa hộp quà tặng 100g Y017">

                                                            <img class="lazy after-lazy" alt="Tổ yến tinh chế Khánh Hòa hộp quà tặng 100g Y017" src="https://onplaza.vn/images/products/2023/03/29/resized/y017--avatar_1680065183.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y017--avatar_1680065183.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/yen-trang-tinh-che-hop-qua-tang-100g-y017/" title="Tổ yến tinh chế Khánh Hòa hộp quà tặng 100g Y017" class="name">
                                                            Tổ yến tinh chế Khánh Hòa hộp quà tặng 100g Y017 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">6.920.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">9.600.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-hop-qua-tang-100g-y017/" title="Mua sản phẩm Tổ yến tinh chế Khánh Hòa hộp quà tặng 100g Y017">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/to-yen-trang-so-che-thuong-hang-nha-yen-100g-hop-y066/" title="Tổ yến trắng sơ chế Nhà Yến Nha Trang hộp 100gr Y066 | Onplaza">

                                                            <img class="lazy after-lazy" alt="Tổ yến trắng sơ chế Nhà Yến Nha Trang hộp 100gr Y066 | Onplaza" src="https://onplaza.vn/images/products/2023/03/29/resized/y066-avatar_1680073060.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y066-avatar_1680073060.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/to-yen-trang-so-che-thuong-hang-nha-yen-100g-hop-y066/" title="Tổ yến trắng sơ chế Nhà Yến Nha Trang hộp 100gr Y066 | Onplaza" class="name">
                                                            Tổ yến trắng sơ chế Nhà Yến Nha Trang hộp 100gr Y066 |
                                                            Onplaza </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">5.000.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">6.500.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/to-yen-trang-so-che-thuong-hang-nha-yen-100g-hop-y066/" title="Mua sản phẩm Tổ yến trắng sơ chế Nhà Yến Nha Trang hộp 100gr Y066 | Onplaza">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-loai-2-100g-hop-y063/" title="Yến tinh chế thượng hạng Nhà yến Nha Trang hộp 100g Y063 (loại 2)">

                                                            <img class="lazy after-lazy" alt="Yến tinh chế thượng hạng Nhà yến Nha Trang hộp 100g Y063 (loại 2)" src="https://onplaza.vn/images/products/2023/03/29/resized/y063-avatar_1680073075.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y063-avatar_1680073075.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/yen-trang-tinh-che-loai-2-100g-hop-y063/" title="Yến tinh chế thượng hạng Nhà yến Nha Trang hộp 100g Y063 (loại 2)" class="name">
                                                            Yến tinh chế thượng hạng Nhà yến Nha Trang hộp 100g Y063
                                                            (loại 2) </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">4.400.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">5.720.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-loai-2-100g-hop-y063/" title="Mua sản phẩm Yến tinh chế thượng hạng Nhà yến Nha Trang hộp 100g Y063 (loại 2)">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-50g-y013/" title="Yến sào tinh chế Khánh Hòa hộp 50g Y013">

                                                            <img class="lazy after-lazy" alt="Yến sào tinh chế Khánh Hòa hộp 50g Y013" src="https://onplaza.vn/images/products/2023/03/29/resized/y013--avatar_1680065093.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y013--avatar_1680065093.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-50g-y013/" title="Yến sào tinh chế Khánh Hòa hộp 50g Y013" class="name">
                                                            Yến sào tinh chế Khánh Hòa hộp 50g Y013 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">3.300.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">4.570.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/yen-trang-tinh-che-khanh-hoa-hop-50g-y013/" title="Mua sản phẩm Yến sào tinh chế Khánh Hòa hộp 50g Y013">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/to-yen-trang-so-che-nha-yen-thuong-hang-2-100g-hop-y067/" title="Tổ yến trắng sơ chế Nhà yến Nha Trang loại 2 hộp 100gr - Y067">

                                                            <img class="lazy after-lazy" alt="Tổ yến trắng sơ chế Nhà yến Nha Trang loại 2 hộp 100gr - Y067" src="https://onplaza.vn/images/products/2023/03/29/resized/y067-avatar_1680073042.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/y067-avatar_1680073042.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#fff" href="https://onplaza.vn/to-yen-trang-so-che-nha-yen-thuong-hang-2-100g-hop-y067/" title="Tổ yến trắng sơ chế Nhà yến Nha Trang loại 2 hộp 100gr - Y067" class="name">
                                                            Tổ yến trắng sơ chế Nhà yến Nha Trang loại 2 hộp 100gr -
                                                            Y067 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#ffe1b8">4.500.000₫</span>
                                                        <span class="price_old " style="color:#ffe1b8">
                                                            <span class="item_old">5.850.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/to-yen-trang-so-che-nha-yen-thuong-hang-2-100g-hop-y067/" title="Mua sản phẩm Tổ yến trắng sơ chế Nhà yến Nha Trang loại 2 hộp 100gr - Y067">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>


                                            <!--	end EACH Product				-->

                                        </div>

                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="banner_home menu_sticky banner_36 sticky_4">
                                <a href="https://onplaza.vn/gia-nam-linh-chi" title="Giá nấm linh chi Hàn Quốc">
                                    <img class="lazy after-lazy" alt="Giá nấm linh chi Hàn Quốc" src="assets/img/banner/banner5.png" srcset="assets/img/banner/banner5.png" style="display: inline;">
                                </a>
                            </div>

                            <div class="cat_item_store lazy after-lazy" alt="Giá nấm linh chi Hàn Quốc" style="background-image: url(assets/img/background/bg3.png); display: block;">
                                <div class="container">

                                    <div class="product_ajj">
                                        <div class="products_home_slideshow" id="products_home_slideshow_36">
                                            <!--	EACH Product				-->
                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="namlinhchivang.php-thuong-hang-dac-biet-dang-tui-l038/" title="Nấm linh chi vàng thượng hạng đặc biệt dạng túi L038">

                                                            <img class="lazy after-lazy" alt="Nấm linh chi vàng thượng hạng đặc biệt dạng túi L038" src="https://onplaza.vn/images/products/2023/03/29/resized/l038_1680075849.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/l038_1680075849.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="namlinhchivang.php-thuong-hang-dac-biet-dang-tui-l038/" title="Nấm linh chi vàng thượng hạng đặc biệt dạng túi L038" class="name">
                                                            Nấm linh chi vàng thượng hạng đặc biệt dạng túi L038 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">2.450.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">3.500.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="namlinhchivang.php-thuong-hang-dac-biet-dang-tui-l038/" title="Mua sản phẩm Nấm linh chi vàng thượng hạng đặc biệt dạng túi L038">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="namlinhchido.php-han-quoc-l002/" title="Nấm linh chi đỏ Hàn Quốc L002">

                                                            <img class="lazy after-lazy" alt="Nấm linh chi đỏ Hàn Quốc L002" src="https://onplaza.vn/images/products/2023/03/29/resized/l002_1680075837.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/l002_1680075837.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="namlinhchido.php-han-quoc-l002/" title="Nấm linh chi đỏ Hàn Quốc L002" class="name">
                                                            Nấm linh chi đỏ Hàn Quốc L002 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.000.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.500.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="namlinhchido.php-han-quoc-l002/" title="Mua sản phẩm Nấm linh chi đỏ Hàn Quốc L002">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="caonamlinhchi.php-han-quoc-cao-cap-loai-3-lo-hop-go-den-gold-l029/" title="Cao Linh Chi Hàn Quốc cao cấp loại 3 lọ hộp gỗ đen Gold L029">

                                                            <img class="lazy after-lazy" alt="Cao Linh Chi Hàn Quốc cao cấp loại 3 lọ hộp gỗ đen Gold L029" src="https://onplaza.vn/images/products/2023/03/29/resized/l029_1680075843.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/l029_1680075843.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="caonamlinhchi.php-han-quoc-cao-cap-loai-3-lo-hop-go-den-gold-l029/" title="Cao Linh Chi Hàn Quốc cao cấp loại 3 lọ hộp gỗ đen Gold L029" class="name">
                                                            Cao Linh Chi Hàn Quốc cao cấp loại 3 lọ hộp gỗ đen Gold
                                                            L029... </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.100.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.570.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="caonamlinhchi.php-han-quoc-cao-cap-loai-3-lo-hop-go-den-gold-l029/" title="Mua sản phẩm Cao Linh Chi Hàn Quốc cao cấp loại 3 lọ hộp gỗ đen Gold L029">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>


                                            <!--	end EACH Product				-->

                                        </div>

                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="banner_home menu_sticky banner_48 sticky_5">
                                <a href="nhunghuou.php" title="Giá nhung hươu">
                                    <img class="lazy after-lazy" alt="Giá nhung hươu" src="assets/img/banner/banner6.png" srcset="assets/img/banner/banner6.png" style="display: inline;">
                                </a>
                            </div>

                            <div class="cat_item_store lazy after-lazy" alt="Giá nhung hươu" style="background-image: url(assets/img/background/bg4.png); display: block;">
                                <div class="container">

                                    <div class="product_ajj">
                                        <div class="products_home_slideshow" id="products_home_slideshow_48">
                                            <!--	EACH Product				-->
                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="nhunghuoutuoi.php-hoang-da-san-ban-nh009/" title="Nhung Hươu Tươi Hoang Dã Săn Bắn-NH009">

                                                            <img class="lazy after-lazy" alt="Nhung Hươu Tươi Hoang Dã Săn Bắn-NH009" src="https://onplaza.vn/images/products/2023/03/29/resized/avatar-nhung-huou-tuoi_1680079062.jpg" srcset="https://onplaza.vn/images/products/2023/03/29/resized/avatar-nhung-huou-tuoi_1680079062.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="nhunghuoutuoi.php-hoang-da-san-ban-nh009/" title="Nhung Hươu Tươi Hoang Dã Săn Bắn-NH009" class="name">
                                                            Nhung Hươu Tươi Hoang Dã Săn Bắn-NH009 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.400.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">2.000.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="nhunghuoutuoi.php-hoang-da-san-ban-nh009/" title="Mua sản phẩm Nhung Hươu Tươi Hoang Dã Săn Bắn-NH009">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/nhung-huou-say-kho-thai-lat-sibiri-100g-nh004/" title="Nhung hươu sấy khô thái lát Siberia 100g -NH004">

                                                            <img class="lazy after-lazy" alt="Nhung hươu sấy khô thái lát Siberia 100g -NH004" src="https://onplaza.vn/images/products/2022/12/08/resized/avata-nh004_1670491161.jpg" srcset="https://onplaza.vn/images/products/2022/12/08/resized/avata-nh004_1670491161.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/nhung-huou-say-kho-thai-lat-sibiri-100g-nh004/" title="Nhung hươu sấy khô thái lát Siberia 100g -NH004" class="name">
                                                            Nhung hươu sấy khô thái lát Siberia 100g -NH004 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.900.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">2.714.286₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/nhung-huou-say-kho-thai-lat-sibiri-100g-nh004/" title="Mua sản phẩm Nhung hươu sấy khô thái lát Siberia 100g -NH004">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="caobanlong.php-sibiri-cao-cap-goi-100g-nh001/" title="Cao Ban Long Siberia cao cấp (gói 100g)-NH001">

                                                            <img class="lazy after-lazy" alt="Cao Ban Long Siberia cao cấp (gói 100g)-NH001" src="https://onplaza.vn/images/products/2022/12/08/resized/avata-nh001_1670491097.jpg" srcset="https://onplaza.vn/images/products/2022/12/08/resized/avata-nh001_1670491097.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="caobanlong.php-sibiri-cao-cap-goi-100g-nh001/" title="Cao Ban Long Siberia cao cấp (gói 100g)-NH001" class="name">
                                                            Cao Ban Long Siberia cao cấp (gói 100g)-NH001 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.200.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.714.286₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="caobanlong.php-sibiri-cao-cap-goi-100g-nh001/" title="Mua sản phẩm Cao Ban Long Siberia cao cấp (gói 100g)-NH001">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/vien-sam-han-quoc-nhung-huou-linh-chi-dong-trung-daedong-cao-cap-hop-120-vien-nh014/" title="Viên sâm Hàn Quốc nhung hươu linh chi đông trùng Daedong cao cấp hộp 120 viên NH014">

                                                            <img class="lazy after-lazy" alt="Viên sâm Hàn Quốc nhung hươu linh chi đông trùng Daedong cao cấp hộp 120 viên NH014" src="https://onplaza.vn/images/products/2021/12/30/resized/vien-sam-han-quoc-nhung-huou-linh-chi-dong-trung-daedong-cao-cap-hop-120-vien-nh014_1640848955.jpg" srcset="https://onplaza.vn/images/products/2021/12/30/resized/vien-sam-han-quoc-nhung-huou-linh-chi-dong-trung-daedong-cao-cap-hop-120-vien-nh014_1640848955.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/vien-sam-han-quoc-nhung-huou-linh-chi-dong-trung-daedong-cao-cap-hop-120-vien-nh014/" title="Viên sâm Hàn Quốc nhung hươu linh chi đông trùng Daedong cao cấp hộp 120 viên NH014" class="name">
                                                            Viên sâm Hàn Quốc nhung hươu linh chi đông trùng Daedong cao
                                                            cấp hộp 120... </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">800.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.040.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/vien-sam-han-quoc-nhung-huou-linh-chi-dong-trung-daedong-cao-cap-hop-120-vien-nh014/" title="Mua sản phẩm Viên sâm Hàn Quốc nhung hươu linh chi đông trùng Daedong cao cấp hộp 120 viên NH014">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="nhunghuoutuoi.php-non-mem-huong-son-loai-hang-chat-luong-cao/" title="Nhung hươu tươi non mềm Hương Sơn loại hàng chất lượng cao">

                                                            <img class="lazy after-lazy" alt="Nhung hươu tươi non mềm Hương Sơn loại hàng chất lượng cao" src="https://onplaza.vn/images/products/2020/11/24/resized/nhung-huou-tuoi-non-mem-huong-son-loai-chat-luong-cao_1606203913.jpg" srcset="https://onplaza.vn/images/products/2020/11/24/resized/nhung-huou-tuoi-non-mem-huong-son-loai-chat-luong-cao_1606203913.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="nhunghuoutuoi.php-non-mem-huong-son-loai-hang-chat-luong-cao/" title="Nhung hươu tươi non mềm Hương Sơn loại hàng chất lượng cao" class="name">
                                                            Nhung hươu tươi non mềm Hương Sơn loại hàng chất lượng cao
                                                        </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">7.000.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">10.000.000₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="nhunghuoutuoi.php-non-mem-huong-son-loai-hang-chat-luong-cao/" title="Mua sản phẩm Nhung hươu tươi non mềm Hương Sơn loại hàng chất lượng cao">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>

                                            <div class="item">
                                                <div class="frame_inner">
                                                    <figure class="product_image ">

                                                        <a href="https://onplaza.vn/nhung-huou-thai-lat-50g-sibiri-nh005/" title="Nhung hươu khô thái lát 50g Siberia-NH005">

                                                            <img class="lazy after-lazy" alt="Nhung hươu khô thái lát 50g Siberia-NH005" src="https://onplaza.vn/images/products/2021/08/12/resized/nhung-huou-thai-lat-50g-sibiri-nh005_1628763044.jpg" srcset="https://onplaza.vn/images/products/2021/08/12/resized/nhung-huou-thai-lat-50g-sibiri-nh005_1628763044.jpg.webp" style="display: inline;"> </a>

                                                    </figure>



                                                    <div class="name">

                                                        <a style="color:#FFFFFF" href="https://onplaza.vn/nhung-huou-thai-lat-50g-sibiri-nh005/" title="Nhung hươu khô thái lát 50g Siberia-NH005" class="name">
                                                            Nhung hươu khô thái lát 50g Siberia-NH005 </a>
                                                    </div>

                                                    <div class="price_arae">

                                                        <span class="price_current" style="color:#FFE1B8">1.000.000₫</span>
                                                        <span class="price_old " style="color:#FFE1B8">
                                                            <span class="item_old">1.428.571₫ </span>
                                                        </span>

                                                    </div>







                                                    <div class="buy_nows">
                                                        <a href="https://onplaza.vn/nhung-huou-thai-lat-50g-sibiri-nh005/" title="Mua sản phẩm Nhung hươu khô thái lát 50g Siberia-NH005">
                                                            Mua sản phẩm
                                                        </a>
                                                    </div>


                                                </div> <!-- end .frame_inner -->

                                            </div>


                                            <!--	end EACH Product				-->

                                        </div>

                                    </div>
                                </div>


                                <div class="clear"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="wraper_block" style="background-color:#140600">
                    <div class="block_banners banners-_banner banners_2 block" id="block_id_143">
                        <p class="block_title" style="color:#FFB26F"><span>Thông tin khuyến mãi</span></p>
                        <div class="container">
                            <div id="banner_sale" class="banners cls banners-default_sale block_inner block_banner_banner">
                                <div class="wrap_item">
                                    <div class="item">
                                        <a rel="nofollow" href="nhansamhanquoc.php" title="Nhân sâm" id="banner_item_93" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="Nhân sâm" src="assets/img/promotion/promotion1.png" srcset="assets/img/promotion/promotion1.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                    <div class="item">
                                        <a rel="nofollow" href="nhunghuou.php" title="Nhung hươu" id="banner_item_99" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="Nhung hươu" src="assets/img/promotion/promotion2.png" srcset="assets/img/promotion/promotion2.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                </div>
                                <div class="wrap_item">
                                    <div class="item">
                                        <a rel="nofollow" href="yensaokhanhhoa.php" title="Nước yến" id="banner_item_97" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="Nước yến" src="assets/img/promotion/promotion3.png" srcset="assets/img/promotion/promotion3.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                    <div class="item">
                                        <a rel="nofollow" href="dongtrunghathao.php" title="Đông trùng hạ thảo" id="banner_item_95" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="Đông trùng hạ thảo" src="assets/img/promotion/promotion4.png" srcset="assets/img/promotion/promotion4.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                </div>
                                <div class="wrap_item">
                                    <div class="item">
                                        <a rel="nofollow" href="https://onplaza.vn/gia-nam-linh-chi" title="Nấm linh chi" id="banner_item_98" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="Nấm linh chi" src="assets/img/promotion/promotion5.png" srcset="assets/img/promotion/promotion5.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                    <div class="item">
                                        <a rel="nofollow" href="ancungnguuhanquoc.php" title="An cung ngưu" id="banner_item_94" class="banner_item">
                                            <span class="wrapper_ap">

                                                <img class="lazy after-lazy" alt="An cung ngưu" src="assets/img/promotion/promotion6.png" srcset="assets/img/promotion/promotion6.png" style="display: inline;"> <!-- <span class="text_ab">
                                                            </span> -->
                                            </span>
                                        </a>


                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="wraper_block lazy" alt="Cảm nhận khách hàng" style="background-color:#311204;background-position: inherit;" data-src="https://onplaza.vn/images/block/compress/product_back2_1590828651.jpg.webp">
                    <div class="block_testimonials testimonials-_testimonial testimonials_3 block" id="block_id_144">
                        <p class="block_title" style="color:#FFB26F"><span>Cảm nhận khách hàng</span></p>
                    </div>
                </div>
                <div class="wraper_block" style="background-color:#140600">
                    <div class="block_newslist newslist-_news_list newslist_4 block" id="block_id_138">
                        <p class="block_title" style="color:#FFB26F"><span>Thông tin hữu ích</span></p>
                        <div class="container">
                            <div class="news_list_body cls news_list_column4">
                            </div>




                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="introdu pos_footer">
                <div class="wraper_block" style="background-color:#140600">
                    <div class="block_banners banners-_banner banners_0 block" id="block_id_145">
                        <div class="banners_wrapper cls banners-default_wrapper block_inner block_banner_banner">
                            <div class="item">
                                <a rel="nofollow" href="lien-he.html" title="Hệ thống cửa hàng" id="banner_item_100" class="banner_item">

                                    <span class="wrapper_ap">
                                        <img class="lazy after-lazy" alt="Hệ thống cửa hàng" src="assets/img/banner/banner7.png" srcset="assets/img/banner/banner7.png" style="display: inline;">
                                    </span>



                                </a>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="introdu pos_strength">
                <div class="wraper_block" style="background-color:#1C0702">
                    <div class="block_strengths strengths-_strengths strengths_0 block" id="block_id_139">
                        <div class="container">
                            <div class="scroll_hori">
                                <div class="strengths_retangle2_block cls">
                                    <div class="item  item_logo">
                                        <div class="item-inner">
                                            <div class="item-l">
                                                <div class="isvg">
                                                    <img class="lazy after-lazy" alt="CÔNG TY ONPLAZA VIỆT PHÁP" src="assets/img/logo/logo.png" srcset="assets/img/logo/logo.png" style="display: inline;">
                                                </div>
                                            </div>
                                            <div class="item-r">
                                                <div class="title" style="color: #F4E0AF">
                                                    CÔNG TY ONPLAZA VIỆT PHÁP </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item ">
                                        <div class="item-inner">
                                            <div class="item-l">
                                                <div class="isvg">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path d="M374.821,0c-74.434,0-134.984,62.55-134.984,136.984c0,30.992,10.619,60.901,29.997,84.848v87.28l94.003-37.584 			c3.618,0.293,7.279,0.439,10.985,0.439c74.434,0,136.984-60.55,136.984-134.984S449.256,0,374.821,0z M329.827,151.982H299.83 			v-29.997h29.997V151.982z M389.82,151.982h-29.997v-29.997h29.997V151.982z M449.813,151.982h-29.997v-29.997h29.997V151.982z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <polygon points="364.085,304.675 321.668,347.106 448.687,474.125 491.351,431.94 		">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <polygon points="79.865,20.455 37.44,62.879 164.699,190.137 207.131,147.72 		">
                                                                </polygon>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M19.287,87.143c-33.934,66.566-22.13,147.566,31.372,201.054l172.949,172.949c33.482,33.482,77.804,50.868,122.593,50.853 			c26.815,0,53.671-6.616,78.6-19.343C358.955,426.827,77.855,145.713,19.287,87.143z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="item-r">
                                                <div class="title" style="color: #F4E0AF">
                                                    Hỗ trợ 24/7 </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="item ">
                                        <div class="item-inner">
                                            <div class="item-l">
                                                <div class="isvg">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path d="M393.542,219.688c-0.973,2.383-1.519,4.983-1.519,7.711v31.152h32.975v-38.863H393.542z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M0,219.688v87.403c0,24.162,19.656,43.819,43.818,43.819h239.189v-47.358v-30.001h19.014v-46.152 			c0-2.592,0.097-5.162,0.273-7.711H0z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M381.18,52.461H43.818C19.656,52.461,0,72.117,0,96.279v17.236v1.001h424.998v-1.001V96.279 			C424.998,72.117,405.341,52.461,381.18,52.461z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M0,144.517v42.168v3.002h308.653c6.395-17.555,17.123-33.043,30.882-45.17H0z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M412.504,146.916c-44.377,0-80.481,36.105-80.481,80.483v46.152h30.001v-46.152c0-27.836,22.646-50.482,50.48-50.482 			s50.481,22.647,50.481,50.482v46.152h30.001v-46.152C492.986,183.021,456.881,146.916,412.504,146.916z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M313.007,303.552v155.988H512V303.552H313.007z M427.504,397.182v32.575h-30.001v-32.575 			c-10.471-5.442-17.644-16.385-17.644-28.98c0-18,14.644-32.645,32.645-32.645s32.645,14.644,32.645,32.645 			C445.148,380.796,437.975,391.74,427.504,397.182z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="item-r">
                                                <div class="title" style="color: #F4E0AF">
                                                    Bảo mật thanh toán </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="footer lazy after-lazy" style="background-image: url(assets/img/background/bg5.png); display: block;">
                <footer>
                    <div class="container cls">

                        <div class="footer_top cls">

                            <div class="all-hotline-ft cls">

                                <div class="share_fast_small">
                                    <div class="title">HỆ THỐNG SHOWROOM</div>
                                </div>
                                <div class="block_content address_content">


                                    <div class="title">
                                        <svg width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M213.333,0C130.88,0,64,66.88,64,149.333c0,112,149.333,277.333,149.333,277.333s149.333-165.333,149.333-277.333
    C362.667,66.88,295.787,0,213.333,0z M213.333,202.667c-29.44,0-53.333-23.893-53.333-53.333S183.893,96,213.333,96
    s53.333,23.893,53.333,53.333S242.773,202.667,213.333,202.667z"></path>
                                                </g>
                                            </g>

                                        </svg>
                                        Hà Nội:
                                    </div>

                                    <ul class="item">

                                        <li>
                                            <p>LK: 76 Hai Bà Trưng</p>
                                        </li>
                                        <li>
                                            <p>Địa chỉ:76 Hai Bà Trưng, Hoàn Kiếm, Hà Nội <br> (Cách Bệnh Biện K 50m -
                                                Cách Tòa Tháp Đôi Hà Nội 60m)</p>
                                        </li>
                                        <li>
                                            <p class="phone"> ĐT: 024.35.66.88.99 - 024.36.555.888 - 024 39.99.77.55 -
                                                09.66.60.61.69</p>
                                        </li>



                                    </ul>

                                    <ul class="item">

                                        <li>
                                            <p>LK: 327 Trường Chinh</p>
                                        </li>
                                        <li>
                                            <p>Địa chỉ:327 Trường Chinh, Ngã Tư Sở, Hà Nội <br> (Cách Ngã Tư Sở Khoảng
                                                200m)</p>
                                        </li>
                                        <li>
                                            <p class="phone"> ĐT: 024.36.555.777 - 024.32.333.666 - 024.66.849.833 -
                                                09.65.69.63.64</p>
                                        </li>



                                    </ul>




                                    <div class="title">
                                        <svg width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M213.333,0C130.88,0,64,66.88,64,149.333c0,112,149.333,277.333,149.333,277.333s149.333-165.333,149.333-277.333
    C362.667,66.88,295.787,0,213.333,0z M213.333,202.667c-29.44,0-53.333-23.893-53.333-53.333S183.893,96,213.333,96
    s53.333,23.893,53.333,53.333S242.773,202.667,213.333,202.667z"></path>
                                                </g>
                                            </g>

                                        </svg>
                                        Hồ Chí Minh:
                                    </div>

                                    <ul class="item">

                                        <li>
                                            <p>LK: Hồ Chí Minh</p>
                                        </li>
                                        <li>
                                            <p>Địa chỉ:Số 19 – 21 Cách Mạng Tháng 8 – Phường Bến Thành – Quận 1 – TP.HCM
                                                <br> (Cách Ngã Sáu Phù Đổng Thiên Vương 10m – Đối diện sân khấu kịch
                                                Trống Đồng )
                                            </p>
                                        </li>
                                        <li>
                                            <p class="phone"> ĐT: 028.35.060.888 - 028.62.838.999 - 09.68.60.61.69</p>
                                        </li>



                                    </ul>




                                </div>
                            </div>

                            <div class="footer-menu cls">
                                <ul class="menu-bottom cls">
                                    <li class="  level0  first-item">
                                        <span class="click-mobile" data-id="menu-sub1"></span> <span data-id="item_1">
                                            Chính sách &amp; bảo hành </span>
                                        <ul id="menu-sub1" class="cls">
                                            <li class="  level1  first-sitem ">
                                                <a href="https://onplaza.vn/ct-dieu-khoan-mua-hang.html" title="Điều khoản mua hàng"> Điều khoản mua hàng </a>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <span> Hướng dẫn mua hàng </span>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <a href="https://onplaza.vn/ct-hinh-thuc-thanh-toan.html" title="Phương thức thanh toán"> Phương thức thanh toán </a>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <a href="https://onplaza.vn/ct-hinh-thuc-van-chuyen.html" title="Phương thức vận chuyển"> Phương thức vận chuyển </a>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <a href="chinhsachbaomat.php" title="Chính sách bảo mật"> Chính sách bảo mật </a>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <a href="https://onplaza.vn/ct-chinh-sach-doi-tra.html" title="Chính sách đổi trả hàng"> Chính sách đổi trả hàng </a>
                                            </li>
                                            <li class="  level1  mid-sitem ">
                                                <a href="https://onplaza.vn/sitemap.xml" title="Sitemap"> Sitemap </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>


                            <div class="footer_r cls">


                                <div class="share_fast_small">
                                    <div class="title">Kết nối</div>
                                    <div class="fb share_item"><a class="facebook-icon" href="https://www.facebook.com/congtyonplazavietphap" title="Link Facebook" rel="nofollow" target="_blank">
                                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="tw share_item">
                                        <a class="twitter-icon" href="https://twitter.com/onplazavietphap" title="Link twitter" rel="nofollow" target="_blank">
                                            <svg height="50px" viewBox="0 0 512 512" width="50px" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-102.1875 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="yt share_item">
                                        <a class="instagram-icon" href="https://www.instagram.com/onplazavietphap/" title="Link instagram" rel="nofollow" target="_blank">
                                            <svg height="15" viewBox="0 0 511 511.9" width="15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0">
                                                </path>
                                                <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0">
                                                </path>
                                                <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0">
                                                </path>
                                            </svg>

                                        </a>
                                    </div>




                                    <div class="yt share_item">
                                        <a class="youtube-icon" href="https://www.youtube.com/channel/UCkbeOd2V_R8awMKRPjhgNng" title="Link youtube" rel="nofollow" target="_blank">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 215.094 215.094" style="enable-background:new 0 0 215.094 215.094;" xml:space="preserve">
                                                <path d="M28.302,32.547C12.673,32.547,0,45.22,0,60.849v93.396c0,15.629,12.673,28.302,28.302,28.302h158.491
c15.629,0,28.301-12.673,28.301-28.302V60.849c0-15.629-12.672-28.302-28.301-28.302H28.302z M90.547,145.583V69.511l50,38.036
L90.547,145.583z"></path>

                                            </svg>
                                        </a>
                                    </div>


                                    <div class="clear"></div>
                                </div>



                                <div class="wrap-by-fast cls">
                                    <div class="item">

                                        <div class="phone-left">
                                            <p class="phone-content">Onplaza </p>
                                        </div>
                                    </div>
                                    <div class="buy_fast">

                                        <div class="">
                                            <form action="" name="buy_fast_form" id="buy_fast_form" method="post" onsubmit="javascript: return check_Formsubmitemail();">
                                                <div class="cls buy_fast_body">
                                                    <input type="text" value="" placeholder="E-mail address..." id="email1_buy_fast" name="email_buy_fast" class="keyword input-text">
                                                    <button type="submit" class="button-buy-fast button">

                                                        Đăng ký </button>

                                                </div>
                                                <input type="hidden" name="module" value="users">
                                                <input type="hidden" name="view" value="users">
                                                <input type="hidden" name="task" value="buy_fast_save">
                                                <input type="hidden" name="Itemid" value="10">
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clear"></div>


                    </div>
                    <div class="footer_im cls">

                        <div class="image_wrapper">
                            <a href="https://www.dmca.com/Protection/Status.aspx?ID=18892078-af65-4c9d-8b82-addf29b3e619&amp;refurl=https://onplaza.vn/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="assets/img/logo/logo2.png" alt="DMCA.com Protection Status"></a>
                            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                            <a href="http://online.gov.vn/Home/WebDetails/18258?refurl=https://onplaza.vn/" title="Bộ công thương" class="dmca-badge">
                                <img class="lazy item after-lazy" alt="flower" src="assets/img/logo/logo3.png" style="display: inline;"></a>
                            <div class="info_item">
                                Công ty TNHH Onplaza Việt Pháp
                                - Mã số thuế :0105566586,
                                Ngày cấp: 13/10/2011,Trụ sở
                                chính : Tầng 1, Số nhà 59, ngõ 508, đường Láng, tổ 9B, Phường Láng Hạ, Quận Đống Đa,
                                Thành Phố Hà Nội, Việt Nam. <br> Nơi cấp: Sở kế hoạch và đầu tư thành phố Hà Nội- Người
                                chịu trách nhiệm:ĐÀO VĂN QUANG - Điện thoại:02466849833 - Giấy phép ATVSCS:
                                747/2014/ATTP-CNDK
                            </div>
                        </div>


                    </div>
                    <div class="copyright ">
                        <div class="container">© Copyright 2020 <span>ONPLAZA Viet Phap</span></div>
                    </div>
                </footer>
            </div>

        </div>

        <div class="homemenu_fixed" id="menu_scroll">
            <ul>
                <li class="item">
                    <a href="javascript:void(0)" id="sticky_1" title="Giá đông trùng hạ thảo">
                        <span class="icon"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="83.000000pt" height="84.000000pt" viewBox="0 0 83.000000 84.000000" preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,84.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M713 829 c-74 -21 -128 -129 -140 -279 -10 -129 -39 -151 -272 -210
-140 -35 -172 -49 -219 -94 -50 -46 -75 -102 -76 -164 -1 -42 3 -57 18 -68 28
-20 41 -18 79 15 30 27 34 28 44 13 9 -14 12 -15 27 -3 9 7 16 22 16 32 0 12
11 24 26 29 29 11 44 6 44 -16 0 -23 30 -16 39 10 15 38 65 50 74 16 7 -28 25
-25 40 7 6 16 16 31 22 35 17 13 45 9 45 -7 0 -28 30 -15 44 20 14 32 46 49
46 25 0 -5 9 -10 20 -10 13 0 22 9 26 28 3 15 14 43 24 62 33 65 52 150 45
206 -10 83 8 130 76 195 50 48 59 62 59 91 0 56 -46 84 -107 67z m65 -65 c2
-16 -10 -32 -42 -59 -76 -62 -91 -95 -92 -202 0 -51 -3 -95 -5 -98 -3 -2 -15
2 -27 11 -16 11 -20 20 -13 32 5 9 12 53 16 97 13 152 65 249 129 243 23 -2
32 -9 34 -24z m-179 -393 c23 -17 23 -21 11 -50 -26 -65 -99 -100 -304 -150
-135 -33 -189 -55 -220 -90 -43 -48 -49 -2 -10 77 29 59 44 66 44 22 0 -20 5
-30 15 -30 11 0 15 12 15 45 0 34 5 47 19 55 30 16 41 12 41 -13 0 -30 24 -62
39 -53 8 5 8 13 1 26 -18 33 -12 60 16 70 34 13 34 13 34 -13 0 -25 26 -67 42
-67 9 0 6 26 -8 63 -7 18 21 47 47 47 10 0 19 -7 19 -15 0 -24 23 -65 36 -65
10 0 12 11 7 46 -4 34 -2 48 8 55 27 17 45 9 54 -23 6 -18 17 -33 25 -33 15 0
16 8 4 59 -5 22 -2 32 11 43 24 17 25 16 54 -6z"></path>
                                </g>
                            </svg></span>
                        <span class="text_hide">Giá đông trùng hạ thảo</span>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:void(0)" id="sticky_2" title="Sâm Hàn Quốc">
                        <span class="icon"><svg height="30" viewBox="-22 0 511 511.998" width="30" xmlns="http://www.w3.org/2000/svg">
                                <path d="m414.707031 38.105469c-9.679687-19.546875-28.664062-31.691407-31.242187-33.277344l-7.859375-4.828125-7.855469 4.828125c-2.582031 1.585937-21.570312 13.734375-31.25 33.285156-21.828125-1.617187-42.601562 7.957031-45.367188 9.292969l-9.148437 4.402344.617187 9.113281h-27.03125c-24.816406 0-45.011718 20.195313-45.011718 45.011719 0 4.925781.859375 9.71875 2.5625 14.355468-20.84375 19.773438-32.570313 46.714844-32.570313 75.671876v70.042968c-6.921875 3.273438-14.476562 4.980469-22.207031 4.980469-53.941406 0-97.828125 43.882813-97.828125 97.828125v21.75l20.335937-7.726562c36.6875-13.941407 75.125-21.269532 114.320313-21.796876-13.929687 18.492188-35.933594 29.976563-59.632813 29.976563h-37.210937c-53.929687 0-97.828125 45-97.828125 99.230469v21.75l20.332031-7.726563c40.558594-15.414062 80.558594-23.226562 118.890625-23.226562h25.824219c64.035156 0 121.71875-36.6875 149.03125-94.105469 44.5-12.769531 76.03125-54.027344 76.03125-100.953125v-90.023437c0-6.984376-.679687-13.84375-2.023437-20.550782 20.9375 7.679688 44.226562 3.558594 47.566406 2.902344l9.929687-1.949219 1.914063-9.933593c.644531-3.351563 4.894531-27.789063-3.707032-49.136719 21.117188-18.210938 23.15625-51.636719 23.328126-55.746094l.40625-9.714844-8.699219-4.335937c-2.695313-1.34375-22.925781-10.992188-44.617188-9.390625zm-121.449219 322.902343h-37.6875v30h22.273438c-24.738281 37.105469-66.53125 60.027344-112.296875 60.027344h-25.820313c-34.300781 0-69.660156 5.652344-105.429687 16.832032 9.351563-26.933594 34.902344-46.839844 64.03125-46.839844h37.210937c45.148438 0 83.453126-28.613282 98.28125-68.835938l3.199219-8.640625c-6.980469-7.339843-6.390625-6.964843-13.609375-15.433593-11.242187 1.738281-17.640625 2.882812-23.667968 2.882812-35.921876 0-71.296876 5.230469-105.472657 15.574219 9.226563-26.503907 34.464844-45.582031 64.078125-45.582031 30.355469 0 48.480469-16.359376 52.210938-18.253907v-11.753906h60.019531v-30.011719h-60.019531v-45.011718c0-23.746094 11.128906-45.628907 30.53125-60.042969l12.226562-9.085938-9.265625-12.085937c-2.34375-3.058594-3.480469-5.9375-3.480469-8.808594 0-8.273438 6.730469-15.003906 15.003907-15.003906h33.6875c3.605469 9.3125 9.148437 19.070312 17.660156 26.371094-8.597656 21.34375-4.347656 45.777343-3.703125 49.125l1.914062 9.933593 9.925782 1.953125c12.449218 2.441406 29.285156 2.519532 43.0625-1.433594 1.648437 6.167969 2.484375 12.546876 2.484375 19.078126v15.003906h-60.019531v30.011718h60.019531v45.011719c0 5.117188-.542969 10.132813-1.542969 15.003907h-58.476562v30h44.925781c-20.742188 27.605468-48.941407 28.757812-52.253907 30.015624zm128.828126-264.582031c-.46875.265625-.53125.265625-24.90625 8.476563l15.289062 16.964844c6.015625 6.671874 7.269531 18.71875 7.058594 28.03125-9.5.253906-22.152344-.972657-28.707032-7.53125-1.367187-1.363282-1.976562-2.703126-15.210937-24.09375-13.226563 21.371093-13.84375 22.726562-15.21875 24.101562-6.511719 6.507812-19.035156 7.808594-28.6875 7.542969-.203125-9.175781.984375-21.328125 7.042969-28.050781l15.289062-16.964844c-24.667968-8.304688-24.4375-8.207032-24.910156-8.476563-7.972656-4.601562-12.472656-16.375-14.714844-25.757812 8.1875-2.382813 18.855469-4.132813 26.867188-1.226563l16.773437 6.085938 3.117188-17.570313c1.476562-8.3125 8.371093-16.195312 14.441406-21.566406 6.03125 5.34375 12.960937 13.25 14.4375 21.566406l3.117187 17.570313 16.773438-6.085938c7.972656-2.894531 18.351562-1.148437 26.246094 1.214844-1.972656 9.351562-6.164063 21.191406-14.097656 25.769531zm0 0">
                                </path>
                            </svg></span>
                        <span class="text_hide">Sâm Hàn Quốc</span>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:void(0)" id="sticky_3" title="Yến sào Khánh Hoà">
                        <span class="icon"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 327.000000 248.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,248.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M3177 2441 c-54 -23 -63 -24 -116 -13 -85 18 -189 15 -252 -7 -93
-32 -180 -84 -235 -140 -29 -29 -57 -50 -63 -46 -6 3 -11 22 -11 40 0 46 -51
97 -116 115 -38 11 -67 11 -149 2 -160 -18 -248 -58 -371 -172 -128 -119 -290
-216 -439 -266 -27 -9 -61 -24 -75 -34 -39 -27 -128 -70 -200 -97 -36 -13 -74
-28 -85 -33 -56 -27 -430 -140 -645 -195 -30 -7 -73 -18 -95 -24 -22 -5 -70
-15 -106 -21 -37 -5 -84 -17 -105 -26 l-39 -17 28 -8 c15 -4 123 -10 240 -13
326 -10 391 -17 547 -62 99 -29 133 -30 310 -13 186 18 261 38 385 103 95 49
97 49 89 23 -3 -12 -34 -62 -68 -112 -34 -49 -68 -103 -76 -120 -8 -16 -33
-46 -55 -66 -22 -20 -71 -65 -110 -100 -38 -35 -99 -86 -134 -114 -35 -27 -78
-62 -95 -76 -73 -60 -166 -119 -236 -149 -41 -18 -120 -54 -175 -80 -55 -26
-140 -66 -190 -89 -49 -23 -103 -49 -120 -57 -16 -7 -70 -31 -120 -52 -85 -37
-118 -62 -102 -78 22 -22 369 97 662 226 127 56 544 234 558 237 32 10 17 -21
-25 -52 -23 -16 -118 -93 -212 -169 -94 -77 -216 -176 -271 -220 -126 -103
-415 -387 -415 -409 0 -24 12 -21 61 16 24 18 120 85 212 148 93 62 210 145
260 183 83 63 311 216 322 216 26 0 455 326 645 490 99 86 179 143 242 173 31
15 61 27 67 27 18 0 58 -64 64 -100 8 -58 -48 -207 -108 -292 -191 -265 -309
-461 -349 -581 -24 -71 -21 -307 3 -307 4 0 37 60 74 132 84 167 123 220 197
266 33 20 129 87 214 147 85 61 200 140 254 178 59 40 151 119 229 195 118
117 133 135 175 222 68 138 83 207 83 375 0 159 -18 233 -81 326 -19 28 -34
55 -34 60 0 5 12 28 27 52 60 96 121 265 107 300 -8 22 15 69 52 108 22 22 34
44 32 56 -3 19 -5 18 -61 -6z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="text_hide">Yến sào Khánh Hoà</span>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:void(0)" id="sticky_4" title="Giá nấm linh chi Hàn Quốc">
                        <span class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                <g>
                                    <path d="M369.9,478.1l21.5,0.6l11.6,3l8.8,4.5l8,8.6l12.3,15.9l11.2,25l7.5,22.6l1.3,17.9l-16.1,23.4l-21.3,20.2L394.8,633l-4.9,8l-29,18.9l-54.9,1.9l-50.1-2.6l-41.9-13.8c0,0-29.9-12.3-31-12.3S153,620.1,153,620.1l-13.8-15.9c0,0-9.7-11-10.3-11.4s-20.2-31.6-20.2-31.6l-17.4-31.8l-14.4-20.2l-5.2-19.6l0.9-40.7l-3.2-10.5l-25-25.2l-4.7-14.8l-14.2-42.8l7.7-100.7L49.6,229l26.2-26.7l19.8-16.1l15.5-8.8l13.1-6.7l8.2-2.8l1.3-3.9l4.3-7.7l11.2-14.8l13.3-6.5l20-12.7l13.1-9.5l15.1-12.7l13.8-5.4l12-1.9l36.8-0.6l54.2-7.1l33.1,0.6l28.2,1.7l17,3l17.6,6l5.8,1.7l16.6,0.4l10.1-4.1l25.8-5.8h35.1l28.8,5.2l26,3l26,13.6c0,0,8,3.9,8.2,4.5c0.2,0.6,16.6,4.9,16.6,4.9l18.1,12.7l13.6,7.1l7.1,3.2l5.8,6.9l0.9,3.9l8.8,8.8l21.9,9.7l25,13.3l13.1,8l15.5,8.4l12.7,10.5l9.9,10.5l16.8,20.9l23.9,20.9l5.4,5.6c0,0,8.4,0.6,9,1.5c0.6,0.9,7.5,6.5,8.6,7.5s5.6,15.1,6.2,15.7c0.6,0.6,2.8,15.3,2.8,15.3l11.2,6.5c0,0,7.7,0.2,8.6,0.9c0.9,0.6,8.2,7.1,8.6,8c0.4,0.9,19.6,16.1,19.6,16.1l25.4,22.2l15.9,13.1c0,0,4.3,11.2,4.7,13.3c0.4,2.2,12,20.6,12,20.6l10.3,17.2l1.5,7.5l12.3,16.8l1.5,13.6c0,0,0.9,33.3,0.9,34c0,0.6,5.6,26.5,5.6,28c0,1.5,4.7,14,4.5,14.8c-0.2,0.9-2.6,12.3-2.4,14c0.2,1.7-5.2,32.9-5.2,32.9l-4.1,8.4l-1.7,5.8l4.7,8.4l5.4,13.6c0,0,1.5,13.6,1.5,14.2c0,0.6-2.4,24.1-2.4,24.1l-4.1,10.8l-2.8,15.5l-6.5,14.2l-9.5,15.3l-8.2,8.8l-4.5,12l-9.9,9.9l-5.8,14.6l-4.7,9c0,0-15.9,19.4-15.7,20c0.2,0.6-12.9,12.7-12.9,12.7l-18.9,16.1c0,0-17,12.7-17.4,13.8c-0.4,1.1-11.4,9.5-11.4,9.5l-39.4,31.2l-14.8,11.2l-19.8,11.4l-25,10.1l-34.4,1.3l-21.7-2.4l-19.1-0.9l-18.1-3.9l-13.8-3.9l-48.4-28.8l-8.8-7.7l-17.2-14.4l-22.8-17.4l-10.8-13.3l-11.2-14L515.3,784L500,761.2l-9.9-12.9l-17-27.1l-7.7-19.8l-5.4-16.1l-3-16.8V645l3.2-38.1l10.5-21.7l17.6-16.3l31.8-16.3l14.6-3.9l18.9,2.8l18.5,6.5l16.8,11l9.5,8.6l13.3,28.2l-6.2,11.2l11-22.2l-12.9-23.2L570.1,550l-70.6-48.2l-11.2-18.9l-42.2-17.2l-61.1-2.6l-22.4,7.7v7.7l4.3-1.7">
                                    </path>
                                    <path d="M419.5,501.8l28.4,45.6l8.6,28.4l-1.7,23.2l-24.1,55.1l-19.8,19.8l-31,27.5l-22.4,7.7l-24.1,2.6l-12,1.7l-24.1,1.7l-26.7-0.9l-39.6-7.7l-31.8-12l-28.4-9.5l-17.2-6.9l-22.4-15.5l-7.7-8.6l-15.5-29.3l-5.2-12l-14.6-24.1l-6.9-17.2l-10.3-14.6l-4.3-6l-5.2-9.5L60.8,531l1.7-27.5l1.7-14.6v-4.3H50.4l-6.9-1.7l-17.2-11.2l-5.2-6l-6.9-12.9l-3.4-29.3L10,372.7l6-40.4l6-20.6l5.2-23.2l6.9-23.2L419.5,501.8z">
                                    </path>
                                    <path d="M390.3,709.1l-21.5,71.4c0,0-2.6,23.2-2.6,26.7s-1.7,35.3-1.7,35.3s8.6,25,9.5,28.4c0.9,3.4,13.8,27.5,13.8,27.5l18.1,10.3l25,2.6c0,0,18.9,4.3,24.1,3.4c5.2-0.9,31.8,0,34.4-0.9c2.6-0.9,19.8-22.4,19.8-22.4s2.6-30.1,0-32.7c-2.6-2.6-31.8-24.1-31.8-24.1l-31-15.5l0.9-65.4l5.2-22.4l-21.5-30.1l-21.5-2.6L390.3,709.1z">
                                    </path>
                                    <path d="M598.5,609.3l-12-18.1l-12.9-9.5l-28.4-10.3l-26.7,2.6l-14.6,29.3c0,0-4.3,4.3-4.3,8.6c0,4.3,4.3,32.7,5.2,36.1c0.9,3.4,10.3,35.3,12,39.6c1.7,4.3,63.7,70.6,65.4,73.1s60.2,30.1,60.2,30.1s61.1,30.1,63.7,31c2.6,0.9,59.4-12,65.4-12c6,0,42.2-29.3,42.2-29.3l68-86l24.1-79.2l6.9-77.4l-19.8-94.6L793,318.5l-77.4-86.9l-38.7-27.5l-30.1-34.4L540,123.2l-61.9-6h-33.6l-22.4,6c0,0-8.6,31.8-7.7,36.1c0.9,4.3,0,14.6,0,14.6l-19.8-37.9l-3.4-14.6l-18.1-6.9h-59.4c0,0-148,49.9-152.3,52.5c-4.3,2.6-62.8,37.9-62.8,37.9L78,239.4l-14.6,49l-9.5,50.8l15.5,54.2l18.1,47.3l16.3,35.3c0,0,23.2,52.5,23.2,55.9c0,3.4,53.3,62,56.8,66.3c3.4,4.3,93.8,27.5,96.4,30.1c2.6,2.6,59.4,6.9,61.9,6.9s59.4-37.9,59.4-37.9s6.9-48.2,7.7-50.8c0.9-2.6,26.7-31.8,26.7-31.8l4.3-15.5l-6.9-4.3l-14.6-1.7l-14.6,39.6l-8.6,43.9l-19.8,24.1l-17.2,8.6l-22.4,12.9l-31.8,1.7l-80.9-25l-40.4-20.7l-24.1-33.6l-17.2-25L121,492.3l-16.3-58.5l-15.5-35.3L78,351.2v-21.5l4.3-42.2l11.2-24.1l10.3-25.8l6-19.8l34.4-16.3l37.9-26.7l77.4-20.6l61.9-18.9h38.7l28.4,3.4l8.6,23.2l12.9,22.4h5.2h11.2l7.7-37l15.5-13.8h52.5l75.7,17.2l74,36.1c0,0,16.3,16.3,17.2,19.8c0.9,3.4,43.9,44.7,43.9,44.7l43,44.7l34.4,41.3c0,0,25,21.5,27.5,25.8c2.6,4.3,41.3,56.8,41.3,56.8l27.5,46.5l4.3,28.4l9.5,68l-4.3,56.8l-12,43l-12,32.7l-14.6,22.4l-33.6,33.6L795.5,778l-24.1,20.7l-21.5,6l-44.7,1.7l-29.3-6.9l-36.1-24.1L592.5,747l-34.4-26.7l-20.6-31L524.5,667l-8.6-28.4l-2.6-19.8v-16.3l14.6-12l6-3.4c0,0,7.7-5.2,15.5,0s22.4,10.3,22.4,10.3l12.9,4.3l16.3,12.9">
                                    </path>
                                    <path d="M562.6,643.3l2,1.5l1.8,1.4l34,20.4l26,17.3l21,4.9l32.2-1.2l15.5-4.3l17.3-14.9l20.4-19.2l24.1-24.1l10.5-16.1l8.7-23.5l8.7-30.9l3.1-40.9l-6.8-48.9l-3.1-20.4l-19.8-33.4c0,0-27.9-37.8-29.7-40.9c-1.9-3.1-19.8-18.6-19.8-18.6L684,321.9L653,289.8c0,0-30.9-29.7-31.6-32.2c-0.6-2.5-12.4-14.2-12.4-14.2l-53.2-26L501.4,205h-37.8l-11.1,9.9l-5.6,26.6h-8h-3.7l-9.3-16.1l-6.2-16.7l-20.4-2.5h-27.9l-44.6,13.6l-55.7,14.9l-27.2,19.2l-24.8,11.8l-4.3,14.2l-7.4,18.6l-8,17.3l-3.1,30.3v15.5l8,34l11.1,25.4l11.8,42.1l14.9,19.8l12.4,18l17.3,24.1l29.1,14.9l58.2,17.9l22.9-1.2c0,0,6,9.3,4.3,9.3c-1.9,0-42.7-3.1-44.6-5c-1.9-1.9-66.8-18.6-69.3-21.7c-2.5-3.1-40.9-45.2-40.9-47.7c0-2.5-16.7-40.2-16.7-40.2L203,425.9l-13-34l-11.1-39l6.8-36.5l10.5-35.3l14.9-24.8c0,0,42.1-25.4,45.2-27.2c3.1-1.9,109.6-37.8,109.6-37.8h42.7l13,5l2.5,10.5l14.2,27.2c0,0,0.6-7.4,0-10.5c-0.6-3.1,5.6-26,5.6-26l16.1-4.3H484l44.6,4.3l76.8,33.4l21.7,24.8l27.9,19.8l55.7,62.5l71.8,89.7l14.2,68.1l-5,55.7l-17.3,56.9l-48.9,61.9c0,0-26,21-30.3,21c-4.3,0-45.2,9.3-47,8.7c-1.9-0.6-45.8-22.3-45.8-22.3s-42.7-32.2-42.6-33.4C562.3,616.2,562.6,643.3,562.6,643.3z">
                                    </path>
                                    <path d="M530.8,508.9l81.4-115.7l38.9-75.9l-8.1-9.9l-40.7,71.4l-46.1,66.9L529.9,499l-3.6,7.2L530.8,508.9z">
                                    </path>
                                    <path d="M361,242.8l-28.7,78c0,0,3.4,43.6,3.4,47c0,3.4,12.6,81.5,12.6,81.5l-10.3,8l-10.3-19.5l-6.9-44.7l-6.9-76.9l16.1-57.4">
                                    </path>
                                    <path d="M601.7,539.9l70,16.1l72.3,8l25.2-26.4l13.8-17.2c0,0-72.3,8-76.9,11.5c-4.6,3.4-31,12.6-35.6,12.6s-56.2-5.7-56.2-5.7l-16.1-5.7">
                                    </path>
                                </g>
                            </svg></span>
                        <span class="text_hide">Giá nấm linh chi Hàn Quốc</span>
                    </a>
                </li>
                <li class="item">
                    <a href="javascript:void(0)" id="sticky_5" title="Giá nhung hươu">
                        <span class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 413.11 413.11" style="enable-background:new 0 0 413.11 413.11;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M395.72,15.929c-2.099-10.691-12.379-17.609-23.17-15.57c-10.699,2.092-17.676,12.465-15.607,23.164
        c2.764,14.316,7.056,59.556-9.016,79.026c-1.929,2.356-5.001,5.04-9.694,6.995c-6.514-0.68-10.019-3.428-12.21-5.983
        c-12.906-14.997-12.782-52.954-9.68-73.36c1.637-10.779-5.757-20.858-16.532-22.519c-10.729-1.642-20.854,5.719-22.521,16.498
        c-1.005,6.475-8.229,58.78,11.036,93.746c-13.661,4.681-25.655,12.071-35.427,22.215c-9.711,10.087-17.135,22.832-22.26,37.436
        c13.877,1.935,26.829,5.501,38.468,10.602c3.165-8.011,7.04-15.211,12.256-20.621c10.344-10.749,24.5-15.963,43.271-15.963
        c7.704,0,14.772-1.343,21.52-3.28c1.157-0.316,2.316-0.556,3.379-1.072c11.332-3.907,21.258-10.275,28.945-19.62
        C409.227,90.233,397.186,23.423,395.72,15.929z"></path>
                                        </g>
                                        <g>
                                            <path d="M131.747,167.557c5.28,5.479,9.202,12.771,12.365,20.907c11.624-5.154,24.515-8.816,38.392-10.813
        c-5.125-14.633-12.566-27.4-22.291-37.511c-9.772-10.144-21.767-17.535-35.429-22.215c19.266-34.965,12.041-87.271,11.037-93.746
        C134.154,13.401,124.044,6.055,113.3,7.681C102.525,9.342,95.131,19.421,96.766,30.2c3.103,20.406,3.226,58.364-9.679,73.36
        c-2.193,2.555-5.696,5.303-12.211,5.983c-4.693-1.955-7.765-4.639-9.695-6.995c-16.068-19.47-11.778-64.709-9.014-79.026
        C58.235,12.823,51.257,2.45,40.56,0.358C29.8-1.688,19.489,5.237,17.39,15.928c-1.466,7.494-13.506,74.304,17.242,111.693
        c7.689,9.345,17.614,15.713,28.945,19.62c1.064,0.516,2.222,0.756,3.381,1.072c6.746,1.937,13.816,3.28,21.518,3.28
        C107.249,151.595,121.405,156.809,131.747,167.557z"></path>
                                        </g>
                                        <path d="M372.98,186.04c0,0-27.353-15.368-58.829,2.779c-12.55,7.231-22.183,22.271-22.183,22.271
    c-2.347,3.655-7.396,4.984-11.239,2.931c0,0-41.911-22.338-73.819-22.338c-31.846,0-73.68,22.231-73.68,22.231
    c-3.844,2.036-8.908,0.711-11.253-2.95c0,0-9.617-14.945-22.106-22.145c-31.491-18.147-58.845-2.779-58.845-2.779
    c-3.782,2.13-6.685,7.426-6.438,11.763c0,0,1.853,32.395,33.313,50.564c10.959,6.315,23.85,7.965,23.85,7.965
    c4.306,0.558,7.054,4.479,6.097,8.708c0,0-1.744,7.687-1.744,16.192c0,55.528,45.739,131.878,110.805,131.878
    c64.928,0,110.791-76.35,110.791-131.878c0-8.506-1.744-16.192-1.744-16.192c-0.957-4.229,1.791-8.15,6.097-8.692
    c0,0,13.012-1.619,24.051-7.98c31.46-18.169,33.312-50.564,33.312-50.564C379.665,193.466,376.763,188.17,372.98,186.04z
     M206.942,387.718c-37.683,0-68.217-37.435-68.217-59.001c0-11.5,8.846-21.736,22.677-28.884
    c9.57-15.156,26.349-25.315,45.554-25.315c19.203,0,35.998,10.174,45.57,25.332c13.799,7.146,22.646,17.367,22.646,28.867
    C275.173,350.284,244.622,387.718,206.942,387.718z"></path>
                                        <path d="M206.957,290.327c-21.087,0-38.176,17.088-38.176,38.175c0,21.088,17.089,38.177,38.176,38.177
    c21.086,0,38.176-17.089,38.176-38.177C245.133,307.415,228.043,290.327,206.957,290.327z"></path>
                                    </g>
                                </g>

                            </svg>
                        </span>
                        <span class="text_hide">Giá nhung hươu</span>
                    </a>
                </li>
            </ul>
        </div>


        <div id="fixed-bar" style="position: fixed; bottom: 100px; display: none;">
            <div id="bar-inner">
                <a class="go-top" href="#page-wrapper" title="Back to top">
                    <svg x="0px" y="0px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;" xml:space="preserve">
                        <g>
                            <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285
        C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854
        c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848
        c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566
        C284.929,199.378,283.984,197.188,282.082,195.285z"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>

        <input type="hidden" id="Itid" name="Itid" value="1">


        <div id="loading_box">
            <div id="loading_image"></div>
        </div>




        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
        <div id="arcontactus" class="arcontactus-widget arcontactus-message right lg active">
            <div class="messangers-block lg"><a class="messanger msg-item-facebook-messenger" id="msg-item-1" href="https://m.me/congtyonplazavietphap" target="_blank"><span style="background-color:#f4e0af"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z">
                            </path>
                        </svg></span>
                    <p>Messenger</p>
                </a><a class="messanger msg-item-telegram-plane" id="msg-item-9" href="https://zalo.me/0966606169" target="_blank"><span style="background-color:#f4e0af"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">
                            </path>
                        </svg></span>
                    <p>Zalo Chat</p>
                </a><a class="messanger msg-item-skype" id="msg-item-6" href="skype:" target="_blank"><span style="background-color:#f4e0af"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z">
                            </path>
                        </svg></span>
                    <p>Skype Chat</p>
                </a><a class="messanger msg-item-envelope" id="msg-item-7" href="mailto:onplazavietphap@gmail.com" target="_blank"><span style="background-color:#f4e0af"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">
                            </path>
                        </svg></span>
                    <p>Gửi Email</p>
                </a><a class="messanger msg-item-phone" id="msg-item-8" href="tel:0966606169" target="_blank"><span style="background-color:#f4e0af"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg></span>
                    <p>Call 0932.144.888</p>
                </a></div>
            <div class="arcontactus-message-button" style="background-color: #c60100">
                <div class="static hide"><svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Canvas" transform="translate(-825 -308)">
                            <g id="Vector">
                                <use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"></use>
                            </g>
                        </g>
                        <defs>
                            <path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                            </path>
                        </defs>
                    </svg>
                    <p>Liên hệ</p>
                </div>
                <div class="callback-state" style="color: #c60100"></div>
                <div class="icons">
                    <div class="icons-line" style="transform: translate(-194px, 0px);"><span style="color: #c60100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z">
                                </path>
                            </svg></span><span style="color: #c60100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">
                                </path>
                            </svg></span><span style="color: #c60100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z">
                                </path>
                            </svg></span><span style="color: #c60100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">
                                </path>
                            </svg></span><span style="color: #c60100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg></span></div>
                </div>
                <div class="arcontactus-close"><svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Canvas" transform="translate(-4087 108)">
                            <g id="Vector">
                                <use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor">
                                </use>
                            </g>
                        </g>
                        <defs>
                            <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z">
                            </path>
                        </defs>
                    </svg></div>
                <div class="pulsation" style="background-color: #c60100"></div>
                <div class="pulsation" style="background-color: #c60100"></div>
            </div>
            <div class="arcontactus-prompt">
                <div class="arcontactus-prompt-close" style="color: #c60100"><svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Canvas" transform="translate(-4087 108)">
                            <g id="Vector">
                                <use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor">
                                </use>
                            </g>
                        </g>
                        <defs>
                            <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z">
                            </path>
                        </defs>
                    </svg></div>
                <div class="arcontactus-prompt-inner"></div>
            </div>
        </div>
        <script>
            //<![CDATA[
            var arCuMessages = ["Xin chào tôi có thể giúp gì cho bạn"];
            var arCuLoop = false;
            var arCuCloseLastMessage = false;
            var arCuPromptClosed = false;
            var _arCuTimeOut = null;
            var arCuDelayFirst = 2000;
            var arCuTypingTime = 2000;
            var arCuMessageTime = 4000;
            var arCuClosedCookie = 0;
            var arcItems = [];
            window.addEventListener('load', function() {
                arCuClosedCookie = arCuGetCookie('arcu-closed');
                jQuery('#arcontactus').on('arcontactus.init', function() {
                    if (arCuClosedCookie) {
                        return false;
                    }
                    arCuShowMessages();
                });
                jQuery('#arcontactus').on('arcontactus.openMenu', function() {
                    clearTimeout(_arCuTimeOut);
                    arCuPromptClosed = true;
                    jQuery('#contact').contactUs('hidePrompt');
                    arCuCreateCookie('arcu-closed', 1, 30);
                });
                jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
                    clearTimeout(_arCuTimeOut);
                    arCuPromptClosed = true;
                    arCuCreateCookie('arcu-closed', 1, 30);
                });
                var arcItem = {};
                arcItem.id = 'msg-item-1';
                arcItem.class = 'msg-item-facebook-messenger';
                arcItem.title = 'Messenger';
                arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
                arcItem.href = 'https://m.me/congtyonplazavietphap';
                arcItem.color = '#f4e0af';
                arcItems.push(arcItem);
                var arcItem = {};
                arcItem.id = 'msg-item-9';
                arcItem.class = 'msg-item-telegram-plane';
                arcItem.title = 'Zalo Chat';
                arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path></svg>';
                arcItem.href = 'https://zalo.me/0966606169';
                arcItem.color = '#f4e0af';
                arcItems.push(arcItem);
                var arcItem = {};
                arcItem.id = 'msg-item-6';
                arcItem.class = 'msg-item-skype';
                arcItem.title = 'Skype Chat';
                arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"></path></svg>';
                arcItem.href = 'skype:';
                arcItem.color = '#f4e0af';
                arcItems.push(arcItem);
                var arcItem = {};
                arcItem.id = 'msg-item-7';
                arcItem.class = 'msg-item-envelope';
                arcItem.title = 'Gửi Email';
                arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
                arcItem.href = 'mailto:onplazavietphap@gmail.com';
                arcItem.color = '#f4e0af';
                arcItems.push(arcItem);
                var arcItem = {};
                arcItem.id = 'msg-item-8';
                arcItem.class = 'msg-item-phone';
                arcItem.title = 'Call 0932.144.888';
                arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
                arcItem.href = 'tel:0966606169';
                arcItem.color = '#f4e0af';
                arcItems.push(arcItem);
                jQuery('#arcontactus').contactUs({
                    items: arcItems
                });
            });
            //]]>
        </script>
        <!-- end arcontactus widget -->
        <!--  -->

        <div id="modal_alert1" class="hide">
            <div class="modal_alert_inner">
                <div class="modal_alert_title">Thông báo<a class="close" href="javascript:void()" onclick="javascript:close_modal_alert1()">X</a></div>
                <div class="modal_alert_body"></div>
            </div>
        </div>
        <div class="benmarch noc">0.47907 sec| 5593.992 kb</div>
        <script async="async" language="javascript" type="text/javascript" src="https://onplaza.vn/cache/js/a01720df0e8af245e04a19f9fa814258.js?20230704154348"></script>
    </div>
    <script type="text/javascript" id="">
        (function(a, e, b, f, g, c, d) {
            a[b] = a[b] || function() {
                (a[b].q = a[b].q || []).push(arguments)
            };
            c = e.createElement(f);
            c.async = 1;
            c.src = "https://www.clarity.ms/tag/" + g + "?ref\x3dbwt";
            d = e.getElementsByTagName(f)[0];
            d.parentNode.insertBefore(c, d)
        })(window, document, "clarity", "script", "9301me865a");
    </script>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;">
    </div>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;">
    </div>
    <script type="text/javascript" id="">
        var eventSet = !1;
        setTimeout(function() {
            var a = jQuery(".arcontactus-message-button");
            if (a) a.on("click", function() {
                eventSet || (setTimeout(addEvents1, 1E3), setTimeout(addEvents2, 1E3), setTimeout(addEvents3, 1E3), setTimeout(addEvents4, 1E3), eventSet = !0)
            })
        }, 1E3);

        function addEvents1() {
            jQuery('a[href*\x3d"m.me"]').on("click", function() {
                window.dataLayer.push({
                    event: "chat_button"
                })
            })
        }

        function addEvents2() {
            jQuery('a[href*\x3d"zalo.me"]').on("click", function() {
                window.dataLayer.push({
                    event: "chat_button"
                })
            })
        }

        function addEvents3() {
            jQuery('a[href*\x3d"tel:"]').on("click", function() {
                window.dataLayer.push({
                    event: "hotline"
                })
            })
        }

        function addEvents4() {
            jQuery('a[href*\x3d"skype:"]').on("click", function() {
                window.dataLayer.push({
                    event: "chat_button"
                })
            })
        };
    </script>
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="hình ảnh xác thực reCAPTCHA sẽ hết hạn sau 2 phút nữa" src="https://www.google.com/recaptcha/api2/bframe?hl=vi&amp;v=khH7Ei3klcvfRI74FvDcfuOo&amp;k=6LfXf7EZAAAAABfEi0Temws_OYe1V04I8kR2ovci" name="c-gvn4mg655rhj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div>
    </div>
</body>

</html>