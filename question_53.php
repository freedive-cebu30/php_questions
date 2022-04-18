<?php


$string1 = 'aaa';
$hashed_str1 = hash('md5', $string1);
$hashed_str2 = hash('sha256', $string1);
$hashed_str3 = hash('sha512', $string1);

echo $hashed_str1;
echo PHP_EOL;
echo $hashed_str2;
echo PHP_EOL;
echo $hashed_str3;
