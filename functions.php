<?php
	//function to include styles/js
function usedMed_script_enqueue() {
				// hook ( $handle , wp func to use relative path, 
				// array for dependencies, ver #, media views)

	wp_enqueue_style ( 'bootsrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style ( 'bootsrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style ( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style ( 'customstyle', get_template_directory_uri() . '/assets/css/usedmed.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '1.0.0', true);
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
		wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/usedmed.js', array(), '1.0.0', true);

}
// call function to action
add_action('wp_enqueue_scripts', 'usedMed_script_enqueue');

function usedMed_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary header nav');
	register_nav_menu('secondary', 'Primary footer nav');
}

add_action('init', 'usedMed_theme_setup');


add_theme_support('custom-header');