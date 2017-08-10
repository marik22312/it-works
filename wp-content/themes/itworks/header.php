<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <!-- custom logo -->
      <?php
       $custom_logo_id = get_theme_mod( 'custom_logo' );
       $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
        <img id="header-logo" src="<?php echo $image[0]; ?>" alt="<?php echo bloginfo('name'); ?>">
        <?php
        wp_nav_menu( array(
           'theme_location' => 'header-menu-middle',
           'container' => 'nav',
           'container_class' => '',
  	        'container_id'    => 'header-menu-middle',));

        wp_nav_menu( array(
           'theme_location' => 'header-menu-side',
           'container' => 'nav',
           'container_class' => '',
            'container_id'    => 'header-menu-side',));
        ?>
    </header>
    <!-- <div id="fullpage"> -->
