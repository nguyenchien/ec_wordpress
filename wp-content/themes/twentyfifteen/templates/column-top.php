<?php
/*
 * Template Name: Column Top
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

    $arr_meta_cate = array(
        'accessary' => array(
            'post_name' => 'accessary',
            'title_h2' => 'かすう工房の新着記事'
        ),
        'kanzashi' => array(
            'post_name' => 'kanzashi',
            'title_h2' => 'かんざし屋wargoの新着記事'
        ),
        'chopsticks' => array(
            'post_name' => 'chopsticks',
            'title_h2' => '箸や万作の新着記事'
        ),
        'umbrella' => array(
            'post_name' => 'umbrella',
            'title_h2' => '北斎グラフィックの新着記事'
        ),
        'yukata' => array(
            'post_name' => 'yukata',
            'title_h2' => '浴衣屋hiyoriの新着記事'
        ),
        'obidome' => array(
            'post_name' => 'obidome',
            'title_h2' => 'おびどめ屋wargoの新着記事'
        ),
        'imayo' => array(
            'post_name' => 'imayo',
            'title_h2' => 'IMAYOの新着記事'
        ),
        'catlover' => array(
            'post_name' => 'catlover',
            'title_h2' => '猫まっしぐらの新着記事'
        ),
    );

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
                        <span class="text-breadcrumbs" itemprop="name">座市コラム特集</span>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="wrap-column-content flexbox">
    <?php if (wp_is_mobile()) : ?>
        <div class="wrap-content-left">

            <h1 class="page-title-h1">座市コラム特集｜和ファッションの豆知識</h1>

            <div class="wrap-column-banner">
                <img src="<?php echo $baseUrl ?>/images/banner-column-top-sp.jpg" alt="座市コラム特集">
            </div>

            <div class="wrap-list-banner-inbound">
                <div class="wrap-brand-title flexbox align-items-center">
                    <span class="icon">
                        <img src="/user_data/packages/default/assets/layout2018/images/category/icon-title-list-cate-id349.png">
                    </span>
                    <div class="brand-title">
                        <h2 class="title">各ブランドのコラム一覧</h2>
                        <p class="sub-title">Brand column</p>
                    </div>
                </div>
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

            <?php foreach ($arr_meta_cate as $cate_name => $cate_info) { ?>
                <?php
                $cate_obj_item = get_category_by_slug($cate_name);
                $columns_cate_item = get_posts(
                    array(
                        'numberposts' => 2,
                        'category' => isset($cate_obj_item->term_id) ? $cate_obj_item->term_id : 0,
                    )
                );
                ?>
                <div class="wrap-column-list wrap-column-<?php echo $arr_meta_cate[$cate_name]['post_name']; ?>">
                    <h2 class="column-title"><?php echo $arr_meta_cate[$cate_name]['title_h2']; ?></h2>
                    <?php if ($columns_cate_item){ ?>
                        <ul class="column-list">
                            <?php
                            foreach( $columns_cate_item as $post ) {
                                if ($is_active_plugin_dynamic_image_resizer) {
                                    $img_post = has_post_thumbnail($post->ID) ? swe_get_the_post_thumbnail($post->ID, array(343,139), array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                                } else {
                                    $img_post = has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                                }
                                $post_content =  wp_trim_words($post->post_content);
                                $num_word = 50;
                                if (wp_is_mobile()) {
                                    $num_word = 20;
                                }
                                $description = mb_substr( $post_content, 0, $num_word, "utf-8" ) . ' ...';
                                setup_postdata($post);
                                ?>
                                <li class="item">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="column-img"><?php echo $img_post; ?></div>
                                        <div class="column-info">
                                            <h3 class="column-name"><?php the_title(); ?></h3>
                                            <p class="desc"><?php echo isset($description)?$description:''; ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    <?php } ?>
                </div>
            <?php } ?>

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
        </div>
    <?php else : ?>
        <div class="wrap-content-left">

            <h1 class="page-title-h1">座市コラム特集｜和ファッションの豆知識</h1>

            <div class="wrap-column-banner">
                <img src="<?php echo $baseUrl ?>/images/banner-column-top-pc.jpg" alt="座市コラム特集">
            </div>

            <div class="wrap-list-banner-inbound">
                <div class="wrap-brand-title flexbox align-items-center">
                    <span class="icon">
                        <img src="/user_data/packages/default/assets/layout2018/images/category/icon-title-list-cate-id349.png">
                    </span>
                    <div class="brand-title">
                        <h2 class="title">各ブランドのコラム一覧</h2>
                        <p class="sub-title">Brand column</p>
                    </div>
                </div>
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

            <?php foreach ($arr_meta_cate as $cate_name => $cate_info) { ?>
            <?php
                $cate_obj_item = get_category_by_slug($cate_name);
                $columns_cate_item = get_posts(
                    array(
                        'numberposts' => 2,
                        'category' => isset($cate_obj_item->term_id) ? $cate_obj_item->term_id : 0,
                    )
                );
            ?>
            <div class="wrap-column-list wrap-column-<?php echo $arr_meta_cate[$cate_name]['post_name']; ?>">
                <h2 class="column-title"><?php echo $arr_meta_cate[$cate_name]['title_h2']; ?></h2>
                <?php if ($columns_cate_item){ ?>
                <ul class="column-list">
                    <?php
                        foreach( $columns_cate_item as $post ) {
                            if ($is_active_plugin_dynamic_image_resizer) {
                                $img_post = has_post_thumbnail($post->ID) ? swe_get_the_post_thumbnail($post->ID, array(343,139), array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                            } else {
                                $img_post = has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post->ID, 'full', array('alt' => get_the_title())) : '<img src="' . THEME_URL . '/images/no-image.jpg?ver=20200702343" alt="' . get_the_title() . '">';
                            }
                            $post_content =  wp_trim_words($post->post_content);
                            $num_word = 50;
                            if (wp_is_mobile()) {
                                $num_word = 20;
                            }
                            $description = mb_substr( $post_content, 0, $num_word, "utf-8" ) . ' ...';
                            setup_postdata($post);
                        ?>
                    <li class="item">
                        <a href="<?php the_permalink() ?>">
                            <div class="column-img"><?php echo $img_post; ?></div>
                            <div class="column-info">
                                <h3 class="column-name"><?php the_title(); ?></h3>
                                <p class="desc"><?php echo isset($description)?$description:''; ?></p>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>

        </div>
        <div class="wrap-content-right">
            <?php get_template_part('include/sidebar-right-pc'); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
