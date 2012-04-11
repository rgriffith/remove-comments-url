<?php
/*
Plugin Name: Remove Website Field
Description: Removes the website field from the comments form.
Author: Ryan Griffith
Author URI: http://www.millersville.edu/
Version: 1.0
*/


/**
 * @desc Function to unset the URL/website field from the comments panel
 * @param Array $fields
 * @return Array 
 */
function remove_comments_url($fields) {
	if(isset($fields['url'])) {
		unset($fields['url']);	
	}
	
	return $fields;
}

add_filter('comment_form_default_fields', 'remove_comments_url', 5);
?>