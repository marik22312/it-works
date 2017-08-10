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

<section id="ab-sectionTwo" class="row">
  <div class="col-md-8 col-md-offset-2" id="in-sec2-cont">
    <div id="sec2-title-cont">
      <div id="sec2_title">
        <?php the_field('sec2_title'); ?>
      </div>
      <div id="sec2_subtitle">
        <?php the_field('sec2_subtitle'); ?>
      </div>
    </div>

    <div id="sec2-rows-container">
    <?php for ($i=1; $i <= 4; $i++) : ?>
      <div id="sec2-con<?php echo $i; ?>-container">
        <div class="bluedot"></div>
        <div id="sec2-con<?php echo $i; ?>-text">
        <div id="sec2-con<?php echo $i; ?>-title" class="sec2-row-title">
          <?php the_field('sec2_con'.$i.'_title'); ?>
        </div>
        <div id="sec2_con<?php echo $i; ?>-cont" class="sec2-row-cont">
          <?php the_field('sec2_con'.$i.'_cont'); ?>
        </div>
      </div>
      </div>
    <?php endfor; ?>
      </div>

  <?php endwhile; else: ?>
    <?php echo "Nם Error Code Defined" ?>
  <?php endif; ?>

  </div>
 </section>
<?php get_footer(); ?>
