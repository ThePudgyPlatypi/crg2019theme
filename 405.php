<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Dyad
 */

get_header('no'); ?>

	<main id="primary" class="content-area" role="main">

		<div class="entry-inner">

			<header class="entry-header">
				<h1><?php esc_html_e( 'Oops! You are lost in space!', 'dyad' ); ?></h1>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php get_image("404-page", "full") ?>
				<!-- <img src="../../uploads/2018/06/gettyimages-158781036-800x533.jpg" alt="CRG 404 Image"> -->
				<p><?php esc_html_e( 'It looks like there is nothing here except you, me, and a whole buncha empty space. Maybe try again?', 'dyad' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- .entry-content -->
		</div><!-- .entry-main -->

	</main><!-- #main -->

<?php get_footer('custom'); ?>
