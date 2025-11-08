<?php
//変数
//ブログのタイトル
const ID = 1;
$title = "phpテスト";
$content = "PHPテストです";
$post_at = "2025/11/05";
$tag = ["PHP", "プログラミング"];
$status = true;

const ID2 = 2;
$title2 = "phpテスト2";
$content2 = "PHPテストです2";
$post_at2 = "2025/11/05";
$tag2 = ["PHP2", "プログラミング2"];
$status2 = true;

//ブログ①
$blog1 = array(
    'id' => ID,
    'title' => $title,
    'content' => $content,
    'post_at' => $post,
    'tag' => $tag,
    'status' => $status
);

//配列の取り出し方
//配列の中から添え字orキーを指定する
//echo $blog1['title'];

//ブログ②
$blog2 = [
    'id2' => ID2,
    'title2' => $title2,
    'content2' => $content2,
    'post_at2' => $post2,
    'tag2' => $tag2,
    'status2' => $status2
];

//var_dump($blog2);

//多次元配列
$blogs = [$blog1, $blog2];

//var_dump($blogs);

//ループ処理
//①バリューのみの出力
foreach ($blog1 as $blog) {
    echo $blog;
}

//②キーとバリューを出力
foreach ($blog2 as $key => $value) {
    echo $key . $value;
}

//多次元配列blogsを展開する
foreach ($blogs as $blog) {
    foreach($blog as $value){
        echo $value;
    }
}


?>