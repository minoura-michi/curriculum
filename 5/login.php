<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');
// 関数をまとめたファイルを読み込む
require_once('function.php');

session_start();


$lg_username = '';
$lg_password = '';
$lg_error = '';


if (!empty($_POST["login"])) {
    
    if (empty($_POST["username"])) {
        $lg_username = 'ユーザー名が未入力です。';
    }
    if (empty($_POST["password"])) {
        $lg_password = 'パスワードが未入力です。';
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $name = htmlspecialchars($_POST["username"],ENT_QUOTES);
        $pass = htmlspecialchars($_POST["password"],ENT_QUOTES);

        $pdo = db_connect();

        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row["password"])) {
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];

                header("Location: main.php");
                exit;
            } else {
                $lg_error = 'ユーザー名またはパスワードに誤りがあります。';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ログイン画面</title>
</head>
<body>
    <div class="same_wrapper">
   
    <div class="login_title_wp">
        <h2 class="login_title">ログイン画面</h2>
        <button class="btn" onclick="location.href='register.php'">新規ユーザー登録</button>
    </div>
    <form action="" method="post"><br>
        <input placeholder="ユーザー名" type="text" name="username" id="username" style="width: 250px; height: 30px;"><br>
        <input placeholder="パスワード" type="password" name="password" id="password" style="width: 250px; height: 30px; margin-top: 15px;"><br>
             
        <input class="button" type="submit" name= "login" value="ログイン"><br>
        <font color="red"><?php echo htmlspecialchars($lg_username, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($lg_password, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($lg_error, ENT_QUOTES); ?></font><br>
    </form>
    </div>
</body>
</html>