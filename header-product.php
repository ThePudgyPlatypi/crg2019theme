<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dyad
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82072758-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-82072758-1');
		</script>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dyad' ); ?></a>
			<header id="masthead" class="noHeader site-header nav" role="banner">
				<div class="desktop-nav">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<!-- <img id="nav-logo" class="bottom" src="http://crg-wordpress.net/wp-content/uploads/2018/04/Full-color-No-header-No-text.png" alt="CRG Logo"> -->
							<?php get_image("CRG Logo", "full","nav-logo bottom"); ?>
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


			</header><!-- #masthead -->

			<div class="site-inner">

				<?php if ( ( is_page() && has_post_thumbnail() ) ) :?>
					<?php get_template_part( 'template-parts/banner', 'product' ); ?>
				<?php endif; ?>

				<div id="content" class="site-content">
