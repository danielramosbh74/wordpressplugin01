<?php

/*
	Plugin name: Plugin Webmaster 01
	Plugin uri: https://github.com/danielramosbh74/wordpressplugin01
	Description: Esse plugin é um plugin de teste
	Version: 1.0
	Author: Daniel Ramos de Carvalho
	Author uri: https://github.com/danielramosbh74
	License: GPLv2 or later
*/

function post_msg ($post_msg) {
	$post_msg = "This message will be shwon in the beginning of each post";
	$formatted_msg = "<h1> $post_msg </h1>";
	$formatted_msg .= $post_msg;

	return $formatted_msg;
}

add_filter( 'the_content', 'post_msg');

?>
