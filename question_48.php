<?php


for ($i = 1; $i <= 5; $i++) {
  echo $i, PHP_EOL;
}


$value = 0;
for ($i = 1; $i <= 5; $i++) {
  $value += $i;
}
echo $value, PHP_EOL;


$value = 1;
for ($i = 1; $i <= 5; $i++) {
  $value *= $i;
}
echo $value, PHP_EOL;
