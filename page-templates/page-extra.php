<?php

/* 
	Template Name: Extra Pages
	Description: Template for all none-main pages
*/

get_header('no'); 

// for use as a class
$slug = get_post_field( 'post_name', get_post() );
?>

<?php if(is_page($product_page)) {
	// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <h1 class="header yellow blue-line blue-line-center"><?php single_post_title(); ?></h1>
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php endwhile; //resetting the page loop

    wp_reset_query(); //resetting the page query ?>

    <div class="product-cards" data-equalizer>
        <?php get_template_part('template-parts/card', 'product');?>
    </div>
    	
<?php
} elseif(is_page('our-partners')) {
    get_template_part('template-parts/content', 'partners');
} elseif(is_page('advisors')) { ?>
    <h1 class="header blue"><?php the_title(); ?></h1>
    <?php get_template_part('template-parts/content', 'advisors'); ?>
<?php } else {
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
        <h1 class="header yellow blue-line blue-line-center"><?php single_post_title(); ?></h1>
        <div class="entry-content-page <?php echo $slug ?>">
            <div class="page-extra-container">
                <?php the_content(); ?> <!-- Page Content -->
            </div>
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
};

get_footer();

?>