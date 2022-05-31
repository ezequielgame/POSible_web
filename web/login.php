<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="img/shop.ico" type="image/x-icon">
    <title>Hola</title>
</head>

<body>

    <div class="container mb-2">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Iniciar sesión</h2>
                <div class="card my-6">

                    <div class="card-body cardbody-color p-lg-5">
                        <div class="text-center">
                            <img src="img/shop_512px.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3 bg-pos-primary p-3" width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Correo electrónico">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                        <div class="text-center"><button type="button" class="btn btn-color px-5 mb-5 w-100" name="login" onclick="Login()">Login</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">¿No tienes cuenta? <a href="#" class="text-dark fw-bold">Regístrate</a>
                        </div>
                    </div>

                    <script>
                        function ValidForm(){
                            var valid = true
                            if(document.getElementById('email').value == ""){
                                alert("Debes introducir tu correo");
                                valid = false;
                            }
                            if(document.getElementById('password').value == ""){
                                alert("tienes que introducir tu contraseña");
                                valid = false;
                            }
                            return valid;
                        }
                        function Login() {
                            if(ValidForm()){
                                var email = document.getElementById('email').value;
                            var pass = document.getElementById('password').value;
                            console.log(email);
                            console.log(pass);
                            fetch('http://192.168.100.2/users?action=login', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded',
                                        'Accept': '*/*',
                                        'User-Agent': 'Header set Access-Control-Allow-Origin "http://localhost:50000/"'
                                    },
                                    body: new URLSearchParams({
                                        'email_user': email,
                                        'password_user': pass
                                    })
                                })
                                .then((response) => response.json())
                                .then(data => {
                                    if(typeof data.status !== 'undefined'){
                                        if(data.status == 401){
                                            alert("Usuario o contraseña no válidos");
                                        }
                                    }else{
                                        sessionStorage.setItem("user",JSON.stringify(data.user));
                                        location.href = 'index.php';
                                    }
                                })
                            }
                        }
                    </script>

                </div>

            </div>
        </div>
    </div>

</body>

</html>