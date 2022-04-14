<?php

foreach (range(1, 25) as $number) {
    if ($number % 5 == 0) {
      echo $number;
      echo PHP_EOL;   
    }
}
