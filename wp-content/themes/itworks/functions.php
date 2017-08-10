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
      'header-menu-middle' => __( 'Header Menu Middle' ),
      'header-menu-side' => __( 'Header Menu Side' )
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

 // loaders for style and script
 function setup_theme_lib(){
  // Reset.css
  wp_enqueue_style('resetCSS', get_template_directory_uri().'/lib/reset.css', array(), '1.0.0', 'all');
  //Bootstrap
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css', array(), '3.7.7', 'all');
  wp_enqueue_style('bootstrap-theme', get_template_directory_uri().'/lib/bootstrap/css/bootstrap-theme.min.css', array(), '3.7.7', 'all');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.min.js', array(), '1.0.0',true);
  //Animate on scroll
  wp_enqueue_style('aos-css', get_template_directory_uri().'/lib/aos/aos.css', array(), '1.0.0', 'all');
  wp_enqueue_script('aos-js', get_template_directory_uri().'/lib/aos/aos.js', array(), '1.0.0',true);
  //Font Awesome
  wp_enqueue_style('fontawesome', get_template_directory_uri().'/lib/fontawesome/css/font-awesome.min.css', array(), '1.0.0', 'all');
  //Fullpage.JS
  wp_enqueue_style('fullpageJS-css', get_template_directory_uri().'/lib/fullpage/jquery.fullpage.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('fullpageJS-js', get_template_directory_uri().'/lib/fullpage/jquery.fullpage.min.js', array(), '1.0.0',true);

  // Custom JS & CSS
  wp_enqueue_script('customJS', get_template_directory_uri().'/script.js', array('jquery'), '1.0.0',false);
  wp_enqueue_style('customCSS', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
 	}
 add_action('wp', 'setup_theme_lib');

?>
