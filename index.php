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

<div class="search-widget yellow-line yellow-line-center">
	<?php dynamic_sidebar( 'search-all-widget' ); ?>
</div>

<div class="entry-content-page full">
	<div class="post-grid">

		<div class="post-wrapper">
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$news_cat_args = array(
				'paged' => $paged,
				'order' => 'DESC',
				'orderby' => 'post_date',
				'category_name' => 'crg_post'
			); 
			
			$wp_query = new WP_Query($news_cat_args);
			?>

			<?php if ( $wp_query->have_posts() ) { ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $wp_query->have_posts() ) { 
					$wp_query->the_post(); ?>
					
					<!-- testing out grid block, will need more elegant solution -->
					<?php $format = get_post_format() ? : 'standard'; ?>
					<?php get_template_part( 'template-parts/content', $format ); ?>

				<?php }; ?>

			<?php } else { ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php }; // End have_posts() check. ?>

			<?php wp_reset_postdata(); ?>
		</div>
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
	
	<div class="post-widget-container">
		<?php dynamic_sidebar( 'post-widgets' ); ?>
	</div>
</div>

<?php get_footer();
