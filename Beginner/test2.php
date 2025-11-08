<?php
//変数
//ブログのタイトル
$title = "phpテスト";
$content = "PHPテストです";
$post_at = "2025/11/05";
$tag = ["PHP", "テスト", "ブログ"];
$status = true;

//ブログ①
$blog = array(
    'id' => ID,
    'title' => $title,
    'content' => $content,
    'post_at' => $post,
    'tag' => $tag,
    'status' => $status
);

//配列の取り出し方
//配列の中から添え字orキーを指定する
echo $blog1['title'] . $blog1["content"] . $blog1["status"];



?>