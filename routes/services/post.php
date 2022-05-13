<?php

    require_once("models/connection/connection.php");
    require_once("controllers/post.controller.php");

    if(isset($_POST)){

        $response = new PostController();

        if(isset($_GET["action"]) && $_GET["action"] == "authToken"){
            $suffix = $_GET["suffix"] ?? "user";
            $headers = getallheaders();
            if(isset($headers["authorization"])){
                $token = $headers["authorization"];
                if(Connection::validToken($token, $table, $suffix)){
                    
                    $response->postAuthToken($table, $token, $suffix);

                } else {
                    echo Response::error401();
                }
            }else{
                echo Response::error401();
            }
            return;
        }

        $postColumns = "";
        $actions = array(
            "register", "login", "action" ,"suffix"
        );
        foreach ($_POST as $key => $value) {
            if(!in_array($key,$actions)){
                $postColumns .= $key.",";
            }
        }
        $postColumns = substr($postColumns,0,-1);

        if(Connection::validColumns($table, $postColumns)){

            
            //Registers
            if(isset($_GET["action"]) && $_GET["action"] == "register"){
                $suffix = $_POST["suffix"] ?? "user";

                $postArray = $_POST;
                unset($postArray["suffix"]);

                //Controller response
                $response->postRegister($table, $postArray, $suffix);

            } else if(isset($_GET["action"]) && $_GET["action"] == "login"){
                $suffix = $_POST["suffix"] ?? "user";
                
                $postArray = $_POST;
                unset($postArray["suffix"]);

                //Controller response
                $response->postLogin($table, $postArray, $suffix);

            } else{

                $headers = getallheaders();
            

                if(isset($headers["authorization"])){
                    $token = $headers["authorization"];

                    //Validate token
                    $domain = $_GET["domain"] ?? "users";
                    $suffix = $_GET["suffix"] ?? "user";

                    $validate = Connection::validToken($token, $domain, $suffix);

                    if($validate){
                        //Post
                        $response->postData($table,$_POST);
                    }else {
                        echo Response::error401();
                    }

                }else{
                    echo Response::error401();
                }

                
            }

        }else{
            echo Response::statusResponse(array(
                "status" => 400,
                "result" => [
                    "errorMsg" => "Bad columns"
                ]
                ));
        }
    }

?>