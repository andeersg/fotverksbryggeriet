<?php
    
    //-------------------- add custom menu support
    
    add_theme_support( 'menus' );
    
    function fotverksbryggeriet_menus() {
        $locations = array(
            'fotverksbryggerietheadermenu' => 'Header menu',
            'fotverksbryggerietfootermenu' => 'Footer menu',
        );
        register_nav_menus( $locations );
    
    }
    add_action( 'init', 'fotverksbryggeriet_menus' );
    
    //-------------------- fotverksbryggeriet egne taksonomier
    
    function beer_color() {
    
        $labels = array(
            'name'                       => 'Korkfarger',
            'singular_name'              => 'Korkfarge',
            'menu_name'                  => 'Korkfarge',
            'all_items'                  => 'All Items',
            'parent_item'                => 'Parent Item',
            'parent_item_colon'          => 'Parent Item:',
            'new_item_name'              => 'New Item Name',
            'add_new_item'               => 'Add New Item',
            'edit_item'                  => 'Edit Item',
            'update_item'                => 'Update Item',
            'view_item'                  => 'View Item',
            'separate_items_with_commas' => 'Separate items with commas',
            'add_or_remove_items'        => 'Add or remove items',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'Popular Items',
            'search_items'               => 'Search Items',
            'not_found'                  => 'Not Found',
            'no_terms'                   => 'No items',
            'items_list'                 => 'Items list',
            'items_list_navigation'      => 'Items list navigation',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'beer_color', array( 'post' ), $args );
    
    }
    add_action( 'init', 'beer_color', 0 );
    
    function beer_type() {
    
        $labels = array(
            'name'                       => 'Øltyper',
            'singular_name'              => 'Øltype',
            'menu_name'                  => 'Øltyper',
            'all_items'                  => 'All Items',
            'parent_item'                => 'Parent Item',
            'parent_item_colon'          => 'Parent Item:',
            'new_item_name'              => 'New Item Name',
            'add_new_item'               => 'Add New Item',
            'edit_item'                  => 'Edit Item',
            'update_item'                => 'Update Item',
            'view_item'                  => 'View Item',
            'separate_items_with_commas' => 'Separate items with commas',
            'add_or_remove_items'        => 'Add or remove items',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'Popular Items',
            'search_items'               => 'Search Items',
            'not_found'                  => 'Not Found',
            'no_terms'                   => 'No items',
            'items_list'                 => 'Items list',
            'items_list_navigation'      => 'Items list navigation',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'beer_type', array( 'post' ), $args );
    
    }
    add_action( 'init', 'beer_type', 0 );

?>
    
