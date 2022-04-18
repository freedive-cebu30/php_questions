<?php


$fruits = [ array('apple' => 100, 'orange' => 50, 'mango' => 30),
            array('apple' => 200, 'orange' => 250, 'mango' => 230),
            array('apple' => 300, 'orange' => 350, 'mango' => 330),
          ];
  
$total = 0;        
foreach ($fruits as $v) {
  $total += $v['apple'];
}

print($total);
echo PHP_EOL;


# array_reduceを使って実装することもできます
# You can write a code by array_reduce
$res = array_reduce($fruits, 'sum', 0);
print($res);
echo PHP_EOL;

function sum($total, $item)
{
    $total += $item['apple'];
    return $total;
}


# アロー関数を使って実装することもできます
# You can write a code by Arrow function
$res = array_reduce($fruits, fn($total, $item) => $total += $item['apple'], 0);
print($res);
