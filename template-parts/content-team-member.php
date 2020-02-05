<?php 
    $post_category = get_the_category(get_the_ID());
    $advisors = ($post_category[0]->name === 'advisors' ? true : false);
?>

<?php if( $advisors ) { ?> <div class="full-image advisor"> <?php } else { ?> <div class="full-image"> <?php }; ?>
    <div class="team-member-bg">
        <?php the_post_thumbnail("large") ?>
    </div>

    <div class="<?php ( !$advisors ) ? print "team-member-desc" : print "advisor-desc" ?> animation-element slide-right" >
        <h1 class="team-member-h1 yellow-line">
            <?php the_title() ?>
        </h1>
        <div class="team-member-contact">

            <!-- TITLE -->
            <?php if(metadata_exists('post', get_the_ID(), 'title')) { ?>
                <strong>
                    <?php echo get_post_meta(get_the_ID(), "title", true); ?>
                </strong>
            <?php } else { ?> 
                <strong>Critical Response Group</strong>
            <?php }; ?>

            <!-- EMAIL -->
            <?php if(metadata_exists('post', get_the_ID(), 'email')) { ?>
                <a href="mailto:">
                    <i class="fas fa-envelope"></i>
                    <?php echo get_post_meta(get_the_ID(), "email", true); ?>
                </a>
            <?php } else { ?> 
                <a href="mailto:">
                    <i class="fas fa-envelope"></i>
                    contact@crgplans.com
                </a>
            <?php }; ?>

            <!-- PHONE -->
            <?php if(metadata_exists('post', get_the_ID(), 'phone')) { 
                $phone = get_post_meta(get_the_ID(), "phone", true); ?>
                <a href="tel: <?php telephoneFormatter($phone); ?> ">
                    <i class="fas fa-phone"></i>
                    <?php telephoneFormatter($phone); ?>
                </a>
            <?php } else { ?> 
                <a href="tele:">
                    <i class="fas fa-phone"></i>
                    (732) 779-4393 
                </a>
            <?php }; ?>

            <!-- SOCIAL MEDIA -->
            <div class="team-member-social">
                <ul>
                    <!-- Webpage -->
                    <?php if(metadata_exists('post', get_the_ID(), 'website')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "website", true); ?>" target="_blank">
                                <i class="fas fa-globe"></i>
                            </a>
                            <span class="link-text">Personal Profile</span>
                        </li>   
                    <?php }; ?>

                    <!-- facebook -->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <span class="link-text">Facebook</span>
                        </li>   
                    <?php }; ?>

                    <!-- linkedin -->
                    <?php if(metadata_exists('post', get_the_ID(), 'linkedin')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "linkedin", true); ?>" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <span class="link-text">LinkedIn</span>
                        </li>   
                    <?php }; ?>

                    <!-- instagram -->
                    <?php if(metadata_exists('post', get_the_ID(), 'instagram')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "instagram", true); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <span class="link-text">Instagram</span>
                        </li>   
                    <?php }; ?>

                    <!-- twitter-->
                    <?php if(metadata_exists('post', get_the_ID(), 'twitter')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "twitter", true); ?>" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <span class="link-text">Twitter</span>
                        </li>   
                    <?php }; ?>

                    <!-- youtube-->
                    <?php if(metadata_exists('post', get_the_ID(), 'youtube')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "youtube", true); ?>" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <span class="link-text">YouTube</span>
                        </li>   
                    <?php }; ?>
                </ul>
            </div>

        </div>
        <?php if($post->post_content !== "") { ?>
            <div class="team-member-p">
                <div class="team-member-content">
                        <?php the_content(); ?>
                </div>
            </div>
        <?php }; ?>
    </div>
      
    <div class="team-member-post-navigation">
        <?php
            the_post_navigation( array(
                'prev_text' => '<div class="nav-previous"><span class="nav-subtitle">' . esc_html__( 'Previous Post', 'foundation' ) . '</span> <span class="nav-title">%title</span></div>',
                'next_text' => '<div class="nav-next"><span class="nav-subtitle">' . esc_html__( 'Next Post', 'foundation' ) . '</span> <span class="nav-title">%title</span></div>',
            ) );
        ?>
    </div>
</div>