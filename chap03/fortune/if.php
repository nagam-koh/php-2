<?php
$num = mt_rand(1, 99);
if ($num < 20) {
  $fortune = "大吉";
} else if ($num < 40) {
  $fortune = "中吉";
} else if ($num < 60) {
  $fortune = "吉";
} else if ($num < 80) {
  $fortune = "凶";
} else if ($num < 100) {
  $fortune = "大凶";
}
echo $fortune;
