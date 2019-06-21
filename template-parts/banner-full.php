<div class="site-banner-content banner-custom-header home product">
	<!-- Home banner page -->
	<div class="site-banner-media home product">

        <!-- video -->
        <!-- header-video-container only here to get the ending video image in -->
        <div id="header-video-container"> 
            <video autoplay muted preload="metadata" id="myVideo" class="banner-video" <?php echo 'poster="'. get_image("poster4k", "full", null, "src") .'"'?>>
                <source src="<?php bloginfo('template_url'); ?>\src\assets\images\HeaderVideo4k-4KMS-6mbps.mp4" type="video/mp4">
            </video>
        </div>

        <!-- grid overlay -->
        <img class="grids" src="<?php bloginfo('template_url'); ?>\src\assets\images\svgGrid.png">

        <div class="site-banner-header-container">
            <?php if(is_page('Critical Response Group')) { ?>
                <div class="site-banner-header banner-description home product">
                    
                                    
                    <div class="center-home-logo">
                        <?php get_image("CRG Logo", "full", "center-home-logo-img");?>
                    </div>
                    <h1 class="banner-title home product">
                        <?php the_title(); ?>
                    </h1>
                    <strong>We work today to save lives tomorrow</strong>
                    <a href="contact" class="yellow-button yellow-button-solid">Contact</a>
                    <div class="header-background">
                        <svg preserveAspectRatio="none" viewBox="0 0 100 200">
                            <polygon points="50,100 100,0 0,0" opacity="1"></polygon>
                            <polygon points="50,100 100,0 50,-100 0,0" opacity="0.5"></polygon>
                        </svg>
                    </div>
                </div>

                <div class="header-promo">
                    <a href="https://www.facebook.com/114288853688/posts/10157443684828689?sfns=mo"></a>
                    <span>As featured on:</span>
                    <img src="<?php bloginfo('template_url'); ?>\src\assets\images\nightlynews-promo.jpg" alt="Critical Response Group as featured on NBC Nightly News"/>
                </div>
                <!-- end if -->
            <?php }; ?> 
        </div>  
    </div> 
</div><!-- .site-banner-content -->