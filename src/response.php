<?php
function response_failure_json($string_message){
    $response = [];
    $response["success"] = false;
    $response["message"] = $string_message;
    header("Content-type:application/json;charset='utf-8'");
    echo json_encode($response);
    exit();
}

function response_success_json($array){
    $response = [];
    $response = $array;
    $response["success"] = true;
    header("Content-type:application/json;charset='utf-8'");
    echo json_encode($response);
    exit();
}

function response_template($template, $content){
    include "template/" . $template . ".php";
    exit();
}

function response_html($html){
    header("Content-type:text/html;charset='utf-8'");
    echo $html;
    exit();
}

function response_csv($csv){
    header("Content-type:text/html;charset='utf-8'");
    echo $csv;
    exit();
}

function response_success_value($value){
    header("Content-type:text/html;charset='utf-8'");
    echo $value;
    exit();
}
