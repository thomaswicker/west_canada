<?php
/*
Template Name: Services => Wildlife
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-services-wildlife'); ?>

<?php get_template_part('partials/sm-nav'); ?>




	<section class="services-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<section class="bc-services-right">
			<?php get_template_part('partials/sidebars/sidebar-services-wildlife'); ?>
		</section>

	</section>

</section>





<?php get_footer(); ?>
