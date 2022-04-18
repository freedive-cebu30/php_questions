<?php


function check_3_5_multiple_1($number) {
  if ($number % 3 == 0 or $number % 5 == 0){
    return True;
  } else {
    return False;
  }
}

function check_3_5_multiple_2($number) {
  if ($number % 3 != 0 and $number % 5 != 0){
    return False;
  } else {
    return True;
  }
}

var_dump(check_3_5_multiple_1(9));
var_dump(check_3_5_multiple_1(10));
var_dump(check_3_5_multiple_1(14));
var_dump(check_3_5_multiple_1(15));
var_dump(check_3_5_multiple_1(30));

var_dump(check_3_5_multiple_2(9));
var_dump(check_3_5_multiple_2(10));
var_dump(check_3_5_multiple_2(14));
var_dump(check_3_5_multiple_2(15));
var_dump(check_3_5_multiple_2(30));
