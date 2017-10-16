<?php
/**
 * Template Name: About
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header();?>
<?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <section id="about_section1" class="row">
    <div class="container">
    <div class="about_section1_text">
      <span class="about_section1_top_text"><?php the_field('sec1_title') ?></span>
      <span class="about_section1_bottom_text"><?php the_field('sec1_subtitle') ?></span>
    </div>
    <div id="down-chevron" class="col-xs-12">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </div>
  </section>

  <section id="about_section2">
    <h2>ABOUT US</h2>
    <div class="row">
      <div class="about_section2_left_text col-lg-offset-2 col-lg-5">
        <div class="row">
          <div class="about_section2_top_text">
            <span class="about_section2_text_number col-lg-1">1.</span>
            <p class="col-lg-9">
              It Works US offers an intensive web development Bootcamp and a comprehensive Apprenticeship. The yearlong program builds web skills and offers practical work experience while encouraging social responsibility.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="about_section2_bottom_text">
            <span class="about_section2_text_number col-lg-1">2.</span>
            <p class="col-lg-9">
              Our fellows are young adults from the social and geographical periphery. Coming from regions suffering lower levels of public education and limited government support, these individuals face many challenges to integrate into the tech industry.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <img src="<?php echo get_template_directory_uri(); ?>\images\index\friends.png" alt="friends" class="about_section2_img">
      </div>
    </div>
  </section>

  <section id="about_section3">
    <div class="container">
      <h2><?php the_field('sec3_title'); ?></h2>
      <h4><?php the_field('sec3_subtitle'); ?></h4>
      <div class="sec3_tile col-xs-6 col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/heart1.png" class="col-xs-10 col-xs-offset-1"/>
        <h5>Day One</h5>
        <p>Highly motivated fellows have lacked access, de to socioeconomic challenges, to education and opportunity in tech fields</p>
      </div>
      <div class="sec3_tile col-xs-6 col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/heart2.png" class="col-xs-10 col-xs-offset-1"/>
        <h5>bootcamp</h5>
        <p>Fellows participate in intensive Bootcamp teaching web and mobile app development, programming skills, design, digital marketing and professional skills.</p>
      </div>
      <div class="sec3_tile col-xs-6 col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/heart3.png" class="col-xs-10 col-xs-offset-1"/>
        <h5>apprenticeship</h5>
        <p>Fellows apprentice in agency working alongside experienced developers, gaining practical tech project experience.</p>
      </div>
      <div class="sec3_tile col-xs-6 col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/heart4.png" class="col-xs-10 col-xs-offset-1"/>
        <h5>next steps</h5>
        <p>program graduates join workforce in their local communitites, providing leadership and demonstrating social responsibility while realizing their high tech caree dreams</p>
      </div>
    </div>
  </section>
  <section id="about_section4">
    <?php
    $ourTeam = array(
      'post_type'              => array( 'Our Team' ),
      'posts_per_page'         => '6',
      'order_by'               => 'date',
      'order'                  => 'ASC'
    );
    ?>
    <?php
    // First news Query
    $teamQuery = new WP_Query( $ourTeam ); ?>
    <h2>OUR TEAM</h2>
    <h4>Wow, What a team!</h4>
    <div class="container">
    <?php
    if ($teamQuery->have_posts()) :
      while ($teamQuery->have_posts()) :
        $teamQuery->the_post();
        ?>
          <div class="about_team_tile col-xs-12 col-md-4">
            <img src="<?php echo get_the_post_thumbnail_url();?> " alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="col-xs-6 col-xs-offset-3 col-md-8 col-md-offset-2 team-img" />
            <p class="team_name"><?php the_title(); ?></p>
            <p class="team_title"><?php the_field('title'); ?>, <?php the_field('location'); ?></p>
          </div>
        <?php  endwhile; $teamQuery->reset_postdata();
      else:
        echo '<p>Sorry, Something went wrong.</p>';
      endif;
      ?>
      </div>
  </section>
  <section id="about_section5" class="row">
    <h2 class="">our partner organization</h2>
    <a class="about_section5_link col-xs-4 col-xs-offset-4" target="_blank" href="http://www.en.itworks.org.il">
    <img src="<?php echo get_template_directory_uri(); ?>\images\about\itworksUSlogo.png" alt="about_section5_logo" class="about_section5_logo">
    http://www.en.itworks.org.il</a>
  </section>

<?php  endwhile;
else:
  echo '<p>Sorry, Something went wrong.</p>';
endif;
?>


 <?php get_footer(); ?>
