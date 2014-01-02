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

// Delete general settings option
delete_option( 'pw_settings_general' );