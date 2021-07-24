<?php
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'news',
    'posts_per_page' => '4',
);
    // The Query
          $the_query = new WP_Query( $args );
      // The Loop
    if ( $the_query->have_posts() ) { ?>

<section id="latest-posts" class="medium full-width-wrapper">
        <h2 class="middle">Latest posts</h2>
        <div id="latest-posts-container">

<?php  while ( $the_query->have_posts() ) {
            		$the_query->the_post();

                $post_id = get_the_ID();
                $post_image = get_field('feature_image', $post_id);


                ?>

    <article class="lp-item">
      <div class="lp-bg" style="background-image: url(<?php the_field('feature_image', $post_id); ?>)"></div>
      <div class="lp-cont">
        <h3 class="lp-title"><?php the_title(); ?></h3>
      </div>
    </article>


    <?php	} ?>
  </div>
  </section>
      <?php /* Restore original Post Data */
      wp_reset_postdata();
    } else {
      // no posts found
    }
  ?>
