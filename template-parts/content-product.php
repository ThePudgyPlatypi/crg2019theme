<?php 
    // need to refactor this so it does not have to be hard coded in.
    $CRG_page = 46;
    $consultation_page = 48;
    // $opsview = 409;
    
    if(is_page($CRG_page)) {
        $cat_name = "crg_features";
        $cat_bullet_name = "crg_bullets";
    } elseif (is_page($consultation_page)) {
        $cat_name = "consultation_feature";
        $cat_bullet_name = "consultation_bullets";
    } elseif (is_page("product-printing-services")) {
        $cat_name = "product_features";
        $cat_bullet_name = "product_bullets";
    };

?>

<main id="primary" class="content-area product" role="main">
<?php if(is_page($consultation_page)) { ?>
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
<?php } elseif(is_page($CRG_page)) { ?>
    <p class="yellow-line yellow-line-center"></p>
    <div class="grid-container">
        <?php 
            the_content();
        ?>
            
    </div>

    <!-- //interactive map -->
    <div class="grid-container">
        <div class="grid-x">
            <iframe class="alexMap" src="http://alex.map" frameborder="0"></iframe>
        </div>
    </div>

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
            <div class="full-width-container">
                <div class="full-width-bg"></div>
                <div class="feature-left-container">
                    <div class="width-container">
                        <div class="img-container-left animation-element slide-left">
                            <div class="overlay-nocolor product-grey-gradient"></div>
                            <?php echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img')); ?>
                        </div>
                        <div class="text-container-left animation-element slide-right">
                            <h2 class="yellow shared-feature-h2 blue-line"><?php echo $post->post_title ?></h2>
                            <p class="text-block-left"><?php echo $post->post_content ?></p>
                            <a href="#contact" class="yellow-button" data-smooth-scroll>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?> 
            <div class="full-width-container">
                <!-- <div class="full-width-bg"></div>    -->
                <div class="feature-right-container" <?php if($counter2 == 0) { echo "id='start'"; } ?>>
                    <div class="width-container">
                        <div class="text-container-right animation-element slide-left">
                            <h2 class="blue shared-feature-h2 yellow-line"><?php echo get_the_title(); ?></h2>
                            <p class="text-block-right"><?php echo $post->post_content ?></p>
                            <a href="#contact" class="yellow-button" data-smooth-scroll>Contact</a>
                        </div>
                        <div class="img-container-right animation-element slide-right">
                            <div class="overlay-nocolor product-white-gradient"></div>
                            <?php echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img')); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } 
        $counter2++;
        endwhile;  ?>

<?php } elseif(is_page("product-printing-services")) { ?>
        <p class="yellow-line yellow-line-center"></p>
        <div class="grid-container">
            <?php 
                the_content();
            ?>
        </div>
        
                
        <div class="grid-container">
            <div class="grid-x"><!-- // alex map -->
                <div class="cell small-12">
                    <p class="text-center">Use the interactive map to view videos of printed Collaboratives Response Graphics in use during emergency situations.</p>
                </div>
                <div class="cell small-12">
                    <iframe class="alexMap" src="http://alex.map" frameborder="0"></iframe>
                </div>
            </div>
        </div>
        
        <div class="spacer"></div>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12">
                    <h2 class="blue shared-feature-h2 yellow-line">Pricing and Sizing</h2>
                </div>
                <div class="cell small-12">
                    <p class="">Critical Response Group offers many different sizes to fit every application. From standard large format one-sided prints to ringed flipbooks and fold out maps.</p>
                </div>
            </div>
            <div class="grid-x align-middle align-center grid-padding-x">
                <div class="cell small-12 large-6">
                    <h3 class="yellow text-center">Basic one-sided print sizing chart</h3>
                    <p class="text-center">Use this chart to compare sizes of prints</p>
                    <?php get_image("sizing-chart", 'large') ?>
                </div>
                <div class="cell small-12 large-6">
                    <dl class="definition-list">
                        <dt>12x18 Large Format CRG</dt>
                        <dd>
                            <ul>
                                <li>One sided & dry erase lamination: $12.25/ea.</li>
                                <li>One sided with no lamination: $9.50/ea.</li>
                            </ul>
                        </dd>

                        <dt>24x36 Poster CRG</dt>
                        <dd>
                            <ul>
                                <li>One sided & dry erase lamination: $55.75/ea.</li>
                                <li>One sided with no lamination: $40.00/ea.</li>
                            </ul>
                        </dd>

                        <dt>36x48 Table Top CRG</dt>
                        <dd>
                            <ul>
                                <li>One sided & dry erase lamination: $83.75/ea.</li>
                                <li>One sided with no lamination: $67.50/ea.</li>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    <?php }; ?>

    <?php wp_reset_postdata();?>

</main><!-- #main -->