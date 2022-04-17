<?php

    class Reponse{
        private $response = [
            "status" => "ok",
            "result" => array()
        ];

        public function error405(){
            $this->response["status"] = "error";
            $this->response["result"] = array(
                "errorId" => "405",
                "errorMsg" => "Not Allowed"
            );
            return $this->response;
        }

        public function error200($string = "Wrong Data"){
            $this->response["status"] = "error";
            $this->response["result"] = array(
                "errorId" => "200",
                "errorMsg" => $string
            );
            return $this->response;
        }

        public function error400(){
            $this->response["status"] = "error";
            $this->response["result"] = array(
                "errorId" => "400",
                "errorMsg" => "Bad Request"
            );
            return $this->response;
        }

    }

?>