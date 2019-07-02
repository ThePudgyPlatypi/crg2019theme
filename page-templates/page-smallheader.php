<?php

/* 
	Template Name: Small header
	Description: Template for FAQ
*/

get_header('small');

// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

        <div class="entry-content-page">
            <?php if(is_page("Collaborative Response Graphics") || is_page("Consulting Service, Policy Development, and Training")) { 
	            get_template_part('template-parts/content', 'product');
            } else { ?>
                <div class="small-header-none-product-container">
                   <?php the_content();  ?>
                </div>
            <?php }; ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query

get_footer('custom'); 

?>