<?php
/*
 * Template Name: Column List
 */
?>
<?php
    get_header();

    global $post, $is_active_plugin_dynamic_image_resizer;
    $postName = $post->post_name ? $post->post_name : '';

    if ( wp_is_mobile() ) {
        wp_register_style('column-ec-v2-sp-style', THEME_URL.'/css/column-ec-v2-sp.css', 'twentyfifteen', time());
        wp_enqueue_style('column-ec-v2-sp-style');
    } else {
        wp_register_style('column-ec-v2-pc-style', THEME_URL.'/css/column-ec-v2-pc.css', 'twentyfifteen', time());
        wp_enqueue_style('column-ec-v2-pc-style');
    }

    $baseUrl = base_url_func();

    // Meta data for column list
    $arr_meta_column_list = array(
        'kanzashi' => array(
            'post_name' => 'kanzashi',
            'title_h1' => 'かんざしの種類や使い方の豆知識｜かんざし屋wargo',
            'title_h2' => 'かんざし屋wargoのかんざしコラム',
        ),
        'umbrella' => array(
            'post_name' => 'umbrella',
            'title_h1' => '和傘の選び方やお手入れ方法の豆知識｜北斎グラフィック',
            'title_h2' => '北斎グラフィックの傘コラム',
        ),
        'obidome' => array(
            'post_name' => 'obidome',
            'title_h1' => '帯留めと和小物の豆知識｜おびどめ屋wargo',
            'title_h2' => 'おびどめ屋wargoの帯留めに関するコラム',
        ),
        'accessary' => array(
            'post_name' => 'accessary',
            'title_h1' => '和シルバーアクセサリーの豆知識｜かすう工房',
            'title_h2' => 'かすう工房の和シルバーアクセサリーコラム',
        ),
        'chopsticks' => array(
            'post_name' => 'chopsticks',
            'title_h1' => '箸と食卓雑貨の豆知識｜箸や万作',
            'title_h2' => '箸や万作の箸に関するコラム',
        ),
        'yukata' => array(
            'post_name' => 'yukata',
            'title_h1' => '浴衣の着こなし方と豆知識｜ゆかた屋hiyori',
            'title_h2' => 'ゆかた屋hiyoriの浴衣に関するコラム',
        ),
        'pickup' => array(
            'post_name' => 'pickup',
            'title_h1' => '特集・ピックアップ',
            'title_h2' => '特集・ピックアップ',
        ),
        'imayo' => array(
            'post_name' => 'imayo',
            'title_h1' => '米ぬか石鹸とスキンケアの豆知識 | IMAYO',
            'title_h2' => 'IMAYOの石鹸に関するコラム',
        ),
        'catlover' => array(
            'post_name' => 'catlover',
            'title_h1' => '猫まっしぐらコラム一覧',
            'title_h2' => '猫まっしぐらコラム一覧',
        )
    );

    // Get post for page column list
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => 8,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'post_type' => 'post',
                'terms' => $postName ? $postName : 'kanzashi',
            )
        ),
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'pagination' => true,
        'paged' => $paged,
    );
    $column_list_posts = new WP_Query($args);

