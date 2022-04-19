<?php

    // MODEL

    // Requirements
    require_once("connection/connection.php");

    class GetModel{

        // Just Select
        static public function getData($table, $select,$orderBy,$orderMode,$page,$pageSize){

            if($orderBy != null && $orderMode != null){
                $query = "select $select from $table order by $orderBy $orderMode";
            }else{
                $query = "select $select from $table";
            }

            if($page != null && $pageSize != null){
                $lowLimit = ($pageSize * $page - 1) - ($pageSize - 1);
                $query .= " limit $lowLimit, $pageSize";
            }

            $_connection = new Connection();

            $stmt = $_connection->connect()->prepare($query);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

        // Where Clause
        static public function getDataWhere($table, $select,$linkTo,$equalTo,$orderBy,$orderMode,$page,$pageSize){

            $linkToArray = explode(",",$linkTo);
            $equalToArray = explode("_",$equalTo);

            $linkToText = "";

            if(count($linkToArray)>1){
                foreach ($linkToArray as $key => $value) {
                    if($key > 0){
                        $linkToText .= "and ".$value." = :".$value." ";
                    }
                }
            }
            
            if($orderBy != null && $orderMode != null){
                $query = "select $select from $table where $linkToArray[0] = :$linkToArray[0] $linkToText order by $orderBy $orderMode";
            }else{
                $query = "select $select from $table where $linkToArray[0] = :$linkToArray[0] $linkToText";
            }

            if($page != null && $pageSize != null){
                $lowLimit = ($pageSize * $page - 1) - ($pageSize - 1);
                $query .= " limit $lowLimit, $pageSize";
            }
            
 
            $_connection = new Connection();
            $stmt = $_connection->connect()->prepare($query);
            
            foreach ($linkToArray as $key => $value) {
                $stmt->bindParam(":".$value, $equalToArray[$key], PDO::PARAM_STR);
            }

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

    }
