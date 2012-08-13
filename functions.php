<?php

/* ---- Custom Post Types and Taxonomies ---- */

/*
function register_post_types(){

  register_post_type( 'books',
  	array(
      'labels' => array(
        'name' => __( 'Books' ),
        'singular_name' => __( 'Books' )
    	),
    	'public' => true,
    	'has_archive' => true,
    	'supports' => array('title', 'editor', 'thumbnail') 
  	)
  );

}

function register_taxonomies(){

  register_taxonomy('genre', array('books'),
    array(
      'labels' => array(
        'name' => __( 'Genres' ),
        'singular_name' => __( 'Genre' )
      ),
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true
    )
  );
}

add_action( 'init', 'register_post_types', 0 );
add_action( 'init', 'register_taxonomies', 0 );
*/

/* ---- Post Thumbnails ---- */

/*
add_theme_support('post-thumbnails', array('post','case_studies'));
set_post_thumbnail_size( 208, 127, true );
add_image_size("case-study", 450, 270, true);
*/

/* ---- Sidebar ---- */

/*
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
	'name' => 'sidebar1',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
}
*/

/* ---- Other ---- */

//add excerpt field into pages
add_post_type_support( 'page', 'excerpt' );

//add custom menu support 
add_action('init', 'register_custom_menu');

function register_custom_menu() {
  register_nav_menu('custom_menu', __('Custom Menu'));
}

//replacement text for 'read more' after excerpts
function new_excerpt_more($more) {
  global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>