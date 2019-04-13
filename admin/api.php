<?php
    $signature = $_GET['signature'];
    $timestamp = $_GET['timestamp'];
    $nonce = $_GET['nonce'];

    $tmpArr = array($timestamp,$nonce);
    sort($tmpArr,SORT_STRING);
    $tmpStr = implode($tmpArr);
    if($signature){
        echo true;
    }else{
        echo false;
    }
?>