<section id="heading" class="dark full-width-wrapper">
  <div class="heading-title">
    <?php  if( is_page( array( '2135', '2144', '2147', '2149') ))
    {
      $title1 = get_field('services_page_title_line_1');
      $title2 = get_field('services_page_title_line_2');
      echo '<h1>' . $title1 . ' ' . $title2 . '</h1>';
    }
      else {
      $title = get_the_title();
      echo '<h1>' . $title . '</h1>';
    }?>
  </div>
  <div class="breadcrumbs">
    <div class="wrapper">
      <?php
  
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
}
  ?>
</div>
  </div>
</section>
