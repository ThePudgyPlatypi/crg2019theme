<!-- <div class="absolute-wrapper"> -->
    <div class="site-banner-content banner-custom-header home product">
	<!-- Home banner page -->
	<div class="site-banner-media home product">
        <div id="header-video-container"> 
            <?php if (is_page('Critical Response Group')) { ?>
                <!-- video -->
                <!-- header-video-container only here to get the ending video image in -->
                
                <video autoplay muted preload="metadata" id="myVideo" class="banner-video" <?php echo 'poster="'. get_image("poster4k", "full", null, "src") .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\src\assets\images\HeaderVideo4k-4KMS-6mbps.mp4" type="video/mp4">
                </video>
            <?php } else { ?>
                <!-- <div class="story">  -->
                <div class="story">
                    <video autoplay loop muted class="banner-video" <?php echo 'poster="'. get_image("Corporate-Profile-e1550862641226", "full", null, "src") .'"'?>>
                        <source src="<?php bloginfo('template_url'); ?>\src\assets\images\Critical_Response_Group_Corporate_Profile.mp4" type="video/mp4">
                    </video>
                </div>
            <?php } ?>
        </div>
            
            <!-- grid overlay -->
            <img class="grids" src="<?php bloginfo('template_url'); ?>\src\assets\images\svgGrid.png">
            <div class="silver-border"></div>

            <div class="site-banner-header-container">
                <?php // if(is_page('Critical Response Group')) { ?>
                    <?php get_template_part( 'template-parts/site-banner' ); ?>

                    <div class="header-promo">
                        <a href="https://www.facebook.com/114288853688/posts/10157443684828689?sfns=mo"></a>
                        <span>As featured on:</span>
                        <img src="<?php bloginfo('template_url'); ?>\src\assets\images\nightlynews-promo.jpg" alt="Critical Response Group as featured on NBC Nightly News"/>
                    </div>
                    <!-- end if -->
                <?php // }; ?> 
            </div>
        </div> 
    </div> <!-- .site-banner-content -->
<!-- </div> -->