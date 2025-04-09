<?php
const TAX = 0.08;
$price = 1250 * (1 + TAX);
echo $price, "<br>";
define("MONEY", 1000);
echo __DIR__, "<br>";
echo MONEY, "<br>";
echo PHP_VERSION_ID, '', PHP_OS, "<br>";
