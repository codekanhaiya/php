<?php

    session_start();

    include 'database_connect.php';

    $sno = $_GET['id'];

    $delQuery1 = "DELETE FROM dr_work WHERE id='$sno'";
    $result1 = mysqli_query($conn,$delQuery1);

   

    header('location:../doctorDash.php');

?>