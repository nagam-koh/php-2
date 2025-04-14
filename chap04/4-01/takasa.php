<?php
$kyori = 20;
$kakudo =32 *pi()/180;
$takasa = $kyori* tan($kakudo);
$takasa = round($takasa*10)/10;

echo "樹の高さは{$takasa}です。";
