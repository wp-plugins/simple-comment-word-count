<?php
/*
Plugin Name: Simple Comment Wordc Count
Plugin URI: http://www.ryanlineker.com/plugins/comment-wordcount
Description: A simple plugin that displays the number of words in any comment.
Version: 1.0
Author: Ryan Lineker
Author URI: http://www.ryanlineker.com
License: GPL2
*/

function comment_wordcount() {
	$commentwords = str_word_count( get_comment_text() );	
	print $commentwords;
}

?>