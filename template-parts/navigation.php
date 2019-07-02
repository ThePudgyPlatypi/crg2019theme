<!-- #masthead NAVIGATION -->
<header id="masthead" class="site-header nav home" role="banner">
    <div class="grid-container full">

        <div class="desktop-nav" id="mobile-switch">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <!-- CRG Logo -->
                    <?php get_image("CRG Logo", "full"); ?>
                </a>
            </div><!-- .site-branding -->
            <nav class="main-navigation" role="navigation">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container_class' => 'primary-menu',
                ) ); ?>
            </nav>
        </div>

        <div class="mobile-nav"> 
            <div class="nav-container" data-responsive-toggle="nav-bar" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle></button>
            </div>

            <nav class="mobile-menu vertical menu" data-animate="slide-in-up slide-out-down" id="nav-bar" role="navigation">
                <?php foundationpress_mobile_nav(); ?>
            </nav>
        </div>
    </div>
    
</header>
			<!-- #masthead NAVIGATION -->