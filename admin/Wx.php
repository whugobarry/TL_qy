<?php
    class Wx
    {
        protected $appid = 'wx41c7adf5b3503b43';

        protected $secret = '9dd785ec58eedb67b6e2cbac8df2b780';
        /**
         * 获取 access_token
         */
        public function getAccessToken(){
            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->secret;
            // 调用 curl 方法完成请求
            $res = $this->curl($url);
            var_dump($res);
        }

        /**
         * 服务器之间的 curl 请求方法
         * @params $url 请求地址
         * @parmas $data 发送请求所携带的数据
         */
        public function curl($url,$data = []){
            // 初始化 curl
            $ch = curl_init();
            // 设置请求的地址
            curl_setopt($ch,CURLOPT_URL,$url);
            // 设置接收返回的参数，不直接展示在页面上
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            // 设置禁止证书校验
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
            // 判断是否为 post 请求方式，如果传递了第二个参数，就代表 post 请求
            if(!empty($data)){
                // 设置请求超时时间
                curl_setopt($ch,CURLOPT_TIMEOUT,30);
                // 设置开启 post
                curl_setopt($ch,CURLOPT_POST,1);
                // 传递 post 数据
                curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
            }
            // 定义一个空字符串，用来接收返回的数据
            $result = '';
            if(curl_exec($ch)){
                $result = curl_multi_getcontent($ch);
            }
            // 关闭 curl
            curl_close($ch);
            // 将得到的数据返回
            return $result;
        }
    }
    

?>