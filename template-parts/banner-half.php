<?php 
    // this will always get the ID of the current page instead of the post
    $featured_image; 
    $featured_image = get_the_post_thumbnail_url(get_queried_object_id(), "full");
?>

<div class="half-header-container grid-container full collaborative-response-graphic" style="background-image: url(<?php 
        if(is_archive() ) {
            get_image("newsletter-banner-small", "full", null, "src");
        } else {
            echo $featured_image;
        }; ?>)">
        <div class="overlay"></div>  
        <?php if (is_page('Collaborative Response Graphics')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
                <video autoplay muted loop preload="metadata" class="half-banner-video" <?php echo 'poster="'. get_the_post_thumbnail_url() .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\dist\assets\images\CRG-Header-Video-1080p30-V2.webm" type="video/webm">
                    <source src="<?php bloginfo('template_url'); ?>\dist\assets\images\Crg-Header-Video-V2-1080p30.mp4" type="video/mp4">
                    Sorry your device does not support web video :(
                </video> 
        <?php } else if (is_page('Consulting Service, Policy Development, and Training')) { ?>
            <!-- video -->
            <!-- header-video-container only here to get the ending video image in -->
                <video autoplay muted loop preload="metadata" class="half-banner-video" <?php echo 'poster="'. get_the_post_thumbnail_url() .'"'?>>
                    <source src="<?php bloginfo('template_url'); ?>\dist\assets\images\Crgtraining-720Gmail.m4v" type="video/mp4">
                </video> 
        <?php } ?>
        <div class="title">
            <h1 class="header yellow blue-line blue-line-center"><?php if( is_archive() ) { single_cat_title(); } else { single_post_title(); }; ?></h1>
            <?php
                if( is_archive() ) {
                    the_archive_description( '<div class="cell small-12 text-center taxonomy-description">', '</div>' );
                };
            ?>
        </div>
</div>
