<?php

include "database_connect.php";


if (isset($_POST['ptLog'])) {

    session_start();

    $name = $_POST['full_name'];
    $aadhar = $_POST['aadhar'];
    $pass = $_POST['password'];
     // only for security of the password
     $pass = sha1(trim($pass));

    $query = "SELECT * FROM ptregister WHERE aadhar='$aadhar' and name='$name' and password='$pass'";

    $result =  mysqli_query($conn,$query);

    if(!$result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    $row=mysqli_fetch_assoc($result);
    if($row)
    {
        $_SESSION['ptId'] = $aadhar;

       ?>
            <script>
                alert("Successfully Login!");
                window.location.href="../patientDash.php";
            </script>
       <?php 
    }
    else
    {
        ?>
            <script>
                alert("Not Login!");
                window.location.href="../index.php";
            </script>
       <?php 
    }

}

mysqli_close($conn);


?>