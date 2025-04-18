<!DOCTYPE html>
<html lang="ja">
<he
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>フォーム処理の入門</title>
</head>
<body>
  <div>
<?php
$tanka = $_POST["tanka"];
$kosu = $_POST["kosu"];
$price = (int)$tanka*(int)$kosu;
$tanka = number_format($tanka);
$kosu= number_format($kosu);
echo "単価{$tanka}円×{$kosu}個は{$price}円です。"
?>

  </div>
  
</body>
</html>