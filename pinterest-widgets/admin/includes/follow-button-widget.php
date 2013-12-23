<?php

/**
 * Represents the view for the Follow Button Widget
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

class PW_Follow_Button_Widget extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'pw_follow_button_widget',
			__( 'Pinterest Follow Button WIdget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Follow Button to any widget area.', 'pib' )
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
		
		$default = array(
			'title'                     => '',
			'pin_user_url'              => '',
			'button_label'               => 'Follow'
		);
        
		$instance = wp_parse_args( (array) $instance, $default );
		
		$title                     = strip_tags($instance['title']);
		$pib_url_of_webpage_widget = strip_tags( $instance['pib_url_of_webpage_widget'] );
		$pib_url_of_img_widget     = strip_tags( $instance['pib_url_of_img_widget'] );
		$pib_description_widget    = strip_tags( $instance['pib_description_widget'] );
		$pib_button_type_widget    = $instance['button_type'];
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional)', 'pib' ); ?>:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'pin_user_url' ); ?>"><?php _e( 'Pinterest User URL'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'pin_user_url' ); ?>" name="<?php echo $this->get_field_name( 'pin_user_url' ); ?>" type="text" value="<?php echo esc_attr( $pin_user_url ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'button_label' ); ?>"><?php _e( 'Button Label'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'button_label' ); ?>" name="<?php echo $this->get_field_name( 'button_label' ); ?>" type="text" value="<?php echo esc_attr( $button_label ); ?>" />
		</p>
		
		<?php
	}
}

add_action( 'widgets_init', create_function( '', 'register_widget("PW_Follow_Button_Widget");' ) );

