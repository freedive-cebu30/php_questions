<?php


$str = '99,100,201,101,9999,2,5,6';
$arr = explode(",", $str);
$res = array_filter($arr, 'minimum_100');
rsort($res);
$answer = join(" ", $res);
print($answer);

function minimum_100($v){
  return $v > 100;
}
