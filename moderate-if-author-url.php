<?php
/*
Plugin Name: Moderate if author URL
Plugin URI: http://wordpress.org/extend/plugins/moderate-if-author-url/
Description: Requires approval on comments from non-registered users that contain an author URL.
Version: 0.1
Author: Chad Smith
Author URI: http://twitter.com/chadsmith
License: GPL2
*/

/*  Copyright 2011  Chad Smith  (email : chad@nospam.me)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!function_exists('moderate_if_author_url')) {
	function moderate_if_author_url($approved) {
		global $commentdata;
		return $commentdata['user_ID'] ? $approved : ($commentdata['comment_author_url'] ? 0 : $approved);
	}
}

add_filter('pre_comment_approved', 'moderate_if_author_url');
?>
