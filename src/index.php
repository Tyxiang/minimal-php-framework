<?php
// include 'config.php';
// include 'conn.php';
include 'request.php';
include 'response.php';
// include 'log.php';

//GET root
if ($method == "GET" && $parameters[0] == "" && !$parameters[1]) {
    $content["title"] = "root"; 
    $content["main"] = "main";
    response_template("root", $content);
}

//POST
if ($method == "POST") {
    $content = file_get_contents('php://input');

}

//GET 
if ($method == "GET") {
    
}

//PUT
if ($method == "PUT") { 
    $content = file_get_contents('php://input');
}

//DELETE
if ($method == "DELETE") { 

}

response_failure_json('not support!');
