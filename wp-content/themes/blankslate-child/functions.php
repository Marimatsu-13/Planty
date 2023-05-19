<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
}

function my_wp_nav_menu_items( $items = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $items['menu'] = 5;
     
    } else {
    // Non-logged-in menu to display
    $items['menu'] = 25;
    }
    return $items;
    }
    add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_items' );




