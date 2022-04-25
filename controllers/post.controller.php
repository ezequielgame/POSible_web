<?php


    require_once("models/post.model.php");

    class PostController{


        static public function postData($table, $data){

            $response = PostModel::postData($table, $data);
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