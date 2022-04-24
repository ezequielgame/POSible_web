<?php

    // VIEW


    //Requirements
    require_once("controllers/get.controller.php");

    // Get routes in URI (routesArray)
    $uri = explode("?",$routesArray[1]); // /table?params
    $table = $uri[0];
    $select = $_GET["select"] ?? "*"; // Default *

    $orderBy = $_GET["orderBy"] ?? null;
    $orderMode = $_GET["orderMode"] ?? "asc";

    $page = $_GET["page"] ?? null;
    $pageSize = $_GET["pageSize"] ?? null;
     
    $response = new GetController();
    // Where Clause
    if(isset($_GET["linkTo"]) && isset($_GET["equalTo"])){
        $linkTo = $_GET["linkTo"];
        $equalTo = $_GET["equalTo"];
        if(isset($_GET["rel"]) && isset($_GET["relType"])){
            $rel = $_GET["rel"];
            $relType = $_GET["relType"];
            $response->getRelationDataWhere($table, $select,$linkTo,$equalTo,$rel,$relType,$orderBy,$orderMode,$page,$pageSize); //Table relation with where
        } else{
            $response->getDataWhere($table,$select,$linkTo,$equalTo,$orderBy,$orderMode,$page,$pageSize);
        }
    } else if(isset($_GET["rel"]) && isset($_GET["relType"])){ // Tables relations whitout where
        $rel = $_GET["rel"];
        $relType = $_GET["relType"];
        $response->getRelationData($table, $select,$rel,$relType,$orderBy,$orderMode,$page,$pageSize);
    } else{ // Select
        $response->getData($table, $select,$orderBy,$orderMode,$page,$pageSize);
    }
    
?>