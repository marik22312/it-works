<?php
get_header();
?>
<?php
  // First news Query arguments
  $indexQueryArgs = array(
    'post_type'              => array( 'Main Page Control' ),
    'posts_per_page'         => '1',
);


// First news Query
$indexQuery = new WP_Query( $indexQueryArgs );

if ($indexQuery->have_posts()){
  while ($indexQuery->have_posts()) {
    $indexQuery->the_post();
?>
<!-- section1 -->

<div id="index_section1" class="row">
  <img src="<?php echo get_template_directory_uri() ?>/images/index/index_main_image.jpg" alt="index_section1_img" class="index_section1_img">
  <div class="index_section1_text col-md-8 col-xs-12 col-md-offset-1">
    <span class="index_section1_top_text"><?php the_field('sec1_title') ?></span>
    <span class="index_section1_bottom_text"><?php the_field('sec1_subtitle') ?></span>
  </div>
  <!-- CTA button -->
  <div id="index_section1_button" class="col-xs-12">
    <?php if (get_field('btn_text') != null): ?>
      <a class="ind-btn col-xs-4 col-xs-offset-4" href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a>
    <?php endif; ?>
  </div>
</div>
<!-- section2 -->

<section id="index_section2" class="row">
	<h2><?php the_field('sec2_title'); ?></h2>
    <div class="container-fluid">
      <?php
      // First news Query arguments
      $services = array(
        'post_type'              => array( 'Services' ),
        'posts_per_page'         => '6',
        'order_by'               => 'date',
      );


      // First news Query
      $servicesQuery = new WP_Query( $services );

      if ($servicesQuery->have_posts()):?>
      <?php
      while ($servicesQuery->have_posts()) :
        $servicesQuery->the_post();
        ?>

		<a href="<?php echo get_post_permalink(); ?>"><div class="col-xs-12 col-md-4" id="index_section2_tile">
			<img src="<?php the_post_thumbnail_url(); ?>" class="index_section2_tile-image" />
			<p class="index_section2_service"><?php the_title(); ?></p>
		</div></a>
    <?php $servicesQuery->reset_postdata(); ?>
  <?php  endwhile; $indexQuery->reset_postdata();
  else:
    echo '<p>Sorry, Something went wrong.</p>';
  endif;
  ?>
</div>
	</section>

<!-- section4 -->

  <section id="index_section3" class="row">
    <h2>the difference we make</h2>

    <div class="container">
      <div class="ind-sec3-tile col-xs-12 col-md-3">
        <img class="ind-sec3-tile-image" src="<?php the_field('sec3_img1'); ?>"/>
        <p class="ind-sec3-tile-text">
          <?php the_field('sec3_text1'); ?>
        </p>
      </div>
      <div class="ind-sec3-tile col-xs-12 col-md-3">
        <img class="ind-sec3-tile-image" src="<?php the_field('sec3_img2'); ?>"/>
        <p class="ind-sec3-tile-text">
          <?php the_field('sec3_text2'); ?>
        </p>
      </div>
      <div class="ind-sec3-tile col-xs-12 col-md-3">
        <img class="ind-sec3-tile-image" src="<?php the_field('sec3_img3'); ?>"/>
        <p class="ind-sec3-tile-text">
          <?php the_field('sec3_text3'); ?>
        </p>
      </div>
      <div class="ind-sec3-tile col-xs-12 col-md-3">
        <img class="ind-sec3-tile-image" src="<?php the_field('sec3_img4'); ?>"/>
        <p class="ind-sec3-tile-text">
          <?php the_field('sec3_text4'); ?>
        </p>
      </div>
    </div>

  </section>

<!-- section5 -->

  <section id="index_section4" class="row">
    <h2><?php the_field('sec4_title'); ?></h2>

    <div class="container">
      <div class="col-xs-12 col-md-4">
        <img src="<?php the_field('sec4_img1'); ?>" />
        <span class="col-xs-1">1.</span>
        <p class="col-xs-10 col-xs-push-1"><?php the_field('sec4_text1'); ?></p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="<?php the_field('sec4_img2'); ?>" />
        <span class="col-xs-1">2.</span>
        <p class="col-xs-10 col-xs-push-1"><?php the_field('sec4_text2'); ?></p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="<?php the_field('sec4_img3'); ?>" />
        <span class="col-xs-1">3.</span>
        <p class="col-xs-10 col-xs-push-1"><?php the_field('sec4_text3'); ?></p>
      </div>

      <p class="ind-sec4-text">
        <?php the_field('sec4_text'); ?>
      </p>

      <p class="ind-sec4-subtext">
        Looing for more information?
      </p>
      <!-- CTA button -->
      <div id="index_sec4_button" class="col-xs-12">
          <a class="ind-btn col-xs-4 col-xs-offset-4" href="<?php the_field('btn_link'); ?>">contact us >></a>
      </div>
    </div>
  </section>
<?php
       wp_reset_postdata();
  }}
else{
  echo '<p>Sorry, Something went wrong.</p>';
}

?>
<?php
get_footer();
?>
