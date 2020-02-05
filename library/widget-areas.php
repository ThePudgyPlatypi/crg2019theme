<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'team-menu-widgets',
				'name'          => __( 'Team Menu widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this Team menu container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'post-widgets',
				'name'          => __( 'Post widgets', 'foundationpress' ),
				'description'   => __( 'Section above posts page', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'search-all-widget',
				'name'          => __( 'Search All Widget', 'foundationpress' ),
				'description'   => __( 'Search widget that searchs all except content posts', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'author',
				'name'          => __( 'Author Widget', 'foundationpress' ),
				'description'   => __( 'Widget that displays author on each page.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
