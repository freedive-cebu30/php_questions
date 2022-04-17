<?php


$arr = [1, "a", 2, "b", "c", 3];

$res = [];
foreach ($arr as $val) {
  if(is_int($val)) {
    array_push($res, $val); 
  }
}

print_r($res);
