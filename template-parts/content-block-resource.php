<?php
/**
 * Template part for displaying standard post.
 *
 */

?>


<?php $categories = get_categories( array(
	'orderby' => 'name',
	'order'   => 'ASC',
	'parent' => get_cat_ID("database")
) );

foreach( $categories as $category ) {
	$category_link = sprintf( 
		'<a href="%1$s" class="cover-link" alt="%2$s">%3$s</a>',
		esc_url( get_category_link( $category->term_id ) ),
		esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
		esc_html( $category->name )
	); ?>
	<article id="cat-<?php echo $category->slug ?>" class="resource-grid-block">
		<div class="post-grid-block-inside" >
			<div class="post-grid-block-inside-cell">
				<a href="<?php echo get_category_link( $category->term_id ) ?>" class="cover-link"></a>
				<div class="background"></div>

				<div class="entry-inner">
					<div class="entry-inner-content">
						<header class="entry-header">
							<h4 class="entry-title"><?php echo $category->name ?></h4>
						</header>
						<div class="entry-content">
							<?php echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category->description ) . '</p>'; ?>
						</div>
					</div><!-- .entry-inner-content -->
				</div><!-- .entry-inner -->

			</div> <!-- post-grid-block-inside-cell -->
		</div> <!-- post-grid-block-inside -->
	</article>
<?php };  ?>

