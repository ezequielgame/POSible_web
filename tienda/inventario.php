<?php

    if(isset($_GET["action"])){

        $campos = array("codigo","nombre","precio");

        if($_GET["action"] == "consulta"){

            $codigo = $_GET["codigo"];

            require_once("conn_db.php");
            
            $consulta_por_codigo = mysqli_query($conn,"select * from productos where codigo=$codigo");

            

            if($consulta_por_codigo){
                if(mysqli_num_rows($consulta_por_codigo) == 1){
                    $datos_consulta = mysqli_fetch_array($consulta_por_codigo,MYSQLI_NUM);
                    $datos_accion = array();
                    for($i = 1; $i < count($datos_consulta);$i++){
                        $datos_accion[$campos[$i-1]] = $datos_consulta[$i];
                    }
                    $datos_accion["precio"] = (float) $datos_accion["precio"];
                    $response = array("status"=>200,"registro"=>$datos_accion);
                }else{
                    $response = array("status"=>404,"registro"=>NULL);        
                }
            }else{
                $response = array("status"=>404,"registro"=>NULL);
            }
        } else if($_GET["action"] == "agregar"){
            $codigo = $_GET["codigo"];
            $nombre = $_GET["nombre"];
            $precio = $_GET["precio"];
            require_once("conn_db.php");
            $consultar_codigos = mysqli_query($conn,"select * from productos where codigo = $codigo");
            if($consultar_codigos){
                if(mysqli_num_rows($consultar_codigos) != 0){
                    $response = array("status"=>403,"registro"=>NULL); //Prohibido, ya se está usando ese codigo
                }else{
                    $resultado_insert = mysqli_query($conn,"insert into productos(id,codigo,nombre,precio) values (NULL,'$codigo','$nombre','$precio')");
                    if($resultado_insert){
                        $id = mysqli_insert_id($conn);
                        $consulta_nuevo = mysqli_query($conn,"select * from productos where id = $id");
                        if($consulta_nuevo){
                            if(mysqli_num_rows($consulta_nuevo) == 1){
                                $datos_agregados = mysqli_fetch_array($consulta_nuevo,MYSQLI_NUM);
                                $datos_accion = array();
                                for($i = 1; $i < count($datos_agregados); $i++){
                                    $datos_accion[$campos[$i-1]] = $datos_agregados[$i];
                                }
                                $datos_accion["precio"] = (float) $datos_accion["precio"];
                                $response = array("status"=>200,"registro"=>$datos_accion);
                            }
                            
                        }
                    }
                }
            }
        }

    }
    if(isset($response)){
        echo(json_encode($response));
    }
