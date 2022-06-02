<?php
    if(session_status() == PHP_SESSION_DISABLED || session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_SESSION['log-id'])) {
        $id_user = $_SESSION['log-id'];
        require_once("conn_db.php");
        $user = mysqli_query($conn,"select * from users where id_user = $id_user");
        $vals = mysqli_fetch_array($user,MYSQLI_NUM);
        $nombre = $vals[1];
        $pass = $vals[2];
        $correo = $vals[3];
        $escuela = $vals[4];
        $estatus = $vals[5];
    }else{
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Bienvenida</title>
</head>
<body>
    
    <div class="center-wrap d-flex justify-content-center">
        <div class="section text-center d-block">
            <h4 class="mb-4 pb-3">Bienvenid@ <?php echo $nombre ?> </h4>
            <ul class="list-group">
                <li class="list-group-item">Contraseña <?php echo $pass ?> </li>
                <li class="list-group-item">Correo <?php echo $correo ?> </li>
                <li class="list-group-item">Escuela <?php echo $escuela ?></li>
                <li class="list-group-item">Estatus <?php echo $estatus ?> </li>
            </ul>
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