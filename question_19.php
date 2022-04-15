<?php


function str_length($v1, $v2)
{
    if ($v1 == $v2) {
        return 0;
    }
    return (strlen($v1) < strlen($v2)) ? -1 : 1;
}

$lang = array("javaScript", "ruby", "php", "python");
usort($lang, 'str_length');

print_r($lang);
