<?php
/**
 * Template Name: About
 * @package WordPress
 * @subpackage it_works
 * @since It Works 1.0
 */
 ?>

<?php get_header();

  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <section class="row" id="section1">
	<div class="section1-text">
		<p class="first-line">Advancing disadvantaged young adults<br>
		to work in the industry</p>
		<p class="second-line">It works US aims at advancing disadvantaged<br>young adults living in remote areas</p>
		<center>
			<button type="button" class="btn btn-info" style="border-radius: 25px;" ><p>Contact us please</button>
		</center>
	</div>
</section>
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
  </div>
 </section>
 <section class="row" id="section3">
   <div class="about_section3_top">
 <P class="about_section3_text">
   It Works US aims at advancing disadvantaged young adults living in remote areas by providing them with the skills, practical work experience, networking and physical space to work in the tech industry.

   It Works US strives to empower our fellows, young women and men, to achieve professional and personal growth, become self- sufficient and leaders in their own communities and strengthen their communities from within.
     <br /> <span class="about_section3_link">http://www.en.itworks.org.il</span>
     <img id="about_section3_logo" src="<?php echo $image[0]; ?>" alt="<?php echo bloginfo('name'); ?>">
 </P>

 <img src="<?php echo get_template_directory_uri(); ?>/images/sini.jpg" class="about_section3_img" />
 </div>
 <div class="about_section3_bottom">

 <img src="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" class="about_section3_contact" />
 <br />
 <span class="about_section3_sentence">this is the best place ever wow amazing.</span>
 </div>
 </section>
  <?php endwhile; else: ?>
    <?php echo "Nם Error Code Defined" ?>
  <?php endif; ?>
<?php get_footer(); ?>
