<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<!-- #masthead NAVIGATION -->
			<header id="masthead" class="site-header nav home" role="banner">
				<div class="desktop-nav">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<!-- CRG Logo -->
							<?php get_image("CRG Logo", "full"); ?>
						</a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id' => 'primary-menu',
							'container_class' => 'primary-menu',
						) ); ?>
					</nav>
				</div>
				
				<?php get_template_part( 'template-parts/mobile', 'nav' ); ?>
				
			</header>
			<!-- #masthead NAVIGATION -->

			<div id="full-float-fix" class="site-inner">

				<!-- Grab header that has title and images and such -->
				<?php get_template_part( 'template-parts/banner', 'full' ) ?>

				<!-- Start of content DIV -->
				<div id="content" class="site-content">
		
