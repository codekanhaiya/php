<?php

    session_start();

    include 'database_connect.php';

    $sno = $_GET['id'];


    $delQuery4 = "DELETE FROM dr_achievements WHERE id='$sno'";
    $result4 = mysqli_query($conn,$delQuery4);


   

    header('location:../doctorDash.php');

?>