<?php

    if (isset($_POST['regname'])) {
        $nombre = $_POST['regname'];
        $correo = $_POST['regemail'];
        $pass1 = $_POST['regpass'];
        $pass2 = $_POST['regpass2'];
        $escuela = $_POST['regescuela'];
        $estatus = $_POST['regestatus'];
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body>

    <div class="center-wrap d-flex justify-content-center">
        <div class="section text-center d-block">
            <h4 class="mb-4 pb-3">Registro</h4>
            <form action="registro.php" method="post">
                <div>
                    <input type="text" name="regname" class="form-control" placeholder="Tu nombre" value="<?php if (isset($nombre)) echo $nombre ?>" id="regname" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input type="email" name="regemail" class="form-control" placeholder="Correo Electrónico" value="<?php if (isset($correo)) echo $correo ?>" id="regemail" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input type="password" name="regpass" class="form-control" placeholder="Tu contraseña"  id="regpass" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input type="password" name="regpass2" class="form-control" placeholder="Confirma contraseña"  id="regpass2" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input type="text" name="regescuela" class="form-control" placeholder="Escuela" value="<?php if (isset($escuela)) echo $escuela ?>" id="regescuela" autocomplete="off">
                </div>
                <div class="mt-2">
                    <select class="form-select" name="regestatus" id="regestatus">
                    <option class="form-control">Estatus</option>
                    <?php
                        for ($i=1; $i <= 5; $i++) { 
                            $sel = "";
                            if(isset($estatus)){
                                if($estatus == $i){
                                    echo('<option class="form-style" selected value="'.$i.'">'.$i.'</option>');
                                }else{
                                    echo('<option class="form-style" value="'.$i.'">'.$i.'</option>');
                                }
                            }
                            else{
                                echo('<option class="form-style" value="'.$i.'">'.$i.'</option>');
                            }
                        }  
                    ?>
                </div>
                
                <input type="submit" value="Registrarse" class="btn btn-primary mt-4 form-style"></input>
            </form>
            <br><br><a href="login.php">¿Ya tienes cuenta? Inicia sesión</a><br>
            <?php
                include("validar-registro.php");
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top fixed-bottom">
    <div class="col-md-4 d-flex align-items-center">
    <span class="text-muted">&copy; 2022 Ezequiel Gavidia Mejía Programación distribuida y en la Nube 6V</span>
    </div>
</footer>

</html>