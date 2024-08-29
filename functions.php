<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit(); // Exit if accessed directly
}

define( 'THEME_INCLUDES_PATH', untrailingslashit( get_template_directory() ) . '/inc' );
define( 'THEME_INCLUDES_URI', untrailingslashit( get_template_directory_uri() ) . '/inc' );
define( 'THEME_TEMPLATE_PATH', untrailingslashit( get_template_directory() ) );
define( 'THEME_TEMPLATE_URI', untrailingslashit( get_template_directory_uri() ) );
define( 'THEME_ASSETS_PATH', THEME_TEMPLATE_PATH . '/assets' );
define( 'THEME_ASSETS_URI', THEME_TEMPLATE_URI . '/assets' );

//Load all included theme files
global $theme_config;
$theme_config = require THEME_INCLUDES_PATH. "/theme.config.php";

if( ! empty( $theme_config['theme_includes'] ) && is_array( $theme_config['theme_includes'] ) ){
    foreach($theme_config['theme_includes'] as $theme_file ){

        $theme_file = THEME_INCLUDES_PATH . '/' . untrailingslashit( trim( $theme_file ) );

        if ( ! empty( $theme_file ) && file_exists( $theme_file ) ) {
            require $theme_file;
        }
    }
}

?>