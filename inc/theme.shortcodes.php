<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function _chad_display_carousel($atts) {
    $output = "";
    //return $output;
    if(!isset($atts["id"])){
        //cannot do anything w/o an ID to retreive
        return false;
    }

    $option_defaults = array(
        'dots'      => 'carousel_show_bullet_navigation',
        'arrows'    => 'carousel_show_arrows',
        'autoplay'  => 'carousel_autoplay',
        'autoplay-speed'   => 'carousel_autoplay_speed',
        'infinite'  => 'carousel_infinite_scroll',
        'speed'     => 'carousel_transition_speed',
        'fade'      => 'carousel_fade_items',
    );
    
    foreach ( $option_defaults as $od_array_key => $od_acf_key ) {
        $options[$od_array_key] = ( isset( $options[$od_array_key] ) ? $options[$od_array_key] : get_field($od_acf_key, $atts['id'] ) );
    }
    
    unset( $od_array_key, $od_acf_key );

    $output .= "<div class='embedded-slider'>\n";
    if(get_field('carousel_display_title',$atts["id"])){
        $output .= "<h2 class=\"slider-header\">".get_the_title($atts["id"])."</h2>";
    }
    $items = get_field('carousel_items',$atts["id"]);


    if( $items ) {
        $output .= "<div class='slider'";
        foreach($options as $key => $value){
            if($value){
                $output .= ' data-'. $key . '='. $value .' ';
            }
        }
        $output .= ' data-centermode=1 ';
        $output .= ' data-slidestoshow=3 ' ;
        //$output .= ' data-fade=false ' ;
        $output .= ">\n";
        foreach ( $items as $key => $item ) :
            $output .= "<div class=\"slide\">\n";
            $output .= "\t<figure>\n";
            $item_caption = $item['item_caption'] ?: '';
            if ( ! empty( $item['item_image'] ) ) : 
                $output .= "\t\t<img src=\"" . $item['item_image'] . "\" alt=\"". $item_caption ."\" title=\"". $item_caption ."\" class=\"slide-image\" />\n";
            endif;
            if( $item_caption != '') :
                $output .= "\t\t<figcaption data-url=\"".$item['item_page_link']."\">" . $item_caption . "</figcaption>\n";
            endif;
            $output .= "\t</figure>\n";
            $output .= "</div>\n";
        endforeach;
        $output .= "</div>\n";
    }

    $output .= "</div>\n";

    return $output;
}
add_shortcode( 'chad_carousel', '_chad_display_carousel' );


?>