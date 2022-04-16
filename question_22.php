<?php


$sample_arr = [];
while (true) {
  foreach (range(1, 10) as $number) {
    array_push($sample_arr, rand(1, 30));
  }
  if (multiple($sample_arr, 11)) {
    break;
  }
  
  $sample_arr = [];
}

print_r($sample_arr);

function multiple($arr, $num) {
  $res = false;
  foreach ($arr as $val) {
    if ($val % $num == 0) {
      return true;
    }
  }
  return $res;
}
