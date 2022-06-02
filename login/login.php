<?php
    if(session_status() == PHP_SESSION_DISABLED || session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_SESSION['from-reg'])) {
        $se_registro = $_SESSION['from-reg'];
        $correo = $_SESSION['reg-correo'];
    }

    if (isset($_POST['logemail'])){
        $correo = $_POST['logemail'];
        $pass = $_POST['logpass'];
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <div class="center-wrap d-flex justify-content-center">

        <div class="section text-center d-block">
            <?php
                if(isset($se_registro)){
                    if ($se_registro == 1) {
                        echo ('<div class="alert alert-success">');
                        echo ('<p>Te registraste con éxito, incia sesión para entrar</p>');
                        echo ('</div>');
                        $_SESSION['from-reg'] = 0;
                    }
                }
            ?>
            <h4 class="mb-4 pb-3">Inicio de sesión</h4>
            <form action="login.php" method="post">
                <div class="mt-2">
                    <input type="email" name="logemail" class="form-control" placeholder="Correo Electrónico" value="<?php if (isset($correo)) echo $correo ?>" id="logemail" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input type="password" name="logpass" class="form-control" placeholder="Tu contraseña" id="logpass" autocomplete="off">
                </div>
                <input type="submit" value="Iniciar sesión" class="btn btn-primary mt-4 form-style"></input>
            </form>
            <?php
                if (!isset($se_registro)) {
                    echo ("<br><br><a href=\"registro.php\">¿No tienes cuenta? Regístrate</a>");
                }
            ?>
            <?php
                include("validar-login.php");
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