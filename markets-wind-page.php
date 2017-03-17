<?php
/*
Template Name: Markets => Wind Energy
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-markets-wind'); ?>

<?php get_template_part('partials/sm-nav'); ?>




	<section class="markets-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<section class="bc-markets-right">
			<?php get_template_part('partials/sidebars/sidebar-markets-wind'); ?>
		</section>

	</section>

</section>






<?php get_footer(); ?>
