<?php

$blog = $_POST;

if($blog["publish_status"] == "un_publish") {
    
foreach ($blog as $key => $value) {
    echo $key . ':' . htmlspecialchars($value, ENT_QUOTES,'UTF-8');
    }

} elseif($blog['publish_status'] === 'publish') {
    echo '記事がありません。';

} else {
    echo '記事がありません。';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
</head>
<body>
    <h2><?php $blog['title']; ?></h2>
    <p>投稿日:<?php $blog['post_at']; ?></p>
    <p>カテゴリ:<?php $blog['category']; ?></p>
    <br>
    <p><?php $blog['content']; ?></p>
</body>
</html>