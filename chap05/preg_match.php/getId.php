<?php
$id =$_POST['id'];
//$idの形式をチェック
IF(preg_match("/^SOL[0-9]{4})$/",$id)) {
 $msg = "ようこそ";
} else {
  $msg = "不正なIDです";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?= $msg ?></p>
  <p><a href="index.php">戻る</a></p>
</body>
</html>