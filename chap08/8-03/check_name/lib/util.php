<?php
function h(string $data){
 return htmlspecialchars($data,ENT_QUOTES,'utf-8');
  }


function checkEncord(array|string $data){
  if(!mb_check_encoding($data,'UTF-8')){
    $err = "Encording Error!";
    exit($err);
     }
}

function moveTo(string $path,string $msg){
 ?>
  <form action="<?php $path ; ?>" method="POST">
    <input type="submit" value="<?php echo $msg ;?>">
  </form>
  <?php
}