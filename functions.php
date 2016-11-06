<?php

    //-------------------- add feature img

    add_theme_support( 'post-thumbnails' );

    add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
    add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

    function remove_thumbnail_dimensions( $html ) {
        $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
        return $html;
    }


    //-------------------- add custom menu support

    add_theme_support( 'menus' );

    function fot_menus() {
        $locations = array(
            'headermenu' => 'Header menu',
            'footermenu' => 'Footer menu',
        );
        register_nav_menus( $locations );

    }
    add_action( 'init', 'fot_menus' );
    

    /* TinyMCE editor */
    function bbp_enable_visual_editor( $args = array() ) {
      $args['tinymce'] = true;
      return $args;
    }
    add_filter( 'bbp_after_get_the_content_parse_args', 'bbp_enable_visual_editor' );


?>
