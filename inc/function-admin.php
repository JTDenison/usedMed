<?php

/*
======================
	Admin Page
======================
*/

function usedMed_add_admin_page(){

	add_menu_page('usedMed Theme Options', 'UsedAdmin', 'manage_options', 'used-med', 'usedmed_theme_create_page', 'dashicons-admin-customizer', 110);
	// developer.wordpress.org/resources/dashicons/

}
add_action('admin_menu', 'usedMed_add_admin_page');

function sunset_theme_create_page() {
 echo '<h1> Admin Page </h1>';
}