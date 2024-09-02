<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter( 'option_use_smilies', '__return_false' );

function new_excerpt_more($more) {
    return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Disable standard editor and Gutenberg from the homepage
 * keeping the status (enabled/disabled) for others who uses the same filter (i.e. ACF)
 */
function chad_resume_hide_editor( $use_block_editor, $post_type ) {
    if ( (int) get_option( 'page_on_front' ) == get_the_ID() ) { // on frontpage
        remove_post_type_support( 'page', 'editor' ); // disable standard editor
        return false; // and disable gutenberg
    }
    return $use_block_editor; // keep gutenberg status for other pages/posts 
}
add_filter( 'use_block_editor_for_post', 'chad_resume_hide_editor', 10, 2 );



/**
 * Add Social Media Links to the Main Menu
 * ===========================================
 */

 add_filter( 'wp_nav_menu_items', 'chad_resume_add_social_links', 10, 2 );
 function chad_resume_add_social_links( $items, $args ) {
    /**
    * Append Social Media Icons to Main Menu
    */
    if ( $args->theme_location == 'main-menu' ) {
        $social_icons = get_field('social_media_menu_items','options');
        $count = 0;
        foreach($social_icons as $social_icon){
            $count++;
            $items .= "\t<li id=\"menu-item-social-".$count."\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-social menu-item-social-".$count."\">\n";
            $link = ($social_icon['is_email']) ? 'mailto:'.$social_icon['social_media_url'] : $social_icon['social_media_url'] ;
            $items .= "\t\t<a class=\"icon\" target=\"_blank\" href=\"". $link ."\">".$social_icon['social_media_icon']."</a>\n";
            $items .= "\t</li>\n";
        }
    }
    return $items;
 }

 // Allow SVG
 add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
 
   global $wp_version;
   if ( $wp_version !== '4.7.1' ) {
      return $data;
   }
 
   $filetype = wp_check_filetype( $filename, $mimes );
 
   return [
       'ext'             => $filetype['ext'],
       'type'            => $filetype['type'],
       'proper_filename' => $data['proper_filename']
   ];
 
 }, 10, 4 );
 
 function cc_mime_types( $mimes ){
   $mimes['svg'] = 'image/svg+xml';
   return $mimes;
 }
 add_filter( 'upload_mimes', 'cc_mime_types' );
 

?>