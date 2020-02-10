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
        $cat_name = "print_features";
        $cat_bullet_name = "print_bullets";
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

        <div class="grid-container">
            <?php 
                the_content();
            ?>
        </div>

        <div class="product-menu">

        </div>
        
        <?php get_template_part('template-parts/content', 'map'); ?>
        
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

            <div class="grid-x align-center grid-padding-x">
                <div class="cell small-12">
                    <h3 class="yellow text-center">Basic one-sided print pricing and sizing chart</h3>
                    <p class="text-center">Use this chart to compare sizes, prices, and features of our print products</p>
                </div>
            </div>

            <div class="grid-x grid-padding-x">

                <div class="cell small-12 large-6">
                    <?php get_image("sizing-chart", 'large') ?>
                </div>

                <div class="cell small-12 large-6">
                    <div>
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
        </div> <!-- end grid-container -->
    <?php }; ?>

    <?php wp_reset_postdata();?>

</main><!-- #main -->