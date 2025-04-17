<?php
$colors = array();
$colors[0] = "赤";
$colors[1] = "青";
$colors[5] = "紫";
$colors[] = "赤";
array_push($colors,"黄色");
//var_dump($colors[2]);
$b = &$colors;
$colors[3]="黒";
print_r($b);
