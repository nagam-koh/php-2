<?php
$pattern = "/[a-z]{4,8}/u";
var_dump(preg_match($pattern,"cycling"));
var_dump(preg_match($pattern,"honorullmarathon"));
var_dump(preg_match($pattern,"run"));
var_dump(preg_match($pattern,"SURF"));

