<?php
/**
 * Template part for displaying standard post.
 * Block Grid
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("post-grid-block animation-element slide-up"); ?>>

<div class="post-grid-block-inside">

		<?php if(has_post_thumbnail()) { ?>
			<!-- Thumbnial exists  -->
			

			<div class="post-grid-block-inside-cell">
				<div class="entry-inner">

					<div class="entry-inner-content">
						<header class="entry-header">
							<h4 class="entry-title">
								<?php the_title(); ?>
							</h4>
						</header><!-- .entry-header -->

						<div class="entry-media">
							<?php the_post_thumbnail(); ?>
						</div>

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</div><!-- .entry-inner-content -->
					
				</div><!-- .entry-inner -->
			</div> <!-- post-grid-block-inside-cell -->


		<?php } else { ?>
			<!-- no thumbnail -->
		<div class="post-grid-block-inside-cell no-thumbnail" >
			<div class="entry-inner">

				<div class="entry-inner-content">
					<header class="entry-header">
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
						</h4>
					</header><!-- .entry-header -->

					<div class="entry-content">
							<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- .entry-inner-content -->
			</div><!-- .entry-inner -->
		</div> <!-- post-grid-block-inside-cell -->
	<?php }; ?>
</div> <!-- post-grid-block-inside -->


		

</article><!-- #post-## -->
