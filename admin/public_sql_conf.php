<?php
    include 'conf_sql.php';
    $database = new Database();
    $config = $database->database();

    function connect($config){
        $conn = mysqli_connect($config['host'].':'.$config['port'],$config['user'],$config['password']);
        mysqli_select_db($conn,$config['database']);
        mysqli_query($conn,'set names utf8');
    }
?>