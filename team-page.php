<?php
/*
Template Name: About => Team
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-team'); ?>

<?php get_template_part('partials/sm-nav'); ?>





<section class="team-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<div class="bc-team-right">
			<?php get_template_part('partials/sidebars/sidebar-about-team'); ?>
		</div>
	</section>
</section>





<?php get_footer(); ?>
