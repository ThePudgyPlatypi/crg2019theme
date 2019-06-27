<?php
// LOOP FOR CHIEF PARTNERS

$chiefs = array(
    'post_type' => 'partners',
    'category_name' => 'partner_chiefs',
);

// The Query
$the_query = new WP_Query( $chiefs ); ?>

<div class="grid-container">
    <div class="grid-x grid-margin-x" data-equalizer>
    <?php // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
        <div class="cell small-12 medium-4">
            <div class="card partner-card" data-equalizer-watch>
                <div class="card-section">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    <?php }
        wp_reset_postdata();
    } else {
        // no posts found
    } ?>

    </div>
</div>

<?php 
//==========================================
// LOOP FOR TECH PARTNERS
$tech = array(
    'post_type' => 'partners',
    'category_name' => 'partner_tech',
); ?>

<div class="grid-container">
    <div class="grid-x grid-margin-x" data-equalizer>
<?php
// The Query
$the_query = new WP_Query( $tech );
// The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) { 
            $the_query->the_post(); ?>
		<div class="cell small-12 medium-4">
            <div class="card partner-card" data-equalizer-watch>
                <div class="card-section">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
	<?php }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    } ?>
    </div>
</div>

<?php
//==========================================
// LOOP FOR TECH PARTNERS


//==========================================
// LOOP FOR TECH PARTNERS