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



# foreachを使った方法
# the way of foreach
$res_2 = [];
foreach ($arr as $val) {
  array_push($res_2, $val * 2);
}

print_r($res_2);
