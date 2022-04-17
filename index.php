<?php

    require_once("classes/connection/connection.php");

    $connection = new Connection();

    // $mail = "ezequiel.gmejia@gmail.com";
    // $query = "select id_user, password from users where mail = '$mail'";

    // print_r($connection->getData($query));

    $password = password_hash("hola",PASSWORD_DEFAULT);
    $query = "insert into users(id_user,mail,password,business_name,id_currency) values (NULL, 'pruebahash2@gmail.com','$password','tiendita2',NULL)";
    print_r($connection->nonQuery($query));

?>