<?php
get_header();
?>
<?php
 $custom_logo_id = get_theme_mod( 'custom_logo' );
 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<section class="section" id="section3">
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

<?php
get_footer();
?>
