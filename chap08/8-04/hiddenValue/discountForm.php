<?php
require_once("../../lib/util2.php");
checkEncord($_POST);
if (isset($_POST['kosu'])){
  $kosu =$_POST['kosu'];
if(!ctype_digit($kosu)){
  $kosu = "";
}
} else {
  $kosu = "";
}

?>
<?php 
$title = "金額の計算";
require_once("../../common/header.php");

?>
<body>
  <div>
    <?php
$discount= 0.8;
$off = (1-$discount)*100;
if($discount>0){
  echo "<h2>このページでの購入は{$off}%OFFになります。</h2>";
  $tanka = 2900;
  $tanka_fmt= number_format($tanka);
}
 ?>
<form action="discount.php" method="POST">
  <input type="hidden" name="discount" value="<?= $discount;?>">
  <input type="hidden" name="tanka" value="<?= $tanka ;?>">


<ul>
  <li><label>単価：<?php echo $tanka_fmt; ?>円</label></li>
  <li><label>個数：
    <input type="number" name="kosu" value="<?php echo h($kosu);?>">
  </label></li>
  <li><input type="submit" value="計算する"></li>
</ul>
</form>
  </div>
</body>
</html>