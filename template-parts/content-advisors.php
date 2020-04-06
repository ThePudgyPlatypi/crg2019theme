<div class="post-list grid-container">
<?php if(get_category_by_slug('advisors')->category_count > 0) { ?>
        <div class="divider yellow-line yellow-line-center" id="advisors"></div>
        <div class="advisors-grid">
            <?php // ===============================
            // ADVISORS
            $fullTimers = array(
                'post_type' => 'team',
                'category_name' => 'advisors',
                'meta_key' => 'order',
                'nopaging' => true,
                'order' => 'ASC',
                'orderby' => 'meta_value',
            );

            $the_query = new WP_Query($fullTimers);
                // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>

                    <div class="cell small-12 post-item advisor">
                        <a class="grid-x post-wrapper-link no-pointer">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="img-container cell small-12 medium-4">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <div class="cell small-12 medium-8 post-content-wrapper">
                                    <strong>
                                        <?php the_title(); ?>
                                    </strong>
                                    <?php the_content(); ?>
                                </div>

                            <?php } else { ?>
                                <div class="cell small-12 post-content-wrapper">
                                    <strong>
                                        <?php the_title(); ?>
                                    </strong>
                                    <?php the_content(); ?>
                                </div>
                            <?php } ?>
                        </a>
                    </div>
                    <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
                } 
            } else {

            };

            /* Restore original Post Data */
            wp_reset_postdata(); ?>
            <!-- END OF ADVISORS -->
        </div>
    <?php }; ?>
</div>