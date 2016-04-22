<?php
/*
Plugin Name: JINKEI Utilities
Plugin URI:https://github.com/megumiteam/amimoto-wp-core/
Description:This Plugin includes Helper function for JINKEI AutoScale Stack
Version: 0.0.1
Author: DigitalCube
Author URI:https://github.com/megumiteam/
License: GPLv2 or later
*/

// Disable Upgrade Notification and Edit Action
// Thanks to http://www.warna.info/archives/781/
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );
add_filter( 'pre_site_transient_update_core', '__return_zero' );

if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
	define( 'DISALLOW_FILE_MODS', true );
}
