<?php


    require_once("models/put.model.php");

    class PutController{


        static public function putData($table, $data, $id, $nameId){

            $response = PutModel::putData($table, $data, $id, $nameId);
            self::responser($response);
        }

        // Controller responses
        static public function responser($response){
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