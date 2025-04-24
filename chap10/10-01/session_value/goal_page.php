<?php
session_start();
require_once("../../lib/util2.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    if(isset($_SESSION["coupon"])){
      $coupon = $_SESSION["coupon"];
      $couponLIst = ["ABC123","XYZ999"];
      if(in_array($coupon,$couponLIst)){
        echo h($coupon),"は正しいクーポンコードです";
      }else{
echo h($coupon),"は誤ったクーポンコードです。";
      }
    } else{
      echo "セッションエラーです。";
    }
    ?>
  </div>
</body>
</html>