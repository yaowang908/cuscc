<?php
/*
* twentyfifteen child functions and definitions
*/
function unhook_parent_style() {

  wp_dequeue_style( 'twentyfifteen-style' );
	wp_deregister_style( 'twentyfifteen-style' );
  wp_dequeue_style( 'genericons' );
	wp_deregister_style( 'genericons' );\
  wp_dequeue_style( 'twentyfifteen-ie' );
	wp_deregister_style( 'twentyfifteen-ie' );
  wp_dequeue_style( 'twentyfifteen-ie7' );
	wp_deregister_style( 'twentyfifteen-ie7' );
  wp_dequeue_style( 'twentyfifteen-fonts' );
	wp_deregister_style( 'twentyfifteen-fonts' );
}
add_action( 'wp_prints_styles', 'unhook_parent_style');
//add_action( 'wp_enqueue_scripts', 'unhook_parent_style');
//add_action( 'wp_head', 'unhook_parent_style', 9999 );
function twentyfifteen_child_enqueue_syles(){
	wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts','twentyfifteen_child_enqueue_syles');

?>