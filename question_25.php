<?php


$arr = ["Ms. Tanaka", "Mr. Suzuki", "Ms. Akagi", "Mrs. Yoko"];

$res = [];
foreach ($arr as $val) {
  if(str_starts_with($val, 'Ms.')){
    array_push($res, $val); 
  }
}
print_r($res);


$res = [];
foreach ($arr as $val) {
  if(str_ends_with($val, 'i')){
    array_push($res, $val); 
  }
}

print_r($res);
