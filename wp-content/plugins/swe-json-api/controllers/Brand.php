<?php

/**
 * Class SWE_JSON_API_Brand_Controller
 */
require_once SWE_JSON_API_PLUGIN_DIR.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.'Controller.php';

class SWE_JSON_API_Brand_Controller extends SWE_JSON_API_Controller {
    function actionCate($cate_name = null) {
        if (!empty($cate_name)) {
            $query = array(
                'category_name' => $cate_name,
                'posts_per_page' => 4,
                'orderby' => 'post_date',
                'order' => 'DESC')
            ;
            $the_query = new WP_Query($query);
            $results = array();

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $post_id = get_the_ID();

                    if (has_post_thumbnail()) {
                        $attachment_id = get_post_thumbnail_id(get_the_ID());
                        list($img_src, $width, $height, $is_intermediate) = swe_wp_get_attachment_image_src($attachment_id, array(343,139));
                        list($img_src_sp, $width, $height, $is_intermediate) = swe_wp_get_attachment_image_src($attachment_id, array(343,139));
                        if ($cate_name && $cate_name == 'catlover'){
                            list($img_src, $width, $height, $is_intermediate) = swe_wp_get_attachment_image_src($attachment_id, array(390,390));
                            list($img_src_sp, $width, $height, $is_intermediate) = swe_wp_get_attachment_image_src($attachment_id, array(390,390));
                        }
                    } else {
                        $post = get_post($post_id);
                        $content = $post->post_content;
                        $regex = '/src="([^"]*)"/';
                        preg_match_all($regex, $content, $matches);
                        $matches = array_reverse($matches);
                        if (isset($matches[0])) {
                            $img_src = empty($matches[0][0]) ? '' : $matches[0][0];
                            $img_src_sp = empty($matches[0][0]) ? '' : $matches[0][0];
                        }
                    }

                    $link = get_permalink($post_id);
                    $link = str_replace("http://", "https://", $link);
                    $img_src = str_replace("http://", "https://", $img_src);
                    $img_src_sp = str_replace("http://", "https://", $img_src_sp);
                    $results[] = array(
                        'post_id' => $post_id,
                        'title' => get_the_title(),
                        'date' => get_the_date(),
                        'excerpt' => strip_tags(get_the_excerpt()),
                        'img_src' => empty($img_src) ? "" : $img_src,
                        'img_src_sp' => empty($img_src_sp) ? "" : $img_src_sp,
                        'link' => $link
                    );
                }
                wp_reset_postdata();
            } else {
                $results = array('no posts found');
            }
        } else {
            $results = array('wrong cate!');
        }

        return $results;
    }
}