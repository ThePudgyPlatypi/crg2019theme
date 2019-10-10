<?php
/**
 * Custom footer for CRG Child Theme
 */

?>

</div><!-- #content -->

<div class="small reveal" id="newsletter" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
	<h1>Keep up to date on the latest public safety news</h1>
	
	<div class="post-widget-container">
		<?php dynamic_sidebar( 'post-widgets' ); ?>
	</div>

	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">×</span>
	</button>
</div>
   
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="spacer"></div>
	<div class="explore-crg-container footer">
		<div>
			<div class="explore-crg">
				<h2 class="header yellow blue-line blue-line-center animation-element slide-down">Explore CRG</h2>
				<div>
					<a href="products" class="yellow-button animation-element slide-left">Products</a>
					<a href="#contact" class="yellow-button animation-element slide-right" data-smooth-scroll>Contact</a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-contact-container" id="contact" style="background-image: url('<?php get_image("footer", "full", null, "src") ?>')">
	<div class="footer-box-container" title="<?php the_title_attribute(); ?>">
			<div class="overlay"></div>
		</div>
		<div class="footer-contact-main">
			<div class="crg-center-logo-container footer">
				<!-- CRG Logo -->
				<?php get_image("CRG Logo", "large"); ?>
				<h2 class="header yellow blue-line blue-line-center align-center">Contact</h2>
				<?php dynamic_sidebar( 'Footer Contact' ); ?>
				<p class="small-white-font">Image copyright &copy; 2018 Pictometry International Corp. All rights reserved.</p>
			</div><!-- .crg-center-logo-container -->
		</div>
	</div><!-- .site-banner-content -->

	<div class="footer-bottom">
		<?php if ( is_active_sidebar( 'footer' ) ) { ?>
			<div class="widget-container">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer' ); ?>
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
	</div><!-- footer-bottom -->
</footer><!-- #colophon -->

</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
