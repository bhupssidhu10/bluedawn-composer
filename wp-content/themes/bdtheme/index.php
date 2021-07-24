
<?php get_header();?>

<section id="home-header" class="light">
  <div class="sky">

    <div class="upperanimwrap">

      <div class="logosun animation col-1">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bdanim-top.svg" width="95%">
      </div>

      <div class="logotext animation col-1">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/light-logo.svg">
      </div>

    </div>

  </div>

  <div class="sea">

    <div class="loweranimwrap">

      <div class="logoreflect animation col-1">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bdanim-bottom.svg" width="100%">
      </div>

    </div>
    <div id="header-tagline" class="middle">
      <?php get_field('above_fold_tagline'); ?>
      <h2><?php the_field('above_fold_tagline'); ?><h2>
    </div>
</section>




<section id="home-subheading" class="light">
  <div class="medium-width-wrapper">
    <?php get_field('below_fold_heading') ?>
    <?php get_field('below_fold_content') ?>
    <h3 class="left"><?php the_field('below_fold_heading'); ?></h3>
    <p class="mid"><?php the_field('below_fold_content'); ?></p>
  </div>
</section>

<!--
Portfolio
-->


<?php get_template_part( 'partials/services', get_post_format() ); ?>



<?php get_template_part( 'partials/cta', get_post_format() ); ?>

<?php get_template_part( 'partials/portfolio', get_post_format() ); ?>






<?php
/*
  $args = array(
    'post_type'=> 'case_study',
    'posts_per_page'=> '6',
    'order'    => 'ASC'
  );
    // The Query
          $the_query = new WP_Query( $args );

      // The Loop
    if ( $the_query->have_posts() ) { ?>

      <section id="portfolio" class="light full-width-wrapper ">
        <h2 class="middle">Portfolio</h2>
        <div id="portfolio-container" class="dark">

  <?php  while ( $the_query->have_posts() ) {
    		$the_query->the_post();

        $post_id = get_the_ID();
        $post_image = get_field('cs_feature_image', $post_id);?>
        <div class="pf-item <?php if ( $the_query->current_post == 0 ): ?>big<?php elseif ( $the_query->current_post == 4 ): ?>big<?php else: endif ?>">
        <div class="pf-bg" style="background-image: url(<?php the_field('cs_feature_image', $post_id); ?>)">  </div>
        <div class="pf-cont">
          <?php echo the_category(); ?>
          <h4 class="pf-title"><?php the_title(); ?></h4>
          <p class="pf-desc"><?php the_excerpt(); ?></p>
          <a href="<?php echo get_permalink(); ?>"><button class="read-more">Read More</button></a>
        </div>
      </div>
    <?php	} ?>
</section>
    	<?php /* Restore original Post Data */ /*
    	wp_reset_postdata();
    } else {
    	// no posts found
    }
    */
?>
</section>

<?php get_template_part( 'partials/latest-posts', get_post_format() ); ?>



<?php get_footer(); ?>
