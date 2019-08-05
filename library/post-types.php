<?php 

function custom_post_type_team() {
 
 // Set UI labels for Custom Post Type
     $labels = array(
         'name'                => _x( 'Team', 'Post Type General Name', 'CRG2019' ),
         'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'CRG2019' ),
         'menu_name'           => __( 'Team', 'CRG2019' ),
         'parent_item_colon'   => __( 'Parent Team', 'CRG2019' ),
         'all_items'           => __( 'All Team', 'CRG2019' ),
         'view_item'           => __( 'View Team', 'CRG2019' ),
         'add_new_item'        => __( 'Add New Team', 'CRG2019' ),
         'add_new'             => __( 'Add New', 'CRG2019' ),
         'edit_item'           => __( 'Edit Team', 'CRG2019' ),
         'update_item'         => __( 'Update Team', 'CRG2019' ),
         'search_items'        => __( 'Search Team', 'CRG2019' ),
         'not_found'           => __( 'Not Found', 'CRG2019' ),
         'not_found_in_trash'  => __( 'Not found in Trash', 'CRG2019' ),
     );
      
 // Set other options for Custom Post Type
      
     $args = array(
         'label'               => __( 'Team', 'CRG2019' ),
         'description'         => __( 'The Critical Response Group teams', 'CRG2019' ),
         'labels'              => $labels,
         // Features this CPT supports in Post Editor
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // You can associate this CPT with a taxonomy or custom taxonomy. 
         'taxonomies'          => array( 'category' ),
         /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */ 
         'hierarchical'        => false,
         'public'              => false,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'show_in_rest'        => true,
         'menu_position'       => 5,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => true,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
     );
      
     // Registering your Custom Post Type
     register_post_type( 'team', $args );
  
}

function custom_post_type_clients() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Clients', 'Post Type General Name', 'CRG2019' ),
        'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'CRG2019' ),
        'menu_name'           => __( 'Clients', 'CRG2019' ),
        'parent_item_colon'   => __( 'Parent Client', 'CRG2019' ),
        'all_items'           => __( 'All Clients', 'CRG2019' ),
        'view_item'           => __( 'View Client', 'CRG2019' ),
        'add_new_item'        => __( 'Add New Client', 'CRG2019' ),
        'add_new'             => __( 'Add New', 'CRG2019' ),
        'edit_item'           => __( 'Edit Client', 'CRG2019' ),
        'update_item'         => __( 'Update Client', 'CRG2019' ),
        'search_items'        => __( 'Search Client', 'CRG2019' ),
        'not_found'           => __( 'Not Found', 'CRG2019' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'CRG2019' ),
    );
        
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Clients', 'CRG2019' ),
        'description'         => __( 'Clients of Critical Response Group', 'CRG2019' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
        
    // Registering your Custom Post Type
    register_post_type( 'clients', $args );
     
}

function custom_post_type_partners() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Partners', 'Post Type General Name', 'CRG2019' ),
        'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'CRG2019' ),
        'menu_name'           => __( 'Partners', 'CRG2019' ),
        'parent_item_colon'   => __( 'Parent Partner', 'CRG2019' ),
        'all_items'           => __( 'All Partners', 'CRG2019' ),
        'view_item'           => __( 'View Partner', 'CRG2019' ),
        'add_new_item'        => __( 'Add New Partner', 'CRG2019' ),
        'add_new'             => __( 'Add New', 'CRG2019' ),
        'edit_item'           => __( 'Edit Partner', 'CRG2019' ),
        'update_item'         => __( 'Update Partner', 'CRG2019' ),
        'search_items'        => __( 'Search Partners', 'CRG2019' ),
        'not_found'           => __( 'Not Found', 'CRG2019' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'CRG2019' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'Partners', 'CRG2019' ),
        'description'         => __( 'Partners of Critical Response Group', 'CRG2019' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
        
    // Registering your Custom Post Type
    register_post_type( 'partners', $args );
        
}

function custom_post_type_resources() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Resources', 'Post Type General Name', 'CRG2019' ),
        'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'CRG2019' ),
        'menu_name'           => __( 'Resources', 'CRG2019' ),
        'parent_item_colon'   => __( 'Parent Resource', 'CRG2019' ),
        'all_items'           => __( 'All Resources', 'CRG2019' ),
        'view_item'           => __( 'View Resource', 'CRG2019' ),
        'add_new_item'        => __( 'Add New Resource', 'CRG2019' ),
        'add_new'             => __( 'Add New', 'CRG2019' ),
        'edit_item'           => __( 'Edit Resource', 'CRG2019' ),
        'update_item'         => __( 'Update Resource', 'CRG2019' ),
        'search_items'        => __( 'Search Resources', 'CRG2019' ),
        'not_found'           => __( 'Not Found', 'CRG2019' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'CRG2019' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'Resources', 'CRG2019' ),
        'description'         => __( 'Resources of Critical Response Group', 'CRG2019' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' , 'post_tag'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
        
    // Registering your Custom Post Type
    register_post_type( 'resources', $args );
        
}
     
    add_action( 'init', 'custom_post_type_team', 0 );
    add_action( 'init', 'custom_post_type_resources', 0 );
    add_action( 'init', 'custom_post_type_partners', 0 );
 ?>