<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>
<?php get_header(); ?>

<section id="index-sectionTwo" class="section fp-auto-height-responsive">
<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="about_content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; else: ?>
    <?php echo "ERROR" ?>
  <?php endif; ?>


 </section>
<?php get_footer(); ?>
