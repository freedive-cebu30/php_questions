<?php


$arr = [array('name' => 'Taro_1', 'age' => 20, 'height' => 180, 'weight' => 60, 'country' => 'Japan'),
        array('name' => 'Taro_2', 'age' => 30, 'height' => 170, 'weight' => 65 ),
        array('name' => 'Taro_3', 'age' => 40, 'height' => 160, 'weight' => 70, 'country' => 'Taiwan'),
        array('name' => 'Taro_4', 'age' =>  50, 'height' => 150, 'weight' => 75, 'country' => 'Japan' )];


print_r(array_filter($arr, fn($v) => array_key_exists('country', $v)));
