<?php
$suji = $_POST['number'];
$suji = mt_rand(0, 9);


?>
<p><?php echo date("Y/m/d");?>の運勢は</p>
<p>選ばれた数字は<?php echo $suji;?></p>
<?php
if($suji == 0){
    echo '凶';
}elseif($suji == "1"){
    echo '小吉';
}elseif($suji == "2"){
    echo '小吉';
}elseif($suji == "3"){
    echo '小吉';
}elseif($suji == "4"){
    echo '中吉';
}elseif($suji == "5"){
    echo '中吉';
}elseif($suji == "6"){
    echo '中吉';
}elseif($suji == "7"){
    echo '吉';
}elseif($suji == "8"){
    echo '吉';
}elseif($suji == "9"){
    echo '大吉';
}
?>