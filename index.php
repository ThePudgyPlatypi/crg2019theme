<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('small'); ?>

<div class="entry-content-page full">
	<div class="post-grid">
			<?php $news_cat_args = array(
				'posts_per_page' => 10,
				'order' => 'DESC',
				'orderby' => 'post_date',
				'cat' => get_cat_ID('Critical Response Group Post')
			); 
			
			$news_cat = new WP_Query($news_cat_args);
			?>

			<?php if ( $news_cat->have_posts() ) { ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $news_cat->have_posts() ) { 
					$news_cat->the_post(); ?>
					<!-- testing out grid block, will need more elegant solution -->
					<?php get_template_part( 'template-parts/content', 'block'); ?>
					<?php //get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php }; ?>

				<?php wp_reset_postdata(); ?>

			<?php } else { ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php }; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
	</div> <!-- end post grid -->

	<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) : ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
	<?php endif; ?>	
		
	<?php //get_sidebar(); ?>

</div>

<?php get_footer('custom');
