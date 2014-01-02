<?php
/**
 * Defines actions to take when plugin is uninstalled
 *
 * @package    PW
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

global $pw_options;

$general = get_option( 'pw_settings_general' );

if( ! empty( $general['uninstall_save_settings'] ) ) {
	// DO Nothing since they want to save their settings on uninstall
} else {
	// Delete options because they don't want them saved
	
	// Delete general settings option
	delete_option( 'pw_settings_general' );
}
	