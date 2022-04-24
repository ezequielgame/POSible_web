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

        // Get data from related tables
        static public function getRelationData($table, $select,$rel,$relType,$orderBy,$orderMode,$page,$pageSize){ 


            $relArray = explode(",",$rel); //Related tables names in plural categories, branches, etc...
            $relTypeArray = explode(",",$relType); //Related tables suffixes category, branch, etc...


            if(count($relArray) > 1){
                $innersText = "";
                //$relArray[0] = Main table categories, items, etc...
                //$relTypeArray[0] = Main table suffix category, item, etc...
                foreach ($relArray as $key => $value) {
                    // $key = index   =>   $value = related table name
                    // for each related table
                    // inner join RelatedTableName
                    // on MainTable.id_RelatedTableSuffix_MainTableSuffix
                    // = RelatedTableName.id_RelatedTableSuffix
                    if($key > 0){
                        $innersText .= " inner join ".$value
                                        ." on ".$relArray[0].".id_".$relTypeArray[$key]."_".$relTypeArray[0]
                                        ." = ".$value.".id_".$relTypeArray[$key]." ";
                    }
                }
            }

            if($orderBy != null && $orderMode != null){
                if(isset($innersText)){
                    $query = "select $select from $table $innersText order by $orderBy $orderMode";
                } else {
                    $query = "select $select from $table order by $orderBy $orderMode";
                }
                
            }else{
                if(isset($innersText)){
                    $query = "select $select from $table $innersText";
                } else{
                    $query = "select $select from $table";
                }
                
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

        // Get data from related tables where...
        static public function getRelationDataWhere($table, $select,$linkTo,$equalTo,$rel,$relType,$orderBy,$orderMode,$page,$pageSize){ 
            
            //Wheres
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

            //Relations
            $relArray = explode(",",$rel); //Related tables names in plural categories, branches, etc...
            $relTypeArray = explode(",",$relType); //Related tables suffixes category, branch, etc...


            if(count($relArray) > 1){
                $innersText = "";
                //$relArray[0] = Main table categories, items, etc...
                //$relTypeArray[0] = Main table suffix category, item, etc...
                foreach ($relArray as $key => $value) {
                    // $key = index   =>   $value = related table name
                    // for each related table
                    // inner join RelatedTableName
                    // on MainTable.id_RelatedTableSuffix_MainTableSuffix
                    // = RelatedTableName.id_RelatedTableSuffix
                    if($key > 0){
                        $innersText .= " inner join ".$value
                                        ." on ".$relArray[0].".id_".$relTypeArray[$key]."_".$relTypeArray[0]
                                        ." = ".$value.".id_".$relTypeArray[$key]." ";
                    }
                }
            }else{
                return null;
            }

            if($orderBy != null && $orderMode != null){
                if(isset($innersText)){
                    $query = "select $select from $table $innersText where $linkToArray[0] = :$linkToArray[0] $linkToText  order by $orderBy $orderMode";
                } else {
                    $query = "select $select from $table where $linkToArray[0] = :$linkToArray[0] $linkToText order by $orderBy $orderMode";
                }
                
            }else{
                if(isset($innersText)){
                    $query = "select $select from $table $innersText where $linkToArray[0] = :$linkToArray[0] $linkToText ";
                } else{
                    $query = "select $select from $table where $linkToArray[0] = :$linkToArray[0] $linkToText";
                }
                
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
