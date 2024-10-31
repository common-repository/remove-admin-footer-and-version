<?php
/*
Plugin Name: Remove Admin Footer and Version
Plugin URI: http://www.annupex.com/Plugins/remove-admin-footer-and-version
Description: Removes the admin footer branding link and wordpress version. 
Author: H Ranjan
Version: 1.0.0
Author URI: http://www.annupex.com
License: GPL2
*/

/*  Copyright 2012  H Ranjan  (email : himanshu0ranjan@gmail.com)

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
function replace_footer_admin ()   
{  
    echo '<span id="footer-thankyou"></span>';  

}  
add_filter('admin_footer_text', 'replace_footer_admin');
function replace_footer_version() 
{
	return ' ';
}
add_filter( 'update_footer', 'replace_footer_version', '1234');
