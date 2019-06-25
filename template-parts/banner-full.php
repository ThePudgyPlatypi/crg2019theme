<div class="site-banner-content banner-custom-header home product">
	<!-- Home banner page -->
	<div class="site-banner-media home product">
        <?php if (is_page('Critical Response Group')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
            <div id="header-video-container"> 
                <video autoplay muted preload="metadata" id="myVideo" class="banner-video" <?php echo 'poster="'. get_image("poster4k", "full", null, "src") .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\src\assets\images\HeaderVideo4k-4KMS-6mbps.mp4" type="video/mp4">
                </video>
            </div>
        <?php } else { ?>
            <div class="story"> 
                <?php
                    $image = get_the_post_thumbnail($post->ID);
                    echo $image;
                ?>
            </div>
        <?php } ?>

        
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
                    <div class="social-media-menu">
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
                    </div>
                    <a href="contact" class="yellow-button yellow-button-solid">Contact</a>
                    <div class="header-background">
                        <svg preserveAspectRatio="none" viewBox="0 0 100 200">
                            <polygon points="50,100 100,0 50,-100 0,0" opacity="0.25"></polygon>
                            <polygon points="50,100 100,0 50,-100 0,0" opacity="0.5"></polygon>
                            <polygon points="50,100 100,0 0,0" opacity="1"></polygon>
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