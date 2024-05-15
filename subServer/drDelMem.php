<?php

    session_start();

    include 'database_connect.php';

    $sno = $_GET['id'];


    $delQuery3 = "DELETE FROM dr_memberships WHERE id='$sno'";
    $result3 = mysqli_query($conn,$delQuery3);
;

   

    header('location:../doctorDash.php');

?>