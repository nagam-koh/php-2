<?php
if(isset($_POST['name'])){
$goal = $_POST['name'];
echo $goal ."です。";
} else {
  echo "nameは空です";
}
?>