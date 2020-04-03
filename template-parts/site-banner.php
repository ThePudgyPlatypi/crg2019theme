<div class="site-banner-header banner-description home product">
    <div class="center-home-logo">
        <?php get_image("CRG Logo", "full", "center-home-logo-img");?>
    </div>
    <h1 class="banner-title home product">
        <?php the_title(); ?>
    </h1>
    <strong>
        <?php 
            $tagline = get_bloginfo('description'); 
            echo $tagline;
        ?>
        <span class="trademark-symbol">&#8482;</span>
    </strong>
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
    <a href="#contact" class="yellow-button yellow-button-solid" data-smooth-scroll>Contact</a>
    <div class="header-background">
        <svg preserveAspectRatio="none" viewBox="0 0 100 200">
            <polygon points="50,100 100,0 50,-100 0,0" opacity="0.25"></polygon>
            <polygon points="50,100 100,0 50,-100 0,0" opacity="0.5"></polygon>
            <polygon points="50,100 100,0 0,0" opacity="1"></polygon>
        </svg>
    </div>
</div>
