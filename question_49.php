<?php


function gen_one_to_five() {
  for ($i = 1; $i <= 5; $i++) {
    yield $i;
  }
}


$generator = gen_one_to_five();
foreach ($generator as $value) {
  echo $value, PHP_EOL;
}


$answer = 0;
$generator = gen_one_to_five();
foreach ($generator as $value) {
  $answer += $value;
}
echo $answer, PHP_EOL;


$answer = 1;
$generator = gen_one_to_five();
foreach ($generator as $value) {
  $answer *= $value;
}
echo $answer, PHP_EOL;
