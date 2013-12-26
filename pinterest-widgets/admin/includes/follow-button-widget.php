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
			__( 'Pinterest Follow Button Widget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Follow Button to any widget area.', 'pib' )
			)
		);
	}

	public function widget( $args, $instance ) {
       // public facing widget code
		
		extract( $args );
		
		$title        = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$pin_user_url = $instance['pin_user_url'];
		$button_label = $instance['button_label'];
		
		echo $before_widget;
		
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
        }
		
		echo '<div class="pw-wrap pw-widget pw-follow-button-widget">' . pw_pin_link( $pin_user_url, $button_label, 'buttonFollow' ) . '</div>';
		
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		// Update the form when saved
		$instance['title']        = strip_tags( $new_instance['title'] );
		$instance['pin_user_url'] = strip_tags( $new_instance['pin_user_url'] );
		$instance['button_label'] = strip_tags( $new_instance['button_label'] );
        
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
		
		$title        = strip_tags( $instance['title'] );
		$pin_user_url = strip_tags( $instance['pin_user_url'] );
		$button_label = strip_tags( $instance['button_label'] );
		
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional)', 'pib' ); ?></label>
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