?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div id="breadcrumbs" class="breadcrumbs-ec">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li class="item-breadcrumbs" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link-breadcrumbs" itemprop="item" href="https://www.wargo.jp/">
                            <span class="text-breadcrumbs" itemprop="name">TOP</span>
                        </a>
                        <meta itemprop="position" content="0">
                    </li>
                    <span class="separator"> &gt; </span>
                    <li class="item-breadcrumbs" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link-breadcrumbs" itemprop="item" href="https://www.wargo.jp/column">
                            <span class="text-breadcrumbs" itemprop="name">座市コラム特集</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <span class="separator"> &gt; </span>
                    <li class="item-breadcrumbs last-breadcrumbs" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span class="text-breadcrumbs" itemprop="name"><?php the_title(); ?></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="wrap-column-content flexbox wrap-column-<?php echo $postName;?>">
    <?php if (wp_is_mobile()) : ?>
        <div class="wrap-content-left">

            <h1 class="page-title-h1"><?php echo isset($postName) ? $arr_meta_column_list[$postName]['title_h1'] : ''; ?></h1>

            <div class="wrap-column-banner">
                <img src="<?php echo $baseUrl ?>/images/banner-column-kanzashi-sp.jpg" alt="kanzashi">
            </div>

            <div class="wrap-column-list">
                <h2 class="column-title"><?php echo isset($postName) ? $arr_meta_column_list[$postName]['title_h2'] : 'かんざし屋wargoのかんざしコラム'; ?></h2>
                <ul class="column-list">
                    <?php
                        if ($column_list_posts->have_posts()) {
                            while ($column_list_posts->have_posts()) {
                            $column_list_posts->the_post();

                            if ($is_active_plugin_dynamic_image_resizer) {
                                $img_post = has_post_thumbnail($post->ID) ? swe_get_the_post_thumbnail($post->ID, array(343,139), array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                            } else {
                                $img_post = has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg" alt="' . get_the_title() . '">';
                            }
                    ?>
                        <li class="column-item">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="column-img"><?php echo $img_post; ?></a>
                            <div class="column-desc">
                                <div class="column-info">
                                    <p class="date-info">
                                        <span class="date-lbl">投稿日</span>
                                        <span class="date"><?php echo get_the_date('Y.m.d', $post->ID); ?></span>
                                    </p>
                                    <p class="views"><?php echo gt_get_post_view(); ?></p>
                                </div>
                                <h3 class="column-name"><?php echo get_the_title($post->ID); ?></h3>
                            </div>
                            <div class="wrap-column-link">
                                <a href="<?php echo get_permalink($post->ID); ?>">記事を読む</a>
                            </div>
                        </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
                <div class="wrap-paging">
                    <?php wp_pagenavi(array('query'=>$column_list_posts,'options' => array(
                        'prev_text' => '<span class="paging-nav prev"></span>',
                        'next_text' => '<span class="paging-nav next"></span>')));
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="wrap-list-banner-cate">
                <ul class="list-banner">
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list939.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-01.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list86.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-02.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list626.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-03.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list85.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-04.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list718.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-05.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/products/list633.html">
                            <img src="<?php echo $baseUrl ?>/images/banner-cate-06.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="wrap-list-banner-inbound">
                <ul class="list-banner">
                    <li class="item">
                        <a href="https://www.wargo.jp/column/accessary">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-01.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/kanzashi">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-02.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/chopsticks">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-03-v2.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/umbrella">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-04.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/yukata">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-05.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/obidome">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-06.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/imayo">
                            <img src="<?php echo $baseUrl ?>/images/banner-column-imayo.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/catlover/">
                            <img src="<?php echo $baseUrl ?>/images/banner-column-cat.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <?php else : ?>
        <div class="wrap-content-left">

            <h1 class="page-title-h1"><?php echo isset($postName) ? $arr_meta_column_list[$postName]['title_h1'] : ''; ?></h1>

            <div class="wrap-column-banner">
                <img src="<?php echo $baseUrl ?>/images/banner-column-kanzashi-pc.jpg" alt="kanzashi">
            </div>

            <div class="wrap-column-list">
                <h2 class="column-title"><?php echo isset($postName) ? $arr_meta_column_list[$postName]['title_h2'] : 'かんざし屋wargoのかんざしコラム'; ?></h2>
                <ul class="column-list flexbox">
                    <?php
                        if ($column_list_posts->have_posts()) {
                            while ($column_list_posts->have_posts()) {
                                $column_list_posts->the_post();

                                if ($is_active_plugin_dynamic_image_resizer) {
                                    $img_post = has_post_thumbnail($post->ID) ? swe_get_the_post_thumbnail($post->ID, array(343,139), array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                                } else {
                                    $img_post = has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg" alt="' . get_the_title() . '">';
                                }

                                ?>
                                <li class="column-item">
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="column-img"><?php echo $img_post; ?></a>
                                    <div class="column-desc">
                                        <div class="column-info">
                                            <p class="date-info">
                                                <span class="date-lbl">投稿日</span>
                                                <span class="date"><?php echo get_the_date('Y.m.d', $post->ID); ?></span>
                                            </p>
                                            <p class="views"><?php echo gt_get_post_view(); ?></p>
                                        </div>
                                        <h3 class="column-name"><?php echo get_the_title($post->ID); ?></h3>
                                    </div>
                                    <div class="wrap-column-link">
                                        <a href="<?php echo get_permalink($post->ID); ?>">記事を読む</a>
                                    </div>
                                </li>
                            <?php }
                        }
                    ?>
                </ul>
                <div class="wrap-paging">
                    <?php wp_pagenavi(array('query'=>$column_list_posts,'options' => array(
                        'prev_text' => '<span class="paging-nav prev"></span>',
                        'next_text' => '<span class="paging-nav next"></span>')));
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="wrap-list-banner-inbound">
                <ul class="list-banner flexbox">
                    <li class="item">
                        <a href="https://www.wargo.jp/column/accessary">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-01.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/kanzashi">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-02.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/chopsticks">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-03-v2.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/umbrella">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-04.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/yukata">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-05.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/obidome">
                            <img src="<?php echo $baseUrl ?>/images/banner-ib-06.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/imayo">
                            <img src="<?php echo $baseUrl ?>/images/banner-column-imayo.jpg" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.wargo.jp/column/catlover/">
                            <img src="<?php echo $baseUrl ?>/images/banner-column-cat.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrap-content-right">
            <?php get_template_part('include/sidebar-right-pc'); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
