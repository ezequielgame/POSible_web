<?php
    define("DB_HOST","localhost");
    define("DB_PASS","pdist2022!");
    define("DB_USER","pdist2022");
    define("DB_NAME","pdist2022");


    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
?>