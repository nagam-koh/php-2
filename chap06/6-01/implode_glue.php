<?php
$data = ["赤井一路","伊藤 淳","上野信二"];
$glue= "さん";
$namelist = implode($glue,$data);
$namelist .="さん";
print_r($namelist);