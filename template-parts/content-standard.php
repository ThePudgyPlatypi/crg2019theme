<?php
/**
 * Template part for displaying standard post.
 * Block Grid
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("post-grid-block animation-element slide-up"); ?>>

	<div class="post-grid-block-inside" >

		<a class="cover-link" href="<?php the_permalink(); ?>"></a>

		<!-- grab the thumbnail -->
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnails' ); ?>

		
		<?php if(has_post_thumbnail()) { ?>
			<!-- Thumbnial exists  -->
			<div class="post-grid-block-inside-cell">
				<div class="entry-media">
					<?php the_post_thumbnail();  ?>
					<div class="overlay"></div>
				</div>
			</div>

			<div class="post-grid-block-inside-cell">
				<div class="entry-inner">

					<div class="entry-inner-content">
						<header class="entry-header">
							<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
					</div><!-- .entry-inner-content -->
					
				</div><!-- .entry-inner -->
			</div> <!-- post-grid-block-inside-cell -->


		<?php } else { ?>
			<!-- no thumbnail -->
			<div class="post-grid-block-inside-cell no-thumbnail">
				<div class="entry-inner">

					<div class="entry-inner-content">
						<header class="entry-header">
							<?php the_title( sprintf( '<h4 class="entry-title yellow-line yellow-line-center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
					</div><!-- .entry-inner-content -->
				</div><!-- .entry-inner -->
			</div> <!-- post-grid-block-inside-cell -->
		<?php }; ?>
	</div> <!-- post-grid-block-inside -->
</article><!-- #post-## -->
