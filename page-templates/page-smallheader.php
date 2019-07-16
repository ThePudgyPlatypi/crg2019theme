<?php

/* 
	Template Name: Small header
	Description: Template for FAQ
*/

get_header('small');

// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

        <div class="entry-content-page">
            <?php if(is_page("collaborative-response-graphics") || is_page("consultation-development-training")) { ?>

                <?php get_template_part('template-parts/content', 'product'); ?>

            <?php } elseif(is_page("meet-the-team") ) { ?>

                <div class="small-header-none-product-container">
                    <div class="page-content yellow-line yellow-line-center">
                        <?php the_content(); ?>
                    </div>

                    <?php get_template_part('template-parts/content'); ?>

                </div>
            <?php } elseif(is_page("database") ) { ?>
                <div class="search-widget">
                    <?php dynamic_sidebar( 'search-all-widget' ); ?>
                </div>
                
                <div class="grid-container">
                    <div class="resource-wrapper">

                        <?php get_template_part('template-parts/content', 'block-resource'); ?>

                    </div>
                </div>

                <div class="post-widget-container">
                    <?php dynamic_sidebar( 'post-widgets' ); ?>
                </div>
            <?php } else { ?>
            
                <div class="small-header-none-product-container">
                <div class="page-content yellow-line yellow-line-center"></div>
                <?php the_content(); ?>
                    
            <?php }; ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php endwhile; //resetting the page loop

    wp_reset_query(); //resetting the page query

get_footer('custom'); 

?>