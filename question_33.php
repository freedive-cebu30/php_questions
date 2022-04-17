<?php


$arr1 = array('name' => 'Taro', 'age' => 20, 'height' => 180, 'weight' => 60 );
$arr2 = array('name2' => 'Jiro', 'age2' => 30, 'height2' => 170, 'weight2' => 50 );
$arr3 = array_merge($arr1, $arr2);

print_r($arr3);
