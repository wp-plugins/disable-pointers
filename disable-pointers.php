<?php
/*
Plugin Name: Disable Pointers
Plugin URI: https://github.com/lumpysimon/wp-disable-pointers
Description: Disable all admin pointer tooltips
Version: 1.0
Author: Simon Blackbourn
Author URI: https://lumpylemon.co.uk



	This is a plugin for WordPress (https://wordpress.org).

	Released under the GPL license:
	http://opensource.org/licenses/gpl-license.php

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.



*/



$lumpy_disable_pointers = new lumpy_disable_pointers;



class lumpy_disable_pointers {



	public function __construct() {

		add_action( 'admin_init', array( $this, 'remove_action' ) );

	}



	function remove_action() {

		remove_action( 'admin_enqueue_scripts', array( 'WP_Internal_Pointers', 'enqueue_scripts' ) );

	}



} // class
