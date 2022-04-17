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
