<div class="site-banner-content banner-custom-header home product">
	<!-- Home banner page -->
	<div class="site-banner-media home product">
        <div <?php if (is_page('Critical Response Group')) { 
            echo 'class="site-banner-thumbnail home product"';
        } else {
            echo 'class="site-banner-thumbnail home product story-banner"';
        }; ?> title="<?php the_title_attribute(); ?>">
            
            
            
            <!-- grabbing post featured image  -->
            <!-- this is a placeholder for the video -->
            
            <!-- <img class="banner-image" src=">" alt="something" > -->
            <?php if (is_page('Critical Response Group')) { ?>
                <h2 class="yellow header-title-small logo-under-400"><?php the_title(); ?></h2>
                <?php get_template_part( 'template-parts/box', 'grid' ); ?>
                <div class="header-switch video">
                    <div id="video-container">
                        <video autoplay muted preload="metadata" id="myVideo" class="banner-image" <?php echo 'poster="'. get_image("poster4k", "full", null, "src") .'"'?>>
                            <source src="../wp-content/uploads/2019/06/headerfinal1080.m4v" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="header-switch mobile">
                    <?php 
                        $image = get_the_post_thumbnail($post->ID);
                        echo $image;
                    ?>
                </div>
            <?php } else { ?>
                <div class="story"> 
                    <?php
                        $image = get_the_post_thumbnail($post->ID);
                        echo $image;
                    ?>
                </div>
            <?php } ?>
            

        </div>

        <!-- conditional statement to switch from social media icons to a quote  -->
        <?php if(is_page('Story')) { ?>
            <!-- <div class="quote over-400">
                <blockquote>
                    This is a quote of inspiration that is very much so 
                    inspirational and amazing.
                </blockquote>
            </div> -->
        <?php } else if (is_page('Critical Response Group')) { ?>
            <div class="social-media-nav home">
                <?php 
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
                ?>
            </div> <!-- .social-media-nav -->
        <?php }; ?>
	</div>

	<!-- Cutom header text  -->
    <?php if(is_page('Critical Response Group')) { ?>
        <div class="site-banner-header banner-description home product">
                            
            <div class="header-change over-400">
                <div class="center-home-logo">
                    <?php get_image("CRG Logo", "full", "center-home-logo-img");?>
                </div>
                <h1 class="entry-title site-description home product">
                    <?php the_title(); ?>
                </h1>
                <strong>We work today to save lives tomorrow</strong>
            </div>

            <div class="header-change logo-under-400">
                <!-- CRG Logo -->
                <?php get_image("CRG logo", "full"); ?>
                
            </div>

            <a href="products" class="yellow-button yellow-button-solid">Products</a>
            <a href="contact" class="yellow-button yellow-button-solid">Contact</a>

        </div>
        
        <div class="header promo">
            <a href="https://www.facebook.com/114288853688/posts/10157443684828689?sfns=mo"></a>
            <span>As featured on:</span>
            <img src="video\nightlynews-promo.jpg" alt="Critical Response Group as featured on NBC Nightly News"/>
        </div><!-- .site-banner-header -->
    <?php }; ?>
    
</div><!-- .site-banner-content -->