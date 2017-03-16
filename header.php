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

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<?php // if you'd like to use the site description you can un-comment it below ?>
			<?php // bloginfo('description'); ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wca' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			</nav> -->

			<a class='btn contact-btn-callout hide-for-small-only' href='contact.html'>
				<i class='fa fa-phone'></i>
				Contact Us
			</a>

		</header>

		<section aria-label='Favorite Space Pictures' class='orbit superhero' data-options='animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;' data-orbit='' role='region'>
			<ul class='orbit-container'>
				<button class='orbit-previous'>
					<span class='show-for-sr'>Previous Slide</span>
					<i class='fa fa-arrow-left'></i>
				</button>
				<button class='orbit-next'>
					<span class='show-for-sr'>Next Slide</span>
					<i class='fa fa-arrow-right'></i>
				</button>
				<li class='is-active orbit-slide'>
					<strong>WELCOME TO WEST</strong>
					<figcaption>Avian Species Research and Management</figcaption>
					<img alt='Eagle' class='orbit-image' src="<?php bloginfo( 'template_directory' ); ?>/img/superhero_img_eagle.jpg">
				</li>
				<li class='orbit-slide'>
					<strong>WELCOME TO WEST</strong>
					<figcaption>Big Game Research and Monitoring</figcaption>
					<img alt='Eagle' class='orbit-image' src="<?php bloginfo( 'template_directory' ); ?>/img/superhero_img_bear_on_tree.jpg">
				</li>
				<li class='orbit-slide'>
					<strong>WELCOME TO WEST</strong>
					<figcaption class='short-title'>Renewable Energy</figcaption>
					<img alt='Power Lines' class='orbit-image' src="<?php bloginfo( 'template_directory' ); ?>/img/superhero_img_powerlines.jpg">
				</li>
				<li class='orbit-slide'>
					<strong>WELCOME TO WEST</strong>
					<figcaption class='short-title'>Statistics and Biometrics</figcaption>
					<img alt='Stats' class='orbit-image' src="<?php bloginfo( 'template_directory' ); ?>/img/superhero_img_stats.jpg">
				</li>
				<li class='orbit-slide'>
					<strong>WELCOME TO WEST</strong>
					<figcaption class='short-title'>Utilities</figcaption>
					<img alt='Power Lines' class='orbit-image' src="<?php bloginfo( 'template_directory' ); ?>/img/superhero_img_powerlines.jpg">
				</li>
			</ul>
		</section>
