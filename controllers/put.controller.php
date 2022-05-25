<?php


    require_once("models/put.model.php");

    class PutController{


        static public function putData($table, $data, $id, $nameId){

            $response = PutModel::putData($table, $data, $id, $nameId);
            
            if(is_string($response)){
                echo $response;
                return;
            }

            if(isset($response) && $response != null){
                self::responser($response);
            } else { //Controller already response
                return;
            }
            
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