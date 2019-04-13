<?php
    include 'conf_sql.php';
    $database = new Database();
    $config = $database->database();
    var_dump($config);
?>