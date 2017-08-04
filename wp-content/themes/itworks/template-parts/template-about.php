<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>
<?php get_header();

  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="index-sectionTwo" class="section fp-auto-height-responsive">

    <div id="sec2_title">
      <?php the_field('sec2_title'); ?>
    </div>
    <div id="sec2_subtitle">
      <?php the_field('sec2_subtitle'); ?>
    </div>
    <div id="about-sec2-dot" class="bluedot"></div>
    <div id="sec2_con1_title" class="sec2_row_title">
      <?php the_field('sec2_con1_title'); ?>
    </div>
    <div id="sec2_con1_cont" class="sec2_row_cont">
      <?php the_field('sec2_con1_cont'); ?>
    </div>
    <div id="about-sec2-dot" class="bluedot"></div>
    <div id="sec2_con2_title" class="sec2_row_title">
      <?php the_field('sec2_con2_title'); ?>
    </div>
    <div id="sec2_con2_cont" class="sec2_row_cont">
      <?php the_field('sec2_con2_cont'); ?>
    </div>
    <div id="about-sec2-dot" class="bluedot"></div>
    <div id="sec2_con3_title" class="sec2_row_title">
      <?php the_field('sec2_con3_title'); ?>
    </div>
    <div id="sec2_con3_cont" class="sec2_row_cont">
      <?php the_field('sec2_con3_cont'); ?>
    </div>
    <div id="about-sec2-dot" class="bluedot"></div>
    <div id="sec2_con4_title" class="sec2_row_title">
      <?php the_field('sec2_con4_title'); ?>
    </div>
    <div id="sec2_con4_cont" class="sec2_row_cont">
      <?php the_field('sec2_con4_cont'); ?>
    </div>
  <?php endwhile; else: ?>
    <?php echo "ERROR" ?>
  <?php endif; ?>


 </section>
<?php get_footer(); ?>
