<?php
require_once("../../lib/util2.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
echo "クッキーを確認しました。","<br>";
if(isset($_COOKIE["message"])){
  $message = $_COOKIE["message"];
  echo "クッキーの値：",h($message),"<hr>";
  echo '<a href="delete_cookie.php">クッキーを削除する</a>';

}else {
  echo "クッキーはありません","<hr>";
  echo '<a href="set_cookie.php">クッキーを設定するページ</a>';
}

?>
</body>
</html>