<?php
    $args = array(
        'post_type' => 'post' ,
        'orderby' => 'date' ,
        'order' => 'DESC' ,
        'posts_per_page' => '4',
        'tag' => 'featured_faq',
        'paged' => get_query_var('paged'),
    );

$q = new WP_Query($args);

if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post(); ?>
        <div class="card-container-faq">

            <h3 class="card-title">
                <strong>
                    <?php the_title(); ?>
                </strong>
            </h3>

            <div class="card-paragraph align-left">
                <?php the_excerpt(); ?>
            </div>
        </div>
 <?php  } 
    wp_reset_postdata(); 
} ?>


