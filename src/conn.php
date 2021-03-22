<?php
try {
    $redis = new Redis();
    $redis->connect($GLOBALS["redis-address"], $GLOBALS["redis-port"]);
    $redis->auth($GLOBALS["redis-password"]);
    //$redis->ping();
} catch (Exception $e) {
    response_failure_json($e->getMessage());
}