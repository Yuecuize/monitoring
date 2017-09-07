<?php

// 1. 初始化一个cURL会话/
$ch = curl_init();

//    // 2. 设置请求选项, 包括具体的url
curl_setopt($ch, CURLOPT_URL, "http://monitoring-assistance.app/en/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_ANY);

//
//    // 3. 执行一个cURL会话并且获取相关回复
$response = curl_exec($ch);
dd($response);
echo($response);
//
//    // 4. 释放cURL句柄,关闭一个cURL会话
curl_close($ch);

