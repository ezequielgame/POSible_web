<?php

    class Connection{
        
        public function connectionData(){
            $dir = dirname(__FILE__);
            $configFile = "config";
            $configs = json_decode(file_get_contents($dir."/".$configFile),true);
            $connectionConfig = $configs["connection"];
            return $connectionConfig;
        }

        public function connect(){
            $dataList = $this->connectionData();
            try{
                $connection = new PDO(
                    "mysql:host=".$dataList["server"].";dbname=".$dataList["database"],
                    $dataList["user"],
                    $dataList["password"]
                );
                $connection->exec("set names utf8");
            }catch(PDOException $e){
                die("Error: ".$e->getMessage());
            }
            return $connection;
        }
    }

?>