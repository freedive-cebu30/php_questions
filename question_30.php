<?php


$v1 = [1, 2, 3, 4, 5, 8, 9];
$v2 = [9, 7, 6, 5, 4];

$result = array_diff($v1, $v2);
$result2 = array_diff($v2, $v1);

$answer = array_merge($result, $result2);
print_r($answer);
