<footer class="row">
  <div id="footer-container" class="col-lg-10 col-md-10 col-md-offset-1 col-lg-offset-1">
  <?php
// WP_Query arguments
$footerQueryArgs = array(
  'post_type'              => array( 'footerCtrl' ),
);

// The Query
$footerQuery = new WP_Query( $footerQueryArgs ); ?>
    <?php if ($footerQuery->have_posts()){
      while ($footerQuery->have_posts()) {
        $footerQuery->the_post();
    ?>
    <div id="footer-header"><p><?php echo bloginfo('name'); ?> is a registered non-profit organization</p></div>
    <div id="footer-left-section" class="col-md-6 col-lg-6">
      <div id="footer-contact" title="test">
        <h6>Join our mailing list</h6>
        <p>
        <?php
          //Newsletter Plugin
          $form_widget = new \MailPoet\Form\Widget();
          echo $form_widget->widget(array('form' => 2, 'form_type' => 'php'));
        ?>
      </p>
      </div>
      <div id="footer-social">
        <h6>And Social Media</h6>
        <?php
        //Facebook
          if (get_field('ft-facebook') != null) : ?>
            <a href="<?php the_field('ft-facebook'); ?>" title="<?php echo bloginfo('name'); ?> Facebook"target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <?php  endif; ?>
        <?php
        // Twitter
          if (get_field('ft-twitter') != null) : ?>
            <a href="<?php the_field('ft-twitter'); ?>" title="<?php echo bloginfo('name'); ?> Twitter"target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <?php  endif; ?>
        <?php
        // YouTube
          if (get_field('ft-youtube') != null) : ?>
            <a href="<?php the_field('ft-youtube'); ?>" title="<?php echo bloginfo('name'); ?> Youtube"target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        <?php  endif; ?>
      </div>
    </div>
    <div id="footer-right-section">
      <div id="footer-contact" class="col-md-3 col-lg-3">
        <h6>Contact Us</h6>
        <p><?php the_field('ft-contact'); ?></p>
      </div>
      <div id="footer-address" class="col-md-3 col-lg-3">
        <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h6>
        <address><?php the_field('ft-address'); ?></address>
      </div>
    </div>
    <div id="footer-bottom-section" class=" col-lg-12 col-md-12">
      <?php if (get_field('ft-btn') != null): ?>
        <p id="ft-btn" class="col-lg-2 col-md-2 col-lg-offset-5">
          <?php the_field('ft-btn'); ?>
        </p>
      <?php endif; ?>

    </div>
    <div id="ft-copyright" class="col md-12 col-lg-12">
      <p id="ft-copyright-site">
        &copy; All Rights Reserved To <?php echo bloginfo('name'); ?> - <?php echo date("Y"); ?>
      </p>
      <?php
        /* Please do not change/remove the next lines,
        if followed lines will be changed/removed you won't have premission to use this twentyfifteen_color_scheme_css_template*/
       ?>
      <p id="ft-copyright-dev">
        &copy; Developed By <a href="https://www.facebook.com/marik.sh">Marik</a>,
         <a href="https://www.facebook.com/asaf.hadad2">Asaf</a> &
         <a href="https://www.facebook.com/omri.dunour">Omri</a>, In Association With
      <a href="https://www.facebook.com/Go-local-376023196078320/">Go Local</a>
      </p>
    </div>
    <?php
    }
  wp_reset_postdata();
  ?>


      <?php
} else {
  echo 'אין משחקים קרובים';
}

?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
