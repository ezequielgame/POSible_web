<?php

    require_once("models/connection/connection.php");
    require_once("controllers/put.controller.php");

    if(isset($_GET["id"]) && isset($_GET["nameId"])){


        // Get data from form
        $data = array();
        parse_str(file_get_contents('php://input'),$data); //String
        // print_r($data); // to array

        $columns = "";

        $exceptions = array("suffix","domain");

        foreach ($data as $key => $value) {
            if(!in_array($key,$exceptions)){
                $columns .= $key.",";
            }
        }

        $columns .= $_GET["nameId"];

        // $columns = substr($columns,0,-1);

        if(Connection::validColumns($table, $columns)){

            $headers = getallheaders();
            

            if(isset($headers["authorization"])){
                $token = $headers["authorization"];
                //Validate token
                $domain = $_GET["domain"] ?? "users";
                $suffix = $_GET["suffix"] ?? "user";

                $validate = Connection::validToken($token, $domain, $suffix);

                if($validate){

                    //Controller response
                    $response = new PutController();
                    $response->putData($table,$data, $_GET["id"],$_GET["nameId"]);
                    
                }else {
                    echo Response::error401();
                }

            }else{
                echo Response::error401();
            }

            

        }else{
            echo Response::statusResponse(array(
                "status" => 403,
                "result" => [
                    "errorMsg" => "Bad columns"
                ]
                ));
        }

    }


?>