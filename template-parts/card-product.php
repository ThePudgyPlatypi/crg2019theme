<?php 
    $args = array(
        'post_type' => 'post' ,
        'order' => 'ASC' ,
        'posts_per_page' => '4',
        'category_name' => 'product_category',
        'paged' => get_query_var('paged'),
        'parent' => 0
    );

$q = new WP_Query($args);

if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();
    $index = $q->current_post + 1; ?>
    <?php if ($index <= 2) {  ?>
        <div class="card animation-element slide-left" data-equalizer-watch> 
    <?php  } else { ?>
        <div class="card animation-element slide-right" data-equalizer-watch>
    <?php } ?>
            <div class="card-section card-img">
                <?php the_post_thumbnail(); ?>
            </div>

            <h3 class="card-divider card-title">
                <strong>
                    <?php the_title(); ?>
                </strong>
            </h3>

            <div class="card-section card-paragraph">
                <?php the_content(); ?>
            </div>
        </div>
 <?php  } 
    wp_reset_postdata(); 
} ?>


