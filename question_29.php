<?php

$res = [];
foreach (range(1, 20) as $number) {
  array_push($res, rand(1, 10));
}

$answer = array_unique($res);
sort($answer);
print_r($answer);


# 配列に追加する前に、値が入っているのかチェックしています
# このやり方の方が、メモリを必要としません。
# We check the value before inserting value
# This way is better to reduce using memory
$res = [];
foreach (range(1, 20) as $number) {
  $v = rand(1, 10);
  if( ! in_array($v, $res)){
    array_push($res, $v); 
  }
}

sort($res);
print_r($res);
