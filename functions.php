<?php

function portfolio_resources() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(),'1.0', true);
}

function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('wp_enqueue_scripts', 'portfolio_resources');
add_action('get_header', 'remove_admin_login_header');

//Navigation Registration
register_nav_menus( array(
        'primary_menu' => __('Primary Menu'),
        'secondary_menu' => __('Secondary Menu'),
));

// allows for featured image
add_theme_support( 'post-thumbnails' );
 // remove p tags around img
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
?>
