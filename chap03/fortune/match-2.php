<?php
$num = mt_rand(1, 100);
$fortune = match(true) {
  $num <20 =>
    $fortune = "大吉",
  
$num<40 =>
    $fortune = "中吉",
$num<60 => $fortune = "吉",
$num<80 => $fortune = "凶",
$num<100 =>$fortune = "大凶",
};
echo $fortune;
