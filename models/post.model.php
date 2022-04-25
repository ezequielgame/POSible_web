<?php

    require_once("models/connection/connection.php");
    require_once("classes/response.class.php");

    class PostModel{


        static public function postData($table, $data){


            // echo($table);
            // print_r($data);

            $columns = "";
            $values = "";
            foreach ($data as $key => $value) {
                $columns .= $key.",";
                $values .= ":".$key.",";
            }

            
            $columns = substr($columns,0,-1);
            $values = substr($values,0,-1);
            
            $query = "insert into $table ($columns) values ($values)";

            $conn = Connection::connect();

            $stmt = $conn->prepare($query);

            foreach ($data as $key => $value) {
                $stmt->bindParam(":".$key,$data[$key],PDO::PARAM_STR);
            }
            
            try {
                if($stmt->execute()){
                    return array(
                        "msg"=>"Inserted",
                        "lastId"=>$conn->lastInsertId()
                    );
                }
            } catch (PDOException $e) {
                return array(
                    "msg"=>$e
                );
            }

            // if($stmt->execute()){
            //     return array(
            //         "msg"=>"Inserted"
            //     );
            // }else{
            //     echo Response::statusResponse(array(
            //         "status" => 400,
            //         "total" => 0,
            //         "result" => [
            //             "msg" => Connection::connect()->errorInfo()
            //         ]
            //         )
            //     );
            // }

        }


    }

?>