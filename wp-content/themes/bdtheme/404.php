<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header();?>
<section id="heading" class="dark full-width-wrapper">
  <div class="heading-title">
  <h1>Sorry something went wrong</h1>
  </div>
</section>



<section id="services-subhead" class="light ">
  <div class="full-width-wrapper">
       <h2 class="left">Please visit one of the pages below, or try again.</h2>

  </div>
</div>
</section>
<?php get_template_part( 'partials/services', get_post_format() ); ?>
<?php get_template_part( 'partials/cta', get_post_format() ); ?>
<?php get_template_part( 'partials/portfolio', get_post_format() ); ?>


<?php get_footer(); ?>
