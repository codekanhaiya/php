<?php

include "database_connect.php";


if (isset($_POST['pRegister'])) {


    //validation for doctors name
    if (empty($_POST['doctorsName'])) {
    ?>
        <script>
            alert("Please select any Doctor !");
        </script>
    <?php
        exit;
    } else {
        $doctor = trim($_POST['doctorsName']);
    }

    // validatioon for name
    if (empty($_POST['full_name'])) {
    ?>
        <script>
            alert("Please provide your name !");
        </script>
    <?php
        exit;
    }
    if ((is_string($_POST['full_name']))) {
        $name = trim($_POST['full_name']);
    } else {
    ?>
        <script>
            alert("Invalid Name !");
        </script>
    <?php
        exit;
    }

    //validation for email
    if (empty($_POST['email'])) {
    ?>
        <script>
            alert("Please provide your email !");
        </script>
    <?php
        exit;
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = trim($_POST['email']);
    } else {
    ?>
        <script>
            alert("Invalid E-mail !");
        </script>
    <?php
        exit;
    }


    //validation for Aadhar
    if (empty($_POST['aadhar'])) {
    ?>
        <script>
            alert("Please provide Aadhar number !");
        </script>
    <?php
        exit;
    }
    if (ctype_digit($_POST['aadhar'])) {
        $aadhar = trim($_POST['aadhar']);
    } else {
    ?>
        <script>
            alert("Invalid Aadhar number !");
        </script>
    <?php
        exit;
    }

    // validation for mobile number
    if (empty($_POST['mobile'])) {
    ?>
        <script>
            alert("Please provide your contact number !");
        </script>
    <?php
        exit;
    }
    if (ctype_digit($_POST['mobile'])) {
        $contact = trim($_POST['mobile']);
    } else {
    ?>
        <script>
            alert("Invalid Contact Number !");
        </script>
    <?php
        exit;
    }

    //validation for age
    if (empty($_POST['age'])) {
    ?>
        <script>
            alert("Please provide your DOB !");
        </script>
    <?php
        exit;
    } else {
        $dob = trim($_POST['age']);
    }

    //validation of password
    if (!empty($_POST['password'])) {
        $pass = trim($_POST['password']);
         // only for security of the password
         $pass = sha1(trim($pass));
    } else {
    ?>
        <script>
            alert("Please create strong password include- @#$%^..abc..123.. !");
        </script>
    <?php
        exit;
    }

    //validation for gender
    if (!empty($_POST['gender'])) {
        $gender = trim($_POST['gender']);
    } else {
    ?>
        <script>
            alert("Please select your gender !");
        </script>
        <?php
        exit;
    }

    try {
        $query = "INSERT into ptregister (doctor,name,email,aadhar,contact,dob,password,gender,date) 
                values('$doctor','$name','$email','$aadhar','$contact','$dob','$pass','$gender',curdate())";
        $result = mysqli_query($conn, $query);
        if ($result) {
        ?>
            <script>
                alert("Congratulation! Your Registration is successfully completed.");
                window.location.href="../index.php";
            </script>
        <?php
        }
    } catch (Exception $e) {
        ?>
        <script>
            alert("Already you are registered ! please Login.");
            window.location.href="../index.php";
        </script>
<?php
    }

    // header('location:../faculty.php');

}

mysqli_close($conn);


?>