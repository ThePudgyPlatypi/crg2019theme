<?php 
    // need to refactor this so it does not have to be hard coded in.
    $CRG_page = 46;
    $consultation_page = 48;
    // $training_page = 50;
    // $opsview = 409;
    
    if(is_page($CRG_page)) {
        $cat_name = "crg_features";
        $cat_bullet_name = "crg_bullets";
    } elseif (is_page($consultation_page)) {
        $cat_name = "consultation_feature";
        $cat_bullet_name = "consultation_bullets";
    };
    // } elseif (is_page($training_page)) {
    //     $cat_name = "training_features";
    //     $cat_bullet_name = "training_bullets";
    // };

?>

<main id="primary" class="content-area" role="main">
    <?php if(is_page($consultation_page)) { ?>
        <div class="product-bullets-container">
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
                            <div class="v-center-table">
                                <div class="product-bullets-img switch" <?php echo "style='background-image: url(".get_the_post_thumbnail_url(get_the_ID()).");'" ?>></div>
                                <div class="product-bullet-p-container switch-p"><?php echo the_content(); ?></div>
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
    <?php } elseif(is_page($CRG_page)) { ?>
        <div class="crg-header">

            <h1 class="crg-header-h1 blue yellow-line yellow-line-center">
                <?php echo get_the_title(); ?>
            </h1>

            <a href="#start" class="blue-button">Learn More</a>

        </div><!-- .site-banner-header -->
    <?php }; ?>


    <?php 
    $argsFeatures = array(
        'category_name' => $cat_name,
        'orderby'=>'date',
        'order' => 'DESC'
    );

    $my_query2 = new WP_Query( $argsFeatures );
    $counter2 = 0;

    while ( $my_query2->have_posts() ) : $my_query2->the_post();
        if($counter2 % 2) { ?>
            <div class="feature-left-container">
                <div class="width-container">
                    <div class="img-container-left animation-element slide-left">
                        <div class="overlay-nocolor product-grey-gradient"></div>
                        <?php echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img')); ?>
                    </div>
                    <div class="text-container-left animation-element slide-right">
                        <h2 class="yellow float-left shared-feature-h2"><?php echo $post->post_title ?></h2>
                        <p class="text-block-left"><?php echo $post->post_content ?></p>
                        <a href="#contact" class="yellow-button">Contact</a>
                    </div>
                </div>
            </div>
        <?php } else { ?> 
            <div class="feature-right-container" <?php if($counter2 == 0) { echo "id='start'"; } ?>>
                <div class="width-container">
                    <div class="text-container-right animation-element slide-left">
                        <h2 class="blue float-right shared-feature-h2"><?php echo get_the_title(); ?></h2>
                        <p class="text-block-right"><?php echo $post->post_content ?></p>
                        <a href="#contact" class="yellow-button">Contact</a>
                    </div>
                    <div class="img-container-right animation-element slide-right">
                        <div class="overlay-nocolor product-white-gradient"></div>
                        <?php echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img')); ?>
                    </div>
                </div>
            </div>
        <?php } 
        $counter2++;
    endwhile; 
    wp_reset_postdata();?>

</main><!-- #main -->