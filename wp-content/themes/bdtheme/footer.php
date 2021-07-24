
<footer class="dark full-width-wrapper">
  <div id="footer-wrapper">

    <div class="ft-first">

      <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="ft-logo" Alt="BlueDawn"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/light-logo.svg"></a>
      <?php get_field('footer_excerpt', 'option') ?>
      <p class="ft-info"><?php the_field('footer_excerpt', 'option') ?></p>

      <div class="ft-social">
        <?php
        $socialFeeds = array('skype', 'twitter', 'instagram', 'linkedin', 'facebook' );

        foreach ($socialFeeds as $value) {
          if ( get_field($value, 'option')){ ?>

            <a href="<?php echo get_field( $value , 'option'); ?>"
              class="ft-social-icon <?php echo $value; ?>"
              alt="Blue Dawn on <?php echo $value; ?>"
               target="_blank">
               <?php $socialIcon = $value;
                    if($socialIcon == 'facebook'){
                      $socialIcon = 'facebook-f';
                    }elseif($socialIcon == 'linkedin'){
                      $socialIcon = 'linked-in';
                    }
                ?>

              <i class="fab <?php echo 'fa-' . $socialIcon ?>"></i>
            </a>
          <?php }};
          ?>
        </div>
        <?php get_field('email', 'option');?>
        <a href="mailto:<?php the_field('email', 'option'); ?>" class="ft-email"><?php the_field('email', 'option'); ?></a>
      </div>

      <div class="ft-second">
        <p class="ft-form-heading">Get in touch</p>
        <?php echo do_shortcode("[wpforms id='2208']"); ?>
      </div>
    </div>

    <div class="ft-socket">
      <?php get_field('copyright_text', 'option');?>
      <p class="ft-socket-info"><?php the_field('copyright_text', 'option');?> <a href="#">Privacy</a><a href="#">Terms</a></p>

    </footer>
    <a href="#" class="sf-back-to-top"><i class="fas fa-angle-up"></i></a>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>


    <script>
var amountScrolled = 300;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('a.sf-back-to-top').fadeIn('slow');
    } else {
        $('a.sf-back-to-top').fadeOut('slow');
    }
});

$('a.sf-back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});
</script>



    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <?php wp_footer(); ?>
</body>
</html>
