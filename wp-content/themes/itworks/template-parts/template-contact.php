<?php
/**
 * Template Name: Contact Us
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>
<?php get_header(); ?>
<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo 'There';
endif;
?>
<?php get_footer(); ?>
