<?php
/*
Template Name: About => Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-contact'); ?>

<?php get_template_part('partials/sm-nav'); ?>





<section class="contact-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>

		<?php endif; ?>

	<section class='bc-contact-right'>
		<p class="block-header">WEST, ULC Headquarters</p>
		<p class="text-row">Calgary, Alberta, Canada</p>
		<a href="tel:403-623-9231" class="tel-row">403.623.9231</a>
		<a href="mailto:marketing@west-ulc.ca" class="email-row" target="_top">marketing@west-ulc.ca</a>

		<p class="block-header">To contact WEST’s International Corporate Headquarters</p>
		<a href="mailto:marketing@west-inc.com" class="email-row" target="_top">marketing@west-inc.com</a>
		<a href="http://www.west-inc.com" class="web-row">west-inc.com</a>
		<a href="tel:307-634-1756" class="tel-row">307.634.1756</a>
	</section>

</section>




<?php get_footer(); ?>
