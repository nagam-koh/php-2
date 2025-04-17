<?php
$pattern = "/(090|080|070)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/";
var_dump(preg_match($pattern,"090-1234-5678yume"));
var_dump(preg_match($pattern,"00080-1234-5678"));
var_dump(preg_match($pattern,"07012345678"));
var_dump(preg_match($pattern,"12345678"));

