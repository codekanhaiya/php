<?php

session_start();

include "database_connect.php";


if (isset($_POST['fLog'])) {


    $regNo = $_POST['regNo'];
    $name = $_POST['full_name'];
    $pass = $_POST['password'];
     // only for security of the password
     $pass = sha1(trim($pass));

    $query = "SELECT * FROM fregister WHERE reg='$regNo' and name='$name' and pass='$pass'";

    $result =  mysqli_query($conn,$query);

    if(!$result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    $_SESSION['doctor_id'] = $regNo;
    $_SESSION['password'] = $pass;

    $row=mysqli_fetch_assoc($result);
    if($row)
    {
       ?>
            <script>
                alert("Successfully Login!");
                window.location.href="../doctorDash.php";
            </script>
       <?php 
    }
    else
    {
        ?>
            <script>
                alert("Not Login!");
                window.location.href="../faculty.php";
            </script>
       <?php 
    }

}

mysqli_close($conn);


?>