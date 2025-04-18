<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><a href="doGet.php?data=wanko">リンク</a></p>

  <form action="doGet.php" method="GET">
    <input type="text" name="data" >
    <input type="submit" name="送信">
  </form>
  <hr>
  <form action="doPost.php" method="POST">
    <input type="text" name="data" >
    <input type="submit" name="送信">
  </form>
</body>
</html>