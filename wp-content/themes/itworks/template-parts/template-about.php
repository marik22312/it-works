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

<section id="index-sectionTwo" class="row">
  <div class="container-fluid">

    <div id="sec2_title">
      <?php the_field('sec2_title'); ?>
    </div>
    <div id="sec2_subtitle">
      <?php the_field('sec2_subtitle'); ?>
    </div>
    <?php for ($i=1; $i <= 4; $i++) : ?>
      <div class="ab-sec2-con<?php echo $i; ?>-container">
        <div class="bluedot"></div>
        <div id="sec2_con<?php echo $i; ?>_title" class="sec2_row_title">
          <?php the_field('sec2_con'.$i.'_title'); ?>
        </div>
        <div id="sec2_con<?php echo $i; ?>_cont" class="sec2_row_cont">
          <?php the_field('sec2_con'.$i.'_cont'); ?>
        </div>
      </div>
    <?php endfor; ?>
  <?php endwhile; else: ?>
    <?php echo "ERROR" ?>
  <?php endif; ?>

  </div>
 </section>
<?php get_footer(); ?>
