<?php

function smarty_modifier_upperfirstletter($string) {


    return strtoupper($string[0]). substr($string, 1);
} 

?>