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
	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundationpress' ); ?></a>
			<?php get_template_part( 'template-parts/navigation' ) ?>

			<div class="site-inner">
				<div id="content" class="site-content">
