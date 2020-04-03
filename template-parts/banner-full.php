<div class="site-banner-content banner-custom-header home product">
<!-- Home banner page -->
<div class="site-banner-media home product">
    <div id="header-video-container"> 
        <?php if (is_page('Critical Response Group')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
            <video autoplay muted preload="metadata" id="myVideo" class="banner-video" data-object-fit="cover" <?php echo 'poster="'. get_the_post_thumbnail_url() .'"'?>>
                <source src="<?php bloginfo('template_url'); ?>/dist/assets/images/HeaderVideo1080-veryfast.mp4" type="video/mp4">
            </video>
        <?php } else if (is_page('about')) { ?>
            <video autoplay loop muted preload="metadata" id="myVideo" class="banner-video" poster="<?php echo get_the_post_thumbnail_url() ?>">
                <source src="<?php bloginfo('template_url'); ?>/dist/assets/images/Critical_Response_Group_About-Us.mp4" type="video/mp4">
            </video>
        <?php } else {
            get_the_post_thumbnail();            
        } ?>
    </div>
        
        <!-- grid overlay -->
        <?php if(is_front_page()) { ?>
            <img class="grids" src="<?php bloginfo('template_url'); ?>/dist/assets/images/svgGrid.png">
        <?php } ?>
        
        <div class="silver-border"></div>

        
        <div class="site-banner-header-container">
                <?php get_template_part( 'template-parts/site-banner' ); ?>
                <?php if(is_front_page()) { ?>
                    <div class="header-promo">
                        <a href="https://www.facebook.com/114288853688/posts/10157443684828689?sfns=mo"></a>
                        <span>As featured on:</span>
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/nightlynews-promo.jpg" alt="Critical Response Group as featured on NBC Nightly News"/>
                    </div>
                <?php } ?>
        </div>
        
    </div> 
</div> <!-- .site-banner-content -->