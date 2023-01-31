<?php 
$port_answer = $_POST['port_a'];
$language_answer = $_POST['language_a'];
$command_answer = $_POST['command_a'];
$name = $_POST['name'];

$port_seikai= $_POST['port_kotae'];
$language_seikai = $_POST['language_kotae'];
$command_seikai = $_POST['command_kotae'];

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function kotaeawase($a,$b){
    if($a == $b){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}

?>
<link rel="stylesheet" href="style.css">
<p class="anser_top"><!--POST通信で送られてきた名前を表示--><?php echo $name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示--> 
<?php
kotaeawase($port_answer,$port_seikai);
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
kotaeawase($language_answer,$language_seikai);
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
kotaeawase($command_answer,$command_seikai);
?>