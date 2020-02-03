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

// /* New excerpt length of 120 words*/
// function my_excerpt_length($length) {
// 	return 30;
// }
// add_filter('excerpt_length', 'my_excerpt_length');

function edit_excerpt_content($text) {
	$raw_excerpt = $text;
    if ( '' == $text ) {
        //Retrieve the post content.
        $text = get_the_content(''); 
        //remove shortcode tags from the given content.
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
     
        //Regular expression that strips the header tags and their content.
        $regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
        $text = preg_replace($regex,'', $text);
     
        /***Change the excerpt word count.***/
        $excerpt_word_count = 30; //This is WP default.
        $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
         
        /*** Change the excerpt ending.***/
        $excerpt_end = '[...]'; //This is the WP default.
        $excerpt_more = apply_filters('excerpt_more', '<br />' . $excerpt_end);
         
        $excerpt = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	
	return apply_filters('wp_trim_excerpt', $excerpt, $raw_excerpt);
}
add_filter('get_the_excerpt', 'edit_excerpt_content', 5);

// Next functions are for getting images from media library more easily
// These will allow me to put in a id or a name of the image and have it show up
function wp_get_attachment_by_post_name( $post_name ) {
	$args = array(
		'posts_per_page' => 1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'title'          => $post_name,
	);

	$get_attachment = new WP_Query( $args );
	
	if ( is_archive() && $get_attachment->posts[1] ) {
		return $get_attachment->posts[1];
	} elseif ( $get_attachment->posts[0] ) {
		return $get_attachment->posts[0];
	} else {
		return false;
	}
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
		$url = $image_attributes[0];
		echo $url;
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


// pulled from dyad theme
if ( ! function_exists( 'dyad_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function dyad_posted_on() {
			$byline = esc_html__( 'Posted by', 'crg_2019' ) . ' <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

		echo '<div class="posted-info"><span class="byline">' . $byline . '</span> ' . esc_html_x( 'on', 'date published', 'dyad' ) . ' <span class="posted-on">' . $posted_on . '</span></div>'; // WPCS: XSS OK.

		edit_post_link( esc_html__( 'Edit', 'dyad' ), '<div class="edit-link">', '</div>' );

	}
endif;


if ( ! function_exists( 'dyad_entry_meta' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function dyad_entry_meta() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() || 'resources' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', 'dyad' ) );
			if ( $categories_list && dyad_categorized_blog() ) {
				echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
			}
		}
	}
endif;


if ( ! function_exists( 'dyad_post_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function dyad_post_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() || 'resources' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', '' );
			if ( $tags_list ) {
				echo '<footer class="entry-footer"><div class="tags-links">' . $tags_list . '</div></footer>'; // WPCS: XSS OK.
			}
		}
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function dyad_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dyad_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dyad_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dyad_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dyad_categorized_blog should return false.
		return false;
	}
}

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );


// add in custom post type to standard loop query
function query_post_type($query) {
	if( is_archive() && (is_category() || is_tag()) && empty( $query->query_vars['suppress_filters'] ) ) {
		$post_type = get_query_var('post_type');
		if($post_type)
			$post_type = $post_type;
		else
			$post_type = array('post','attachment','resources');
		$query->set('post_type',$post_type);
		return $query;
	}
}
add_filter('pre_get_posts', 'query_post_type');

//remove categories from search
function exclude_category_from_search($query) {

	if( is_admin() ) {
		return;
	} elseif ( is_search() && $query->is_main_query() ) {
		$post_type = array('post','resources');

		$dash = "-";
		$content = get_cat_ID('content');
		$clients = get_cat_ID('clients');
		$faq_tops = get_cat_ID('FAQ Topics');
		$faq_gen = get_cat_ID('General Questions');
		$faq_prod = get_cat_ID('Product Questions');
		$faq_spec = get_cat_ID('Specific Questions');
		$partners = get_cat_ID('partners');
		$product = get_cat_ID('product');
		$consult_bullets = get_cat_ID('Consultation Bullets');
		$consult_features = get_cat_ID('Consultation Features');
		$crg_bull = get_cat_ID('CRG Features');
		$features = get_cat_ID('CRG Bullets');
		$team = get_cat_ID('team members');
		$uncat = get_cat_ID('uncategorized');

		$crg_posts = get_cat_ID('crg_post');
		$database = get_cat_ID('database');

		$cat_exclude = array($dash.$content, 
								$dash.$clients, 
								$dash.$faq_tops, 
								$dash.$faq_gen, 
								$dash.$faq_prod,
								$dash.$faq_spec, 
								$dash.$partners, 
								$dash.$product, 
								$dash.$consult_bullets, 
								$dash.$consult_features, 
								$dash.$features, 
								$dash.$team, 
								$dash.$uncat
							);
		
		$cat_include = array($crg_posts, $database);
		
		$cat_exclude_string = implode(",", $cat_exclude);
		// print_r($cat_exclude_string);
		$query->set('cat', $cat_exclude_string);
		// $query->set('post_type', $post_type);
	}
}
add_filter('pre_get_posts','exclude_category_from_search');

//php in text widget
function php_execute($html){
	if(strpos($html,"<"."?php")!==false){ 
		ob_start(); 
		eval("?".">".$html);
		$html=ob_get_contents();
		ob_end_clean();
	}

	return $html;
}
add_filter('widget_text','php_execute',100);

add_filter('jpeg_quality', function($arg){return 100;});

// format phone number - found on stack overflow
function telephoneFormatter($phone) {
	print preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phone). "\n";
}


// adding in shortcode to take care of small blue buttons on link posts
function formatLinkSmallButton($atts = [], $content = null, $tags = '') {

	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);
	// override default attributes with user attributes
    $link_atts = shortcode_atts([
		'url' => 'https://www.crgplans.com',
		'color' => 'blue',
		'text' => 'Visit'
	], $atts, $tag);

	if($link_atts['color'] === 'yellow') {
		$class = 'yellow-button-small';
	} else {
		$class = 'small-button';
	}
	
	$o = '<p><a href="'. esc_html__($link_atts['url'], 'small_button') .'" class="'. esc_html__($class) .'" target="_blank" rel="noopener noreferrer">'.esc_html__($link_atts['text'], 'small_button').'</a></p>';

	return $o;
	// echo get_post_meta($postID, "url", true);
}

// shortcode to add buttons
function small_button_shortcodes_init() {
	add_shortcode('small_button', 'formatLinkSmallButton');
}
add_action('init', 'small_button_shortcodes_init');

// filter just iframes on post format video preview
function wpse_media_types( $types )
{
   return ['video', 'embed', 'iframe' ];
}

function videoFilter($content) {
	if (has_post_format('video') && !is_single()) {
		// Get the avialable media items from the content
		add_filter( 'media_embedded_in_content_allowed_types', 'wpse_media_types' );
		$media = get_media_embedded_in_content( $content );
		remove_filter( 'media_embedded_in_content_allowed_types', 'wpse_media_types' );

		// Only use the first media item if available 
		if( $media ) {
        	$content = array_shift( $media );   
			return $content;
		}
	} else {
		return $content;
	}
}

add_filter('the_content', 'videoFilter');

// get post by slug name
function get_post_by_slug($slug){
    $posts = get_posts(array(
            'name' => $slug,
            'posts_per_page' => 1,
            'post_type' => 'product',
            'post_status' => 'publish'
    ));
    
    if(! $posts ) {
        throw new Exception("NoSuchPostBySpecifiedID");
    }

    return $post[0];
}