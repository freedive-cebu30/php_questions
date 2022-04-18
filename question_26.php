<?php


# array_mapを使った方法
# the way of array_map
$arr = ["Taiwan-tokyo", "Taiwan-osaka", "Taiwan-kyoto"];
$arr2 = array_map('replace_to_tokyo', $arr);
print_r($arr2);

function replace_to_tokyo($v)
{
   return str_replace('Taiwan', 'Japan', $v);
}


# アロー関数を使って書くこともできます。
# You can write a code by Arrow Functions.
print_r(array_map(fn($v) => str_replace('Taiwan', 'Japan', $v), $arr));


# foreachを使った方法
# the way of foreach
$res_2 = [];
foreach ($arr as $v) {
  array_push($res_2, str_replace('Taiwan', 'Japan', $v));
}

print_r($res_2);
