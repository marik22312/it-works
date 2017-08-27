<?php
/**
 * Template Name: Contact Us
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>
<?php get_header(); ?>
<div id="contact-row" class="row">
  <div id="contact-header">
    <h1>Contact Us</h1>
    <p>
      Thank you for your interest in <?php echo bloginfo('name'); ?>. How can we help?
    </p>
  </div>
  <div class="col-lg-4 col-lg-offset-4" id="contact-form">

  <?php
  if (have_posts()):
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  else:
    echo 'There';
  endif;
  ?>
  </div>
  <?php
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?><div id="contact-logo" class="row">
    <a href="<?php echo site_url(); ?>">
      <img class="col-lg-2 col-lg-offset-5" src="<?php echo $image[0]; ?>" alt="<?php echo bloginfo('name'); ?>" title="<?php echo bloginfo('name'); ?>">
    </a>
  </div>

</div>
<?php get_footer(); ?>
