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
    $token = 'tl_qy20190314';
    $timestamp = $_REQUEST['timestamp'];
    // 形成数组
    $tmpArr = array($nonce,$timestamp,$token);
    sort($tmpArr);
    $str = sha1(implode($tmpArr));
    if($str == $echostr && $signature){
        // 第一次介入微信
        echo true;
        exit;
    }
?>