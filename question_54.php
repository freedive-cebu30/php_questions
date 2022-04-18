<?php


$people = [ array('name' => 'Taro_1', 'age' => 20, 'height' => 180, 'weight' => 60 ),
            array('name' => 'Taro_2', 'age' => 40, 'height' => 160, 'weight' => 70 ),
            array('name' => 'Taro_3', 'age' => 50, 'height' => 150, 'weight' => 75 ),
          ];
          
          
foreach ($people as $person) {
  echo 'name ' . $person['name'] . ', age:' . $person['age'];
  echo PHP_EOL;
  echo 'BMI: ' . bmi($person['height'], $person['weight']);
  echo PHP_EOL;
}


function bmi($height, $weight) {
  return $weight / ($height / 100) ** 2;
}
