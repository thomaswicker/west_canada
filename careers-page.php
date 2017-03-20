<?php
/*
Template Name: Careers Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-careers'); ?>

<?php get_template_part('partials/sm-nav'); ?>


	<section class="careers-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<div class="bc-careers-right">
			<?php get_template_part('partials/sidebars/sidebar-careers'); ?>
		</div>

	</section>

</section>





<?php get_footer(); ?>
