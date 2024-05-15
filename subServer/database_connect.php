<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "php";
    
    $conn = mysqli_connect($server,$username,$password,$database);
    
    if(!$conn){

        die("Database disconnected".mysqli_connect_error());
    }

?>