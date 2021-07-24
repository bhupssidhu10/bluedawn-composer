<?php
$post_id = get_the_ID();
$category = 'case_study';
// If Web Design set category to Web Design
if ($post_id == '2149'){  $taxonomy = 'web_design_development';}
  // If Digital Marketing set category to Digital Marketing
else if ($post_id == '2144'){ $taxonomy = 'digital_marketing';}
  // If Print Design set category to Print Design
else if ($post_id == '2147'){  $taxonomy = 'print_design';}
  // If Visual Identity set category to Visual Identity
else if ($post_id == '2135'){  $taxonomy = 'visual_identity';}
   // If page isn't one of 4 services pages show all catagories of case studies
else { $taxonomy = '';}

if ($post_id == '2000'){
  $args = array(
    'post_type'=> 'case_study',
    'posts_per_page'=> '20',
    'order'    => 'DESC',
    'category_name' => $taxonomy,
  );
}
else {
$args = array(
  'post_type'=> 'case_study',
  'posts_per_page'=> '6',
  'order'    => 'DESC',
  'category_name' => $taxonomy,
);
}

  // The Query
        $the_query = new WP_Query( $args );

    // The Loop
  if ( $the_query->have_posts() ) { ?>

    <section id="portfolio" class="light full-width-wrapper ">
      <h2 class="middle">Recent Work</h2>
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
        <?php if ( ! has_excerpt() ){
        }
        else{ ?>
         <p class="pf-desc"><?php the_excerpt(); ?></p>
       <? } ?>
        <a href="<?php echo get_permalink(); ?>"><button class="read-more">See more</button></a>
      </div>
    </div>
  <?php	} ?>
</section>
    <?php /* Restore original Post Data */
    wp_reset_postdata();
  } else {

  }
