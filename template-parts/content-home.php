<div class="home container overflow">
	<!-- Images used on this page that are not dynamic -->
	<?php 
		// This is for the Collaborative response graphic image under products
		// String must align with image title
		$CRG_Home_image = "CRG-Home-Main-Image-Overlay";
		// THis is for the background image behind the above image
		$CRG_home_image_bg = "CRG-Home-Main-Image-BG";
		// This is for the description and title of CRG's
		$CRG_Product = "collaborative response graphics";
		// This is for the description right after the main header taling about Critical Response Group
		$CRG_Description = "Critical Response Group Description";
	?>

	<!-- Short CRG description  -->
	<div class="shadow-box main-container animation-element slide-left">
		<div class="home description-container">
			<div>
				<h2 class="home description header blue yellow-line yellow-line-center align-center">Critical Response Group</h2>
				
					<?php 
						$content = get_page_by_title($CRG_Description, OBJECT, 'post'); 
						echo $content->post_content;
					?>
				<div class="button-container">
					<a href="#contact" class="blue-button" data-smooth-scroll>Contact</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured PRODUCT Section -->
	<div class="header-container main-container">
		<h2 class="home description header blue yellow-line yellow-line-center align-center">Products</h2>
	</div>

	<div class="home products image-main">
		<!-- grid overlay -->
		<img class="grids" src="<?php bloginfo('template_url'); ?>\dist\assets\images\svgGrid.png">
		
		<div class="products-container">
			<div class="home products-img-container" style="background-image:url(<?php get_image($CRG_home_image_bg, "full", null, "src"); ?>)">
				<?php get_image($CRG_Home_image, "full", "home products-img animation-element slide-up"); ?>
			</div>
		</div>
	</div>
	
	<div class="home products description-container">
		<div>
			<h2 class="home products header yellow blue-line blue-line-center align-center">Collaborative Response Graphics</h2>
				<p><?php 
					$content = get_page_by_title($CRG_Product, OBJECT, 'post'); 
					echo $content->post_content;
				?></p>
			<div class="button-container">
				<a href="products/collaborative-response-graphics" class="yellow-button">Learn More</a>
			</div>
		</div>
	</div>

	<!-- PRODUCTS LIST AND CLIENT SLIDER -->
	<div class="home other-products">
		<div class="spacer"></div>
			<div class="product-cards" data-equalizer>
				<?php get_template_part('template-parts/card', 'product'); ?>
			</div>
		</div>

		
		<div class="search-widget yellow-line yellow-line-center home">
			<h2 class="text-center blue">Recent Critical Response Group News</h2>
			<?php dynamic_sidebar( 'search-all-widget' ); ?>
		</div>

		<div class="recent-posts-container full">
			<div class="recent-posts-grid post-grid">
				<div class="post-wrapper">
					<?php
					$new_posts = array(
						'post_type' => 'post',
						'posts_per_page' => '3',
						'category_name' => 'crg_post',
					);
					
					$wp_query = new WP_Query($new_posts); ?>

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
			</div><!-- end post grid -->
		</div> <!-- end recent posts container -->

		<div class="post-widget-container">
			<?php dynamic_sidebar( 'post-widgets' ); ?>
		</div>
	</div>
</div>