<div class="partner-page">
    <div class="hover-cards">
        <?php
        // LOOP FOR CHIEF PARTNERS

        $top = array(
            'post_type' => 'partners',
            'category_name' => 'partner_top',
        );

        // The Query
        $the_query = new WP_Query( $top ); ?>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-spaced align-middle card-relative" data-equalizer>
                <?php // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post(); ?>
                    <div class="cell small-12 medium-4" data-equalizer-watch>
                        <a class="hover-card-activator" href="<?php echo get_post_meta( get_the_ID(), 'url', true ) ?>" target="_blank">
                            <div class="card partner-card">
                                <div class="card-section">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="partner-name-hover"><?php the_title() ?></p>
                            </div>
                        </a>
                    </div>
                <?php }
                    wp_reset_postdata();
                } else {
                    // no posts found
                } ?>
            </div>
        </div>

        <?php
        // LOOP FOR CHIEF PARTNERS

        $chiefs = array(
            'post_type' => 'partners',
            'category_name' => 'partner_chiefs',
        );

        // The Query
        $the_query = new WP_Query( $chiefs ); ?>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-spaced align-middle card-relative" data-equalizer>
            <?php // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                <div class="cell small-12 medium-2" data-equalizer-watch>
                    <a class="hover-card-activator" href="<?php echo get_post_meta( get_the_ID(), 'url', true ) ?>" target="_blank">
                        <div class="card partner-card">
                            <div class="card-section">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p class="partner-name-hover"><?php the_title() ?></p>
                        </div>
                    </a>
                </div>
            <?php }
                wp_reset_postdata();
            } else {
                // no posts found
            } ?>

            </div>
        </div>

        <?php 
        //==========================================
        // LOOP FOR TECH PARTNERS
        $tech = array(
            'post_type' => 'partners',
            'category_name' => 'partner_tech',
        ); ?>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-spaced align-middle card-relative" data-equalizer>
            <?php
            // The Query
            $the_query = new WP_Query( $tech );
            // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { 
                        $the_query->the_post(); ?>
                    <div class="cell small-12 medium-3" data-equalizer-watch>
                        <a class="hover-card-activator" href="<?php echo get_post_meta( get_the_ID(), 'url', true ) ?>" target="_blank">
                            <div class="card partner-card">
                                <div class="card-section">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="partner-name-hover"><?php the_title() ?></p>
                            </div>
                        </a>
                    </div>
                <?php }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                } ?>
            </div>
        </div>

        <?php
        //==========================================
        // LOOP FOR DRONE PARTNERS and CONSULTANTS
        $drone = array(
            'post_type' => 'partners',
            'category_name' => 'partner_drone, partner_consultants',
        ); ?>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-spaced align-middle card-relative" data-equalizer>
            <?php
            // The Query
            $the_query = new WP_Query( $drone );
            // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { 
                        $the_query->the_post(); ?>
                    <div class="cell small-12 medium-3" data-equalizer-watch>
                        <a class="hover-card-activator" href="<?php echo get_post_meta( get_the_ID(), 'url', true ) ?>" target="_blank">
                            <div class="card partner-card">
                                <div class="card-section">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="partner-name-hover"><?php the_title() ?></p>
                            </div>
                        </a>
                    </div>
                <?php }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                } ?>
            </div>
        </div>
    </div><!-- hover-cards -->
</div><!-- partner-page -->