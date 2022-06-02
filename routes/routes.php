<?php

    require_once("classes/response.class.php");

    $headers = getallheaders();
    if(!isset($_GET["action"])){
        if(!isset($headers["authorization"]) && $_SERVER["REQUEST_METHOD"] != "GET"){
            echo Response::error401();
            return;
        }
    }
    

    if(!isset($_SERVER["REQUEST_URI"])){
       echo Response::error404();
       return;
    }

    $routesArray = explode("/",$_SERVER["REQUEST_URI"]); // Indexing separate by /
    $routesArray = array_filter($routesArray); // Clean null indexes 
    if(isset($routesArray) && !empty($routesArray)){
        $uri = explode("?",$routesArray[1]); // /table?params
    }
    
    if(isset($uri)){
        $table = $uri[0];
    }
    

    // No request
    if(empty($routesArray)){
        $response = Response::error404();
        echo($response);
    }else if(count($routesArray) == 1){ // Request
        $method = $_SERVER["REQUEST_METHOD"];
        switch($method){
            case "GET":
                include "services/get.php";
                break;
            case "POST":
                include "services/post.php";
                break;
            case "PUT":
                include "services/put.php";
                // $response = Response::error200("Solicitud PUT");
                break;
            case "DELETE":
                include "services/delete.php";
                // $response = Response::error200("Solicitud DELETE");
                break;
        }
    }
?>