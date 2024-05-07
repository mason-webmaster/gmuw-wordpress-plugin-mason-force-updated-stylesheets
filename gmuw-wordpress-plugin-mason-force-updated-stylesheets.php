<?php

/**
 * Plugin to force website to always show the most up-to-date stylesheets, by setting the stylesheet version number to the current unix time
 */

/**
 * Plugin Name:       Mason WordPress: Force Updated Stylesheets
 * Author:            Mason Web Administration
 * Plugin URI:        https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-force-updated-stylesheets
 * Description:       Mason WordPress Plugin to force website to always show the most up-to-date stylesheets, by setting the stylesheet version number to the current unix time
 * Version:           1.0
 */


// Exit if this file is not called directly.
if (!defined('WPINC')) {
	die;
}

// Set up auto-updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
'https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-customizations-exampleinstance/',
__FILE__,
'gmuw-wordpress-plugin-mason-customizations-exampleinstance'
);

/**
 * Ensure that stylesheets are always loaded by setting the stylesheet version to the current unix time
 */
add_action('wp_default_styles', function($styles){

  $styles->default_version=time();

});
