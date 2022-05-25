<?php

    if(isset($_GET["action"])){

        require_once("conn_db.php");

        $action = $_GET["action"];

        switch($action)
        {
            case "registro":
                $nombre = $_GET["nombre"];
                $correo = $_GET["correo"];
                $pass = $_GET["pass"];
                $escuela = $_GET["escuela"];
                $estatus = $_GET["estatus"];
                require_once("conn_db.php");
                $nuevo = mysqli_query($conn,"insert into users (id_user,nombre,correo,pass,escuela,status) values (NULL,'$nombre','$correo','$pass','$escuela','$estatus')");
                if($nuevo == true){
                    $data[0] = array("respuesta"=>"activado");
                }else{
                    //No se pudo hacer el registro
                }
                break;
            case "login":
                $correo = $_GET["correo"];
                $pass = $_GET["pass"];
                require_once("conn_db.php");
                $correos = mysqli_query($conn,"select * from users where correo='$correo'");
                $passes = mysqli_query($conn,"select * from users where pass='$pass'");
                if(!mysqli_num_rows($correos) > 0 || (!$passes || !mysqli_num_rows($passes) > 0)){
                    // array_push($errores,"No se pudo iniciar sesión");
                }else{
                    $data[0] = array("respuesta"=>"ok");
                }
                break;
        }
        if(isset($data)){
            $datares = array("status"=>50,"registros"=>$data);
        }else{
            $datares = array("status"=>500,"registros"=>"na");
        }
        echo(json_encode($datares));
    }
?>