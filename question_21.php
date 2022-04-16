<?php


$arr1 = [1, 2, 3, 4, 5, 8, 9, 10, 18, 20];
$arr2 = [1, 2, 3, 4, 5, 8, 10, 20];

var_dump(multiple_9($arr1));
var_dump(multiple_9($arr2));

function multiple_9($arr) {
  $res = false;
  foreach ($arr as $val) {
    if ($val % 9 == 0) {
      return true;
    }
  }
  return $res;
}
