<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- FOR TEAM MEMBERS PAGE -->
	<?php if(is_page("meet-the-team")) { ?>
		<div class="team-member-grid">
			<div class="senior-grid">
				<?php // ===============================
				// SENIOR LEADERSHIP
				$seniors = array(
					'post_type' => 'team',
					'category_name' => 'senior_leadership',
					'nopaging' => true,
					'order' => 'ASC',
					'orderby' => 'title',
				);

				$the_query = new WP_Query($seniors);

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<div class="grid-item senior">
							<a href="<?php the_permalink(); ?>">
								<div class="img-container">
									<?php the_post_thumbnail('thumbnail'); ?>
								</div>
								<strong> <?php if(get_the_title() !== "zzzfiller") { the_title(); } ?> </strong> 
								<p><?php echo get_post_meta(get_the_ID(), "title", true); ?></p>
							</a>
						</div>
						<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
					}
				} else {
					// no posts found
				}

				/* Restore original Post Data */
				wp_reset_postdata(); 
				// END OF SENIORS ?>
			</div>
			<div class="divider yellow-line yellow-line-center"></div>
			<div class="full-timers-grid">
				<?php // ===============================
				// FULL TIMERS
				$fullTimers = array(
					'post_type' => 'team',
					'category_name' => 'full_timers',
					'nopaging' => true,
					'order' => 'ASC',
					'orderby' => 'title',
				);

				$the_query = new WP_Query($fullTimers);
					// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<div class="grid-item full-time">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<strong> <?php if(get_the_title() !== "zzzfiller") { the_title(); } ?> </strong> 
								<p><?php echo get_post_meta(get_the_ID(), "title", true); ?></p>
							</a>
						</div>
						<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
					} 
				} else {

				};

				/* Restore original Post Data */
				wp_reset_postdata();
				// END OF FULL TIMERS ?>
			</div>
			<div class="divider yellow-line yellow-line-center"></div>
			<div class="interns-grid">
				<?php // ===============================
				// INTERNS/CARTOGRAPHERS
				$fullTimers = array(
					'post_type' => 'team',
					'category_name' => 'cartographers',
					'nopaging' => true,
					'order' => 'ASC',
					'orderby' => 'title',
				);

				$the_query = new WP_Query($fullTimers);
					// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<div class="grid-item intern">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<strong> <?php if(get_the_title() !== "zzzfiller") { the_title(); } ?> </strong> 
								<p><?php echo get_post_meta(get_the_ID(), "title", true); ?></p>
							</a>
						</div>
						<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
					} 
				} else {

				};

				/* Restore original Post Data */
				wp_reset_postdata(); ?>
				<!-- END OF INTERNS/CARTOGRAPHERS -->
			</div>
		</div>
	<?php } else { ?>
		<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
			<?php foundationpress_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
	<?php }; ?>
</article>
