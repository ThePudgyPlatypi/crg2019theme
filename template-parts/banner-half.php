<?php $faq_page = 114; ?>
<div class="half-header-container align-center 
    <?php if (is_page($faq_page)) { echo ("faq"); }; ?>" 
    <?php if (is_page($faq_page)) { echo("style='background: #303030;'"); }
    else { echo("style='background-image: url(".get_image("Media BG", "full", null, "src").")'"); }; ?>>
    <?php get_template_part( 'template-parts/box', 'grid' ); ?>
        <?php if ( is_home() ) { ?>
            <div class="overlay"></div>
            <div class="title">
                <h1 class="header yellow blue-line blue-line-center"><?php single_post_title(); ?></h1>
                <!-- CRG Logo -->
                <?php get_image("CRG Logo", "large"); ?>
            </div>
        <?php 
        } elseif (is_page($faq_page)) { ?>
            <h1 class="header header-FAQ yellow blue-line blue-line-center align-center"><?php single_post_title(); ?></h1>
            <?php get_template_part('template-parts/card', 'faq');
        } ?>
</div>
