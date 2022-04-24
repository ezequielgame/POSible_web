<?php

    // CONTROLLER

    // Requirements
    require_once("models/get.model.php");
    require_once("classes/response.class.php");


    class GetController{

        //Just Select
        static public function getData($table, $select,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getData($table,$select,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        //Related table
        static public function getRelationData($table, $select,$rel,$relType,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getRelationData($table, $select,$rel,$relType,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        static public function getRelationDataWhere($table, $select,$linkTo,$equalTo,$rel,$relType,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getRelationDataWhere($table, $select,$linkTo,$equalTo,$rel,$relType,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        //Where clause
        static public function getDataWhere($table, $select,$linkTo,$equalTo,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getDataWhere($table,$select,$linkTo,$equalTo,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        // Controller responses
        public function responser($response){
            if(empty($response)){
                $jsonResponse = Response::error404();
            }else{
                $jsonResponse = Response::statusResponse(array(
                    "status" => 200,
                    "total" => count($response),
                    "result" => $response
                ));
            }
            echo($jsonResponse);
        }

        // Search %like%
        static public function getDataLike($table, $select,$linkTo,$search,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getDataLike($table,$select,$linkTo,$search,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        //Search %like% relation tables
        static public function getRelationDataLike($table, $select,$linkTo,$search,$rel,$relType,$orderBy,$orderMode,$page,$pageSize){

            $response = GetModel::getRelationDataLike($table, $select,$linkTo,$search,$rel,$relType,$orderBy,$orderMode,$page,$pageSize);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        //Range between
        static public function getDataRange($table,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$page,$pageSize,$filterTo,$filterIn){

            $response = GetModel::getDataRange($table,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$page,$pageSize,$filterTo,$filterIn);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

        static public function getRelDataRange($table,$select,$rel,$relType,$linkTo,$between1,$between2,$orderBy,$orderMode,$page,$pageSize,$filterTo,$filterIn){

            $response = GetModel::getRelDataRange($table,$select,$rel,$relType,$linkTo,$between1,$between2,$orderBy,$orderMode,$page,$pageSize,$filterTo,$filterIn);

            $controllerResponse = new GetController();
            $controllerResponse->responser($response);

        }

    }

?>