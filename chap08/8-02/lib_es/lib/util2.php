<?php
function h(string $data){
  if(is_array($data)){
    return htmlspecialchars($data,ENT_QUOTES,'utf-8');
  }
}