<?php
/*
Plugin Name: WP-CleanDB
Plugin URI: http://gerrytucker.co.uk/wp-plugins/wp-cleandb.zip
Description: Cleanup your Wordpress database in one click!
Version: 1.8.0
Author: Gerry Tucker
Author URI: http://gerrytucker.co.uk/
License: GPLv2 or later
*/

function cleandb_admin() {
	include('wp-cleandb-admin.php');
}

function cleandb_admin_actions() {

	/* 1.5
	add_options_page(
		'wp-cleandb',
		'wp-cleandb',
		'administrator',
		'wp-cleandb',
		'cleandb_admin'
	);
	*/

	// 1.5 Add to Tools menu
	add_submenu_page(
		'tools.php',
		__( 'WP-CleanDB', 'wp-cleandb' ),
		__( 'WP-CleanDB', 'wp-cleandb' ),
		'manage_options',
		'wp-cleandb',
		'cleandb_admin'
	);

}

add_action('admin_menu', 'cleandb_admin_actions');

function load_translation_files() {
	load_plugin_textdomain(
		'wp-cleandb',
		false,
		'wp-cleandb/languages'
	);
}

add_action('plugins_loaded', 'load_translation_files');
