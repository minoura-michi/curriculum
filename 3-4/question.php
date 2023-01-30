
<form action="answer.php" method="post">
<?php
$name = $_POST['my_name'];?>

<input type="hidden" name="name" value="<?=$name;?>">

<!-- //POST送信で送られてきた名前を受け取って変数を作成 -->

<!-- //①画像を参考に問題文の選択肢の配列を作成してください。 -->

<!-- //② ①で作成した、配列から正解の選択肢の変数を作成してください -->


<link rel="stylesheet" href="style.css">
<!--フォームの作成 通信はPOST通信で-->

<p class="q_top">お疲れ様です<?php echo $name;?><!--POST通信で送られてきた名前を出力-->さん</p>


<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
$port = [80,22,20,21];

foreach ($port as $value1){?>
    <input type="radio" name="port_a" value="<?php echo $value1;?>">
 <?php echo $value1;
}
?>



<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php

$language = ['PHP','Python','JAVA','HTML'];

foreach ($language as $value2){?>
    <input type="radio" name="language_a" value="<?php echo $value2;?>">
   <?php echo $value2;
}

?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php

$command = ['join','select','insert','update'];

foreach ($command as $value3){?>
    <input type="radio" name="command_a" value="<?php echo $value3;?>">
   <?php echo $value3;
}
?>
<br><br>
 <input type="submit" value="回答する" />

</form>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
