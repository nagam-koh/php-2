<?php
//3教科の得点
$kokugo = 67;
$sansu = 72;
$rika = 85;
//　合計点
$goukei = $kokugo + $sansu + $rika;
//平均点
$heikin = $goukei / 3;
//表示
echo "合計：", $goukei, "<br>", PHP_EOL;
echo "平均点：", $heikin;
