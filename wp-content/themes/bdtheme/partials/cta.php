<section id="cta" class="dark full-width-wrapper ">
  <div class="call-to-action">
    <i class="fa fa-envelope"></i>
  </div>
  <?php get_field('cta_heading', 'option') ?>
  <?php get_field('email', 'option') ?>
  <p class="big serif middle"><?php the_field('cta_heading', 'option'); ?></p>
  <a href="mailto:<?php the_field('email', 'option'); ?>"><p class="big middle serif"><?php the_field('email', 'option'); ?></a>
  <?php if (get_field('cta_subheading', 'option')) {
    echo '<p class="mid middle serif">' . get_field('cta_subheading', 'option') . '</p>';
  } ?>

</section>
