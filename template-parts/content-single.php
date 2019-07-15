<?php
/**
 * Template part for displaying single posts.
 *
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(in_category('team-members')) { 

		get_template_part("template-parts/content", "team-member");

	} else { ?>

		<?php if ( has_post_thumbnail() && 'image' != get_post_format() ) : ?>
			<div class="entry-media">
				<div class="entry-media-thumb" style="background-image: url(<?php echo the_post_thumbnail_url() ?>); "></div>
			</div><!-- .entry-media -->
		<?php endif; ?>


		<div class="entry-inner animation-element fade-in">

			<header class="entry-header">

				<div class="entry-meta">
					<?php dyad_entry_meta(); ?>
				</div><!-- .entry-meta -->

				<?php the_title( '<h1 class="entry-title yellow-line yellow-line-center">', '</h1>' ); ?>

				<div class="entry-posted">
					<?php dyad_posted_on(); ?>
				</div><!-- .entry-posted -->

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>

				<?php
					the_post_navigation( array(
						'prev_text' => '<div class="nav-previous"><span class="nav-subtitle">' . esc_html__( 'Previous Post', 'foundation' ) . '</span> <span class="nav-title">%title</span></div>',
						'next_text' => '<div class="nav-next"><span class="nav-subtitle">' . esc_html__( 'Next Post', 'foundation' ) . '</span> <span class="nav-title">%title</span></div>',
					) );
				?>
			</div><!-- .entry-content -->

			<?php dyad_post_footer(); ?>

		</div><!-- .entry-inner -->
	<?php }; ?> <!-- end of if-statement -->
</article><!-- #post-## --><!-- #post-## -->

