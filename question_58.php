<?php


function fizz_buzz($n) {
  try {
    if ($n < 1) {
      throw new Exception('1より小さい値を入れないで下さい');  
    }
    if ($n % 15 == 0) {
      return 'FizzBuzz';
    } elseif ($n % 5 == 0) {
      return 'Buzz';
    } elseif ($n % 3 == 0) {
      return 'Fizz';
    } else {
      return $n;
    }
  } catch (Exception $e) {
    echo 'catch Exception', PHP_EOL;
    echo('getMessage is ' . $e->getMessage()), PHP_EOL;
    
    return $n;
  }
}

print(fizz_buzz(-1));
