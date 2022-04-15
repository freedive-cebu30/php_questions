<?php


$arr = [1, 12, 12, 13, 2, 3, 4, 5, 6, 7, 8, 9, 10, 5, 4, 3];
$res = array_unique($arr);
arsort($res);

print_r($res);
