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


# array_filterを使って関数型っぽく書くこともできます。
# You can write a code like Functional type
print_r(array_filter($arr, fn($v) => str_starts_with($v, 'Ms.')));
print_r(array_filter($arr, fn($v) => str_ends_with($v, 'i')));
