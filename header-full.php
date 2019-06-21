<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dyad
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dyad' ); ?></a>

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
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dyad' ); ?></button> -->
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
		
