<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82072758-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-82072758-1');
		</script>
=======
>>>>>>> 27d4735f56d39b9b67c5f497a74830096ded7bae
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundation' ); ?></a>
			<!-- Grab header that has title and images and such -->
			<?php get_template_part( 'template-parts/banner', 'full' ) ?>
			<?php get_template_part( 'template-parts/navigation' ) ?>

			<div class="site-inner">
				<!-- Start of content DIV -->
				<div id="content" class="site-content">
		
