<?php
/**
 * Plugin Name: SWE JSON API
 * Description: Adds a JSON endpoint to a WordPress site.
 * Author: Tu D
 * Version: 1.0.0
 * License: GPLv2
 */

define('SWE_JSON_API_PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('SWE_JSON_API_PLUGIN_DIR', dirname(__FILE__));
define('SWE_JSON_API_BASE','api');
define('SWE_JSON_API_CACHE_DIR', ABSPATH .'/api_cache');
define('SWE_JSON_API_CACHE_TIME', 24); //1 day

@include_once(SWE_JSON_API_PLUGIN_DIR."/lib/core.php");
@include_once(SWE_JSON_API_PLUGIN_DIR."/lib/query.php");
@include_once(SWE_JSON_API_PLUGIN_DIR."/lib/cache.php");

// Add initialization
add_action('init', 'swe_json_api_init');
function swe_json_api_init() {
    global $swe_json_api;
    $swe_json_api = new SWE_JSON_API();

    add_filter('template_include', 'template_redirect');
}

function template_redirect( $template ) {
    global $swe_json_api;
    global $wp;

    if(!$swe_json_api->execute($wp->request)) {

        return $template;
    }
}

