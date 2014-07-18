<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty capitalize modifier plugin
 *
 * Type:     modifier<br>
 * Name:     capitalize<br>
 * Purpose:  capitalize words in the string
 *
 * {@internal {$string|capitalize:true:true} is the fastest option for MBString enabled systems }}
 *
 * @param string  $string string to capitalize
 * @param boolean $uc_digits also capitalize "x123" to "X123"
 * @param boolean $lc_rest capitalize first letters, lowercase all following letters "aAa" to "Aaa"
 * @return string capitalized string
 * @author Monte Ohrt <monte at ohrt dot com>
 * @author Rodney Rehm
 */
function smarty_modifier_upperfirstletter($string) {
    if (SMARTY_MBSTRING /* ^phpunit */ && empty($_SERVER['SMARTY_PHPUNIT_DISABLE_MBSTRING']) /* phpunit$ */) {
        return mb_strtoupper(substr($string, 0, 2)) . substr($string, 2);
    }

    return strtoupper(substr($string, 0, 1)) . substr($string, 1);
}

?>