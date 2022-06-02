<?php
    if(isset($_POST['logemail'])){
        $errores = array();
        if(empty($correo)){
            array_push($errores,"Debes introducir tu correo");
        }
        if(empty($pass)){
            array_push($errores,"Debes introducir la contraseña");   
        }
        if(count($errores) > 0){
            echo('<div class="alert alert-danger m-2">');
            for ($i=0; $i < count($errores); $i++) { 
                echo('<span class="">'.$errores[$i]."</span><br>");
            }
            echo('</div>');
        }else{
            require_once("conn_db.php");
            $correos = mysqli_query($conn,"select * from users where correo='$correo'");
            $passes = mysqli_query($conn,"select * from users where pass='$pass'");
            if(!mysqli_num_rows($correos) > 0){
                array_push($errores,"El correo no está registrado");
            }
            if(!$passes || !mysqli_num_rows($passes) > 0){
                array_push($errores,"Contraseña incorrecta");
            } 
            if(count($errores) > 0){
                array_push($errores,"No se pudo iniciar sesión");
                echo('<div class="alert alert-danger m-2">');
                for ($i=0; $i < count($errores); $i++) { 
                    echo('<span class="">'.$errores[$i]."</span><br>");
                }
                echo('</div>');
            }else{
                require_once("conn_db.php");
                $user = mysqli_query($conn,"select id_user from users where correo = '$correo'");
                $res = mysqli_fetch_array($user,MYSQLI_NUM);
                if(session_status() == PHP_SESSION_DISABLED || session_status() == PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['log-id'] = $res[0];
                header("Location:bienvenido.php");
            }
        }
    }
?>