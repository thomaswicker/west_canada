<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<meta content='WEST Canada' name='description'>
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href='img/favicon.ico' rel='shortcut icon'>
		<!-- <link href='css/foundation.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/motion-ui/dist/motion-ui.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/components-font-awesome/css/font-awesome.min.css' rel='stylesheet'> -->
		<!-- <link href='css/application.min.css' rel='stylesheet'> -->

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">

		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body>

		<!--  ##### BEGIN NAVIGATION HEADER FOR WEB APP ##### -->
		<header class="nav-bar-mobile show-for-small-only" role="nav">

			<div class="top-bar-title">
				<span data-responsive-toggle="responsive-menu" data-hide-for="medium">
					<button class="menu-icon dark" type="button" data-toggle></button>
				</span>
			</div>

			<section class="nav-bar-left">
				<a href='index.html'>
					<img alt='West Canada Logo' src="<?php bloginfo( 'template_directory' ); ?>/img/west_ca_logo.png">
				</a>
			</section>

		</header>

		<!--  ##### END NAVIGATION HEADER FOR WEB APP ##### -->


		<!--  ##### BEGIN NAVIGATION HEADER FOR MOBILE APP ##### -->

		<header class="nav-bar hide-for-small-only" role="nav">

			<section class="nav-bar-left">
				<a href='index.html'>
					<img alt='West Canada Logo' src="<?php bloginfo( 'template_directory' ); ?>/img/west_ca_logo.png">
				</a>
			</section>

			<section class="nav-bar-right" id="example-menu">
					<ul class="dropdown menu" data-dropdown-menu>
						<li><a href="http://west-ulc.ca/" class="top-level-nav-item">Home</a></li>
						<li>
							<a href="#" class="top-level-nav-item">Services</a>
							<ul class="menu vertical">
								<li><a href="http://west-ulc.ca/services/avian-species-research-management/">Avian Species Research & Management</a></li>
								<li><a href="http://west-ulc.ca/services/bat-research-monitoring/">Bat Research & Monitoring</a></li>
								<li><a href="http://west-ulc.ca/services/big-game-research-management/">Big Game Research & Management</a></li>
								<li><a href="http://west-ulc.ca/services/statistics-biometrics/">Statistics & Biometrics</a></li>
								<li><a href="http://west-ulc.ca/services/wildlife-research-management/">Wildlife Research & Management</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="top-level-nav-item">Markets</a>
							<ul class="menu vertical">
								<li>
									<a href="#">Energy</a>
									<ul class="menu vertical">
										<li>
											<a href="#">Renewable</a>
											<ul class="menu vertical">
												<li><a href="http://west-ulc.ca/markets/solar-energy/">Solar Energy</a></li>
												<li><a href="http://west-ulc.ca/markets/wind-energy/">Wind Energy</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Utilities</a>
											<ul class="menu vertical">
												<li><a href="http://west-ulc.ca/markets/oilgas-and-mining/">Oil/Gas & Mining</a></li>
												<li><a href="http://west-ulc.ca/markets/pipelines/">Pipelines</a></li>
												<li><a href="http://west-ulc.ca/markets/power-lines/">Power Lines</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="http://west-ulc.ca/markets/infrastructure/">Infrastructure</a></li>
								<li><a href="http://west-ulc.ca/markets/government/">Government</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="top-level-nav-item">About</a>
							<ul class="menu vertical">
								<li><a href="http://west-ulc.ca/about/team/">Team</a></li>
								<li><a href="http://west-ulc.ca/about/culture/">Culture</a></li>
								<li><a href="http://west-ulc.ca/about/news-and-events/">News & Events</a></li>
								<li><a href="http://west-ulc.ca/about/contact/">Contact</a></li>
							</ul>
						</li>
						<li><a href="http://west-ulc.ca/careers/" class="top-level-nav-item">Careers</a></li>
					</ul>
			</section>

			<a class='btn contact-btn-callout hide-for-small-only' href='contact.html'>
				<i class='fa fa-phone'></i>
				Contact Us
			</a>

		</header>

		<!--  ##### END NAVIGATION HEADER FOR MOBILE APP ##### -->
