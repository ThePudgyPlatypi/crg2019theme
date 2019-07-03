<div class="full-image grid-container full">
    <div class="team-member-bg full">
        <?php the_post_thumbnail("large") ?>
    </div>
    <div class="team-member-desc">
        <h1 class="team-member-h1 yellow-line">
            <?php the_title() ?>
        </h1>
        <div class="team-member-contact">
            <strong><?php echo get_post_meta(get_the_ID(), "title", true); ?></strong>
            <a href="mailto:">
                <i class="fas fa-envelope"></i>
                <?php echo get_post_meta(get_the_ID(), "email", true); ?>
            </a>
            <a href="tele:">
                <i class="fas fa-phone"></i>
                <?php echo get_post_meta(get_the_ID(), "phone", true); ?>
            </a>
        </div>
        <div class="team-member-p">
            <?php the_content() ?>
        </div>
    </div>
</div>