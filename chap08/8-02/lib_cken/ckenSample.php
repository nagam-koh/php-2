<?php

$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string,'Shift-JIS');
$encoding =mb_internal_encoding();
if(mb_check_encoding($sjis_string)){
  echo '配列の値はutf-8です';
  } else {
  echo '配列の値はutf-8ではありません';
}