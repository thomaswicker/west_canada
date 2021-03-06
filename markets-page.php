<?php
/*
Template Name: Markets Main Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-markets'); ?>

<?php get_template_part('partials/sm-nav'); ?>




	<section class="markets-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>
	</section>

</section>




<?php get_footer(); ?>
