<?php
function charge($rank,$days=1 ){
  $ryoukin   = match($rank){
      "A"=>15000*$days,
      "B"=>12000*$days,
      default =>8000*$days,
  };
  return $ryoukin;
}
$kingaku1 = charge("B",2);
$kingaku2 = charge("A");
echo "金額１は{$kingaku1}円";
echo "金額２は{$kingaku2}円";