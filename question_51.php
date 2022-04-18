<?php


$small_letter_start = 97;
$small_letter_count = 26;

$small_letter_random = "";
$big_letter_random = "";
foreach (range(1, 10) as $number) {
  $small_letter_random .= chr(mt_rand(97, 122));
  $big_letter_random .= chr(mt_rand(65, 90));
}

echo $small_letter_random;
echo PHP_EOL;
echo $big_letter_random;
echo PHP_EOL;



# この方法は、アスキーコードの概念を使っていません
# I don't use the concept of ASCII code
$str_small_letters = 'abcdefghijklmnopqrstuvwxyz';
$str_big_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';


echo create_randam_string($str_small_letters);
echo PHP_EOL;
echo create_randam_string($str_big_letters);


function create_randam_string($str) {
  for ($i = 0; $i < 10; $i++) {
    $shuffled = substr(str_shuffle($str), 0, 10);
  }
  
  return $shuffled;
}
