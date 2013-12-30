<?php

/**
 * Represents the view for the Board Widget widget
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

class PW_Board_Widget_Widget extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'pw_board_widget_widget',
			__( 'Pinterest Board Widget', 'pw' ),
			array(
				'classname'		=>	'', // Wrap widget with "clear fix" CSS trick.
				'description'	=>	__( 'Add a Pinterest Board Widget to any widget area.', 'pw' )
			)
		);
	}

	public function widget( $args, $instance ) {
		// public facing widget code
		extract( $args );
		
		$title      = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$board_url  = $instance['board_url'];
		$board_size = $instance['board_size'];
		
		echo $before_widget;
		
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
        }
		
		echo '<div class="pw-wrap pw-widget pw-board-widget">' . pw_widget_boards( $board_url, '', $board_size, 'embedBoard' ) . '</div>';
		
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		// Update the form when saved
		$instance['title']      = strip_tags( $new_instance['title'] );
		$instance['board_url']  = strip_tags( $new_instance['board_url'] );
		$instance['board_size'] = $new_instance['board_size'];
		
		
		return $instance;
	}

	public function form( $instance ) {
        // Widget form
		$default = array(
			'title'      => '',
			'board_url'  => '',
			'board_size' => 'square'
		);
		
		$instance = wp_parse_args( (array) $instance, $default );
		
		$title      = strip_tags( $instance['title'] );
		$board_url  = strip_tags( $instance['board_url'] );
		$board_size = strip_tags( $instance['board_size'] );
		
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title (optional):', 'pw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'board_url' ); ?>"><?php _e( 'Pinterest Board URL:', 'pw' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'board_url' ); ?>" name="<?php echo $this->get_field_name( 'board_url' ); ?>" type="text" value="<?php echo esc_attr( $board_url ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'board_size' ); ?>"><?php _e( 'Board Size:', 'pw' ); ?></label><br />
			<select name="<?php echo $this->get_field_name( 'board_size' ); ?>" id="<?php echo $this->get_field_id( 'board_size' ); ?>">
				<option value="square" <?php selected( $instance['board_size'], 'square' ); ?>><?php _e( 'Square', 'pw' ); ?></option>
				<option value="sidebar" <?php selected( $instance['board_size'], 'sidebar' ); ?>><?php _e( 'Sidebar', 'pw' ); ?></option>
				<option value="header" <?php selected( $instance['board_size'], 'header' ); ?>><?php _e( 'Header', 'pw' ); ?></option>
			</select>
		</p>
		
		<?php
	}
}

add_action( 'widgets_init', create_function( '', 'register_widget("PW_Board_Widget_Widget");' ) );


