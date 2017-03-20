<?php
/*
Template Name: About => Culture
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-culture'); ?>

<?php get_template_part('partials/sm-nav'); ?>





	<section class="culture-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<section class="bc-culture-right">
			<?php get_template_part('partials/sidebars/sidebar-about-culture'); ?>
		</section>
	</section>

</section>



<?php get_footer(); ?>
