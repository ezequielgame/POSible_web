<?php

    require_once("models/connection/connection.php");
    require_once("classes/response.class.php");
    require_once("get.model.php");

    class DeleteModel{


        static public function deleteData($table, $id, $nameId){

            // Valid id
            $valid = GetModel::getDataWhere($table, $nameId, $nameId,$id,null,null,null,null);
            
            if(empty($valid)){

                return array(
                    "msg"=>"Invalid ID",
                );

            }

            //Query
            $query = "delete from $table where $nameId = :$nameId";


            $conn = Connection::connect();

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":".$nameId,$id,PDO::PARAM_STR);
        
            try {
                if($stmt->execute()){
                    return array(
                        "msg"=>"Deleted",
                    );
                }
            } catch (PDOException $e) {
                return array(
                    "msg"=>$e
                );
            }
           

        }


    }

?>