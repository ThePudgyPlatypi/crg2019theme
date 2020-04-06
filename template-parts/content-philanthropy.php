<div class="post-list grid-container">
    <div class="grid-X">
        <?php
        $nfp = array(
            'post_type' => 'post',
            'category_name' => 'donation-organizations',
            'meta_key' => 'order',
            'nopaging' => true,
            'order' => 'ASC',
            'orderby' => 'meta_value',
        );

        $the_query = new WP_Query($nfp);

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
                $value = get_post_meta(get_the_ID(), "title", true);
                $url = get_post_meta(get_the_ID(), "url", true); ?>

                <div class="cell small-12 post-item">
                    <a href="<?php echo $url ?>" class="grid-x post-wrapper-link">

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

                <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>

            <?php }
        } else {

        }

        wp_reset_postdata(); ?>
    </div>
</div>