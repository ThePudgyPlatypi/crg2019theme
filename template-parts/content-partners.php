<div class="partners-wrapper">
    <div class="entry-media">
        <div class="entry-media-thumb" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_queried_object_id(), "full"); ?>); "></div>
    </div><!-- .entry-media -->

    <div class="entry-inner animation-element slide-right">
        <header class="entry-header">
            <?php the_title( '<h1 class="header yellow blue-line blue-line-center">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="partner-page">
                <div class="partner-cards">
                    <?php
                    // LOOP FOR CHIEF PARTNERS
                    $meta_value = 'order';

                    $top = array(
                        'post_type' => 'partners',
                        'category_name' => 'partners',
                        'nopaging' => true,
                        'meta_key' => $meta_value,
                        'order' => 'ASC',
                        'orderby' => 'meta_value_num',
                    );

                    // The Query
                    $the_query = new WP_Query( $top ); ?>

                    <div class="grid-container">
                        <div class="grid-x grid-margin-x" data-equalizer>
                            <?php // The Loop
                            if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post(); ?>
                                <div class="cell" data-equalizer-watch>
                                    <div class="card">
                                        <a class="hover-card-activator">
                                            <div class="card-section">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="card-divider"><?php the_title() ?></div>
                                        </a>
                                        <div class="card-section partner-desc">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                                wp_reset_postdata();
                            } else {
                                // no posts found
                            } ?>
                        </div>
                    </div>
                </div><!-- hover-cards -->
            </div><!-- partner-page -->
        </div><!-- .entry-content -->

    </div><!-- .entry-inner -->
</div>

<?php //echo get_post_meta( get_the_ID(), 'url', true ) ?>