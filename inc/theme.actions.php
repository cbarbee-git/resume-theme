<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//theme support
add_action('after_setup_theme', function(){
    global $theme_config;
    add_theme_support('post-thumbnails');
    //add_theme_support('disable-custom-colors');
    //add_theme_support('disable-custom-gradients');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_post_type_support('page','excerpt'); 
});

//theme styles
function theme_enqueue_styles() {
    wp_enqueue_style( 'chads-resume_theme_style', get_stylesheet_uri() );
    wp_enqueue_style( 'chads-resume_slick-slider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//theme scripts
function theme_enqueue_scripts() {
    global $theme_config;
    if ( ! empty( $theme_config['enqueue_scripts'] ) ) {
        foreach( $theme_config['enqueue_scripts'] as $script ){
            $handle = isset($script['handle']) ? $script['handle'] : '';
            $src = isset($script['src']) ? $script['src'] : '';
            $deps = isset($script['deps']) ? $script['deps'] : array();
            $version = isset($script['version']) ? $script['version'] : null;
            $in_footer = isset($script['in_footer']) ? $script['in_footer'] : false;
            wp_enqueue_script(
                $handle,
                $src,
                $deps,
                $version,
                $in_footer
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

// Register navigation menus assigned in theme.config.php
if ( ! empty( $theme_config['nav_menus'] ) ) {
    register_nav_menus( $theme_config['nav_menus'] );
}

//Allow SVG uploads
function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


function theme_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
}
 // Add to the init hook of your theme functions.php file 
add_action( 'init', 'theme_settings' );


function add_google_analytics_ua_code() {
    echo (get_field('google_analytics_code', 'option') );
}
add_action( 'wp_head', 'add_google_analytics_ua_code', 10 );

?>