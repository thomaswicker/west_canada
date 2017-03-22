		<section id='widget-footer'>
			<div id='wf-left'>
				<h3>
					<i class='fa fa-twitter'></i>
					Tweets by WEST
				</h3>
				<div class='widget-panel'>
					<div class='widget-panel-content'>
						<?php if ( dynamic_sidebar('footer_left') ) : ?>
						<?php else: ?>
							<p>There are no Twitter posts to show</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div id='wf-middle'>
				<h3>
					<i class='fa fa-align-left'></i>
					News & Events
				</h3>
				<div class='widget-panel'>
					<div class='widget-panel-content'>
							<?php

		             $args = array(
		                 'post_type' => 'events',
		                 'posts_per_page' => 3, );

		             $the_query = new WP_Query( $args );

							?>

		         	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		            <h2><?php the_title() ;?></h2>
		           	<p><?php the_field ( 'description' ); ?></p>
		           	<span><?php the_field( 'links' ); ?></span>

		           	<hr style="border: 1px solid #dddddd;">

	         		<?php endwhile; else: ?>

	            	<p>There are no Events to show</p>

	         		<?php endif; ?>
					</div>
				</div>
			</div>
			<div id='wf-right'>
				<h3>
					<i class='fa fa-camera-retro'></i>
					WEST Photo Stream
				</h3>

				<div class='widget-panel'>
					<div class='widget-panel-content'>
						<?php if ( dynamic_sidebar('footer_right') ) : ?>
						<?php else: ?>
							<p>There are no Flickr images to show</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class='footer-left'>
				<p>
					Site design by:
					<a href='http://www.xiri.io' target="_blank">
						XIRI Media
					</a>
				</p>
			</div>
			<div class='footer-right'>
				<p class='copyright'>
					Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. WEST Inc
				</p>
			</div>
			<!-- Magical Spells -->
			<script src='http://west-ulc.ca/wp-content/themes/west_canada_theme/bower_components/jquery/dist/jquery.min.js'></script>
			<script src='http://west-ulc.ca/wp-content/themes/west_canada_theme/bower_components/motion-ui/dist/motion-ui.min.js'></script>
			<script src='http://west-ulc.ca/wp-content/themes/west_canada_theme/js/foundation.min.js'></script>
			<script src='http://west-ulc.ca/wp-content/themes/west_canada_theme/js/application.min.js'></script>
			<script>
				$(document).foundation();
			</script>

		</footer>

		<?php wp_footer(); ?>

	</body>

</html>
