<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP掲示板</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">PHP掲示板アプリ</h1>
        <div class="boardwrapper">
            <article>
                <div class="wrapper">
                
                </div>
            </article>
        <form class="formWrapper">
            <div>
                <input type="submit" value="書き込む">
                <label for="">名前:</label>
                <input type="text" name="username">
            </div>
            <div>   
                <textarea class="commentTextArea"></textarea>
            </div>
        </form>
    </div>
</body>
</html>