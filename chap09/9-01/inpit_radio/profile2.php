<?php
require_once("../../lib/util2.php");
checkEncord($_POST);
$error = [];
if (isset($_POST["sex"])) {
  $sexValues = ["男性", "女性"];
  $issex = in_array($_POST["sex"], $sexValues);
  if ($issex) {
    $sex = $_POST["sex"];
  } else {
    $issex = "error";
    $error[] = "性別に入力エラーがありました";
  }
} else {
  $issex = false;
  $sex = "男性";
}
var_dump($sex);
if (isset($_POST["marriage"])) {
  $marriageValues = ["独身", "既婚", "同棲中"];
  $isMarriage = in_array($_POST["marriage"], $marriageValues);
  if ($isMarriage) {
    $marriage = $_POST["marriage"];
  } else {
    $marriage = "error";
    $error[] = "結婚にエラーがありました";
  }
  
} else {
  $isMarriage = false;
  $marriage = "独身";
}
var_dump($marriage);
?>
<?php
require_once("../../common/header.php");
?>

<body>
  <div>
    <form action="" method="POST">
      <ul>
        <li><span>性別：</span>
          <label><input type="radio" name="sex" value="男性">男性</label>
          <label><input type="radio" name="sex" value="女性">女性</label>
        </li>
        <li><span>結婚：</span>
          <label><input type="radio" name="marriage" value="独身">独身</label>
          <label><input type="radio" name="marriage" value="既婚">既婚</label>
          <label><input type="radio" name="marriage" value="同棲中">同棲中</label>
        </li>
        <li><input type="submit" value="送信する"></li>
      </ul>
    </form>
    <?php
    $issubmitted = $issex && $isMarriage;
    if ($issubmitted) {
      echo "<HR>";
      echo h("あなたは{$sex}、{$marriage}です。");
    }
    if (count($error) > 0) {
      printerror($error);
    }
    ?>

  </div>
</body>

</html>