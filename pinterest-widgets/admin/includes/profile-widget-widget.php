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
			__( 'Pinterest Profile Widget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Profile Widget to any widget area.', 'pw' )
			)
		);
	}

	public function widget( $args, $instance ) {
		// public facing widget code
		extract( $args );
		
		$title               = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$pin_user_url        = $instance['pin_user_url'];
		$profile_widget_size = $instance['profile_widget_size'];
		
		echo $before_widget;
		
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
        }
		
		echo '<div class="pw-wrap pw-widget pw-profile-widget">' . pw_widget_boards( $pin_user_url, '', $profile_widget_size, 'embedUser' ) . '</div>';
		
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		// Update the form when saved
		$instance['title']               = strip_tags( $new_instance['title'] );
		$instance['pin_user_url']        = strip_tags( $new_instance['pin_user_url'] );
		$instance['profile_widget_size'] = $new_instance['profile_widget_size'];
		
		
		return $instance;
	}

	public function form( $instance ) {
        // Widget form
		$default = array(
			'title'                     => '',
			'pin_user_url'              => '',
			'profile_widget_size'       => 'square'
		);
		
		$instance = wp_parse_args( (array) $instance, $default );
		
		$title               = strip_tags( $instance['title'] );
		$pin_user_url        = strip_tags( $instance['pin_user_url'] );
		$profile_widget_size = strip_tags( $instance['profile_widget_size'] );
		
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional):', 'pw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'pin_user_url' ); ?>"><?php _e( 'Pinterest User URL:', 'pw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'pin_user_url' ); ?>" name="<?php echo $this->get_field_name( 'pin_user_url' ); ?>" type="text" value="<?php echo esc_attr( $pin_user_url ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'profile_widget_size' ); ?>"><?php _e( 'Widget Size:', 'pw' ); ?></label><br />
			<select name="<?php echo $this->get_field_name( 'profile_widget_size' ); ?>" id="<?php echo $this->get_field_id( 'profile_widget_size' ); ?>">
				<option value="square" <?php selected( $instance['profile_widget_size'], 'square' ); ?>><?php _e( 'Square', 'pw' ); ?></option>
				<option value="sidebar" <?php selected( $instance['profile_widget_size'], 'sidebar' ); ?>><?php _e( 'Sidebar', 'pw' ); ?></option>
				<option value="header" <?php selected( $instance['profile_widget_size'], 'header' ); ?>><?php _e( 'Header', 'pw' ); ?></option>
			</select>
		</p>
		
		<?php
	}
}

add_action( 'widgets_init', create_function( '', 'register_widget("PW_Profile_Widget_Widget");' ) );


