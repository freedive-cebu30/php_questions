<?php


$people = [ array('name' => 'Taro_1', 'age' => 20, 'height' => 180, 'weight' => 60 ),
            array('name' => 'Taro_2', 'age' => 40, 'height' => 160, 'weight' => 70 ),
            array('name' => 'Taro_3', 'age' => 50, 'height' => 150, 'weight' => 75 ),
          ];
          
          
foreach ($people as $person) {
  $super_man = new SuperMan($person['name'],
                            $person['age'],
                            $person['height'],
                            $person['weight']);
  
  $super_man->display_status();
  $super_man->display_bmi();
  $super_man->fly();
}


class Person {
  public $name;
  public $age;
  public $height;
  public $weight;

  public function __construct($name, $age, $height, $weight)
  {
    $this->name = $name;
    $this->age = $age;
    $this->height = $height;
    $this->weight = $weight;
  }
  
  public function display_status()
  {
    echo 'name ' . $this->name . ', age:' . $this->age;
    echo PHP_EOL;
  }
  
  protected function bmi()
  {
    return $this->weight / ($this->height / 100) ** 2;
  }
  
  public function display_bmi()
  {
    echo 'BMI: ' . $this->bmi();
    echo PHP_EOL;
  }
}

class SuperMan extends Person {
  
  public function fly()
  {
    echo 'name ' . $this->name . ' flying';
    echo PHP_EOL;
  }
}
