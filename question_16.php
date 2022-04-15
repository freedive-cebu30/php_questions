<?php


# array_sumを使った方法
# the way of max
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$res = max($arr);

print($res);
echo PHP_EOL;


# eachを使った方法
# the way of foreach
$max = 0;
foreach ($arr as $val) {
  if ($val > $max) {
    $max = $val; 
  }
}

print($max);
