<?php

modulus(5);
modulus(7);
modulus(26);


function modulus($num){
  foreach (range(1, 25) as $number) {
    if ($number % $num == 0) {
      echo $number;
      echo PHP_EOL;   
    }
  }
}
