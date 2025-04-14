<?php
function twice(float $var):int{
  $var *= 2;
  return $var;
}

$num = 10.8;
$result = twice($num);
echo "{$num}の二倍は、",$result;

function triangle($a,$b){
 return $a*$b/2;
}

function circle($rad){
  return $rad*$rad*pi();
}