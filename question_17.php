<?php


# array_mapを使った方法
# the way of array_map
$arr = ["ruby", "php", "python", "java"];
$res = array_map('ucfirst', $arr);

print_r($res);
echo PHP_EOL;


# foreachを使った方法
# the way of foreach
$res_2 = [];
foreach ($arr as $val) {
  array_push($res_2, ucfirst($val));
}

print_r($res_2);
