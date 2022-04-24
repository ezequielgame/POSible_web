<?php

    class Connection{
        
        public static function connectionData(){
            $dir = dirname(__FILE__);
            $configFile = "config";
            $configs = json_decode(file_get_contents($dir."/".$configFile),true);
            $connectionConfig = $configs["connection"];
            return $connectionConfig; //Array
        }

        public static function connect(){
            $dataList = self::connectionData();
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

        //Get columns from tables
        static public function getColumns($table){

            $database = self::connectionData()["database"];

            return self::connect()
                ->query("select COLUMN_NAME as item from information_schema.columns where table_schema= '$database' and table_name = '$table'")
                ->fetchAll(PDO::FETCH_OBJ);

        }

        //Validate columns
        static public function validColumns($table, $select){
            $selectArray = explode(",",$select);
            if($selectArray[0] != "*"){
                $selectArray = array_unique($selectArray);
            }else{
                array_shift($selectArray);
            }
            $columns = self::getColumns($table);
            $sum = 0;
            foreach ($columns as $key => $value) {
                if(in_array($value->item,$selectArray)){
                    $sum += 1;
                }
            }
            return $sum == count($selectArray);
        }
    }

?>