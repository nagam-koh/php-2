<?php
$pattern = "/[A-F]-\d-\w/u";
var_dump(preg_match($pattern,"A-5-5"));
var_dump(preg_match($pattern,"F-9-c"));
var_dump(preg_match($pattern,"D-17-10"));
var_dump(preg_match($pattern,"a-2-9"));