<?php
$number = $_POST['number'];
$array = str_split($number);
$keys = array_rand($array,1);
$num = $array[$keys];


?>
<p><?php echo date("Y/m/d");?>の運勢は</p>
<p>選ばれた数字は<?php echo $num;?></p>
<?php
if($num == 0){
    echo '凶';
}elseif($num == 1){
    echo '小吉';
}elseif($num == 2){
    echo '小吉';
}elseif($num == 3){
    echo '小吉';
}elseif($num == 4){
    echo '中吉';
}elseif($num == 5){
    echo '中吉';
}elseif($num == 6){
    echo '中吉';
}elseif($num == 7){
    echo '吉';
}elseif($num == 8){
    echo '吉';
}elseif($num == 9){
    echo '大吉';
}
?>