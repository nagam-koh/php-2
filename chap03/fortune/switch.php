<?php
$num = mt_rand(1, 5);
switch ($num) {
  case 1:
    $fortune = "大吉";
    break;
  case 2:
    $fortune = "中吉";
    break;
  case 3:
    $fortune = "吉";
    break;
  case 4:
    $fortune = "凶";
    break;
  case 5:
    $fortune = "大凶";
    break;
}
echo $fortune;
