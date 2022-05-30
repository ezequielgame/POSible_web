<?php
    if(isset($_POST['regname'])){
        $errores = array();
        if(empty($nombre)){
            array_push($errores,"Debes introducir tu nombre");
        }
        if(empty($correo)){
            array_push($errores,"Debes introducir tu correo");
        }
        if(empty($pass1)){
            array_push($errores,"Debes introducir una contraseña");   
        }else if(strlen($pass1) < 8){
            array_push($errores,"La contraseña debe tener minimo 8 caracteres");
        }else if (!(preg_match('/[A-Za-z]/', $pass1) && preg_match('/[0-9]/', $pass1))){
            array_push($errores,"La contraseña debe contener números y letras");
        }
        if(empty($pass2)){
            array_push($errores,"Debes confirmar tu contraseña");
        }
        if(!empty($pass1) && !empty($pass2)){
            if($pass1 != $pass2){
                array_push($errores,"Las contraseñas no coinciden");
            }
        }
        if(empty($escuela)){
            array_push($errores,"Debes introducir tu escuela");
        }
        if($estatus == "Estatus"){
            array_push($errores,"Debes seleccionar el estatus");
        }
        require_once("conn_db.php");
        $correos = mysqli_query($conn,"select * from users where correo ='".$correo."'");
        if(mysqli_num_rows($correos) > 0){
            array_push($errores,"El correo ya esta siendo usado");
        }
        if(count($errores) > 0){
            echo('<div class="alert alert-danger m-2">');
            for ($i=0; $i < count($errores); $i++) { 
                echo('<span class="">'.$errores[$i]."</span><br>");
            }
            echo('</div>');
        }else{
            require_once("conn_db.php");
            // $nuevo = mysqli_query($conn,"insert into users (id_user,nombre,correo,pass,escuela,status) values (NULL,'$nombre','$correo','$pass1','$escuela','$estatus')");
            if($nuevo == true){
                if(session_status() == PHP_SESSION_DISABLED || session_status() == PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['from-reg'] = 1;
                $_SESSION['reg-correo'] = $correo;
                header("Location:login.php");    
            }else{
                echo('<div class="alert alert-danger m-2">');
                echo('<span>"No se pudo hacer el registro'.$nuevo.'</span>');
                echo('</div>');
            }
        }
    }
?>