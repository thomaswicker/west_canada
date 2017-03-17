<?php
/*
Template Name: Services => Avian
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-services-avian'); ?>

<?php get_template_part('partials/sm-nav'); ?>




	<section class="services-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<section class="bc-services-right">
			<?php get_template_part('partials/sidebars/sidebar-services-avian'); ?>
		</section>

	</section>

</section>





<?php get_footer(); ?>
