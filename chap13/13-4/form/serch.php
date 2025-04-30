<?php
require_once("../../lib/util2.php");
$gobackURL="serchform.php";

if(!mb_check_encoding($_POST,'UTF-8')){
header("location:{$gobackURL}");
exit();
}
if(empty($_POST)){
  header("location:{$gobackURL}");
exit();
} else if(!isset($_POST["name"])||($_POST["name"===""])){
  header("location:{$gobackURL}");
exit();
}

$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';

$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>

<body>
  <div>
    <?php

$name= $_POST["name"];

    
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました";
      $sql = "SELECT*FROM member where "%{$name}%"";
      $stm = $pdo->prepare($sql);



      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
      echo "<thead><tr>";
      echo " <th>","ID","</th>";
      echo " <th>","名前","</th>";
      echo "<th>","年齢","</th>";
      echo " <th>","性別","</th>";
      echo "</tr></thead>";
      echo "<tbody>";


      foreach ($result as $row) {
        echo " <tr>";
        echo "<td>",h($row['id']),"</td>";
        echo "<td>",h($row['name']),"</td>";
        echo "<td>",h($row['age']),"</td>";
        echo "<td>",h($row['sex']),"</td>";
        echo " </tr>";
      }
      echo "</tbody>";
      echo " </table>";
    } catch (PDOException $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>

</body>

</html>