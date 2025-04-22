<?php
require_once("../../lib/util2.php");
checkEncord($_POST);

if (isset($_POST["mile"])) {
  $isNum = is_numeric($_POST["mile"]);
  if ($isNum) {
    $mile = $_POST["mile"];
    $error = "";
  } else {
    $mile = "";
    $error = '<span class="error">数値を入力してください</span>';
  }
} else {
  $isNum = false;
  $mile = "";
  $error = "";
}
require_once("../../common/header.php");
?>

<body>
  <div>
    <form action="#" method="POST">
      <ul>
        <li>
          <label>マイルをキロに換算
            <input type="text" name="mile" value="<?php echo h($mile); ?>">
          </label>
          <?php echo $error; ?>
        </li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
    <?php
    if ($isNum) {
      echo "<HR>";
      $kilometer = $mile * 1.6039344;
      echo h("{$mile}マイルは{$kilometer}kmです。");
    }
    ?>
  </div>
</body>

</html>