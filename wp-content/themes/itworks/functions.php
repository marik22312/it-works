<?php

/**
 * URL token
 */
require get_template_directory() . '/functions_url-token.php';
/* Initial set up */
/** Top navigation menu set-up */
function register_topMenu(){
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action('init', 'register_topMenu');

function my_theme_setup(){
add_theme_support('menus' );
add_theme_support( 'custom-logo' );
register_nav_menu('primary','primary header navigation');
register_nav_menu('secondary','secondary header navigation');

}
add_action('init','my_theme_setup');

 /* loaders for style and script */
 function my_theme_script_enque(){
 	// custom css
 	wp_enqueue_style('CustomStyle', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
 	// Custom JS
 	wp_enqueue_script('customjs', get_template_directory_uri().'/script.js', array('jquery'), '1.0.0',false);
 	}
 add_action('init', 'my_theme_script_enque');

?>
