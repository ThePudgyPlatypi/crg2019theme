<?php 
    $consultation_page = 48;
?>

<div class="site-banner-content banner-custom-header product" <?php echo "style='background-image: url(". get_image("poster", "full", null, "src") . ")'" ?>>
    <div class="overlay-white"></div>
	<!-- Product banner page -->
	<div <?php if(is_page($consultation_page)) { 
                echo 'class="site-banner-media product product-page"';
            } else {
                echo 'class="site-banner-media product product-page crg-product-page"'; 
            }; ?>>
        <div class="site-banner-thumbnail product" title="<?php the_title_attribute(); ?>">
            <!-- grabbing post featured image  -->
            <?php 
                
            if(is_page($consultation_page)) { ?>
                <div >
                    <video id="consultation-video" autoplay loop muted poster="">
                        <source src="../../video/Crgtraining-720Gmail.m4v" type="video/mp4">
                    </video>
                </div>
            <?php } else {
                $image = get_the_post_thumbnail($post->ID);
                echo $image;
            }
               
            ?>
        </div>
	</div>

    <!-- Cutom header text  -->
    <?php 
        if(is_page($consultation_page)) { ?>
            <div class="site-banner-header banner-description product">

                <h1 class="entry-title site-description product">
                    <?php echo get_the_title(); ?>
                </h1>

                <a href="#start" class="blue-button">Learn More</a>

            </div><!-- .site-banner-header -->
        <?php }; ?>
</div><!-- .site-banner-content -->