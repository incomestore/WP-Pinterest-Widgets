<?php

/**
 * Represents the view for the Pin Widget widget
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

class PW_Pin_Widget_Widget extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'pw_pin_widget_widget',
			__( 'Pinterest Pin Widget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Pin Widget to any widget area.', 'pw' )
			)
		);
	}

	public function widget( $args, $instance ) {
		// public facing widget code
		extract( $args );
		
		$title        = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$pin_url = $instance['pin_url'];
		
		echo $before_widget;
		
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
        }
		
		echo '<div class="pw-wrap pw-widget pw-pin-widget">' . pw_pin_link( $pin_url, '', 'embedPin' ) . '</div>';
		
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		// Update the form when saved
		$instance['title']   = strip_tags( $new_instance['title'] );
		$instance['pin_url'] = strip_tags( $new_instance['pin_url'] );
        
		return $instance;
	}

	public function form( $instance ) {
        // Widget form
		
		$default = array(
			'title'                     => '',
			'pin_url'              => '',
		);
		
		$instance = wp_parse_args( (array) $instance, $default );
		
		$title   = strip_tags( $instance['title'] );
		$pin_url = strip_tags( $instance['pin_url'] );
		
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional):', 'pw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'pin_url' ); ?>"><?php _e( 'Pin URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'pin_url' ); ?>" name="<?php echo $this->get_field_name( 'pin_url' ); ?>" type="text" value="<?php echo esc_attr( $pin_url ); ?>"
				placeholder="http://www.pinterest.com/pin/99360735500167749/" />
		</p>
		
		<?php
	}
}

add_action( 'widgets_init', create_function( '', 'register_widget("PW_Pin_Widget_Widget");' ) );

