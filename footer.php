		<footer class="footer" role="contentinfo">

			<div class='footer-left'>
		    <p>
		      Site design by:
		      <a href='http://www.xiri.io' target="new">
		        XIRI Media
		      </a>


					<nav role="navigation">
						<?php wp_nav_menu(array(
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>


		    </p>
		  </div>
		  <div class='footer-right'>
		    <p class='copyright'>
		      Copyright © 2017 WEST Inc
		    </p>
		  </div>
		  <!-- Magical Spells -->
		  <!-- <script src='bower_components/jquery/dist/jquery.min.js'></script> -->
		  <!-- <script src='bower_components/motion-ui/dist/motion-ui.min.js'></script> -->
		  <!-- <script src='js/foundation.min.js'></script> -->
		  <!-- <script src='js/application.min.js'></script> -->

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
