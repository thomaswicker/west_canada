<?php
/*
Template Name: Services => Stats
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-services-stats'); ?>

<?php get_template_part('partials/sm-nav'); ?>




	<section class="services-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<section class="bc-services-right">
			<?php get_template_part('partials/sidebars/sidebar-services-stats'); ?>
		</section>

	</section>

</section>




<?php get_footer(); ?>
