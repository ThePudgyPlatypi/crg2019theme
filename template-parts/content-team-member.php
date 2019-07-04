<div class="full-image">
    <div class="team-member-bg">
        <?php the_post_thumbnail("large") ?>
    </div>
    <div class="team-member-desc animation-element slide-right">
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
            <?php if(metadata_exists('post', get_the_ID(), 'phone')) { ?>
                <a href="tele:">
                    <i class="fas fa-phone"></i>
                    <?php echo get_post_meta(get_the_ID(), "phone", true); ?>
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
                    <!-- linkedin -->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>   
                    <?php }; ?>

                    <!-- facebook -->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>   
                    <?php }; ?>

                    <!-- instagram -->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>   
                    <?php }; ?>

                    <!-- twitter-->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>   
                    <?php }; ?>

                    <!-- youtube-->
                    <?php if(metadata_exists('post', get_the_ID(), 'facebook')) { ?>
                        <li>
                            <a href="<?php echo get_post_meta(get_the_ID(), "facebook", true); ?>">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>   
                    <?php }; ?>
                </ul>
            </div>

        </div>

        <div class="team-member-p">
            <div class="team-member-content">
                <?php the_content() ?>
            </div>
        </div>
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