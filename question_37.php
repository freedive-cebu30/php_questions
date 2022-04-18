<?php


$arr = [array('name' => 'Taro_1', 'age' => 20, 'height' => 180, 'weight' => 60, 'country' => 'Japan'),
        array('name' => 'Taro_2', 'age' => 30, 'height' => 170, 'weight' => 65 ),
        array('name' => 'Taro_3', 'age' => 40, 'height' => 160, 'weight' => 70, 'country' => 'Taiwan'),
        array('name' => 'Taro_4', 'age' => 20, 'height' => 160, 'weight' => 75, 'country' => 'Japan' ),
        array('name' => 'Taro_5', 'age' => 60, 'height' => 160, 'weight' => 80, 'country' => 'Japan' ),
        array('name' => 'Taro_6', 'age' => 50, 'height' => 150, 'weight' => 85, 'country' => 'Japan' ),
        ];


uasort($arr, 'compare');
print_r($arr);


function compare($v1, $v2) {
  if ($v1['height'] == $v2['height']) {
    return $v2['age'] <=> $v1['age'];
  }
  
  return ($v1['height'] < $v2['height']) ? -1 : 1;
}
