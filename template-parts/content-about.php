<div class="story-container overflow">
    <div class="first-container content-large">
        <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                    <div class="align-left animation-element slide-right">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; 
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </p>
    </div>

    <div class="mtt-container" id="about-mtt">
		<div class="mtt-header align-center">
			<!-- get the post for meet the team  -->
			<?php $meet_the_team = get_page_by_title('meet the leadership team', OBJECT, 'post') ?>

			<h2 class="home mtt header yellow blue-line blue-line-center"><?php echo $meet_the_team->post_title; ?></h2>
			<p class="home paragraph align-left content"><?php echo $meet_the_team->post_content; ?></p>
		</div>
		<div class="mtt-slider-container">
			<div class="background-image" <?php echo "style='background-image: url(".get_the_post_thumbnail_url($meet_the_team->ID).");'"?>></div>
			<div class="mtt-slider">
				<?php get_template_part('template-parts/card', 'team'); ?>
			</div>
		</div>
	</div>
</div>