<?php
    // 验证开发者服务器
    /**
     * 获取参数
     * signature
     * nonce
     * token
     * timestamp
     * echostr
     */
    $signature = $_REQUEST['signature'];
    $nonce = $_REQUEST['nonce'];
    $token = 'mrsky';
    $timestamp = $_REQUEST['timestamp'];
    // 形成数组
    $tmpArr = array($nonce,$timestamp,$token);
    sort($tmpArr);
    $str = sha1(implode($tmpArr));
    if($str == $signature && $echostr){
        // 第一次介入微信
        echo $echostr;
        exit;
    }
?>