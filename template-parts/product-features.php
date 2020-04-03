<?php 
$product_page = "product-printing-services";

$argsFeatures = array(
    'category_name' => $cat_name,
    'orderby'=>'date',
    'order' => 'DESC'
);

$my_query2 = new WP_Query( $argsFeatures );
$counter2 = 0;

while ( $my_query2->have_posts() ) : $my_query2->the_post();
    $video_post = has_post_format('video');
    $title = str_replace(' ', '-', strtolower(get_the_title()));
    $price = get_post_meta( get_the_ID(), 'price', true);
    
    if($counter2 % 2) { ?>
        <div class="full-width-container" id="<?php print (str_replace(' ', '-', strtolower($title))); ?>">
            <div class="full-width-bg"></div>
            <div class="feature-left-container">
                <div class="width-container">
                    <div class="img-container-left animation-element slide-left">
                        <div class="overlay-nocolor product-grey-gradient"></div>
                        
                        <?php if( $video_post == '1' ) { ?>
                            <div class="video">
                                <?php
                                    $meta_key = 'featured_video_uploading';
                                    $meta_value = get_post_meta( get_the_ID(), $meta_key, true );
                                    if( $media = wp_get_attachment_url($meta_value)) {  // getting video here
                                        $image = '<video autoplay="" loop="loop" src="'.$media.'" style="max-width:100%;display:block;"></video>';
                                        echo $image;
                                    }
                                ?>
                            </div>
                         <?php } else {
                            echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img'));
                        } ?>

                    </div>
                    <div class="text-container-left animation-element slide-right">
                        <h2 class="yellow shared-feature-h2 blue-line"><?php echo $post->post_title ?></h2>
                        <p class="text-block-left"><?php echo $post->post_content ?></p>
                        <a href="#contact" class="yellow-button" data-smooth-scroll>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?> 
        <div class="full-width-container" id="<?php print (str_replace(' ', '-', strtolower($title))); ?>">
            <!-- <div class="full-width-bg"></div>    -->
            <div class="feature-right-container" <?php if($counter2 == 0) { echo "id='start'"; } ?>>
                <div class="width-container">
                    <div class="text-container-right animation-element slide-left">
                        <h2 class="blue shared-feature-h2 yellow-line"><?php echo get_the_title(); ?></h2>
                        <p class="text-block-right"><?php echo $post->post_content ?></p>
                        <a href="#contact" class="yellow-button" data-smooth-scroll>Contact Us</a>
                    </div>
                    <div class="img-container-right animation-element slide-right">
                        <div class="overlay-nocolor product-white-gradient"></div>

                        <?php if( $video_post == '1' ) { ?>
                            <div class="video">
                                <?php
                                    $meta_key = 'featured_video_uploading';
                                    $meta_value = get_post_meta( get_the_ID(), $meta_key, true );
                                    if( $media = wp_get_attachment_url($meta_value)) {  // getting video here
                                        $image = '<video autoplay="" loop="loop" src="'.$media.'" style="max-width:100%;display:block;"></video>';
                                        echo $image;
                                    }
                                ?>
                            </div>
                         <?php } else {
                            echo get_the_post_thumbnail(get_the_ID(), "large", array('class' => 'feature-img'));
                        } ?>
                
                    </div>
                </div>
            </div>
        </div>
    <?php } 
$counter2++;
endwhile;  ?>