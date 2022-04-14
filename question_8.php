<?php


function show_season($month, $country) {
  $season = "季節不明";
  if ($country == "japan") {
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
        break;
    }
  } elseif ($country == "ph") {
    switch ($month) {
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
      case 12:
        $season = "乾季";
        break;
      case 6:
      case 7:
      case 8:
      case 9:
      case 10:
      case 11:
        $season = "雨季";
        break;
      default:
        break;
    }
  }
  
  return $season;
}


print(show_season(1, "japan"));
echo PHP_EOL;
print(show_season(12, "ph"));
echo PHP_EOL;
print(show_season(3, "japan"));
echo PHP_EOL;
print(show_season(6, "ph"));
echo PHP_EOL;
print(show_season(9, "tokyo"));
echo PHP_EOL;
