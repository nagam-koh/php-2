<?php
require_once("../../lib/util2.php");
checkEncord($_POST);
$errrors = [];
if (isset($_POST['discount'])) {
  $discount = $_POST['discount'];
  if (!is_numeric($discount)) {
    $errrors = "割引率の数値エラー";
  }
} else {
  echo "割引率が未設定";
}
if (isset($_POST['tanka'])) {
  $tanka = $_POST['tanka'];
  if (!ctype_digit($tanka)) {
    $errrors[] = "単価の数値エラー";
  }
} else {
  $errrors[] = "単価が未設定";
}

if (isset($_POST['kosu'])) {
  $kosu = $_POST['kosu'];
  if (!ctype_digit($kosu)) {
    $errrors[] = "個数は正の値を入力してください";
  }
} else {
  $errrors[] = "個数が未設定";
}
?>
<?php
require_once("../../common/header.php");
?>

<body>
  <div>
    <?php
    if (count($errrors) > 0) {
      printerror($errrors);
    } else {
      $price = $tanka * $kosu;
      $discount_price = floor($price * $discount);
      $off_price = $price - $discount_price;
      $off_per = (1 - $discount) * 100;
      $tanka_fmt = number_format($tanka);
      $discount_price_fmt = number_format($discount_price);
      $off_price_fmt = number_format($off_price);

      echo h("単価：{$tanka_fmt}円、個数：{$kosu}個");
      echo  h("金額：{$discount_price_fmt}円");
      echo h("(割引：-{$off_price_fmt}円、{$off_per}%)OFF");

    ?>


 
    <?php } ?>
  
    <form action="discountForm.php" method="POST">
      <input type="hidden" name="kosu" value="<?php echo $kosu; ?>">
      <ul>
        <li><input type="submit" value="戻る"></li>
      </ul>
    </form>
  </div>
</body>

</html>