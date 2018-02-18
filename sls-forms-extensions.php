<?php
/*
Plugin Name: WP Serverless Forms
Plugin URI: https://github.com/getshifter/wp-serverless-forms
Description: Extensions for forms for Serverless Static WordPress sites
Version: 1.0.0
Author: Shifter Team
Author URI: https://getshifter.io
License: GPL2
*/

/**
 * Admin Settings Menu
 */

add_action( 'admin_menu', 'wp_sls_forms' );

function wp_sls_forms() {
	add_options_page(
		'WP Serverless Forms',
		'WP Serverless Forms',
		'manage_options',
		'wp-sls-forms',
		'wp_sls_forms_options'
	);
}

/**
 * WP Serverless Forms
 * Feature: HTTP Endpoint
 */

require_once('lib/http-endpoint.php');

/**
 * Providers
 */

// Contact Form 7
require_once('lib/providers/contact-form-7.php');
