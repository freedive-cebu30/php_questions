<?php


$arr = [1, "a", 2, "b", "c", 3, "4", "5", "6"];

$res = [];
foreach ($arr as $val) {
  if(is_numeric($val)) {
    array_push($res, $val); 
  }
}

rsort($res);
print_r($res);
