<?php
$myARRAY =["a","b","c","d","e"];
$removed = array_splice($myARRAY,1);
echo '実行後:$myARRAY'.PHP_EOL;
print_r($myARRAY);
echo'戻り:$removed',PHP_EOL;
print_r($removed);