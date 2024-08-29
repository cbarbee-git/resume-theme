<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function chad_custom_excerpts($limit, $ID) {
    return wp_trim_words(get_the_excerpt($ID), $limit, '&hellip;<a class="read-more" href="'. esc_url( get_permalink() ) . '">'  . __( 'Read more', $theme_config['textdomain'] ) . '</a>');
}

?>