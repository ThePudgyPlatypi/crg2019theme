<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('no'); ?>

<div class="entry-content-page full">
	<div class="post-grid">
		
			<?php if ( have_posts() ) : ?>
				<div class="grid-container full">
					<header class="page-header grid-x grid-padding-x align-center">
						<?php
							the_archive_title( '<h1 class="cell small-12 text-center page-title blue yellow-line yellow-line-center">', '</h1>' );
							the_archive_description( '<div class="cell small-12 text-center taxonomy-description">', '</div>' );
						?>
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
				

					<?php /* Display navigation to next/previous pages when applicable */ ?>
						<?php
						if ( function_exists( 'foundationpress_pagination' ) ) :
							foundationpress_pagination();
						elseif ( is_paged() ) :
						?>
							<nav id="post-nav">
								<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
								<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
							</nav>
					<?php endif; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</div><!-- .posts -->
	</div><!-- #main -->
<?php get_footer('custom');
