<?php get_header();
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

 <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
  <section id="about_section1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/sini.jpg" alt="about_section1_img" class="about_section1_img">
    <div class="about_section1_text">
 				<h1 class="about_section1_title">about us</h1>
 				<h3 class="about_section1_second_line">It works US aims at advancing disadvantaged young adults living in remote areas</h3>
    </div>
 	</section>

  <div id="about_section2">
  <h2 class="about_section2_headline">ABOUT US</h2>
  <div class="row">
    <div class="about_section2_left_text col-lg-offset-2 col-lg-5">
      <div class="row">
  <div class="about_section2_top_text">
    <span class="about_section2_text_number col-lg-1">1/</span>
    <p class="col-lg-9">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
  </p>
  </div>
  </div>
  <div class="row">
  <div class="about_section2_bottom_text">
    <span class="about_section2_text_number col-lg-1">2/</span>
    <p class="col-lg-9">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
  </p>
  </div>
    </div>
    </div>
    <div class="col-lg-3">
    <img src="<?php echo get_template_directory_uri(); ?>\images\index\friends.png" alt="friends" class="about_section2_img">
    </div>
  </div>
  <a class="index_section2_bottom">Read More >></a>
  </div>

 <?php get_footer(); ?>
