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


?>
