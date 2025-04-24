<?php
session_start();
require_once("../../lib/util2.php");
$error=[];
if(!empty($_SESSION['name'])&&!empty($_SESSION['kotoba'])){
  $name =$_SESSION['name'];
  $kotoba = $_SESSION['kotoba'];
} else {
  $error[]="セッションエラーです";
}

function killsession(){
  $_SESSION=[];
  if(isset($_COOKIE[session_name()])){
    echo $_COOKIE[session_name()];
$param = session_get_cookie_params();
print_r($param);
setcookie(session_name(),'',time()-36000,$param['path']);
  }
}

killsession();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php if(count($error)>0){ ?>
<span class ="error"><?php echo implode('<br>',$error); ?></span><br>
<a href="input.html">最初のページに戻る</a>
<?php    } else { ?>
  <span>
  次のように受け付けました。ありがとうございました。
  </span>
  <HR>
  <span>
  名前：<?php echo h($name); ?>
  好きな言葉：<?php echo h($kotoba); ?>
  </span>
<?php } ?>
  </div>
</body>
</html>