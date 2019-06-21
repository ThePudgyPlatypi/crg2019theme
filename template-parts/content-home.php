<div class="home container overflow">
	<!-- Images used on this page that are not dynamic -->
	<?php 
		// This is for the Collaborative response graphic image under products
		// String must align with image title
		$CRG_Home_image = "CRG Home Main Image";
		// THis is for the background image behind the above image
		$CRG_home_image_bg = "CRG Home Main Image BG";
		// This is for the description and title of CRG's
		$CRG_Product = "collaborative response graphics";
		// This is for the description right after the main header taling about Critical Response Group
		$CRG_Description = "Critical Response Group Description";
	?>

	<!-- Short CRG description  -->
	<div class="shadow-box animation-element slide-left">
		<div class="home content description align-center animation-element slide-left">
			<h2 class="home description header blue yellow-line yellow-line-center align-center">Critical Response Group</h2>
			
				<?php 
					$content = get_page_by_title($CRG_Description, OBJECT, 'post'); 
					echo $content->post_content;
				?>
			
			<a href="#contact" class="blue-button">Contact</a>
		</div>
	</div>

	<!-- Featured PRODUCT Section -->
	<div class="home products" <?php echo 'style="background-image: url('. get_image($CRG_home_image_bg, "full", null, "src") .');"'?>>
		<div class="overlay"></div>
		<div class="white-gradient overlay-nocolor"></div>
		<div class="products-container content align-center">
			<h2 class="home description header blue yellow-line yellow-line-center align-center">Products</h2>
			<div class="animation-element slide-up">
				<div class="home products-img-container">
					<?php get_image($CRG_Home_image, "full", "home products-img"); ?>
				</div>
				<h2 class="home products header yellow blue-line blue-line-center align-center">Collaborative Response Graphics</h2>
					<p class="home description crg paragraph align-left">
						<?php 
							$content = get_page_by_title($CRG_Product, OBJECT, 'post'); 
							echo $content->post_content;
						?>
					</p>
				<a href="products/collaborative-response-graphics" class="yellow-button">Learn More</a>
			</div>
		</div>
		<?php get_template_part( 'template-parts/box', 'grid' ); ?>
	</div>

	<!-- PRODUCTS LIST AND CLIENT SLIDER -->
	<div class="home other-products align-center">
		<div class="card-table">
			<?php get_template_part('template-parts/card', 'product'); ?>
		</div>
		<h3 class="align-center"><strong>CRG Customers</strong></h3>
		<!-- <div class="clients-slider"> -->
		<?php dynamic_sidebar('client_slider'); ?>
		<!-- </div> -->
		<a href="products" class="yellow-button">Explore</a>
	</div>


	<!-- Meet the Team  -->
	<div class="mtt-container">
		<div class="mtt-header align-center">
			<!-- get the post for meet the team  -->
			<?php $meet_the_team = get_page_by_title('meet the leadership team', OBJECT, 'post') ?>

			<h2 class="home mtt header yellow blue-line blue-line-center"><?php echo $meet_the_team->post_title; ?></h2>
			<p class="home paragraph align-left content"><?php echo $meet_the_team->post_content; ?></p>
		</div>
		<div class="mtt-slider-container">
			<div class="background-image" <?php echo "style='background-image: url(".get_the_post_thumbnail_url($meet_the_team->ID).");'"?>></div>
			<div class="mtt-slider">
				<?php get_template_part('template-parts/card', 'team'); ?>
			</div>
		</div>
	</div>


	<!-- Media -->
	<div class="media-slider">
	<h2 class="home description header blue yellow-line yellow-line-center align-center">Recent Media Posts</h2>
		<?php dynamic_sidebar('media_slider'); ?>
	</div>
</div>