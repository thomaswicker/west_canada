<?php
/*
Template Name: About => Team
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-team'); ?>

<?php get_template_part('partials/sm-nav'); ?>





<ul class="team-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>

	<?php endif; ?>
</ul>





<?php get_footer(); ?>
