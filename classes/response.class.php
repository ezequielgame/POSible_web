<?php

    class Response{
        private static $response = array();

        public static function error405(){
            self::$response["status"] = "405";
            self::$response["result"] = array(
                "errorMsg" => "Not Allowed"
            );
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }

        public static function statusResponse($resultArray = [
            "status"=>200,
            "result"=>array(
                "msg"=>"OK"                
            )
        ]){
            self::$response = $resultArray;
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }

        public static function error400(){
            self::$response["status"] = "400";
            self::$response["result"] = array(
                "errorMsg" => "Bad Request"
            );
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }

        public static function error401(){
            self::$response["status"] = "401";
            self::$response["result"] = array(
                "errorMsg" => "Unauthorized"
            );
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }

        public static function error404(){
            self::$response["status"] = "404";
            self::$response["result"] = array(
                "errorMsg" => "Not Found"
            );
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }
        public static function error409(){
            self::$response["status"] = "409";
            self::$response["result"] = array(
                "errorMsg" => "Duplicate"
            );
            return json_encode(self::$response,http_response_code(self::$response["status"]));
        }

    }

?>