<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {seo} function plugin
 *
 * Type:     function<br>
 * Name:     seo<br>
 * Date:     Dic 05, 2012
 * Purpose:  seo url friendly.<br>
 * Params:
 * <pre>
 * - string - (required) - Title to friendly URL conversion
 * - divider - (required) - return good words separated by dashes
 * </pre>
 * Examples:
 * <pre>
 * {seo string="Lorem Ipsum"}
 * {seo string="Lorem Ipsum" divider="_"}
 * </pre>
 *
 * @version 1.0
 * @author Concetto Vecchio <info@cvsolutions.it>
 * @param array $params parameters
 * @param Smarty_Internal_Template $template template object
 * @return string
 */
function smarty_function_seo($params, $template)
{
	$text = preg_replace('/\W+/', $params['divider'], $params['string']);
	return strtolower(trim($text, $params['divider']));
}