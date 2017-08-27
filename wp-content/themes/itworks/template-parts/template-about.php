<?php
/**
 * Template Name: About
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header(); ?>

   <section id="about_section1">
    <img src="http://localhost/itworks/wp-content/themes/itworks/images/sini.jpg" alt="about_section1_img" class="about_section1_img">
    <div class="about_section1_text">
 				<h1 class="about_section1_title">about us</h1>
 				<h3 class="about_section1_second_line">It works US aims at advancing disadvantaged young adults living in remote areas</h3>
    </div>
 	</section>

  <section id="about_section2">
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
    <img src="http://localhost/itworks/wp-content/themes/itworks\images\index\friends.png" alt="friends" class="about_section2_img">
    </div>
  </div>
  <a class="about_section2_bottom">Read More >></a>
</section>
<section id="about_section3">

</section>
<section id="about_section4">
<h2 class="about_secttion4_headline">OUR TEAM</h2>
<h4 class="about_section4_sub">Wow, What a team!</h4>
<?php for ($i=1; $i <=2; $i++) : ?>
<div class="row about_section4_team_row">
<?php for ($j=1; $j <=3; $j++) : ?>
  <div class="about_section4_team col-lg-4">
    <img src="http://localhost/itworks/wp-content/themes/itworks\images\about\smallsini.png" alt="team" class="about_section4_img">
    <h6 class="about_section4_team_headline">Menahem Begin</h6>
    <span class="about_section4_team_span">Head of Logistics</span>
  </div>
<?php endfor; ?>
</div>
<?php endfor; ?>
</section>
<section id="about_section5">
  <h2 class="about_section5_headline">Affiliations</h2>
  <img src="http://localhost/itworks/wp-content/themes/itworks\images\logo.png" alt="about_section5_logo" class="about_section5_logo">
  <span class="about_section5_span">empowring people</span>
  <p class="about_section5_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <a class="about_section5_link">http://www.en.itworks.org.il</a>
</section>
 <?php get_footer(); ?>
