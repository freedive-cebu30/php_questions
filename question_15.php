<?php


# array_sumを使った方法
# the way of array_sum
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$res = array_sum($arr);

print($res);
echo PHP_EOL;


# eachを使った方法
# the way of foreach
$sum = 0;
foreach ($arr as $val) {
  $sum += $val;
}

print($sum);
