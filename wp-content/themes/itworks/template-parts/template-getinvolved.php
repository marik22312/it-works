<?php
/**
 * Template Name: Get Involved
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header();?>
<?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>

  <section id="getinvolved_section1" class="row" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="container">
    <div class="getinvolved_section1_text">
      <h2 class=""><?php the_title() ?></h2>
      <span class="getinvolved_section1_bottom_text"><?php the_content() ?></span>
    </div>
    <div id="down-chevron" class="col-xs-12">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </div>
  </section>

	<section id="getinvolved_section2" class="row">
		<div class="container">
			<h2><?php the_field('sec2_title'); ?></h2>
			<p class="col-xs-12 col-md-8 col-md-offset-2"><?php the_field('sec2_cont'); ?></p>

			<div class="getinvolved_tile col-xs-12 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/getinvolved/mentor.png" alt="" class="getinvolved_tile_img col-xs-4" />
				<div class="col-xs-6">
					<h4>mentor our fellows</h4>
					<p>
						Help our fellow connect to the global ecosystem and expose them to the tech work culture and best practices
					</p>
				</div>
			</div>
			<div class="getinvolved_tile col-xs-12 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/getinvolved/projects.png" alt="" class="getinvolved_tile_img col-xs-4" />
				<div class="col-xs-6">
					<h4>provide us with real world projects</h4>
					<p>
						Any web development project you have can be completed by our motivated and highly-skilled fellows. Just give us a chance!
					</p>
				</div>
			</div>
			<div class="getinvolved_tile col-xs-12 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/getinvolved/hire.png" alt="" class="getinvolved_tile_img col-xs-4" />
				<div class="col-xs-6">
					<h4>hire a graduate</h4>
					<p>
						Our fellows gain well-rounded experience working on different projects and are prepared to work at entry-level positions as web developers.
					</p>
				</div>
			</div>
			<div class="getinvolved_tile col-xs-12 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/getinvolved/donate.png" alt="" class="getinvolved_tile_img col-xs-4" />
				<div class="col-xs-6">
					<h4>donate</h4>
					<p>
						Your gift is priceless to our fellows and their communities. Support a fellow throughout the training program, support a Hackathon or help us build a strong web agency
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="getinvolved_testimonials">
		<?php
		$testimonials = array(
			'post_type'              => array( 'Involve Testimonials' ),
			'posts_per_page'         => '10',
			'orderby'               => 'rand',
		);
		?>
		<?php
		// First news Query
		$testimonialsQuery = new WP_Query( $testimonials );
		$counter = 0; ?>

		<div id="getinvolved-testimonials" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<!-- <ol class="carousel-indicators"> -->
				<!-- <li data-target="#service-testemonials" data-slide-to="0" class="active"></li> -->
				<!-- <li data-target="#service-testemonials" data-slide-to="1"></li> -->
				<!-- <li data-target="#service-testemonials" data-slide-to="2"></li> -->
			<!-- </ol> -->

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php
				if ($testimonialsQuery->have_posts()) :
					while ($testimonialsQuery->have_posts()) :
						$testimonialsQuery->the_post();
						$counter++;
						?>
				<div class="item <?php if ($counter === 1) echo 'active';?>">
					<div class="testimonials-slide col-xs-8 col-xs-offset-2">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="col-xs-4" />
						<div class="col-xs-7 col-xs-offset-1 testemonial-content">
							<p class="testimony">
								<?php the_field('testimony'); ?>
							</p>
							<p class="client">
								<?php the_title(); ?>
							</p>
							<p class="location">
								<?php the_field('clients_location'); ?>
							</p>
						</div>
					</div>
				</div>
			<?php  endwhile; $testimonialsQuery->reset_postdata();
		else:
			echo '<p>Sorry, Something went wrong.</p>';
		endif;
		wp_reset_postdata();
		?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#getinvolved-testimonials" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#getinvolved-testimonials" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</section>
<?php  endwhile;
else:
  echo '<p>Sorry, Something went wrong.</p>';
endif;
?>


 <?php get_footer(); ?>
