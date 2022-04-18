<?php

    // MODEL

    // Requirements
    require_once("connection/connection.php");

    class GetModel{

        // Just Select
        static public function getData($table, $select){

            $query = "select $select from $table";

            $_connection = new Connection();

            $stmt = $_connection->connect()->prepare($query);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

        // Where Clause
        static public function getDataWhere($table, $select,$linkTo,$equalTo){

            $query = "select $select from $table where $linkTo = :$linkTo";

            $_connection = new Connection();

            $stmt = $_connection->connect()->prepare($query);
            $stmt->bindParam(":".$linkTo,$equalTo,PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

    }

?>