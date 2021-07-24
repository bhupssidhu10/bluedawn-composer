<?php /* Template Name: Contact Page */ ?>

<?php get_header();?>

<?php get_template_part( 'partials/heading', get_post_format() ); ?>

<section id="contact" class="light full-width-wrapper ">
<div class="first" >
<h2>Enquiries</h2>
<?php the_field('address', 'options'); ?>
<a href="mailto:<?php the_field('email', 'options'); ?>"><p class="bold"><?php the_field('email', 'options'); ?></p></a>
</div>
<div class="second">
<h2>Who's Who</h2>
<?php
while( have_rows('person_profile') ): the_row();
$name = get_sub_field ('name');
$email = get_sub_field ('email');
$jobTitle = get_sub_field ('job_title');
$picture = get_sub_field ('picture');
$pictureUrl = $picture['url'];
$pictureAlt = $picture['alt'];
$pictureTitle = $picture['title'];
?>
<div class="person">
<div class="person_image">
<img src="<?php echo $pictureUrl; ?>" alt="<?php echo $pictureAlt; ?>" title="<?php echo $pictureTitle; ?>">
</div>
<div class="person_details">
<div class="person_title">
<p class="bold"><?php echo $jobTitle; ?></p>
</div>
<div class="person_email">
<a href="mailto:<?php echo $email; ?>">Talk to <?php echo $name; ?></a>
</div>
</div>
</div>
<?php endwhile ?>
</div>
<div class="third">
<h2>Leave us a message</h2>
<?php echo do_shortcode("[wpforms id='2208']"); ?>


</div>
</section>



<?php get_footer(); ?>
