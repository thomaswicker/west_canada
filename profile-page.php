<?php
/*
Template Name: About => Team => Profile
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-team'); ?>

<?php get_template_part('partials/sm-nav'); ?>



<section class="profiles-container">

	<a href="http://west-ulc.ca/team/" class="btn btn-back-to-team"><i class="fa fa-arrow-left"></i>Back to Team</a>

	<section class='body-content body-content-profiles'>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

		<div class="bc-profiles-right">
			<?php get_template_part('partials/sidebars/sidebar-about-team'); ?>
		</div>
	</section>
</section>




<?php get_footer(); ?>
