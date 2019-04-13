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
    $echostr = $_REQUEST['echostr'];
    // 形成数组
    $tmpArr = array($nonce,$timestamp,$token);
    sort($tmpArr);
    $str = sha1(implode($tmpArr));
    if($str == $signature && $echostr){
        // 第一次介入微信
        echo $echostr;
        exit;
    } else {
        // 获取微信推送的 post 数据
        $postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
        var_dump($postArr);
    }
?>