<?php
require_once 'util.php';
?>
<?php
$name =$_POST['name'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= htmlspecialchars($name, ENT_QUOTES,'utf-8');?>
  <p><a href="index.php">戻る</a></p>
  <script>alert(document.cookie)</script>


<script>alert('ウィルス発見\n至急お電話ください\n000-1234-5678')</script>
</body>
</html>