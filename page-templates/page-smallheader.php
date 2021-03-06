<?php

/* 
	Template Name: Small header
	Description: Template for FAQ
*/

get_header('small');

// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

        <div class="entry-content-page">
            <?php if(is_page("collaborative-response-graphics") || is_page("consultation-development-training") || is_page("product-printing-services")) { ?>

                <!-- PRODUCTS CONTENT -->
                <?php get_template_part('template-parts/content', 'product'); ?>

            <?php } elseif(is_page("meet-the-team") ) { ?>

                <!-- MEET THE TEAM -->
                <div class="small-header-none-product-container">
                    <div class="page-content yellow-line yellow-line-center">
                        <?php dynamic_sidebar('team-menu-widgets') ?>
                        <?php the_content(); ?>
                    </div>

                    <?php get_template_part('template-parts/content'); ?>

                </div>
            <?php } elseif(is_page("database") ) { ?>
                
                <!-- RESOURCE CENTER -->
                <div class="search-widget">
                    <?php dynamic_sidebar( 'search-all-widget' ); ?>
                </div>
                <div class="entry-content-page full">
	                <div class="post-grid">
                        <div class="grid-container">
                            <div class="resource-wrapper">

                                <?php get_template_part('template-parts/content', 'block-resource'); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-widget-container">
                    <?php dynamic_sidebar( 'post-widgets' ); ?>
                </div>

            <?php } elseif(is_page("philanthropy") ) { ?>

                <div class="small-header-none-product-container">
                    <div class="page-content yellow-line yellow-line-center"></div>
                    
                    <?php the_content(); ?>

                    <?php get_template_part('template-parts/content', 'philanthropy'); ?>
                </div>

            <?php } else { ?>
                
                <!-- DEFAULT -->
                <div class="small-header-none-product-container">
                    <div class="page-content yellow-line yellow-line-center"></div>
                    <?php the_content(); ?>
                </div>
                    
            <?php }; ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php endwhile; //resetting the page loop

    wp_reset_query(); //resetting the page query

get_footer(); 

?>