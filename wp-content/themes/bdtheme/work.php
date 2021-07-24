<?php /* Template Name: Workpage */ ?>

<?php get_header();?>
<?php get_template_part( 'partials/heading', get_post_format() ); ?>
<?php get_template_part( 'partials/portfolio', get_post_format() ); ?>
<?php get_template_part( 'partials/cta', get_post_format() ); ?>
<?php get_template_part( 'partials/services', get_post_format() ); ?>

<?php get_footer(); ?>
