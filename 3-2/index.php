<?php
$fruit = ['りんご' => 150,'みかん' => 150, 'もも' => 1000];
$kosu = [2,1,3];

$i = 0;

function keisan($a,$b){
    return $a*$b;
}  

foreach($fruit as $key => $tanka){
    $kazu = $kosu[$i];
    $i++;
    $goukei = keisan($tanka,$kazu);
    echo $key."は".$goukei."円です。";
    echo '<br>';
 }

?>