<?php

    class Connection{
        

        private $server;
        private $user;
        private $password;
        private $database;
        private $port;
        private $connection;


        public function __construct() {
            $dataList = $this->connectionData();
            foreach($dataList as $key => $value){
                $this->server=$value["server"];
                $this->user=$value["user"];
                $this->password=$value["password"];
                $this->database=$value["database"];
                $this->port=$value["port"];
            }
            $this->connection= new mysqli($this->server,$this->user,$this->password,$this->database,$this->port);
            if($this->connection->connect_errno){
                echo("Bad connection");
            }
        }

        private function connectionData(){
            $dir = dirname(__FILE__);
            $configFile = "config";
            $jsonData = file_get_contents($dir."/".$configFile);
            return json_decode($jsonData,true);
        }

        private function convertToUtf8($array){
            array_walk_recursive($array,function(&$item,$key){
                if(!mb_detect_encoding($item,"utf-8",true)){
                    $item = utf8_encode($item);
                }
            });
            return $array;
        }

        public function getData($query){
            $results = $this->connection->query($query);
            $resultArray = array();
            foreach($results as $key){
                $resultArray[] = $key; //Array push
            }
            return $this->convertToUtf8($resultArray);
        }

        public function nonQuery($sqlstr){
            $results = $this->connection->query($sqlstr);
            return $this->connection->affected_rows;
        }

        //Insert
        public function nonQueryId($sqlStr){
            $results = $this->connection->query($sqlStr);
            $rows =  $this->connection->affected_rows;
            if($rows >= 1){
                return $this->connection->insert_id;
            }else{
                return 0;
            }
        }

        // Crypt
        protected function encrypt($string){
            return password_hash($string, PASSWORD_DEFAULT);
        }



    }

?>