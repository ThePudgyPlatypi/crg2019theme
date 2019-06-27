<!-- #masthead NAVIGATION -->
<header id="masthead" class="site-header nav home" role="banner">
    <div class="grid-container full">
        <div class="desktop-nav">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <!-- CRG Logo -->
                    <?php get_image("CRG Logo", "full"); ?>
                </a>
            </div><!-- .site-branding -->

            <nav class="main-navigation" role="navigation">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_class' => 'primary-menu',
                ) ); ?>
            </nav>
        </div>
    </div>
    
    <?php get_template_part( 'template-parts/mobile', 'nav' ); ?>
    
</header>
			<!-- #masthead NAVIGATION -->