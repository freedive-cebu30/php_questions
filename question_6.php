<?php


function fizz_buzz($n) {
  if ($n % 15 == 0) {
    return 'FizzBuzz';
  } elseif ($n % 5 == 0) {
    return 'Buzz';
  } elseif ($n % 3 == 0) {
    return 'Fizz';
  } else {
    return $n;
  }
}

print(fizz_buzz(2));
echo PHP_EOL;
print(fizz_buzz(3));
echo PHP_EOL;
print(fizz_buzz(15));
