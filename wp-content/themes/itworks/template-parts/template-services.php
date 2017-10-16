<?php
/**
 * Template Name: Services
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header();?>
<?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>

  <section id="services_section1" class="row" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="container">
    <div class="services_section1_text">
      <h2 class=""><?php the_title() ?></h2>
      <span class="services_section1_bottom_text"><?php the_content() ?></span>
    </div>
    <div id="down-chevron" class="col-xs-12">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </div>
  </section>

  <section id="services_section2">
    <h2><?php the_field('sec2_title'); ?></h2>
    <div class="container">

      <?php
      $Services = array(
        'post_type'              => array( 'Services' ),
        'posts_per_page'         => '6',
        'order_by'               => 'date',
        'order'                  => 'ASC'
      );
      ?>
      <?php
      // First news Query
      $servicesQuery = new WP_Query( $Services ); ?>

      <?php
      if ($servicesQuery->have_posts()) :
        while ($servicesQuery->have_posts()) :
          $servicesQuery->the_post();
          ?>

          <div class="service_tile col-xs-6 col-md-4">
            <img src="<?php echo get_the_post_thumbnail_url();?> " alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="service-img" />
            <p class="service-name"><?php the_title(); ?></p>
            <p class="service-desc"><?php the_content(); ?></p>
          </div>

        <?php  endwhile; $servicesQuery->reset_postdata();
      else:
        echo '<p>Sorry, Something went wrong.</p>';
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>

  <section id="services_section3">
    <h2><?php the_field('sec3_title'); ?></h2>
    <div class="container">

      <?php
      $ourWork = array(
        'post_type'              => array( 'Our Works' ),
        'posts_per_page'         => '4',
        'orderby'               => 'rand',
      );
      ?>
      <?php
      // First news Query
      $ourWorkQuery = new WP_Query( $ourWork ); ?>

      <?php
      if ($ourWorkQuery->have_posts()) :
        while ($ourWorkQuery->have_posts()) :
          $ourWorkQuery->the_post();
          ?>

          <div class="work_tile col-xs-12 col-md-6">
            <a href="<?php the_field('url'); ?>" target="_blank">
            <img src="<?php echo get_the_post_thumbnail_url();?> " alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="work-img col-xs-10" />
            <p class="work-name"><?php the_title(); ?></p>
            <p class="work-url"><?php the_field('url'); ?></p></a>
          </div>

        <?php  endwhile; $ourWorkQuery->reset_postdata();
      else:
        echo '<p>Sorry, Something went wrong.</p>';
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>

  <section id="service-section4">
    <?php
    $testimonials = array(
      'post_type'              => array( 'Testimonials' ),
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
                <?php the_title(); ?> /
                <?php the_field('clients_title'); ?>
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
