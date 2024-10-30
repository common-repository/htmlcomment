<?php
/*
Plugin Name: HTMLComment
Version: 0.1
Description: A very simple plug-in that allows you to hide a part of a post using standard HTML comments.
Author: Henry Hartley
*/


function HTMLComment($text) {
	return str_replace( '&#8211;>', "-->", $text ) ;
}

add_filter('the_content', 'HTMLComment');

?>
