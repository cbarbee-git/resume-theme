<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$theme_config = array();

$theme_config['textdomain'] = 'chads-resume';

$theme_config['theme_includes'] = array(
            'theme.functions.php',
            'theme.actions.php',
            'theme.filters.php',
            'theme.shortcodes.php',
        );
$theme_config['nav_menus'] = array(
            'main-menu'     => __( 'Main Menu', $theme_config['textdomain'] ),
            'footer-menu'   => __( 'Footer Menu', $theme_config['textdomain'] )
        );

$theme_config['google_fonts'] = array(
        //'Open+Sans:300,300italic,400,400italic,600,600italic,700italic,700,800,800italic',
        //'Vast Shadow',
        //'Golos Text'
        'Roboto'
        );

$theme_config['enqueue_scripts'] = array(
    array( 'handle' => 'slick-slider', 'src' =>  THEME_ASSETS_URI . '/js/slick.min.js', 'deps' => array( 'jquery' ), 'version' => null, 'in_footer' => true ),
    array( 'handle' => 'page-slider', 'src' =>  THEME_ASSETS_URI . '/js/page-slider.js', 'deps' => array( 'jquery' ), 'version' => null, 'in_footer' => true ),
    array( 'handle' => 'site-scripts', 'src' => THEME_ASSETS_URI . '/js/site-scripts.js', 'deps' => array( 'jquery' ), 'version' => '1', 'in_footer' => true ),
);

return $theme_config;

?>