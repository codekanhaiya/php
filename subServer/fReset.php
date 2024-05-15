<?php

session_start();

include "database_connect.php";


if (isset($_POST['fReset'])) {


    $regNo = $_POST['regNo'];
    $pass = $_POST['password'];
    // only for security of the password
    $pass = sha1(trim($pass));

    $fetchQuery = "SELECT * FROM fregister WHERE reg='$regNo'";
    $fetchResult = mysqli_query($conn, $fetchQuery);
    $fetchRow = mysqli_fetch_assoc($fetchResult);

    if ($fetchRow) {
        $resetQuery = "UPDATE fregister SET pass='$pass' WHERE reg='$regNo'";

        $resetResult = mysqli_query($conn, $resetQuery);

        if ($resetResult) {
            ?>
            <script>
                alert("Successfully, password has been changed!");
                window.location.href = "../faculty.php";
            </script>
            <?php
        } 
    }else {
        ?>
            <script>
                alert("Try again, password has not been changed!");
                window.location.href = "../faculty.php";
            </script>
        <?php
    }
}

mysqli_close($conn);


?>