<?php

    session_start();

    include 'database_connect.php';

    $sno = $_GET['id'];

    $delQuery2 = "DELETE FROM dr_education WHERE id='$sno'";
    $result2 = mysqli_query($conn,$delQuery2);


   

    header('location:../doctorDash.php');

?>