<?php
function team($name,...$members){
  $list = implode("、",$members);
  return "{$name}:{$list}";
  
}

$team1 = team("Peach","佐藤","田中","加藤");
$team2 = team("カボス","博","さえこ");

echo $team1;
echo $team2;