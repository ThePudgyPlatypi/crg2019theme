<div class="team-member-grid">

    <?php if(get_category_by_slug('senior_leadership')->category_count > 0) { ?>
        <div class="senior-grid">
            <?php // ===============================
            // SENIOR LEADERSHIP
            $seniors = array(
                'post_type' => 'team',
                'category_name' => 'senior_leadership',
                'meta_key' => 'order',
                'nopaging' => true,
                'order' => 'ASC',
                'orderby' => 'meta_value',
            );

            $the_query = new WP_Query($seniors);

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    $value = get_post_meta(get_the_ID(), "title", true); ?>

                    <div class="grid-item senior">
                        <a href="<?php the_permalink(); ?>">

                            <div class="img-container">
                                <?php the_post_thumbnail('team-thumbnail'); ?>
                            </div>

                            <strong> <?php the_title(); ?> </strong> 
                            <p><?php echo print_company_title(); ?></p>
                        </a>
                    </div>
                    <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>

                <?php }
            } else {
                // no posts found
            }

            /* Restore original Post Data */
            wp_reset_postdata(); 
            // END OF SENIORS ?>
        </div>
    <?php }; ?>
    
    <!-- styles in _links -->
    <div class="top-link-container" data-smooth-scroll>
        <a class="top-link yellow-button" href="#top">^ Top</a>
    </div>

    <!-- // Managers -->
    <?php if(get_category_by_slug('managers')->category_count > 0) { ?>
        <div class="divider yellow-line yellow-line-center" id="directors"></div>
        <div class="managers-grid">
            <?php             
            $managers = array(
                'post_type' => 'team',
                'category_name' => 'managers',
                'meta_key' => 'order',
                'nopaging' => true,
                'order' => 'ASC',
                'orderby' => 'meta_value',
            );

            $the_query = new WP_Query($managers);
                // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>

                    <div class="grid-item full-time">
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
            wp_reset_postdata();
            // END OF FULL TIMERS ?>
        </div>
    <?php }; ?>

    <!-- styles in _links -->
    <div class="top-link-container" data-smooth-scroll>
        <a class="top-link yellow-button" href="#top">^ Top</a>
    </div>

    <?php if(get_category_by_slug('full_timers')->category_count > 0) { ?>
        <div class="divider yellow-line yellow-line-center" id="employees"></div>
        <div class="full-timers-grid">
            <?php // ===============================
            // FULL TIMERS
            $fullTimers = array(
                'post_type' => 'team',
                'category_name' => 'full_timers',
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

                    <div class="grid-item full-time">
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
            wp_reset_postdata();
            // END OF FULL TIMERS ?>
        </div>
    <?php }; ?>

    <!-- styles in _links -->
    <div class="top-link-container" data-smooth-scroll>
        <a class="top-link yellow-button" href="#top">^ Top</a>
    </div>

    <?php if(get_category_by_slug('cartographers')->category_count > 0) { ?>
        <div class="divider yellow-line yellow-line-center"></div>
        <div class="interns-grid">
            <?php // ===============================
            // INTERNS/CARTOGRAPHERS
            $fullTimers = array(
                'post_type' => 'team',
                'category_name' => 'cartographers',
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

                    <div class="grid-item intern">
                        <a class="no-pointer">
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
            <!-- END OF INTERNS/CARTOGRAPHERS -->
        </div>
    <?php }; ?>

    <?php if(get_category_by_slug('advisors')->category_count > 0) { ?>
        <div class="divider yellow-line yellow-line-center" id="advisors"></div>
        <div class="advisors-grid">
            <?php // ===============================
            // INTERNS/CARTOGRAPHERS
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
            <!-- END OF INTERNS/CARTOGRAPHERS -->
        </div>
    <?php }; ?>

    <!-- styles in _links -->
    <div class="top-link-container" data-smooth-scroll>
        <a class="top-link yellow-button" href="#top">^ Top</a>
    </div>
</div>
	