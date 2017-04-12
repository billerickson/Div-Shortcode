<?php
/*
Plugin Name: Div Shortcode
Plugin URI: https://www.github.com/billerickson/div-shortcode
Description: Allows you to create a div by using the shortcodes [div] and [end-div]. To add an id of "foo" and class of "bar", use [div id="foo" class="bar"].
Author: Bill Erickson
Version: 2.2.1
Author URI: https://www.billerickson.net
*/


/**
 * Open Div Shortcode
 *
 */
function be_div_shortcode( $atts ) {

	$atts = shortcode_atts( array(
		'class' => '',
		'id'    => '',
	), $atts, 'div-shortcode' );

	$return = '<div';
	if ( !empty( $atts['class'] ) )
		$return .= ' class="'. esc_attr( $atts['class'] ) .'"';
	if ( !empty( $atts['id'] ) )
		$return .= ' id="'. esc_attr( $atts['id'] ) .'"';
	$return .= '>';
	return $return;
}
add_shortcode( 'div', 'be_div_shortcode' );


/**
 * Close Div Shortcode
 *
 */
function be_end_div_shortcode( $atts ) {
	return '</div>';
}
add_shortcode( 'end-div', 'be_end_div_shortcode' );
