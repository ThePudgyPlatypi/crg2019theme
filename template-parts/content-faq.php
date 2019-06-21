
<?php 
    // echo do_shortcode( '[searchandfilter taxonomies="search"]' );
    // Get FAQ top level parent category
    $FAQ_topic_parent = get_category(14);

    // Getting all direct children of FAQ_topic
    $FAQ_topics = get_categories( array(
        'parent' => $FAQ_topic_parent->cat_ID
    ));

    foreach ($FAQ_topics as $topic) { ?>
        <!-- display the topic names -->
        <h2 class="header blue yellow-line yellow-line-abs align-left"><?php echo($topic->name) ?></h2>

        <!-- start the loop for the questions under each topic -->
        <?php $args = array(
            'post_type' => 'post' ,
            'category__in' => $topic->cat_ID,
        );

        $questions = new WP_Query($args);
        if ( $questions->have_posts() ) {
            while ( $questions->have_posts() ) {
                $questions->the_post(); 
                $post_slug = get_post_field( 'post_name', get_post() ); ?>
                <div class="faq-question-container">
                    <div class="faq-link-to" <?php echo 'id="'.$post_slug.'"' ?>>
                        <a class="toggle" href="javascript:void(0);" >
                            <div class="question-table">
                                <div class="question-box align-center">
                                    <?php echo do_shortcode("[icon name='question']"); ?>
                                </div>

                                <div class="question-title">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                    <div class="answer-desc">
                        <?php the_content(); ?>
                    </div> 
                </div>
            <?php } 

        }
        wp_reset_postdata();
    }
?>