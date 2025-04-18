<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
<?php
require_once("lib/util.php");
$myCode = "<h2>てすと１</h2>";
$myArray = ["a"=>"<a>赤</a>","b"=>"<script>alert('hello')</script>"];
echo '$myCodeの値：',es($myCode);
echo PHP_EOL.PHP_EOL;
echo '$myArrayの値：';
print_r(es($myArray));
?>
</pre>

</body>
</html>