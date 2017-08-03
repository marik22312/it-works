<?php
get_header();
?>
<section id="index-sectionTwo" class="section fp-auto-height-responsive">
      <?php
    // WP_Query arguments
    $sec2args = array(
    	'post_type'              => array( 'page' ),
      'page_name'		         	 => 'about',
    );

    // The Query
    $sec2Query = new WP_Query( $sec2args ); ?>
          <!-- Upcoming games slider  -->



              <?php if ($sec2Query->have_posts()){?>

                      <?php
    	 	while ($sec2Query->have_posts()) {
    		$sec2Query->the_post();
    		?>
          <?php the_field('sec2_title'); ?>
        <?php
      } }
    	wp_reset_postdata();
    	?>
</section>
<?php
get_footer();
?>
