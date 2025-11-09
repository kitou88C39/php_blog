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
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>サンプルHTMLページ</title>
</head>
<body>
    <h1>ようこそ！</h1>
    <p>これはサンプルのHTMLページです。</p>
</body>
</html>