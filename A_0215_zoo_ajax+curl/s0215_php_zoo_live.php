<?php
header('Access-Control-Allow-Origin: *');
// 使livesever可以直接使用
// 原理:利用php從網路上拉資料 (console看的到) -> header(*) 開放權限 -> 再將資料丟入前端

//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://data.taipei/api/v1/dataset/5048d475-7642-43ee-ac6f-af0a368d63bf?scope=resourceAquire");
//設定AGENT
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);

//關閉連線
curl_close($ch);
