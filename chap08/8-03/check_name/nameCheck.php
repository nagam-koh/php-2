<?php  //処理
require_once("../../lib/util2.php");
checkEncord($_POST);
$isError = false;

if (isset($_POST['name'])) {
  $name = trim($_POST['name']);
  if ($name === "") {
    $isError = true;
    echo "何もしないで送信した";
  }
} else {
  $isError = true;
  echo "空っぽ";
}


?>
<?php
require_once("../../common/header.php");
?>



<body>
  <div>
<?php if($isError): ?>
 <span class="error">名前を入力してください</span>
 <?php moveTo("nameCheckForm.php","戻る") ;?>
<?php else:?>
  <span>
    こんにちは<?php echo h($name); ?>さん。
  </span>
<?php endif;?>

  </div>
  
</body>