<?php
$pattern = "/赤の玉/";
var_dump(preg_match($pattern,"赤の玉です。"));
var_dump(preg_match($pattern,"青の玉です。"));
var_dump(preg_match($pattern,"赤の箱です。"));