
<?php
$data = $_POST['data'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>doPostphpです</h1>
  <p><?= $data; ?></p>
  <p><a href="index.php">戻る</a></p>
</body>
</html>