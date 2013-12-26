<?php

/**
 * Represents the view for the Profile Widget widget
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

class PW_Profile_Widget_Widget extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'pw_profile_widget_widget',
			__( 'Pinterest Pin Widget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Profile Widget to any widget area.', 'pib' )
			)
		);
	}

	public function widget( $args, $instance ) {
		// public facing widget code
		
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		// Update the form when saved
		
        
		return $instance;
	}

	public function form( $instance ) {
        // Widget form
		
	}
}

add_action( 'widgets_init', create_function( '', 'register_widget("PW_Profile_Widget_Widget");' ) );


