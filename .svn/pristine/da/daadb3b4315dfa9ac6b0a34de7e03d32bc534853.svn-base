<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

global $post;

// Get post type
$post_type = get_post_type($post->ID);

if ($post_type && $post_type == 'post') {
    get_template_part('single_tpl/single', 'column');
}
