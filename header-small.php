<?php
// Header for all pages on the desktop that do not have the bottom navigation first

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
	<header id="masthead" class="noHeader sticky site-header nav" role="banner">
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

	<div id="<?php if (!is_page($faq_page) && !is_home()) { echo('product-float-fix'); };?>" class="site-inner">
		
		<?php get_template_part( 'template-parts/banner', 'half' ) ?>

		<div id="content" class="site-content">
