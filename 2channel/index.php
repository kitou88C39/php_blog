<?php

if(!empty($_POST["submitButton"])){
    echo $_POST["username"];
    echo $_POST["comment"];
}

//DB接続
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test',"root","root");
} catch(PDOException $e){
    echo $e->getMessage();
}

//DBからコメントデータを取得
$sql = "SELECT `id`, `username`, `comment`, `postDate` FROM `bbs-table`;";
$pdo->query("$sql");

//DB接続を閉じる
$pdo = null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP掲示板</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">PHP掲示板アプリ</h1>
        <div class="boardwrapper">
            <article>
                <div class="wrapper">
                    <div class="nameArea">
                        <span>名前:</span>
                        <p class="username">shincode</p>
                        <time>:2022/07/15</time>
                    </div>
                    <p class="comment">手書きコメントです。</p>
                </div>
            </article>
        <form class="formWrapper">
            <div>
                <input type="submit" value="書き込む" name="submitButton">
                <label for="">名前:</label>
                <input type="text" name="username">
            </div>
            <div>
                <textarea class="commentTextArea" name="comment"></textarea>
            </div>
        </form>
    </div>
</body>
</html>