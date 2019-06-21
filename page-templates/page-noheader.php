<?php

/* 
	Template Name: No header
	Description: Template for FAQ
*/

get_header('small');

if(is_page($faq_page)) { ?>
	<div class="content-large FAQ-content">

		<?php get_template_part('template-parts/content', 'faq'); ?>

	</div> <!-- end of FAQ-content --> 
<?php 
} else {
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
};

get_footer('custom'); 

?>