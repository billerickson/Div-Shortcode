<?php
/*
Plugin Name: Div Shortcode
Plugin URI: http://www.billerickson.net
Description: Allows you to create a div by using the shortcodes [div] and [end-div]. To add an id of "foo" and class of "bar", use [div id="foo" class="bar"].
Author: Bill Erickson
Version: 2.1
Author URI: http://www.billerickson.net
*/


/* Open Div */ 
add_shortcode('div', 'be_div_shortcode');
function be_div_shortcode($atts) {
	extract(shortcode_atts(array('class' => '', 'id' => '' ), $atts));
	$return = '<div';
	if (!empty($class)) $return .= ' class="'.$class.'"';
	if (!empty($id)) $return .= ' id="'.$id.'"';
	$return .= '>';
	return $return;
}

/* Close Div */
add_shortcode('end-div', 'be_end_div_shortcode');
function be_end_div_shortcode($atts) {
	return '</div>';
}



?>