<?php

$blog = $_POST;

foreach ($blog as $key => $value) {
    echo $key . ':' . htmlspecialchars($value, ENT_QUOTES,'UTF-8');
}

?>