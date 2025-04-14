<?php
$kosu = 2;

function price(){
  
  $ryokin = 250 * $kosu;
  echo "{$ryokin}円です。";
}

echo "{$kosu}で";
price();