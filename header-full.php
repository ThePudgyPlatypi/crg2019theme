<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<!-- Grab header that has title and images and such -->
			<?php get_template_part( 'template-parts/banner', 'full' ) ?>
			<?php get_template_part( 'template-parts/navigation' ) ?>

			<div id="full-float-fix" class="site-inner">
				<!-- Start of content DIV -->
				<div id="content" class="site-content">
		
