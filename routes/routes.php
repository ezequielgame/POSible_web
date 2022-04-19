<?php

    require_once("classes/response.class.php");

    $routesArray = explode("/",$_SERVER["REQUEST_URI"]); // Indexing separate by /
    $routesArray = array_filter($routesArray); // Clean null indexes 
    
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
                $response = Response::statusResponse();
                echo($response);
                // $response = Response::error200("Solicitud POST");
                break;
            case "PUT":
                $response = Response::error400();
                // $response = Response::error200("Solicitud PUT");
                break;
            case "DELETE":
                $response = Response::error400();
                // $response = Response::error200("Solicitud DELETE");
                break;
        }
    }
?>