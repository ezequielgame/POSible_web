<?php

    require_once("models/connection/connection.php");
    require_once("controllers/put.controller.php");

    if(isset($_GET["id"]) && isset($_GET["nameId"])){


        // Get data from form
        $data = array();
        parse_str(file_get_contents('php://input'),$data); //String
        // print_r($data); // to array

        $columns = "";

        foreach ($data as $key => $value) {
            $columns .= $key.",";
        }

        $columns .= $_GET["nameId"];

        // $columns = substr($columns,0,-1);

        if(Connection::validColumns($table, $columns)){

            //Controller response
            $response = new PutController();
            $response->putData($table,$data, $_GET["id"],$_GET["nameId"]);

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