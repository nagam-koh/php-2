<?php
require_once("../../common/header.php");
?>
<body>
  <div>
    <form action="nameCheck.php" method="POST">
      <ul>
        <li><label>名前：<input type="text" name="name"></label></li>
        <li><input type="submit" value="送信する"></li>
      </ul>
    </form>
  </div>
</body>
</html>