<?php

$blog = $_POST;

if($blog["publish_status"] == "un_publish") {
    

foreach ($blog as $key => $value) {
    echo $key . ':' . htmlspecialchars($value, ENT_QUOTES,'UTF-8');
    }
} else {
    echo '公開中の記事がありません。';
}

?>