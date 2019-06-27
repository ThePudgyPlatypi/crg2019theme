<?php

/* 
	Template Name: Extra Pages
	Description: Template for all none-main pages
*/
get_header('no'); ?>
<h1 class="header yellow blue-line blue-line-center"><?php single_post_title(); ?></h1>

<?php
if(is_page($product_page)) {
	// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
	get_template_part('template-parts/content', 'products');	
} elseif(is_page('Partners')) {
    get_template_part('template-parts/content', 'partners');
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