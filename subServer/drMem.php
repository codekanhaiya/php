<?php

    session_start();

    include 'database_connect.php';

    $doctor_id = $_SESSION['doctor_id'];

    if(empty(trim($_POST['fieldValue']))){
        ?>
        <script>
            alert("Please write something!");
            window.location.href="../faculty.php";
        </script>
        <?php
        exit;
    }

    if(!empty($_POST['fieldValue'])){
        $value = trim($_POST['fieldValue']);
    }

    $query = "INSERT INTO dr_memberships (member, drId) VALUES ('$value','$doctor_id')";
    $result = mysqli_query($conn,$query);

    header('location:../doctorDash.php');

?>