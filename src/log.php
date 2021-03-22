<?php

function log($info){
    $log = "[" . date("Y-m-d H:i:s") . "] " . $info . ".\r\n";
    $logFile = "log.txt";
    $handle = fopen($logFile, "a+");
    fwrite($handle, $log);
    fclose($handle);
}