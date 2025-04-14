<?php
$a = $_POST['bottom'];
$b = $_POST['height'];


function triangle($a,$b) {
  return $a*$b/2;
  }

  $area = triangle($a,$b);
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?= $area ?></p>
  <p>底辺<?= $a ?>高さ<?= $b ?>の三角形の面積は<?= $area ?>cm</p>
  <a href="index.php">戻る</a>
</body>
</html>

