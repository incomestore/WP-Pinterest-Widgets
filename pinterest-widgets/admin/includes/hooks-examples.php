<?php

/*************************
 * FILTER HOOKS
 ************************/

/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_follow_button_shortcode_html( $html ) {
	return '<div style="border: 5px solid #f00; padding: 15px;">' . $html . '</div>';
}
add_filter( 'pw_follow_button_shortcode_html', 'test_pw_follow_button_shortcode_html' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_follow_button_shortcode_before( $before_html ) {
	return '<p>Before Follow Button</p>';
}
add_filter( 'pw_follow_button_shortcode_before', 'test_pw_follow_button_shortcode_before' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_follow_button_shortcode_after( $after_html ) {
	return '<p>After Follow Button</p>';
}
add_filter( 'pw_follow_button_shortcode_after', 'test_pw_follow_button_shortcode_after' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_pin_widget_shortcode_before( $before_html ) {
	return '<p>Before Pin Widget</p>';
}
add_filter( 'pw_pin_widget_shortcode_before', 'test_pw_pin_widget_shortcode_before' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_pin_widget_shortcode_html( $html ) {
	return '<div style="border: 5px solid #f00; padding: 15px;">' . $html . '</div>';
}
add_filter( 'pw_pin_widget_shortcode_html', 'test_pw_pin_widget_shortcode_html' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_pin_widget_shortcode_after( $after_html ) {
	return '<p>After Pin Widget</p>';
}
add_filter( 'pw_pin_widget_shortcode_after', 'test_pw_pin_widget_shortcode_after' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_board_widget_shortcode_before( $before_html ) {
	return '<p>Before Board Widget</p>';
}
add_filter( 'pw_board_widget_shortcode_before', 'test_pw_board_widget_shortcode_before' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_board_widget_shortcode_html( $html ) {
	return '<div style="border: 5px solid #f00; padding: 15px;">' . $html . '</div>';
}
add_filter( 'pw_board_widget_shortcode_html', 'test_pw_board_widget_shortcode_html' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_board_widget_shortcode_after( $after_html ) {
	return '<p>After Board Widget</p>';
}
add_filter( 'pw_board_widget_shortcode_after', 'test_pw_board_widget_shortcode_after' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_profile_shortcode_before( $before_html ) {
	return '<p>Before Profile</p>';
}
add_filter( 'pw_profile_shortcode_before', 'test_pw_profile_shortcode_before' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_profile_shortcode_html( $html ) {
	return '<div style="border: 5px solid #f00; padding: 15px;">' . $html . '</div>';
}
add_filter( 'pw_profile_shortcode_html', 'test_pw_profile_shortcode_html' );


/**
 * 
 * 
 * @since 1.0.1
 */
function test_pw_profile_shortcode_after( $after_html ) {
	return '<p>After Profile</p>';
}
add_filter( 'pw_profile_shortcode_after', 'test_pw_profile_shortcode_after' );