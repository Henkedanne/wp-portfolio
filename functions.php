<?php

function portfolio_resources() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(),'1.0', true);
}

function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
// Adds style button to postpanel
function wpb_mce_buttons_2($buttons) {
        array_unshift($buttons, 'styleselect');
        return $buttons;
}
   
 // remove p tags around img
 function filter_ptags_on_images($content){
        return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) {  
        
       // Define the style_formats array
        
           $style_formats = array(  
       /*
       * Each array child is a format with it's own settings
       * Notice that each array has title, block, classes, and wrapper arguments
       * Title is the label which will be visible in Formats menu
       * Block defines whether it is a span, div, selector, or inline style
       * Classes allows you to define CSS classes
       * Wrapper whether or not to add a new block-level element around any selected elements
       */
               array(  
                   'title' => 'Text-block',  
                   'block' => 'div',  
                   'classes' => 'page-content__post__text',
                   'wrapper' => true,
                    
               ),  
           );  
           // Insert the array, JSON ENCODED, into 'style_formats'
           $init_array['style_formats'] = json_encode( $style_formats );  
            
           return $init_array;  
          
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
 



add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
 // Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

add_filter('the_content', 'filter_ptags_on_images');
?>
