<?php
require_once "Robot.php";

$robot1 = new Robot("taro");
$robot1->run();
echo $robot1->name;
echo $robot1->energy;

$robot2 = new Robot("hanako");
$robot2->run();
echo $robot2->name;

echo "走って使う燃料は".Robot::FUEL."です";
$robot1->status();



