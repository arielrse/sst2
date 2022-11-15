<?php

function convertSpecialChars($text){
    $str     = str_replace('\u','u', $text);
    return preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
}

?>