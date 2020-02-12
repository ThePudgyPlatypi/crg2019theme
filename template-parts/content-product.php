<?php 
    // need to refactor this so it does not have to be hard coded in.
    $CRG_page = "collaborative-response-graphics";
    $consultation_page = "consultation-development-training";
    $product_page = "product-printing-services";
    
    if(is_page($CRG_page)) {
        $cat_name = "crg_features";
        $cat_bullet_name = "crg_bullets";
    } elseif (is_page($consultation_page)) {
        $cat_name = "consultation_feature";
        $cat_bullet_name = "consultation_bullets";
    } elseif (is_page($product_page)) {
        $cat_name = "print-features";
        $cat_bullet_name = "print-bullets";
    };

?>

<main id="primary" class="content-area product" role="main">
<?php if(is_page($consultation_page)) { 

    // use this instead of get_template_part() so that variables pass thru. Needs to be setup like this.

    // products bullets
    include( locate_template( 'template-parts/product-bullets.php', false, false ) );

    // product features
    include( locate_template( 'template-parts/product-features.php', false, false ) );

} elseif(is_page($CRG_page)) { ?>
    <p class="yellow-line yellow-line-center"></p>
    <div class="grid-container">
        <?php 
            the_content();
        ?>
    </div>

    <?php include( locate_template( 'template-parts/product-features.php', false, false ) );

} elseif(is_page($product_page)) { ?>
        <p class="yellow-line yellow-line-center"></p>

        <div class="grid-container product-desc">
            <?php 
                the_content();
            ?>
        </div>

        <!-- Product menu -->
        <?php include( locate_template( 'template-parts/product-menu.php', false, false ) ); ?>
        
        <!-- interactive map -->
        <?php get_template_part('template-parts/content', 'map'); ?>
        
        <!-- // product features -->
        <?php include( locate_template( 'template-parts/product-features.php', false, false ) ); ?>

        <!-- // product pricing and sizing -->
        <?php include( locate_template( 'template-parts/product-pricing.php', false, false ) ); ?>

        <?php get_template_part('template-parts/product', 'contact'); ?>
        
    <?php }; ?>

    <?php wp_reset_postdata();?>

</main><!-- #main -->