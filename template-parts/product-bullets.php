<div class="product-bullets-container yellow-line yellow-line-center">
    <ul class="product-bullets">
        <?php

        $argsBullets = array(
            'posts_per_page' => 3,
            'category_name' => $cat_bullet_name
        );
    
        $my_query = new WP_Query( $argsBullets );
        $counter = 0;
    
        while ( $my_query->have_posts() ) : $my_query->the_post();
        if($counter == 1) { ?>
            <li class="animation-element fade-in">
                <div class="v-center-container">
                    <div class="v-center-table switch-card">
                        <div class="product-bullets-img" <?php echo "style='background-image: url(".get_the_post_thumbnail_url(get_the_ID()).");'" ?>></div>
                        <div class="product-bullet-p-container"><?php echo the_content(); ?></div>
                    </div>
                </div>
            </li>
        <?php } elseif($counter == 2) { ?>
            <li class="animation-element fade-in">
                <div class="v-center-container">
                    <div class="v-center-table">
                        <div class="product-bullets-img" <?php echo "style='background-image: url(".get_the_post_thumbnail_url(get_the_ID()).");'" ?>></div>
                        <div class="product-bullet-p-container"><?php echo the_content(); ?></div>
                    </div>
                </div> 
            </li>
        <?php } else { ?>
            <li class="animation-element fade-in">
                <div class="v-center-container">
                    <div class="v-center-table">
                        <div class="product-bullets-img" <?php echo "style='background-image: url(".get_the_post_thumbnail_url(get_the_ID()).");'" ?>></div>
                        <div class="product-bullet-p-container"><?php echo the_content(); ?></div>
                    </div>
                </div>
            </li>
        <?php } 
        $counter++;
        endwhile;
        wp_reset_postdata(); ?>
    
    </ul> <!-- product-bulletse -->
</div> <!--Product bullets container  -->