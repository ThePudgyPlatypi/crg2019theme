<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('small'); ?>

<div class="search-widget yellow-line yellow-line-center">
    <?php dynamic_sidebar( 'search-all-widget' ); ?>
</div>

<div class="entry-content-page full">
	<div class="post-grid">

    <?php // Begin Sticky
        $sticky = get_option( 'sticky_posts' );
        rsort( $sticky );

        $args = array(
            'post__in'              => $sticky,
            'posts_per_page'        => 1,
            'ignore_sticky_posts'   => 1
            );

        $query = new WP_Query( $args );

        while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="shadow-box main-container">
                <div class="white-background">
                    <div class="grid-container newsletter-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-12">
                                <div class="ribbon-container">
                                    <a href="demos/pure-css-ribbon-banner.html#" id="ribbon"></a>
                                </div>
                                <h2 class="text-center blue yellow-line yellow-line-center">Latest Newsletter</h1>
                                <?php the_title("<h3 class='text-center'>","</h3>"); ?>
                                <span class="previous-newsletter-posts-link" data-smooth-scroll><a href="#previous-newsletter-posts">Previous Newsletters</a></span>
                            </div>
                            <div <?php post_class("cell small-12 sticky") ?> id="post-<?php the_ID(); ?>">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; 

        wp_reset_postdata();

        // End Sticky
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 
            'post__not_in'  => get_option( 'sticky_posts' ), 
            'category_name' => 'newsletter',
            'paged'         => $paged
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : ?>

            <div class="post-wrapper" id="previous-newsletter-posts">
                <?php /* Start the Loop */

                while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php
                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                            $format = get_post_format() ? : 'standard';
                            get_template_part( 'template-parts/content', $format );
                        ?>
                <?php endwhile; 

                wp_reset_postdata(); ?>
            </div>

            <?php /* Display navigation to next/previous pages when applicable */
            if ( function_exists( 'foundationpress_pagination' ) ) :
                foundationpress_pagination();
            elseif ( is_paged() ) :
            ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
                </nav>
            <?php endif; ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
			
	</div><!-- .posts -->

	<div class="post-widget-container">
		<?php dynamic_sidebar( 'post-widgets' ); ?>
	</div>

</div><!-- entry-content-page -->

<?php get_footer('custom');