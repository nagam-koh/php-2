<?php
$pattern = "/[赤青緑]の玉/";
var_dump(preg_match($pattern,"赤の玉です。"));
var_dump(preg_match($pattern,"青の玉です。"));
var_dump(preg_match($pattern,"緑の玉です。"));
var_dump(preg_match($pattern,"緑の箱です。"));