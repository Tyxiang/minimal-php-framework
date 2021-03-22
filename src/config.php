<?php
ini_set("display_errors", "Off");
date_default_timezone_set("Asia/Shanghai");
header('Access-Control-Allow-Origin:*');
//header('Access-Control-Allow-Methods:*');  
//header('Access-Control-Allow-Headers:X-Requested-With,X_Requested_With'); 

$data_path = "data/"; // 在函数内要以 $GLOBALS['data_path'] 方式引用
$start_dir = "sm/";

$token_secret = "cjhwe845hd67gosdhf/905hbsy>45h4vbsn4k6mfbxk>ieos-=3-ie904,asb!e";
$token_expired = 3 * 60 * 60; //second

$redis_address = "tyx-1.320.io";
$redis_port = "38007";
$redis_password = "chaojimima";

