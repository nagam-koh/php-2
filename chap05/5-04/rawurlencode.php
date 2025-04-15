<?php
$page ="PHP 8 サンプル.html";
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";
echo $url;