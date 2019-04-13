<?php
    $signature = $_GET['signature'];
    $timestamp = $_GET['timestamp'];
    $nonce = $_GET['nonce'];
    $token = 'tlqy_20190314';
    $echostr = $_GET['echostr'];

    $tmpArr = array($timestamp,$nonce,$token);
    sort($tmpArr,SORT_STRING);
    $tmpStr = sha1(implode($tmpArr));
    if($tmpStr == $signature && $echostr){
        echo true;
        exit;
    }else{
        echo false;
    }
?>