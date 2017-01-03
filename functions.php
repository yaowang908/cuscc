<?php
/*
* twentyseventeen child functions and definitions
*/
function twentyseventeen_child_enqueue_syles(){
	wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts','twentyseventeen_child_enqueue_styles');

?>