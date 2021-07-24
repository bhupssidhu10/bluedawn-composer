<?php
$servicesids = array ('2135', '2144', '2147', '2149');
?>

<section class="medium full-width-wrapper" id='services'>

<?php  if( is_page( array( '2135', '2144', '2147', '2149') )){
  echo '<h2 class="middle">Is there anything else we can do for you?</h2>';
  echo '<div id="services-container" class="boxcount3">';
}
  else {
  echo  '<h2 class="middle">Services</h2>';
  echo '<div id="services-container" class="boxcount4">';}
?>

<?php
  foreach ($servicesids as $value) {
  // Set $servicestyle with page id
   if( $value == '2135'){
      $servicestyle = 'visual-identity';
    } elseif ($value == '2144') {
      $servicestyle = 'digital-marketing';
    } elseif ($value == '2147') {
      $servicestyle = 'print-design';
    } else {
      $servicestyle = 'web-design';
    }

  // Set $link page slug
 if( $value == '2135'){
     $link = 'visual-identity';
   } elseif ($value == '2144') {
     $link = 'digital-marketing';
   } elseif ($value == '2147') {
     $link = 'print-design';
   } else {
     $link = 'web-design-development';
   } ?>
<?php if( is_page ( $value ) ){} else{ ?>
  <article class="<?php echo $servicestyle ?> item ">
  <?php
  get_field('services_page_title_line_2', $value);
  get_field('services_page_title_line_1', $value);
  get_field('services_page_excerpt', $value);
  ?>
  <h3><?php the_field('services_page_title_line_1', $value); ?>
  <br>
  <?php the_field('services_page_title_line_2', $value);?></h3>
  <p><?php the_field('services_page_excerpt', $value);?>
  </p>
  <a href=" <?php echo get_bloginfo( 'wpurl' );?>/services/<?php echo $link; ?>"><button class="read-more">Read More</button></a>
  </article>
<?php }}; ?>

</div>
</section>
