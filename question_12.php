<?php


function string_length($s) {
  return mb_strlen($s);
}

print(string_length("Hello"));
echo PHP_EOL;
print(string_length("今日はいい天気です"));
