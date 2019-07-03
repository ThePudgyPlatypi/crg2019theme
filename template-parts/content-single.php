<?php
/**
 * Template part for displaying single posts.
 *
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(in_category('team-members')) { 
		get_template_part("template-parts/content", "team-member");
	} else {
		the_content(); ?>
	<?php } ?>
</article><!-- #post-## -->

