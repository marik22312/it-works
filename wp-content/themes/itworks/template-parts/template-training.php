<?php
/**
 * Template Name: Training
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header();?>
<?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>

  <section id="training_section1" class="row" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="container">
    <div class="training_section1_text">
      <h2 class=""><?php the_title() ?></h2>
      <span class="training_section1_bottom_text"><?php the_content() ?></span>
    </div>
    <div id="down-chevron" class="col-xs-12">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </div>
  </section>

  <section id="training_section2">
    <h2><?php the_field('sec2_title') ?></h2>
    <h4><?php the_field('sec2_subtitle') ?></h4>
    <div class="container">
      <div class="row bootcamps">
        <div class="bootcamp-tile col-xs-12 col-md-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/training/webdev.png" alt="" class="col-xs-10">
          <h5>Web development skills</h5>
        </div>
        <div class="bootcamp-tile col-xs-12 col-md-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/training/digitalmarket.png" alt="" class="col-xs-10">
          <h5>Digital marketing</h5>
        </div>
        <div class="bootcamp-tile col-xs-12 col-md-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/training/proskills.png" alt="" class="col-xs-10">
          <h5>Professional skills</h5>
        </div>
        <div class="bootcamp-tile col-xs-12 col-md-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/training/graphdesign.png" alt="" class="col-xs-10">
          <h5>Graphics Design</h5>
        </div>
      </div>
    </div>
  </section>

  <section id="training_section3">
    <div class="container">
      <p class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
        <?php the_field('sec2_cont'); ?>
      </p>
      <?php if (get_field('sec3_video') != null): ?>
        <div class="videoWrapper">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php the_field('sec3_video'); ?>?rel=0?ecver=1" frameborder="0" allowfullscreen></iframe>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <section id="training_section4">
    <div class="container">
      <h2><?php the_field('sec4_title') ?></h2>
      <h4 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3"><?php the_field('sec4_cont') ?></h4>
    </div>
  </section>
  <section id="training_section5">
    <div class="container">
      <h2><?php the_field('sec5_title') ?></h2>
      <h4 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3"><?php the_field('sec5_cont') ?></h4>
  </div>
  </section>

  <section id="training_section6">
    <?php
    $testimonials = array(
      'post_type'              => array( 'Training Testimonials' ),
      'posts_per_page'         => '10',
      'orderby'               => 'rand',
    );
    ?>
    <?php
    // First news Query
    $testimonialsQuery = new WP_Query( $testimonials );
    $counter = 0; ?>

    <div id="service-testimonials" class="carousel slide" data-ride="carousel">
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
      <a class="left carousel-control" href="#service-testimonials" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#service-testimonials" data-slide="next">
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
