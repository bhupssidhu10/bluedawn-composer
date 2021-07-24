
<?php
/*
Template Name: Case Study
*/ ?>


<?php get_header();?>

<section id="casestudy-header" style="background-image: url(<?php the_field('cs_feature_image');?>)">
  <div class="cs-wrapper">
    <div class="h1-wrapper">
    <h1><?php the_field('cs_title');?></h1>
  </div>
  </div>
</section>

<section id="casestudy-feature" class="dark medium-width-wrapper">
  <div class="feature-logo">
    <img src="<?php echo the_field('cs_logo');?>">
  </div>
  <div class="feature-text">
    <p><?php the_field('cs_client_desc');?></p>
  </div>
</section>

<?php if( get_field('cs_heading_one') ): ?>
<section class="light cs-content">
  <div class="small-width-wrapper">
  <h2 class="middle"><?php the_field('cs_heading_one');?></h2>
  <p><?php the_field('cs_work_description');?></p>
</div>
</section>
<?php endif; ?>

  <?php
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  $images1 = get_field('cs_gallery_one');
  if( $images1 ): ?>
  <section class="cs-images medium-width-wrapper">
    <?php foreach( $images1 as $image ): ?>
          <div class="cs-img">
            <a href="<?php echo $image['url']; ?>">
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </a>
            </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>

<?php if( get_field('cs_highlight_heading') ): ?>
<section class="light cs-content">
  <div class="medium-width-wrapper grid50">
    <div>
  <h2 class="left"><?php the_field('cs_highlight_heading');?></h2>
  <p><?php the_field('cs_highlight_content');?></p>
</div>
<div>
  <?php
  $highlightimage = get_field('cs_highlight_image'); ?>
  <a href="<?php echo $highlightimage['url']; ?>"><?php echo wp_get_attachment_image( $highlightimage['ID'], $size ); ?></a>
</div>
</div>
</section>
<?php endif; ?>

<?php
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$images2 = get_field('cs_gallery_two');

if( $images2 ): ?>
<section class="cs-images medium-width-wrapper">

    <?php foreach( $images2 as $image ): ?>
          <div class="cs-img">
            <a href="<?php echo $image['url']; ?>">
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </a>
            </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>

<?php get_template_part( 'partials/cta', get_post_format() ); ?>

<?php get_template_part( 'partials/services', get_post_format() ); ?>

<?php get_footer(); ?>
