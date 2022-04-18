<?php


$fruits = ['apple', 'mango', 'banana'];
$prices = [100, 200, 300];
$answer = array_map('zip', $fruits, $prices);
print_r($answer);

function zip($v1, $v2){
    return array($v1, $v2);
}


# アロー関数を使って書くこともできます。
# You can write a code by Arrow Functions.
print_r(array_map(fn($v1, $v2) => array($v1, $v2), $fruits, $prices));
