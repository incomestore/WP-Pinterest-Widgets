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
function pw_profile_widget() {
	
}

// Returns the code needed for the Board Widget
// Based on Pinterest code on 12/23/2012
function pw_board_widget() {
	
}

