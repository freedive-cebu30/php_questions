<?php


function show_string($str) {
  print(substr($str, 0, 1));
  echo PHP_EOL;
  print(substr($str, -1));
  echo PHP_EOL;
  print(substr($str, 0, 2));
  echo PHP_EOL;
  print(substr($str, 0, 3));
}


$str = "world";
show_string($str);
