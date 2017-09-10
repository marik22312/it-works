<?php
get_header();
?>
<?php
  // First news Query arguments
  $firstNews = array(
    'post_type'              => array( 'Main Page Control' ),
    'posts_per_page'         => '1',
);


// First news Query
$firstNewsQuery = new WP_Query( $firstNews );

if ($firstNewsQuery->have_posts()):?>
<?php
  $playerCounter = 0;
  while ($firstNewsQuery->have_posts()) :
    $firstNewsQuery->the_post();
?>
<!-- section1 -->

<div id="index_section1">
  <img src="<?php echo get_template_directory_uri() ?>/images/index/index_main_image.jpg" alt="index_section1_img" class="index_section1_img">
  <div class="index_section1_text">
<span class="index_section1_top_text"><?php the_field('sec1_title') ?></span>
<span class="index_section1_bottom_text"><?php the_field('sec1_subtitle') ?></span>
<div id="ind-cta" class="col-lg-4 col-lg-offset-4">
  <?php if (get_field('btn_text') != null): ?>
    <a class="ind-btn" href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a>
  <?php endif; ?>
</div>
</div>
</div>
<!-- section 2 -->

<div id="index_section2">
<h2 class="index_section2_headline"><?php the_field('sec2_title') ?></h2>
<div class="row">
  <div class="index_section2_left_text col-lg-offset-2 col-lg-5">
    <div class="row">
<div class="index_section2_top_text">
  <span class="index_section2_text_number col-lg-1">1/</span>
  <p class="col-lg-9"><?php the_field('sec2_text1') ?></p>
</div>
</div>
<div class="row">
<div class="index_section2_bottom_text">
  <span class="index_section2_text_number col-lg-1">2/</span>
  <p class="col-lg-9"><?php the_field('sec2_text2'); ?></p>
</div>
  </div>
  </div>
  <?php if (get_field('sec2_image') != null): ?>
    <div class="col-lg-3">
      <img src="<?php the_field('sec2_image'); ?>" alt="friends" class="index_section2_img">
    </div>
  <?php endif; ?>
</div>
<a href="<?php the_field('sec2_link'); ?>" class="index_section2_bottom"><?php the_field('sec2_link_text'); ?></a>
</div>

<!-- section3 -->

<section id="index_section3">
	<h2 class="index_section3_headline">How we can help</h2>
	<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="row index_section3_row">
		<div class=" col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/web.png" class="index_section3_image">
			<p class="index_section3_under-photo">Web design and devalopment</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>

		<div class="col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/content.png" class="index_section3_image">
			<p class="index_section3_under-photo">Content management system (CMS)</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>

		<div class="col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/custom.png" class="index_section3_image">
			<p class="index_section3_under-photo">Custom application</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>
	</div>
      </div>
            </div>
	<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="row index_section3_row">
		<div class="col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/search.png" class="index_section3_image">
			<p class="index_section3_under-photo">Search engine optimization</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>

		<div class="col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/e-commerce.png" class="index_section3_image">
			<p class="index_section3_under-photo">e-commerce</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>

		<div class="col-lg-4 index_section3_div">
			<img src="<?php echo get_template_directory_uri(); ?>/images/responsive.png" class="index_section3_image">
			<p class="index_section3_under-photo">Responsive design</p>
			<p class="index_section3_paragraph">is simply dummy text of
			 the printing<br>
			 and typesetting industry.<br>
			 Lorem Ipsum has been the industry's</p>
		</div>
	</div>
</div>
</div>
  <p class="index_section3_bottom"> Read More>></p>
	</section>

<!-- section4 -->

  <section id="index_section4">
    <div class="index_section4_top">
  	<h2 class="index_section4_headline">TRAINING</h2>

  	<h3 class="index_section4_subheadline1">Our Bootcamp</h3>
    <div class="row">
  	<p class="index_section4_text col-lg-8 col-lg-offset-2">
    An intensive, hands-on learning program that teaches fellows industry in-demand digital skills, such as:
  	Web Development, Digital Marketing or User Experience (UX) Design</p>
    </div>
    	<p class="index_section4_subheadline2">Bootcamps also include</p>
    </div>
  <div class="row index_section4_bottom">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="row">
        <div class=" col-lg-4">
  		<div class="index_sectoin4_under_photo">
  		<p class=" index_section4_under_text" style="">Technical english course</p>
  		<p class="index_section4_read_more">read more</p>
  		</div>
    </div>
    <div class="col-lg-4">
  		<div class="index_sectoin4_under_photo">
  		<p class=" index_section4_under_text">Social resposibility and community involvement classes</p>
  		<p class="index_section4_read_more">read more</p>
  		</div>
    </div>
    <div class="col-lg-4">
		<div class="index_sectoin4_under_photo">
  		<p class=" index_section4_under_text">Job preparation curriculum</p>
  		<p class="index_section4_read_more">read more</p>
  		</div>
    </div>
    </div>
    </div>
  </div>
  	<p class="index_section4_bottom_text"> Read More>></p>
  </section>

<!-- section5 -->

  <section id="index_section5">
  	<h2 class="index_section5_headline">GET INVOLVED</h2>

  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="row">
  	<div class="col-lg-3">
  		<img src="<?php echo get_template_directory_uri(); ?>/images/provide-project.png" class="index_section5_image">
  		<p class="index_section5_text">Provide us with projects</p>
  	</div>
  	<div class="col-lg-3">
  			<img src="<?php echo get_template_directory_uri(); ?>/images/mentor.png" class="index_section5_image">
  		<p class="index_section5_text">Mentor our fellows</p>
  	</div>
  	<div class="col-lg-3">
  		<img src="<?php echo get_template_directory_uri(); ?>/images/hire.png" class="index_section5_image">
  		<p class="index_section5_text">Hire a graduate</p>
  	</div>
  	<div class="col-lg-3">
  		<img src="<?php echo get_template_directory_uri(); ?>/images/donate.png" class="index_section5_image">
  	</div>
  		<p class="index_section5_text">Donate</p>
    </div>
  </div>
  </div>
  	<img src="<?php echo get_template_directory_uri(); ?>\images\index\contacUs.png" class="index_section5_button"/>
  </section>
<?php  endwhile;
else:
  echo '<p>Sorry, Something went wrong.</p>';
endif;
?>
<?php
get_footer();
?>
