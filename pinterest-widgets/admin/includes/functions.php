<?php

/**
 * Define plugin reusable functions.
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Returns the code needed for the Follow Button or Pin Widget
// Based on Pinterest code on 12/23/2012
function pw_pin_link( $url, $label, $action ) {
	
	$pin_link = '<a data-pin-do="' . $action . '" href="' . esc_attr( $url ) . '">' . $label . '</a>';
	
	return $pin_link;
}

// Follow button code
function pw_pin_follow( $username, $label ) {
	
	$pin_follow = '<a data-pin-do="buttonFollow" href="http://www.pinterest.com/' . esc_attr( $username ) . '/">' . $label . '</a>';
	
	return $pin_follow;
}

// Returns the code needed for the Profile Widget or Board Widget
// Based on Pinterest code on 12/23/2012
function pw_widget_boards( $url, $label, $size, $custom_sizes, $action ) {
	
	// Default size options based on option "Square" from Pinterest
	$scale_width  = 80;
	$scale_height = 320;
	$board_width  = 400;
	
	// Change sizes if sidebar option is selected
	if( $size == 'sidebar' ) {
		$scale_width  = 60;
		$scale_height = 800;
		$board_width  = 150;
	}
	
	// Change sizes if header option is selected
	if( $size == 'header' ) {
		$scale_width  = 115;
		$scale_height = 120;
		$board_width  = 900;
	}
	
	// Custom sizes
	if( $size == 'custom' ) {
		$scale_width  = $custom_sizes['width'];
		$scale_height = $custom_sizes['height'];
		$board_width  = $custom_sizes['board_width'];
	}
	
	if( $action == 'embedUser' ) {
		$url = "http://www.pinterest.com/" . $url;
	}
	
	$widget  = '<a data-pin-do="' . $action . '"';
	$widget .= 'href="' . esc_attr( $url ) . '"';
	$widget .= ( ! empty( $board_width ) ? 'data-pin-scale-width="' . $scale_width . '"' : '' );
	$widget .= ( ! empty( $board_width ) ? 'data-pin-scale-height="' . $scale_height . '"' : '' );
	// if the board_width is empty then it has been set to 'auto' so we need to leave the data-pin-board-width attribute completely out
	$widget .= ( ! empty( $board_width ) ? 'data-pin-board-width="' . $board_width . '"' : '' );
	$widget .= '>' . $label . '</a>';
	
	return $widget;
}

