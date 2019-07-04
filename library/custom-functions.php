<?php

// Global variables
// set the page id here
$faq_page = 114;
$media_page = 34;
$contact_page = 159;
$product_page = 44;
$client_page = 40;
$partner_page = 42;
$story_page = 36;


// adding widget area
function crg_widgets() {
	register_sidebar( array(
		'name'          => "Search and Filter",
		'id'            => 'search_filter',
		'description'   => "Space on media page for search and filter",
		'before_widget' => '<div class="search-filter">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
	register_sidebar( array(
		'name'          => "Client Slider",
		'id'            => 'client_slider',
		'description'   => "Slider for clients logo's",
		'before_widget' => '<div class="clients-slider">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => "Media Slider",
		'id'            => 'media_slider',
		'description'   => "Slider for social media posts",
		'before_widget' => '<div class="media-slider">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => "Footer Contact",
		'id'            => 'footer_contact',
		'description'   => "Contact information widget",
		'before_widget' => '<div class="contact-info">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => "Footer",
		'id'            => 'footer',
		'description'   => esc_html__( 'Displays in footer area.'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'crg_widgets' );

// this gives me the ability to add shortcode to widgets
add_filter('widget_text', 'do_shortcode');

/* New excerpt length of 120 words*/
function my_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');


// Next functions are for getting images from media library more easily
// These will allow me to put in a id or a name of the image and have it show up
function wp_get_attachment_by_post_name( $post_name ) {
	$args = array(
		'posts_per_page' => 1,
		'post_status' => 'inherit',
		'post_type'      => 'attachment',
		'title'          => $post_name,
	);

	$get_attachment = new WP_Query( $args );

	if ( $get_attachment->posts[0] )
		return $get_attachment->posts[0];
	else
	  	return false;
}

// how to use
// add the name of whatever image/video you want
// pick a size, if nothing is put then it will default to full size
// add in a class if so desired
// add "src" if src is desired instead of an image tag. Video only works with src
// true or false for $video
function get_image($attachment_id, $size=null, $class=null, $src=null, $video=false) {
	if($size == null) {
		$size="full";
	}
	// this is a quick check to see if value sent into $attachement_id is a int or string. The answer
	// to that will be my clue as to whether i am searching by name or id
	if(is_int($attachment_id)) {
		$image_attributes = wp_get_attachment_image_src($attachment_id, $size);
	} elseif(is_string($attachment_id)) {
		$image = wp_get_attachment_by_post_name($attachment_id);
		if($video) {
			$videoURL = wp_get_attachment_url($image->ID);
		} else {
			$image_attributes = wp_get_attachment_image_src($image->ID, $size);
		};		
	};
	
	$image_meta = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

	if(!$class == null) {
		$class=$class;
	}

	if ( $image_attributes && $src == null) {
		echo "<img class='".$class."' src='".$image_attributes[0]."' alt='".$image_meta."' />";
	} else if ($image_attributes && $src == "src") {
		return $image_attributes[0];
	} else if ($videoURL && $src == "src" && $video) {
		return $videoURL;
	};
}

// add a new function that allows me to edit the URL field of a read more button with custom fields on the post
// I have the link to the article in my bookmarks. will also need to look at Customizing the read more codex
function new_excerpt_more($more) {
	global $post;
	if (get_post_meta($post->ID, 'url', true)){
		return '... <div class="link-more"><a href="' .get_post_meta($post->ID, 'url', true). '">' . sprintf( esc_html__( 'Read More'), '<span class="screen-reader-text"> "' . get_the_title() . '"</span>' ) . '</a></div>';
	} else {
		return '... <div class="link-more"><a href="' . esc_url( get_permalink() ) . '">' . sprintf( esc_html__( 'Read More'), '<span class="screen-reader-text"> "' . get_the_title() . '"</span>' ) . '</a></div>';
	}
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_content_more($more) {
	global $post;
	if (get_post_meta($post->ID, 'url', true)){
		return '<div><a href="' .get_post_meta($post->ID, 'url', true). '" class="yellow-button-small">More<span class="screen-reader-text"> "' . get_the_title() . '"</span></a></div>';
	} else {
		return '<a href="' .get_permalink($post->ID). '" class="yellow-button-small">More<span class="screen-reader-text"> "' . get_the_title() . '"</span></a>';;
	}
}
add_filter('the_content_more_link', 'new_content_more');