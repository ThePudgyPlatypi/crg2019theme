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
</div>