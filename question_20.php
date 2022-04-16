<?php


# array_mapを使った方法
# the way of array_map
function double($v)
{
   return $v * 2;
}

$arr = array(1, 2, 3, 4, 5);
$arr2 = array_map('double', $arr);
print_r($arr2);

# アロー関数を使って書くこともできます。
# You can write a code by Arrow Functions.
print_r(array_map(fn($value) => $value * 2, $arr));


# foreachを使った方法
# the way of foreach
$res_2 = [];
foreach ($arr as $val) {
  array_push($res_2, $val * 2);
}

print_r($res_2);
