<?php
$namelist =["赤井一郎","伊藤五郎","上野信二"];
echo "<ol>";
  foreach($namelist as $value){
    echo "<li>",$value,"さん</li>";
}
  echo "</ol>";