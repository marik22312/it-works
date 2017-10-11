<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">
    <title><?php wp_title(); ?></title>
    <base href="<?= site_url() ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
        <div class="container-fluid">
    <header class="row">
      <!-- custom logo -->
      <?php
       $custom_logo_id = get_theme_mod( 'custom_logo' );
       $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?><a href="<?php echo site_url(); ?>">
        <img id="header-logo" src="<?php echo $image[0]; ?>" alt="<?php echo bloginfo('name'); ?>" title="<?php echo bloginfo('name'); ?>">
        </a>

        <div id="mobile-ham">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>

        <?php
        wp_nav_menu( array(
           'theme_location' => 'header-menu',
           'container' => 'nav',
           'container_class' => '',
  	        'container_id'    => 'header-menu',)); ?>
    </header>
