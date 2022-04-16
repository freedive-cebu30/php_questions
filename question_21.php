<?php


$arr1 = [1, 2, 3, 4, 5, 8, 9, 10, 18, 20];
$arr2 = [1, 2, 3, 4, 5, 8, 10, 20];

var_dump(multiple($arr1, 9));
var_dump(multiple($arr2, 9));

function multiple($arr, $num) {
  $res = false;
  foreach ($arr as $val) {
    if ($val % $num == 0) {
      return true;
    }
  }
  return $res;
}
