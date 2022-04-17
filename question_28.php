<?php


$str = "ph-cebu, japan-tokyo, japan-osaka, Taiwan-taipei, japan-kyoto";
$arr = explode(",", $str);

$res = [];
foreach ($arr as $val) {
  $remove_space_val = trim($val);
  if(str_starts_with($remove_space_val, 'japan-')){
    array_push($res, $remove_space_val); 
  }
}

$big_letter_res = array_map('ucfirst', $res);
$anwser = implode(",", $big_letter_res);
var_dump($anwser);



# このよう関数型っぽく書くこともできます
# You can write a code like Functional code.
$result = array_map('trim', $arr);
$result2 = array_filter($result, 'get_japan');
$result3 = array_map('ucfirst', $result2);
$anwser2 = implode(",", $result3);
var_dump($anwser2);


function get_japan($v) {
  return str_starts_with($v, 'japan-');
}
