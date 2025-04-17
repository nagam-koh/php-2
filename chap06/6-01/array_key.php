<?php
$goods =[
  "id" =>"R56",
  "size"=> "M",
  "price"=> 2340
];
$goods['price']=3500;

echo "id:".$goods['id'];
echo "サイズ",$goods['size'];
echo "価格：".number_format($goods['price'])."円";
//print_r($goods);

?>
<html>
  <body>
    <script>
      'use strict'
      const goods ={
        id:"R56",
        size:"M",
        price:2356
      };;

    
      console.log(goods.id)
      console.log(goods['id'])
      </script>
  </body>
</html>