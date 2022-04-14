<?php


function cal_abs($number_1, $number_2) {
  $answer = $number_1 - $number_2;
  return $answer < 0 ? abs($answer) : $answer;
}

print(cal_abs(10, 5));
echo PHP_EOL;
print(cal_abs(10, 13));
