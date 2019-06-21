<?php
/**
 * Custom footer for CRG Child Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="spacer"></div>
	<div class="explore-crg-container footer">
		<div class="explore-crg">
			<h2 class="header yellow blue-line blue-line-center align-center animation-element slide-down">Explore CRG</h2>
			<div class="animation-element slide-left" style="display: inline-block;">
				<a href="products" class="yellow-button">Products</a>
			</div>
			<div class="animation-element slide-right" style="display: inline-block;">
				<a href="#contact" class="yellow-button">Contact</a>
			</div>
		</div>
	</div>

	<!-- Grabbing the footer thumbnail to put behind the contact form -->
	<?php
		// $footer_slug = 'footer';
		// $args = array(
		// 	'name'        => $footer_slug,
		// 	'post_type'   => 'post',
		// 	'post_status' => 'publish',
		// 	'numberposts' => 1
		// );
		// $my_post = get_posts($args);
		// if( $my_post ) :
		// 	$bg_url = get_the_post_thumbnail_url($my_post[0]->ID);
		// endif;
		// wp_reset_postdata();
	?>

	<div class="footer-contact-container" id="contact" style="<?php echo 'background-image: url('.get_image("footer", "full", null, "src").')' ?>">
		<div class="footer-contact-main align-center">
			<div class="footer-box-container" title="<?php the_title_attribute(); ?>">
				<div class="overlay"></div>
				<?php get_template_part( 'template-parts/box', 'grid' ); ?>
			</div>
			<div class="crg-center-logo-container footer">
				<!-- CRG Logo -->
				<?php get_image("CRG Logo", "large"); ?>
				<h2 class="header yellow blue-line blue-line-center align-center">Contact</h2>
				<?php dynamic_sidebar( 'Footer Contact' ); ?>
				<p class="small-white-font">Image copyright &copy; 2018 Pictometry International Corp. All rights reserved.</p>
			</div><!-- .crg-center-logo-container -->
		</div>
	</div><!-- .site-banner-content -->


	<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div class="widget-container">
			<div class="widget-area <?php echo esc_attr( dyad_widget_column_class( 'sidebar-1' ) ); ?>" role="complementary">
				<div class="grid-container">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- .grid-container -->
			</div><!-- #secondary -->
		</div>
	<?php } ?>

	<div class="footer-bottom-info <?php if ( has_nav_menu( 'social' ) ) { echo 'has-social-menu'; } ?>">
		<?php
		if ( has_nav_menu( 'social' ) ) {
			wp_nav_menu( array(
				'theme_location'  => 'social',
				'container'       => 'div',
				'container_id'    => '',
				'container_class' => 'social-links',
				'menu_id'         => '',
				'menu_class'      => 'social-links-items',
				'depth'           => 1,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
				'fallback_cb'     => '',
			) );
		}
		?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dyad' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dyad' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<span> Theme by Chris Stehm</span>
		</div><!-- .site-info -->
	</div><!-- .footer-bottom-info -->
</footer><!-- #colophon -->

</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
