<<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *
 */

get_header('no'); ?>

	<main id="primary" class="content-area" role="main">

		<div id="posts" class="posts">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
                    <h1 class="page-title blue yellow-line yellow-line-center">
                        <?php printf( esc_html__( 'Search Results for: %s', 'dyad' ), '<span>' . get_search_query() . '</span>' ); ?>
                    </h1>
				</header><!-- .page-header -->


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blocks' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- .posts -->

	</main><!-- #main -->


<?php get_footer('custom'); ?>