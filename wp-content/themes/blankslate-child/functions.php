<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
}

add_filter('wp_nav_menu_args', 'wp_nav_menu_items', );
function wp_nav_menu_items( $items = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $items['menu'] = 5;
     
    } else {
    // Non-logged-in menu to display
    $items['menu'] = 25;
    }
    return $items;
    }


/*add_filter('wp_nav_menu_items', 'hide_admin', 10, 2 );
    function hide_admin( $items, $args ) 
    {
    if (is_user_logged_in()) 
       {
        
            $new_item = array('<li><a href="http://localhost/Planty/wordpress-6.1.1-fr_FR/wordpress/wp-admin">Admin</a></li>') ;
            $items = preg_replace( '/<\/li>\s<li/', '</li>,<li', $items );
            $array_items = explode (',',$items);
            array_splice($array_items,1,0,$new_item);
            $items = implode ('',$array_items);
    
       }
       return $items;
    
    }*/
    
