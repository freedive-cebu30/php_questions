<?php


function compare_string($string_1, $string_2) {
  $arr1 = str_split($string_1);
  $arr2 = str_split($string_2);
  
  return  array_intersect($arr1, $arr2);
}

print_r(compare_string("rubys", "rails"));
