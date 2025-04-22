<?php
require_once("../../common/header.php");
?>
<?php
require_once("../../lib/util2.php");
checkEncord($_POST);
$errors =[];
if(isset($_POST['zip'])){
  $zip = trim($_POST['zip']);
  $pattern = "/~[0-9]{3}-[0-9]{4}$/";
  if(!preg_match($pattern,$zip)){
    $errors[]="郵便番号を正しく入力してください";
  }
} else {
  $errors[]="郵便番号は未入力です。";
}

?>
<body>
  <div>
<?php
if(count($errors)>0){
  printerror($errors);
} else{
  echo "郵便番号は",h($zip),"です";
}

moveTo("zipCheckForm.php","戻る")
?>
  </div>
</body>
</html>