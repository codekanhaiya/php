<?php

    session_start();

    include 'database_connect.php';

    $sno = $_GET['id'];

    $delQuery5 = "DELETE FROM dr_speciality WHERE id='$sno'";
    $result5 = mysqli_query($conn,$delQuery5);

   

    header('location:../doctorDash.php');

?>