<?php


// どちらの関数でも大丈夫です
// either function is fine
function str_length($v1, $v2)
{
    if ($v1 == $v2) {
        return 0;
    }
    return (strlen($v1) < strlen($v2)) ? -1 : 1;
}

function str_length_2($v1, $v2)
{
    return strlen($v1) <=> strlen($v2);
}

$lang = array("javaScript", "ruby", "php", "python");
usort($lang, 'str_length');
usort($lang, 'str_length_2');

print_r($lang);
