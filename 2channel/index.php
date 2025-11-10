<?php

$comment_array = array();
$pdo = null;
$stmt = null;

//DB接続
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test',"root","root");
} catch(PDOException $e){
    echo $e->getMessage();
}

//フォームを打ち込んだ時
if(!empty($_POST["submitButton"])) {
    $postDate = date("Y-m-d H:i:s");
$stmt = $pdo->prepare("INSERT INTO `bbs-table` (`username`, `comment`, `postDate`) VALUES (:username, :comment, :postDate)");
    $stmt->bindValue(":name", $name);
    $stmt->bindParam(":value", $value);
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
            <?php foreach($comment_array as $comment): ?>
            <article>
                <div class="wrapper">
                    <div class="nameArea">
                        <span>名前:</span>
                        <p class="username"><?php echo $comment["username"]; ?></p>
                        <time>:<?php echo $comment["postDate"]; ?></time>
                    </div>
                    <p class="comment"><?php echo $comment["comment"]; ?></p>
                </div>
            </article>
            <?php endforeach; ?>
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