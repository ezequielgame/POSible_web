<?php

    // CONTROLLER

    // Requirements
    require_once("models/get.model.php");
    require_once("classes/response.class.php");


    class GetController{

        //Just Select
        static public function getData($table, $select){

            $response = GetModel::getData($table,$select);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        //Where clause
        static public function getDataWhere($table, $select,$linkTo,$equalTo){

            $response = GetModel::getDataWhere($table,$select,$linkTo,$equalTo);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        // Controller responses
        public function responser($response){
            if(empty($response)){
                $jsonResponse = Response::error404();
            }else{
                $jsonResponse = Response::statusResponse(array(
                    "status" => 200,
                    "total" => count($response),
                    "result" => $response
                ));
            }
            echo($jsonResponse);
        }

    }

?>