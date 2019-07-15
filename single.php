<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('no'); ?>

	<main id="primary" class="content-area" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<!-- //navigation in content-single  -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #primary -->

<?php get_footer('custom'); ?>
