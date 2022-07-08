<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/user_data/packages/default/assets/layout2018/css/new-wargo-style.css?ver=20200530108" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<link rel="stylesheet" href="/user_data/packages/default/assets/layout2018/css/icon-new-wargo.css?ver=20191209135400" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

    <?php if (wp_is_mobile() == false) { ?>
    <link rel="stylesheet" href="/user_data/packages/default/assets/layout2018/css/new-wargo-header-pc.css?ver=20200528556" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <section class="wrap-section section-header">
        <div class="top-header">
            <div class="container">
                <a href="https://www.wargo.jp/products/list1577.html">
                    <img src="/user_data/packages/default/assets/layout2018/images/banner_yakimono_pc.jpg" alt="">
                </a>
            </div>
        </div><!--end top-header-->
        <div class="top-header-ec">
            <div class="container">
                <div class="row">
                    <div class="box-bt-header flexbox align-items-center">
                        <div class="wrap-logo">
                            <div class="logo">
                                <a href="https://www.wargo.jp"><img src="/user_data/packages/default/assets/layout2018/images/main-logo-the-ichi-v2.png" alt="かんざしの種類【The Ichi】"></a>
                            </div>
                        </div>
                        <div class="wrap-text-noted-header">
                            <p class="text"><a href="/">和ファッション通販サイト「座市−ザイチ-」</a></p>
                        </div>
                        <div class="wrap-overseas-shipping">
                            <a href="/user_data/overseasorder_info.php" class="flexbox">
                                <img src="/user_data/packages/default/assets/layout2018/images/img-overseas-shipping-v2.png" alt="Overseas Shipping Service Available">
                                <span class="text">OVERSEAS SHIPPING!</span>
                            </a>
                        </div>
                        <div class="wrap-wishlist-cart flexbox">
                            <!--{if $isLoginSuccess}-->
<!--                            <div class="box-item login">-->
<!--                                <a href="/mypage/login.php?r=" class="flexbox">-->
<!--                                    <img src="/user_data/packages/default/assets/layout2018/images/img-logout-v2.png" alt="">-->
<!--                                    <span class="text">マイページ</span>-->
<!--                                </a>-->
<!--                            </div>-->
                            <!--{else}-->
                            <div class="box-item register">
                                <a href="/entry/kiyaku.php" class="flexbox">
                                    <img src="/user_data/packages/default/assets/layout2018/images/img-register-v2.png" alt="新規会員登録">
                                    <span class="text">新規会員登録</span>
                                </a>
                            </div>
                            <div class="box-item login">
                                <a href="/mypage/login.php?r=<!--{$unique_key}-->" class="flexbox">
                                    <img src="/user_data/packages/default/assets/layout2018/images/img-login-v2.png" alt="ログイン">
                                    <span class="text">ログイン</span>
                                </a>
                            </div>
                            <!--{/if}-->
                            <!--{if $smarty.const.OPTION_FAVOFITE_PRODUCT == 1 }-->
<!--                            <div class="box-item favorite">-->
<!--                                <a href="/mypage/favorite.php" class="flexbox">-->
<!--                                    <img src="/user_data/packages/default/assets/layout2018/images/img-favorite-v2.png" alt="お気に入り">-->
<!--                                    <span class="text">お気に入り</span>-->
<!--                                </a>-->
<!--                            </div>-->
                            <!--{/if}-->
                            <div class="box-item cart">
                                <a href="/cart/index.php" class="flexbox">
                                    <img src="/user_data/packages/default/assets/layout2018/images/img-cart-v2.png" alt="">
                                    <span class="text">買い物かご</span>
                                </a>
                            </div>
                        </div><!--end wrap-wishlist-cart-->
                    </div><!--end box-bt-header-->
                </div>
            </div>
        </div><!--end top-header-->

        <div class="wrap-navigation-search">
            <div class="container">
                <div class="row">
                    <div class="box-nav-seach flexbox align-items-center justify-content-between">
                        <ul class="list-nav flexbox">
                            <li class="item-nav">
                                <a class="linkto" href="/">TOP</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list86.html">かんざし</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list626.html">和傘・和柄傘</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list633.html">帯留め</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list85.html">和シルバーアクセサリー</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list718.html">浴衣</a>
                            </li>
                            <li class="item-nav">
                                <a class="linkto" href="/products/list939.html">箸・箸置き</a>
                            </li>
                        </ul>
                        <div class="box-search-header">
                            <form name="search_form_header" id="search_form_header" class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                                <input type="text" name="name" class="text-search" maxlength="50" value="" placeholder="お探しですか？" lang="ja"/>
                                <button type="submit" class="btn-search" >
                                    <span class="icon icon-wargo-search flexbox"></span>
                                </button>
                                <input type="hidden" name="mode" value="search">
                            </form>
                        </div>
                        <!--end box-search-header-->
                    </div>
                </div>
            </div>
        </div><!--end wrap-navigation-search-->

    </section><!--end wrap-section section-header-->

    <?php } else { ?>
    <link rel="stylesheet" href="/smartphone/user_data/packages/default/assets/layout2018/css/new-wargo-header-sp.css?ver=20200530108" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <section class="wrap-section section-header">
        <div class="top-header">
            <div class="container">
                <a href="https://www.wargo.jp/products/list1577.html">
                    <img src="/user_data/packages/default/assets/layout2018/images/banner_yakimono_sp.jpg" alt="">
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
                            <p class="slogan">和ファッション通販サイト<br>「座市−ザイチ-」</p>
                        </div>
                        <div class="wrap-toggle-menu">
                            <img class="icon-toggle-menu" src="/smartphone/user_data/packages/default/assets/layout2018/images/icon-toggle-menu-sp-v2.svg" alt="">
                        </div>
                    </div><!--end box-bt-header-->
                </div>
            </div>
        </div><!--end bottom-header-->
        <div class="wrap-sub-menu flexbox">
            <div class="section-form-search">
                <div class="row">
                    <div class="box-search-header">
                        <form class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                            <input type="hidden" name="mode" value="search">
                            <input class="text-search" type="text" name="name" maxlength="50" value="" placeholder="お探しですか？">
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
                        <a class="main-logo" href="/"><img src="/user_data/packages/default/assets/layout2018/images/main-logo-the-ichi-v2.png" alt="かんざしの種類【The Ichi】"></a>
                        <p class="main-text"><a href="/">和ファッション通販サイト<br>「座市−ザイチ-」</a></p>
                    </div>
                    <a href="#" class="close-menu">
                        <span class="icon-wargo icon-wargo-menu-toggle-close flexbox"></span>
                    </a>
                </div>

                <div class="wrap-menu-sb-v2 wrap-menu-sb-top-v2">
                    <ul class="list-menu-sb-top-v2">
                        <li class="item-menu">
                            <a href="/user_data/overseasorder_info.php" class="flexbox">
                                <img src="/user_data/packages/default/assets/layout2018/images/img-overseas-shipping-v2.png" alt="Overseas Shipping Service Available">
                                <span class="text">OVERSEAS SHIPPING!</span>
                            </a>
                        </li>
                        <!--{if $isLoginSuccess}-->
<!--                        <li class="item-menu">-->
<!--                            <a href="/mypage/login.php?r=" class="flexbox">-->
<!--                                <img src="/user_data/packages/default/assets/layout2018/images/img-logout-v2.png" alt="">-->
<!--                                <span class="text">マイページ</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <!--{else}-->
                        <li class="item-menu">
                            <a href="/entry/kiyaku.php" class="flexbox">
                                <img src="/user_data/packages/default/assets/layout2018/images/img-register-v2.png" alt="新規会員登録">
                                <span class="text">新規会員登録</span>
                            </a>
                        </li>
                        <li class="item-menu">
                            <a href="/mypage/login.php?r=<!--{$unique_key}-->" class="flexbox">
                                <img src="/user_data/packages/default/assets/layout2018/images/img-login-v2.png" alt="ログイン">
                                <span class="text">ログイン</span>
                            </a>
                        </li>
                        <!--{/if}-->
                        <!--{if $smarty.const.OPTION_FAVOFITE_PRODUCT == 1 }-->
<!--                        <li class="item-menu">-->
<!--                            <a href="/mypage/favorite.php" class="flexbox">-->
<!--                                <img src="/user_data/packages/default/assets/layout2018/images/img-favorite-v2.png" alt="お気に入り">-->
<!--                                <span class="text">お気に入り</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <!--{/if}-->
                        <li class="item-menu">
                            <a href="/cart/index.php" class="flexbox">
                                <img src="/user_data/packages/default/assets/layout2018/images/img-cart-v2.png" alt="">
                                <span class="text">買い物かご</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="wrap-menu-sb-v2 wrap-menu-sb-bottom-v2">
                    <div class="box-search-header wrap-search-sb-v2">
                        <form name="search_form_header" id="search_form_header" class="form-search flexbox justify-content-between" method="get" action="/products/list.php">
                            <input type="text" name="name" class="text-search" maxlength="50" value="" placeholder="お探しですか？" lang="ja"/>
                            <button type="submit" class="btn-search" >
                                <span class="icon icon-wargo-search flexbox"></span>
                            </button>
                            <input type="hidden" name="mode" value="search">
                        </form>
                    </div>
                    <ul class="list-menu-sb-bottom-v2">
                        <li class="item-menu"><a href="/">TOP</a></li>
                        <li class="item-menu"><a href="/products/list86.html">かんざし</a></li>
                        <li class="item-menu"><a href="/products/list626.html">和傘・和柄傘</a></li>
                        <li class="item-menu"><a href="/products/list633.html">帯留め</a></li>
                        <li class="item-menu"><a href="/products/list85.html">和シルバーアクセサリー</a></li>
                        <li class="item-menu"><a href="/products/list718.html">浴衣</a></li>
                        <li class="item-menu"><a href="/products/list939.html">箸・箸置き</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            /*===Sidebar Menu===*/
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
        </script>
    <?php } ?>

	<div id="content" class="site-content">
