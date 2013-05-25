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
 * @param 		string 		$address email address
 * @return 		string 		URL Gravatar
 */
function smarty_modifier_gravatar($address = '', $size = 60)
{
	$gravatar_host = 'http://www.gravatar.com/avatar/'; 
	$hash = strtolower(md5(trim($address)));
	$src = sprintf('%s%s.jpg?s=%d&d=identicon&r=G', $gravatar_host, $hash, $size);
	return sprintf('<img src="%s" alt="%s">', $src, $address);
}
