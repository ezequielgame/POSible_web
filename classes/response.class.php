<?php

    class Response{
        private static $response = [
            "status" => "ok",
            "result" => array()
        ];

        public static function error405(){
            self::$response["status"] = "error";
            self::$response["result"] = array(
                "errorId" => "405",
                "errorMsg" => "Not Allowed"
            );
            return json_encode(self::$response,http_response_code(self::$response["result"]["errorId"]));
        }

        public static function error200($string = "Wrong Data"){
            self::$response["status"] = "error";
            self::$response["result"] = array(
                "errorId" => "200",
                "errorMsg" => $string
            );
            return json_encode(self::$response,http_response_code(self::$response["result"]["errorId"]));
        }

        public static function error400(){
            self::$response["status"] = "error";
            self::$response["result"] = array(
                "errorId" => "400",
                "errorMsg" => "Bad Request"
            );
            return json_encode(self::$response,http_response_code(self::$response["result"]["errorId"]));
        }

        public static function error404(){
            self::$response["status"] = "error";
            self::$response["result"] = array(
                "errorId" => "404",
                "errorMsg" => "Not Found"
            );
            return json_encode(self::$response,http_response_code(self::$response["result"]["errorId"]));
        }

    }

?>