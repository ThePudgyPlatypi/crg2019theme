<?php
    if(is_front_page()) {
        $url_prefix = "/products/product-printing-services/";
    } else {
        $url_prefix = "";
    }
?>

<div class="product-menu-container">
    <div class="product-menu" data-smooth-scroll>
        <div class="product-icon-container">
            <a <?php echo "href='".$url_prefix."#mappacks'" ?> >
                <div class="product-icon product-mappack"></div>
            </a>
            <span class="product-icon-name">MapPacks</span>
        </div>

        <div class="product-icon-container">
            <a <?php echo "href='".$url_prefix."#gopacks-for-first-responders'" ?> >
                <div class="product-icon product-geopack"></div>
            </a>
            <span class="product-icon-name">GoPacks</span>
        </div>
        
        <div class="product-icon-container">
            <a <?php echo "href='".$url_prefix."#commandpacks'" ?> >
                <div class="product-icon product-command-pack"></div>
            </a>
            <span class="product-icon-name">Command Packs</span>
        </div>

        <div class="product-icon-container">    
            <a <?php echo "href='".$url_prefix."#command-posters'" ?>>
                <div class="product-icon product-command-poster"></div>
            </a>

            <span class="product-icon-name">Command Posters</span>
        </div>
    </div>
</div>