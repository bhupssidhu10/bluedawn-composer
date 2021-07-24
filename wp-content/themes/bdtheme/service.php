
<?php /* Template Name: Service Page */ ?>

<?php get_header();?>

<?php get_template_part( 'partials/heading', get_post_format() ); ?>


<section id="services-subhead" class="light ">
  <div class="full-width-wrapper">
    <?php $title3 = get_field('subtitle'); ?>
    <h2 class="left"><?php echo $title3; ?></h2>

      <?php $main_feature_img = get_field('feature_image');
            $url = $main_feature_img['url'];
            $title = $main_feature_img['title'];
            $alt = $main_feature_img['alt'];
      ?>
    <img src="<?php echo $url; ?>" class="feature-img" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

    <div class="medium-width-wrapper">

    <?php $main_content = get_field('main_content'); ?>
    <p class="mid"><?php echo $main_content ?></p>


  </div>
</div>
</section>


<?php get_template_part( 'partials/portfolio', get_post_format() ); ?>

<?php get_template_part( 'partials/cta', get_post_format() ); ?>

<?php if( have_rows('content-section') ){ ?>

<section id="service-points">
  <nav>
    <ul>
  <?php while( have_rows('content-section') ): the_row();
   $title = get_sub_field ('title');
   $titleSlug = strtolower($title);
   $titleSlug = str_replace(' ', '-', $titleSlug);
  ?>
      <li><a href="#<?php echo $titleSlug; ?>"><?php echo $title; ?></a></li>
      <?php endwhile; ?>
    </ul>
  </nav>
<?php while( have_rows('content-section') ): the_row();
$title = get_sub_field ('title');
$titleSlug = strtolower($title);
$titleSlug = str_replace(' ', '-', $titleSlug);
$img = get_sub_field('feature_image');
$imgUrl = $img['url'];
$imgTitle = $img['title'];
$imgAlt = $img['alt'];
$content = get_sub_field('content');
$theme = get_sub_field('theme');
?>
  <article id="<?php echo $titleSlug; ?>" class="service-point-containter <?php echo $theme; ?> full-width-wrapper">
    <h1 class="middle"><?php echo $title; ?></h1>
     <img src="<?php echo $imgUrl; ?>" class="feature-img" alt="<?php $imgAlt; ?>" title="<?php echo $imgTitle; ?>">

     <div class="medium-width-wrapper">
     <?php echo $content; ?>
   </div>
  </article>

<?php endwhile; ?>

</section>

<?php } ?>


<?php get_template_part( 'partials/services', get_post_format() ); ?>


<?php get_footer(); ?>
