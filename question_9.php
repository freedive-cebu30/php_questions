<?php

# どちらのメソッドでも大丈夫です
# Either method is fine

function bmi($height, $weight) {
  return $weight / ($height / 100) ** 2;
}


function bmi_2($height, $weight){
  return 10000 * $weight / $height ** 2;
}


print(bmi(187, 62));
echo PHP_EOL;
print(bmi_2(187, 62));
