<<<<<<< HEAD
<?php
// Header for all pages on the desktop that do not have the bottom navigation first

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?> id="top">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundation' ); ?></a>
			<?php get_template_part( 'template-parts/navigation' ) ?>
			<?php get_template_part( 'template-parts/banner', 'half' ) ?>

			<div class="site-inner">
=======
<?php
// Header for all pages on the desktop that do not have the bottom navigation first

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?> id="top">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundation' ); ?></a>
			<?php get_template_part( 'template-parts/navigation' ) ?>
			<?php get_template_part( 'template-parts/banner', 'half' ) ?>

			<div class="site-inner">
>>>>>>> 27d4735f56d39b9b67c5f497a74830096ded7bae
				<div id="content" class="site-content">