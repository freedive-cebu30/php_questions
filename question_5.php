<?php


$message = check_alcohol(19);
print("あなたの場合は、お酒は${message}です");
echo PHP_EOL;

$message = check_alcohol_if(20);
print("あなたの場合は、お酒は${message}です");


function check_alcohol($age) {
  $message = $age > 19 ?  'OK' : 'NG';
  
  return $message;
}

function check_alcohol_if($age){
  if ($age > 19){
    return 'OK';
  } else {
    return 'NG';
  }
}
