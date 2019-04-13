<?php 
    $url = 'https://api.weixin.qq.com/cgi-bin/token';
    $data = ['grant_type'=>'client_credential','appid'=>'wx41c7adf5b3503b43','secret'=>'9dd785ec58eedb67b6e2cbac8df2b780'];

    $access_token = getAccess($url,$data);
    echo $access_token;

    function getAccess($url,$data){
        if($url == ''){
            return false;
        }
        $url = $url.'?'.http_build_query($data);
        $cur = curl_init((string)$url);
        curl_setopt($cur,CURLOPT_HEADER,false);
        curl_setopt($cur,CURLOPT_RETURNTRANSFER,true);
        $data = curl_exec($cur);
        return $data;
    }
?>