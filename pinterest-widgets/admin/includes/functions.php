<?php


// Returns the code needed for the Follow Button
// Based on Pinterest code on 12/23/2012
function pw_follow_button( $url, $label ) {
	
	$follow_button = '<a data-pin-do="buttonFollow" href="' . esc_attr( $url ) . '">' . $label . '</a>';
	
	return $follow_button;
}

// Returns the code needed for the Pin Widget
// Based on Pinterest code on 12/23/2012
function pw_pin_widget( $url ) {
	
	$pin_widget = '<a data-pin-do="embedPin" href="' . esc_attr( $url ) . '"></a>';
	
	return $pin_widget;
}

// Returns the code needed for the Profile Widget
// Based on Pinterest code on 12/23/2012
function pw_profile_widget( $url, $size ) {
	
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
	
	$profile_widget = '<a data-pin-do="embedUser" href="' . esc_attr( $url ) . '" data-pin-scale-width="' . $scale_width . '" data-pin-scale-height="' . $scale_height . '" data-pin-board-width="' . $board_width . '"></a>';
	
	return $profile_widget;
}

// Returns the code needed for the Board Widget
// Based on Pinterest code on 12/23/2012
function pw_board_widget() {
	
}

