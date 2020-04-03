<?php $args = array(
  'post_type' => 'post' ,
  'orderby' => 'date' ,
  'order' => 'DESC' ,
  'posts_per_page' => '-1',
  'category_name' => 'team-members',
  'paged' => get_query_var('paged')
); 

$q = new WP_Query($args);

if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post(); ?>
            <div class="card-container mtt">
                <div class="card-img mtt">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h3 class="card-title mtt">
                    <strong>
                        <?php the_title(); ?>
                        <br>
                        <span class="MTTtitle"><?php echo get_post_meta($post->ID, 'title', true); ?></span>
                    </strong>
                </h3>
                
                <div class="card-paragraph align-left mtt ">
                    <?php the_content(); ?>
                </div>
            </div>
    <?php  } ?>
<?php } ?>
