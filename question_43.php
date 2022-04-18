<?php


$fruits = ['apple', 'apple', 'orange', 'mango', 'mango', 'mango', 'mango'];
  
$result = array();
foreach ($fruits as $v) {
  if (isset($result[$v])) {
    $result[$v] += 1;
  } else {
    $result = array_merge($result, array($v => 1));
  }
}

print_r($result);
echo PHP_EOL;


# array_reduceを使って実装することもできます
# You can write a code by array_reduce
$res = array_reduce($fruits, 'cal', array());
print_r($res);
echo PHP_EOL;

function cal($result, $v)
{
  if (isset($result[$v])) {
    $result[$v] += 1;
  } else {
    $result = array_merge($result, array($v => 1));
  }
  
  return $result;
}
