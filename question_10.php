<?php


# どちらの関数でも大丈夫です
# Either function is fine

function cal_cast($number) {
  $s_number = (string)$number;
  $three_times_number = str_repeat($s_number, 3);
  $i_number = (int)$three_times_number;

  return $number + $i_number;
}

function cal($number) {
  $three_times_number = str_repeat($number, 3);

  return $number + $three_times_number;
}

print(cal_cast(3));
echo PHP_EOL;
print(cal_cast(4));
echo PHP_EOL;
print(cal_cast(10));
echo PHP_EOL;

print(cal(3));
echo PHP_EOL;
print(cal(4));
echo PHP_EOL;
print(cal(10));
echo PHP_EOL;
