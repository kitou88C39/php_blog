<?php

$blog = $_POST;

foreach ($blog as $key => $value) {
    echo $key . ':' . $value;
}

?>