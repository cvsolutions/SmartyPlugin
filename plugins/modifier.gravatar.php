<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty gravatar modifier plugin
 *
 * Type:     modifier<br>
 * Name:     gravatar<br>
 * Purpose:  A Globally Recognized Avatar
 * 
 * Examples: {$email|gravatar:"60"}
 *
 * @version 	1.0
 * @author 		Concetto Vecchio <info@cvsolutions.it>
 * @param 		string 		$address The email address
 * @param 		string 		$size Size in pixels
 * @return 		string 		String containing either just a URL or a complete image tag
 */
function smarty_modifier_gravatar($address = '', $size = 60)
{
	$gravatar_host = 'http://www.gravatar.com/avatar/'; 
	$hash = strtolower(md5(trim($address)));
	$src = sprintf('%s%s.jpg?s=%d&d=identicon&r=G', $gravatar_host, $hash, $size);
	return sprintf('<img src="%s" alt="%s">', $src, $address);
}
