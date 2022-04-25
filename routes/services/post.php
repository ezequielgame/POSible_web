<?php

    require_once("models/connection/connection.php");
    require_once("controllers/post.controller.php");

    if(isset($_POST)){

        $postColumns = "";
        foreach ($_POST as $key => $value) {
            $postColumns .= $key.",";
        }
        $postColumns = substr($postColumns,0,-1);

        if(Connection::validColumns($table, $postColumns)){

            //Controller response
            $response = new PostController();
            $response->postData($table,$_POST);


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