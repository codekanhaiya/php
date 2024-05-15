<?php

session_start();

include "database_connect.php";


if (isset($_POST['aadhar'])) {


    $aadhar = $_POST['aadhar'];
    $pass = $_POST['password'];
    // only for security of the password
    $pass = sha1(trim($pass));

    $fetchPTQuery = "SELECT * FROM ptregister WHERE aadhar='$aadhar'";
    $fetchPTResult = mysqli_query($conn, $fetchPTQuery);
    $fetchPTRow = mysqli_fetch_assoc($fetchPTResult);

    if ($fetchPTRow) {
        $resetQuery = "UPDATE ptregister SET password='$pass' WHERE aadhar='$aadhar'";

        $resetResult = mysqli_query($conn, $resetQuery);

        if ($resetResult) {
            ?>
            <script>
                alert("Successfully, password has been changed!");
                window.location.href = "../index.php";
            </script>
            <?php
        } 
    }else {
        ?>
            <script>
                alert("Try again, password has not been changed!");
                window.location.href = "../index.php";
            </script>
        <?php
    }
}

mysqli_close($conn);


?>