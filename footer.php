		<section id='widget-footer'>
			<div id='wf-left'>
				<div class='widget-panel'>
					<h3>
						<i class='fa fa-twitter'></i>
						Tweets by WEST
					</h3>
					<div class='widget-panel-content'>
						Tweets by WEST
					</div>
				</div>
			</div>
			<div id='wf-middle'>
				<div class='widget-panel'>
					<h3>
						<i class='fa fa-align-left'></i>
						News & Events
					</h3>
					<div class='widget-panel-content'>
						News & Events
					</div>
				</div>
			</div>
			<div id='wf-right'>
				<div class='widget-panel'>
					<h3>
						<i class='fa fa-camera-retro'></i>
						WEST Photo Stream
					</h3>
					<div class='widget-panel-content'>
						WEST Photo Stream
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class='footer-left'>
				<p>
					Site design by:
					<a href='http://www.xiri.io'>
						XIRI Media
					</a>
				</p>
			</div>
			<div class='footer-right'>
				<p class='copyright'>
					Copyright © 2017 WEST Inc
				</p>
			</div>
			<!-- Magical Spells -->
			<script src='bower_components/jquery/dist/jquery.min.js'></script>
			<script src='bower_components/motion-ui/dist/motion-ui.min.js'></script>
			<script src='js/foundation.min.js'></script>
			<script src='js/application.min.js'></script>
			<script>
				$(document).foundation();
			</script>
			<script>
				document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
			</script>
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

		</footer>


		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
