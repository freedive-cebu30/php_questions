<?php


function show_season($month) {
  switch ($month) {
    case 1:
    case 2:
    case 12:
      $season = "冬";
      break;
    case 3:
    case 4:
    case 5:
      $season = "春";
      break;
    case 6:
    case 7:
    case 8:
      $season = "夏";
      break;
    case 9:
    case 10:
    case 11:
      $season = "秋";
      break;
    default:
      $season = "季節不明";
      break;
  }
  
  return $season;
}

print(show_season(1));
echo PHP_EOL;
print(show_season(12));
echo PHP_EOL;
print(show_season(3));
echo PHP_EOL;
print(show_season(6));
echo PHP_EOL;
print(show_season(9));
echo PHP_EOL;
print(show_season(13));
