<?php
function es(array| string $data,string $charset='utf-8'):mixed{
  if(is_array($data)){
    return array_map(__METHOD__,$data);
  } else{
    return htmlspecialchars($data,ENT_QUOTES,$charset);
  }
}