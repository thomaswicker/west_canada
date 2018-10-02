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
		<p class="text-row">Suite 303, 1000 9th Ave SW</p>
		<p class="text-row">Calgary, Alberta, T2P 2Y6</p>
		<a href="tel:403-265-0343" class="tel-row">403.265.0343</a>
		<a href="mailto:marketing@west-ulc.ca" class="email-row" target="_top">marketing@west-ulc.ca</a>

		<p class="block-header margin-top">WEST, INC Headquarters</p>
		<p class="text-row">415 W. 17th Street, Suite 200</p>
		<p class="text-row">Cheyenne, WY 82001</p>
		<a href="tel:307-634-1756" class="tel-row">307.634.1756</a>
		<a href="mailto:marketing@west-inc.com" class="email-row" target="_top">marketing@west-inc.com</a>
		<a href="http://www.west-inc.com" class="web-row">west-inc.com</a>
	</section>

</section>




<?php get_footer(); ?>
