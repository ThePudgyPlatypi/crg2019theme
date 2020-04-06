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

                    <div class="grid-item advisor">
                        <a href="<?php the_permalink(); ?>">
                            <div class="img-container">
                                <?php the_post_thumbnail('team-thumbnail'); ?>
                            </div>
                            <strong> <?php if(get_the_title() !== "zzzfiller") { the_title(); } ?> </strong> 
                            <p><?php echo print_company_title(); ?></p>
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