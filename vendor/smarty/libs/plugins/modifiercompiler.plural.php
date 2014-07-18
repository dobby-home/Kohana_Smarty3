<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifierCompiler
 */

/**
 * Smarty strip modifier plugin
 *
 * Type:     modifier<br>
 * Name:     strip<br>
 * Purpose:  Replace all repeated spaces, newlines, tabs
 *              with a single space or supplied replacement string.<br>
 * Example:  {$var|strip} {$var|strip:"&nbsp;"}<br>
 * Date:     September 25th, 2002
 *
 * @link http://www.smarty.net/manual/en/language.modifier.strip.php strip (Smarty online manual)
 * @author Uwe Tews
 * @param array $params parameters
 * @return string with compiled code
 */

function smarty_modifiercompiler_plural($params, $compiler)
{

    $n = $params[0];
    return $n%10==1&&$n%100!=11?$params[1]:($n%10>=2&&$n%10<=4&&($n%100<10||$n%100>=20)?$params[2]:$params[3]);
}

?>