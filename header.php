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

		<?php include_once("google-analytics.php") ?>

		<div id="nav-mobile-open">
			<i class="fa fa-bars"></i>
		</div>

		</div>

		<header class="nav-bar nav-bar-mobile" role="nav">

			<section class="nav-bar-left">
				<a href='http://west-ulc.ca/'>
					<img alt='West Canada Logo' src="<?php bloginfo( 'template_directory' ); ?>/img/west_ca_logo.png">
				</a>
				<section class="site-title">Scientific Solutions to Natural Resource Challenges in Canada</section>
			</section>

			<section class="nav-bar-right">
					<ul class="mobile-nav-menu">

						<li><a href="http://west-ulc.ca/" class="top-level-nav-item">Home</a></li>

						<li class="mobile-nav-row-divider">Services</li>

						<li><a href="http://west-ulc.ca/services/avian-species-research-management/">Avian Species Research & Management<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li><a href="http://west-ulc.ca/services/bat-research-monitoring/">Bat Research & Monitoring<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li><a href="http://west-ulc.ca/services/big-game-research-management/">Big Game Research & Management<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li><a href="http://west-ulc.ca/services/statistics-biometrics/">Statistics & Biometrics<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li><a href="http://west-ulc.ca/services/wildlife-research-management/">Wildlife Research & Management<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider">Markets</li>
						<li><a href="http://west-ulc.ca/markets/infrastructure/">Infrastructure<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/markets/government/">Government<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider-alt">Markets: Renewable Energy</li>
						<li><a href="http://west-ulc.ca/markets/solar-energy/">Solar Energy<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/markets/wind-energy/">Wind Energy<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider-alt">Markets: Utilities</li>
						<li><a href="http://west-ulc.ca/markets/power-lines/">Power Lines<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider-alt">Markets: Other</li>
						<li><a href="http://west-ulc.ca/markets/oilgas-and-mining/">Oil/Gas & Mining<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/markets/pipelines/">Pipelines<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider">About</li>
						<li><a href="http://west-ulc.ca/about/team/">Team<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/about/culture/">Culture<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/about/news-and-events/">News & Events<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="http://west-ulc.ca/about/contact/">Contact<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

						<li class="mobile-nav-row-divider">Careers</li>
						<li><a href="http://west-ulc.ca/careers/" class="top-level-nav-item">Careers<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>

					</ul>
			</section>

		</header>






		<!--  ##### BEGIN NAVIGATION HEADER FOR MOBILE APP ##### -->

		<header class="nav-bar nav-bar-desktop" role="nav">

			<section class="nav-bar-left">
				<a href='http://west-ulc.ca/'>
					<img alt='West Canada Logo' src="<?php bloginfo( 'template_directory' ); ?>/img/west_ca_logo.png">
				</a>
				<section class="site-title">Scientific Solutions to Natural Resource Challenges in Canada</section>
			</section>

			<section class="nav-bar-right">
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
											<li><a href="http://west-ulc.ca/markets/oilgas-and-mining/">Oil/Gas & Mining</a></li>
											<li><a href="http://west-ulc.ca/markets/pipelines/">Pipelines</a></li>
										<li>
											<li class="nav-row-divider">Renewable Energy</li>
											<li><a href="http://west-ulc.ca/markets/solar-energy/">Solar Energy</a></li>
											<li><a href="http://west-ulc.ca/markets/wind-energy/">Wind Energy</a></li>
										</li>
										<li>
											<li class="nav-row-divider">Utilities</li>
											<li><a href="http://west-ulc.ca/markets/power-lines/">Power Lines</a></li>
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

			<a class='btn contact-btn-callout hide-for-small-only' href='http://west-ulc.ca/contact/'>
				<i class='fa fa-phone'></i>
				Contact Us
			</a>

		</header>

		<!--  ##### END NAVIGATION HEADER FOR MOBILE APP ##### -->
