
<?php
require_once("../../lib/util2.php");
checkEncord($_POST);
$errors =[];
if(isset($_POST['goukei'])){
$goukei = $_POST['goukei'];
if(!ctype_digit($goukei)){
  $errors[]="合計、整数入力してください";
}
} else {
 $errors[]="未設定";
}

if(isset($_POST['ninzu'])){
    $ninzu =$_POST['ninzu'];

    if(!ctype_digit($ninzu)){
      $errors[]="人数を入力してください";
    }else if($ninzu==0){
      $errors[]= "0では割れません";
   } 
}  else { 
 $errors[]="人数が未設定";
}
?>

<?php
require_once("../../common/header.php");
?>
<body>
  <div>
 <?php
if(count($errors)>0){
printerror($errors);
moveTo("warikanForm.php","戻る");
} else {
  $amari = $goukei%$ninzu;
  $price = ($goukei-$amari)/$ninzu;
  $goukei_fmt = h(number_format($goukei));
  $price_fmt = h(number_format($price));
  $amari= h($amari);
  $ninzu= h($ninzu);
  echo "{$goukei_fmt}円を{$ninzu}人で割り勘します。<br>";
  echo "{$price_fmt}円払えば、不足分は{$amari}円です。";
}
 ?>
  </div>
</body>
</html>