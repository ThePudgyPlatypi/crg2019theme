<?php 
    // this will always get the ID of the current page instead of the post
    $featured_image= get_queried_object_id();
?>

<div class="half-header-container grid-container full collaborative-response-graphic" style="background-image: url(<?php echo get_the_post_thumbnail_url($featured_image, "full"); ?>)">
        <div class="overlay"></div>  
   
        <?php if (is_page('Collaborative Response Graphics')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
                <video autoplay muted loop preload="metadata" class="half-banner-video" <?php echo 'poster="'. get_the_post_thumbnail_url() .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\src\assets\images\CRG_map_Alex_VO.mp4" type="video/mp4">
                </video> 
        <?php } else if (is_page('Consulting Service, Policy Development, and Training')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
                <video autoplay muted loop preload="metadata" class="half-banner-video" <?php echo 'poster="'. get_the_post_thumbnail_url() .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\src\assets\images\Crgtraining-720Gmail.m4v" type="video/mp4">
                </video> 
        <?php } ?>
        <div class="title">
            <h1 class="header yellow blue-line blue-line-center"><?php single_post_title(); ?></h1>
        </div>

        <?php print_r($featured_image); ?>
</div>
