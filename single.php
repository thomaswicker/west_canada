
<?php
/*
Template Name: About => News & Events
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheros/superhero-news'); ?>

<?php get_template_part('partials/sm-nav'); ?>





<section class="news-events-container">
	<div class="body-content-news">

		<section class='bc-news-left'>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="http://west-ulc.ca/news-and-events/" class="btn btn-secondary btn-back-to-news"><i class="fa fa-arrow-left"></i>Back to News & Events</a>

				<article>
					<h1><?php the_title() ;?></h1>
					<p><?php the_field( 'description' ); ?></p>
					<span><?php the_field( 'links' ); ?></span>
				</article>
			<?php endwhile; ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
						</footer>
				</article>

			<?php endif; ?>

		</section>

		<section class="bc-news-right">
			<?php get_template_part('partials/sidebars/sidebar-about-news-events'); ?>
		</section>

	</div>
</section>


<?php get_footer(); ?>
