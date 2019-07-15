<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

get_header('no'); ?>


<div class="entry-content-page full">
	<div class="post-grid">

			<?php if ( have_posts() ) : ?>

				<div class="grid-container full">
					<header class="page-header grid-y grid-padding-x align-center">
						<h1 class="page-title blue yellow-line yellow-line-center">
							<?php printf( esc_html__( 'Search Results for: %s', 'dyad' ), '<span>' . get_search_query() . '</span>' ); ?>
						</h1>

						<div class="search-widget">
							<?php dynamic_sidebar( 'Post Widgets' ); ?>
						</div>
					</header><!-- .page-header -->
				</div>

				<div class="post-wrapper">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'block' );
						?>

					<?php endwhile; ?>
				</div>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

	</div><!-- .post-grid -->

</div><!-- #main -->


<?php get_footer('custom'); ?>