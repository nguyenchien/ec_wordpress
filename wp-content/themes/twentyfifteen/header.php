<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

global $is_active_plugin_dynamic_image_resizer;

// Check active plugin dynamic-image-resizer
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$is_active_plugin_dynamic_image_resizer = false;
if ( is_plugin_active('dynamic-image-resizer/dynamic-image-resizer.php') ) {
    $is_active_plugin_dynamic_image_resizer = true;
}

// Check single page
$isSinglePage = is_single();

// Check top page
$isTopPage = is_front_page();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="https://www.wargo.jp/user_data/img/iconsite/the-ichi/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        // create Tracking object
        ga('create', 'UA-21109760-1', 'auto');
        //ga('create', 'UA-72944655-1', 'none');
        // No AB Test is excuted

        // track page view
        ga('send', 'pageview');

        // No AB Test is excuted (SWE Tracking)
    </script>

    <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
    <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
            { event: "setAccount", account: 14385 },
            { event: "setEmail", email: "username@domain.com" },
            { event: "setSiteType", type: "d" },
            { event: "viewHome" }
        );
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<link rel="stylesheet" href="https://www.wargo.jp/user_data/packages/default/assets/layout2018/css/new-wargo-style.css?ver=20200530108" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<link rel="stylesheet" href="https://www.wargo.jp/user_data/packages/default/assets/layout2018/css/icon-new-wargo.css?ver=20191209135400" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<!--<link rel="stylesheet" href="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/css/style-column-wargo.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />-->
<script>
    // Ten mincho
    (function(d) {
        var config = {
                kitId: 'yxg1wap',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
</script>
<div id="page" class="hfeed site">

    <?php if (wp_is_mobile() == false) { ?>
    <link rel="stylesheet" href="https://www.wargo.jp/user_data/packages/default/assets/layout2018/css/new-wargo-header-pc.css?ver=20200528556" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <section class="wrap-section section-header box-columns-wargo">
            <div class="top-header">
                <div class="container">
                    <a href="https://www.wargo.jp/products/list1587.html">
                        <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/header-banner-imayo-pc.jpg" alt="">
                    </a>
                </div>
            </div><!--end top-header-->
            <div class="top-header-ec">
                <div class="container">
                    <div class="row">
                        <div class="box-bt-header flexbox align-items-center">
                            <div class="wrap-logo">
                                <div class="logo">
                                    <a href="https://www.wargo.jp"><img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/main-logo-the-ichi-v2.png" alt="????????????????????????The Ichi???"></a>
                                </div>
                            </div>
                            <div class="wrap-text-noted-header">
                                <p class="text"><a href="/">?????????????????????????????????????????????????????????-???</a></p>
                            </div>
                            <div class="wrap-overseas-shipping">
                                <a href="/user_data/overseasorder_info.php" class="flexbox">
                                    <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-overseas-shipping-v2.png" alt="Overseas Shipping Service Available">
                                    <span class="text">OVERSEAS SHIPPING!</span>
                                </a>
                            </div>

                            <div class="wrap-wishlist-cart flexbox">
                                <div class="box-item register"> <a href="/entry/kiyaku.php" class="flexbox"> <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-register-v2.png" alt="??????????????????"> <span class="text">??????????????????</span> </a> </div>
                                <div class="box-item login"> <a href="/mypage/login.php" class="flexbox"> <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-login-v2.png" alt="????????????"> <span class="text">????????????</span> </a> </div>
                                <div class="box-item favorite"> <a href="/mypage/favorite.php" class="flexbox"> <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-favorite-v2.png" alt="???????????????"> <span class="text">???????????????</span> </a> </div>
                                <div class="box-item cart"> <a href="/cart/index.php" class="flexbox"> <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-cart-v2.png" alt=""> <span class="text">???????????????</span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-navigation-search">
                <div class="container">
                    <div class="row">
                        <div class="box-nav-seach flexbox align-items-center justify-content-between">
                            <ul class="list-nav flexbox">
                                <li class="item-nav">
                                    <a class="linkto" href="/">TOP</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list86.html">????????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list626.html">??????????????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list633.html">?????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list85.html">?????????????????????????????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list718.html">??????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="/products/list939.html">???????????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="https://www.wargo.jp/cat-lover">?????????</a>
                                </li>
                                <li class="item-nav">
                                    <a class="linkto" href="https://www.wargo.jp/products/list1587.html">??????</a>
                                </li>
                            </ul>
                            <div class="box-search-header">
                                <form name="search_form_header" id="search_form_header" class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                                    <input type="text" name="name" class="text-search" maxlength="50" value="" placeholder="?????????????????????" lang="ja"/>
                                    <button type="submit" class="btn-search" >
                                        <span class="icon icon-wargo-search flexbox"></span>
                                    </button>
                                    <input type="hidden" name="mode" value="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end wrap-navigation-search-->
        </section><!--end wrap-section section-header-->

    <?php } else { ?>

    <link rel="stylesheet" href="https://www.wargo.jp/smartphone/user_data/packages/default/assets/layout2018/css/new-wargo-header-sp.css?ver=20200530108" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <section class="wrap-section section-header">
            <div class="top-header">
                <div class="container">
                    <a href="https://www.wargo.jp/products/list1587.html">
                        <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/header-banner-imayo-sp.jpg" alt="">
                    </a>
                </div>
            </div><!--end top-header-->
            <div class="bottom-header">
                <div class="container">
                    <div class="row">
                        <div class="box-bt-header flexbox align-items-center">
                            <div class="wrap-logo flexbox">
                                <div class="logo">
                                    <a href="/"><img src="/user_data/packages/default/assets/layout2018/images/logo.svg" alt="<!--{$titleTag}-->"></a>
                                </div>
                                <p class="slogan">????????????????????????????????????<br>?????????????????????-???</p>
                            </div>
                            <div class="wrap-toggle-menu">
                                <img class="icon-toggle-menu" src="/smartphone/user_data/packages/default/assets/layout2018/images/icon-toggle-menu-sp-v2.svg" alt="">
                            </div>
                        </div><!--end box-bt-header-->
                    </div>
                </div>
            </div><!--end bottom-header-->
            <div class="wrap-sub-menu flexbox" style="display: none;">
                <div class="section-form-search">
                    <div class="row">
                        <div class="box-search-header">
                            <form class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                                <input type="hidden" name="mode" value="search">
                                <input class="text-search" type="text" name="name" maxlength="50" value="" placeholder="?????????????????????">
                                <button type="submit" class="btn-search">
                                    <span class="icon icon-wargo-search flexbox"></span>
                                </button>
                            </form>
                        </div><!--end box-search-header-->
                    </div>
                </div>
            </div>
        </section>

        <div class="wrap-overlay-sidebar">
            <div class="left-menu-sidebar">
                <div class="sidebar-header flexbox justify-content-between align-items-center">
                    <div class="wrap-logo-sb-v2 flexbox">
                        <a class="main-logo" href="/"><img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/main-logo-the-ichi-v2.png" alt="????????????????????????The Ichi???"></a>
                        <p class="main-text"><a href="/">????????????????????????????????????<br>?????????????????????-???</a></p>
                    </div>
                    <a href="#" class="close-menu">
                        <span class="icon-wargo icon-wargo-menu-toggle-close flexbox"></span>
                    </a>
                </div>

                <div class="wrap-menu-sb-v2 wrap-menu-sb-top-v2">
                    <ul class="list-menu-sb-top-v2">
                        <li class="item-menu">
                            <a href="/user_data/overseasorder_info.php" class="flexbox">
                                <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-overseas-shipping-v2.png" alt="Overseas Shipping Service Available">
                                <span class="text">OVERSEAS SHIPPING!</span>
                            </a>
                        </li>
                        <li class="item-menu">
                            <a href="/entry/kiyaku.php" class="flexbox">
                                <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-register-v2.png" alt="??????????????????">
                                <span class="text">??????????????????</span>
                            </a>
                        </li>
                        <li class="item-menu">
                            <a href="/mypage/login.php?r=<!--{$unique_key}-->" class="flexbox">
                                <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-login-v2.png" alt="????????????">
                                <span class="text">????????????</span>
                            </a>
                        </li>
                        <li class="item-menu">
                            <a href="/cart/index.php" class="flexbox">
                                <img src="https://www.wargo.jp/user_data/packages/default/assets/layout2018/images/img-cart-v2.png" alt="">
                                <span class="text">???????????????</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="wrap-menu-sb-v2 wrap-menu-sb-bottom-v2">
                    <div class="box-search-header wrap-search-sb-v2">
                        <form name="search_form_header" id="search_form_header" class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                            <input type="text" name="name" class="text-search" maxlength="50" value="" placeholder="?????????????????????" lang="ja"/>
                            <button type="submit" class="btn-search" >
                                <span class="icon icon-wargo-search flexbox"></span>
                            </button>
                            <input type="hidden" name="mode" value="search">
                        </form>
                    </div>
                    <ul class="list-menu-sb-bottom-v2">
                        <li class="item-menu"><a href="/">TOP</a></li>
                        <li class="item-menu"><a href="/products/list86.html">????????????</a></li>
                        <li class="item-menu"><a href="/products/list626.html">??????????????????</a></li>
                        <li class="item-menu"><a href="/products/list633.html">?????????</a></li>
                        <li class="item-menu"><a href="/products/list85.html">?????????????????????????????????</a></li>
                        <li class="item-menu"><a href="/products/list718.html">??????</a></li>
                        <li class="item-menu"><a href="/products/list939.html">???????????????</a></li>
                        <li class="item-menu"><a href="/cat-lover">?????????</a></li>
                        <li class="item-menu"><a href="https://www.wargo.jp/products/list1587.html">??????</a></li>
                        <li class="item-menu"><a href="https://shop-list.wargo.jp/wargo">??????</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var $ = jQuery.noConflict();

            $(document).ready(function () {
                $(".icon-toggle-menu").on('click', function(e){
                    e.stopImmediatePropagation();
                    $('.left-menu-sidebar').addClass('active');
                    $('body').addClass('fixed-body');
                    $('.wrap-overlay-sidebar').addClass('overlay-menu');
                });

                $(".close-menu").on('click', function(e){
                    e.preventDefault();
                    $('.left-menu-sidebar').removeClass('active');
                    $('body').removeClass('fixed-body');
                    $('.wrap-overlay-sidebar').removeClass('overlay-menu');
                });
            });
        </script>
    <?php } ?>

    <section class="container container-columns">
