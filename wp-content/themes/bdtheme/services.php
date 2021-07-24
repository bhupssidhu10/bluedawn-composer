<?php /* Template Name: Services group Page */ ?>

<?php get_header();?>

<?php get_template_part( 'partials/heading', get_post_format() ); ?>

<?php
  $serviceids = array('2135', '2144', '2147', '2149');
  $a = 0;
foreach ($serviceids as $id){
$title1 = get_field('services_page_title_line_1', $id);
$title2 = get_field('services_page_title_line_2', $id);
$title = $title1 . ' ' . $title2;
if( $id == '2135'){
   $servicestyle = 'visual-identity';
   $link = 'visual-identity';
 } elseif ($id == '2144') {
   $servicestyle = 'digital-marketing';
   $link = 'digital-marketing';
 } elseif ($id == '2147') {
   $servicestyle = 'print-design';
   $link = 'print-design';
 } else {
   $servicestyle = 'web-design';
   $link = 'web-design-development';
 }
   $img = get_field('feature_image', $id);
   $imgUrl = $img['url'];
   $imgTitle = $img['title'];
   $imgAlt = $img['alt'];
?>
<section id="service-group" class="<?php echo $servicestyle ?> full-width-wrapper ">
<?php if($a % 2 == 0){ ?>
  <div class="content">
  <h2 class="middle"><?php echo $title; ?></h2>
  <p><?php the_field('services_page_excerpt', $id);?></p>
  <a href="<?php echo get_bloginfo( 'wpurl' );?>/services/<?php echo $link; ?>"><button class="read-more">Find out more</button></a>
  </div>
  <div class="image">
  <a href="<?php echo $imgUrl; ?>"><img src="<?php echo $imgUrl; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>"></a>
  </div>
<?php } else{ ?>
<div class="image">
<a href="<?php echo $imgUrl; ?>"><img src="<?php echo $imgUrl; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>"></a>
</div>
<div class="content">
<h2 class="middle"><?php echo $title; ?></h2>
<p><?php the_field('services_page_excerpt', $id);?></p>
<a href="<?php echo get_bloginfo( 'wpurl' );?>/services/<?php echo $link; ?>"><button class="read-more">Find out more</button></a>
</div>
<?php
}
?>
</section>

<?php
$a++;
}
?>




<?php get_template_part( 'partials/cta', get_post_format() ); ?>

<?php get_footer(); ?>
