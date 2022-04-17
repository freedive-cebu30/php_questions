<?php


# array_mapを使った方法
# the way of array_map
function delete_hyphen($v)
{
   return str_replace('-', '', $v);
}

$arr = ["090-1111-22223", "090-1111-22224", "090-1111-22225"];
$arr2 = array_map('delete_hyphen', $arr);
print_r($arr2);


# アロー関数を使って書くこともできます。
# You can write a code by Arrow Functions.
print_r(array_map(fn($v) => str_replace('-', '', $v), $arr));


# foreachを使った方法
# the way of foreach
$res_2 = [];
foreach ($arr as $v) {
  array_push($res_2, str_replace('-', '', $v));
}

print_r($res_2);
