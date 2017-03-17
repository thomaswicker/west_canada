<?php
/*
Template Name: Services Main Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero_services'); ?>

<?php get_template_part('partials/sm-nav'); ?>




<section class="services-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>

	<?php endif; ?>
</section>





<?php get_footer(); ?>
