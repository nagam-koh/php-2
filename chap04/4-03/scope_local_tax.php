<?
$tax = 0.1;

function taxprice($tanka,$kosu){
  $ryoukin = $tanka*$kosu*(1+ $tax);
  echo "{$ryoukin}円です。";
}
taxprice(tanka:250,kosu:4);
echo "税込み".$tax*100,"%";