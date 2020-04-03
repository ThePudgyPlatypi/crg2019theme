<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('small'); ?>

<div class="search-widget yellow-line yellow-line-center">
    <?php dynamic_sidebar( 'search-all-widget' ); ?>
</div>

<div class="entry-content-page full">
	<div class="post-grid">

        <div class="shadow-box main-container">
            <div class="white-background">
                <div class="grid-container keith-container">
                    <div class="grid-x grid-margin-x">
                        <div class="cell small-12 medium-2">
                            <div class="keith-image">
                                <?php get_image("KeithMTT", "thumbnail"); ?>
                            </div>
                            <div class="contact-keith">
                            
                                <ul>
                                    <li>
                                        <a href="mailto:kgermaine@crgplans.com">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </a>
                                        <span class="link-text">kgermaine@crgplans.com</span>
                                    </li>
                                    <li>
                                        <a href="tel:111-111-1111">    
                                            <i class="fas fa-phone"></i>
                                        </a>
                                        <span class="link-text">(111) 111-111</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <span class="link-text">LinkedIn</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <span class="link-text">Facebook</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell small-12 medium-4">
                            <div class="bio-container">
                                <h6>Meet Keith</h6>
                                <p>Keith has more than two decades of experience in law enforcement serving 
                                    in roles including SWAT team member and commander, emergency management deputy 
                                    coordinator, and chief of police. He has extensive experience serving as incident 
                                    commander during critical incidents including major crime scenes and natural disasters.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
			<?php if ( have_posts() ) : ?>

				<div class="post-wrapper">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
							<?php

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								$format = get_post_format() ? : 'standard';
								get_template_part( 'template-parts/content', $format );
							?>
					<?php endwhile; ?>
				</div>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
					<?php
					if ( function_exists( 'foundationpress_pagination' ) ) :
						foundationpress_pagination();
					elseif ( is_paged() ) :
					?>
						<nav id="post-nav">
							<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
							<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
						</nav>
				<?php endif; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			
	</div><!-- .posts -->

	<div class="post-widget-container">
		<?php dynamic_sidebar( 'post-widgets' ); ?>
	</div>

</div><!-- entry-content-page -->

<?php get_footer('custom');