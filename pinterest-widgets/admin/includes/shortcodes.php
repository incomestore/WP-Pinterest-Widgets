<?php

/**
 * Define plugin shortcodes.
 *
 * @package    PW
 * @subpackage admin/includes
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

// Shortcode for Follow Button
function pw_follow_button( $attr ) {
	
	extract( shortcode_atts( array(
					'username' => 'pinterest',
					'label'    => 'Follow me on Pinterest'
				), $attr ) );
	
	return '<div class="pw-wrap pw-shortcode">' . pw_pin_follow( $username, $label ) . '</div>';
}
add_shortcode( 'pin_follow', 'pw_follow_button' );

// Shortcode for Pin Widget
function pw_pin_widget( $attr ) {
	
	extract( shortcode_atts( array(
					'url'   => 'none'
				), $attr ) );
	
	return '<div class="pw-wrap pw-shortcode">' . pw_pin_link( $url, '', 'embedPin' ) . '</div>';
}
add_shortcode( 'pin_widget', 'pw_pin_widget' );

// Shortcode for Board Widget
function pw_board_widget( $attr ) {
	
	extract( shortcode_atts( array(
					'url'          => '',
					'size'         => 'square',
					'image_width'  => '60',
					'board_height' => '800',
					'board_width'  => '150'
				), $attr ) );
	
	$custom_sizes = array();
	
	if( $size == 'custom' ) {
		$custom_sizes = array(
			'width'       => $image_width,
			'height'      => $board_height,
			'board_width' => $board_width
		);
	}
	
	return '<div class="pw-wrap pw-shortcode">' . pw_widget_boards( $url, '', $size, $custom_sizes, 'embedBoard' ) . '</div>';
}
add_shortcode( 'pin_board', 'pw_board_widget' );

// Shortcode for Profile Widget
function pw_profile_widget( $attr ) {
	
	extract( shortcode_atts( array(
					'username' => 'pinterest',
					'size'     => 'square'
				), $attr ) );
	
	return '<div class="pw-wrap pw-shortcode">' . pw_widget_boards( $username, '', $size, '', 'embedUser' ) . '</div>';
}
add_shortcode( 'pin_profile', 'pw_profile_widget' );