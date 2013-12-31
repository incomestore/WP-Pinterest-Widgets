<?php
/**
 * Pinterest Widgets
 *
 * @package   PW
 * @author    Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 * @license   GPL-2.0+
 * @link      http://pinterestplugin.com
 * @copyright 2014 Phil Derksen
 *
 * @wordpress-plugin
 * Plugin Name: Pinterest Widgets
 * TODO Plugin URI: http://pinterestplugin.com/pinterest-widgets-plugin/
 * Description: Easily add a Pinterest Follow Button, Pin Widget, Board Widget and Profile Widget to your site. Includes shortcodes!
 * Version: 1.0.0
 * Author: Phil Derksen
 * Author URI: http://philderksen.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */

require_once( plugin_dir_path( __FILE__ ) . 'admin/class-pinterest-widgets-admin.php' );
	
add_action( 'plugins_loaded', array( 'Pinterest_Widgets_Admin', 'get_instance' ) );


require_once( plugin_dir_path( __FILE__ ) . 'public/class-pinterest-widgets.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'Pinterest_Widgets', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Pinterest_Widgets', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'Pinterest_Widgets', 'get_instance' ) );

