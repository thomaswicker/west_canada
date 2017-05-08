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
			<h1>WEST News & Events</h1>

			<?php
				$args = array(
						'post_type' => 'events'
				);

				$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<article>
					<h2><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>
					<h3><?php the_field( 'subtitle' ); ?></h3>
					<hr style="border: 1px solid #dddddd;">
					<p><?php the_field( 'description' ); ?></p>
					<span><?php the_field( 'links' ); ?></span>
					<div class="news-events-image"><img src="<?php the_field( 'image' ); ?>" alt=""></div>

					<a class="btn btn-secondary btn-view-event" href="<?php the_permalink() ;?>">VIEW EVENT<i class="fa fa-arrow-right" class="margin left md"></i></a>
			</article>

			<?php endwhile; else: ?>
				<p>There are no posts or pages here</p>
			<?php endif; ?>

		</section>

		<section class="bc-news-right">
			<?php get_template_part('partials/sidebars/sidebar-about-news-events'); ?>
		</section>

	</div>
</section>


<?php get_footer(); ?>
