<?php

include 'database_connect.php';

if (isset($_POST['submit'])) {


    //validation for Name
    if (empty($_POST['name'])) {
    ?>
        <script>
            alert("Please provide your name!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    } else {
        $name = trim($_POST['name']);
    }

    //validation for email
    if (empty($_POST['email'])) {
    ?>
        <script>
            alert("Please provide your email!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = trim($_POST['email']);
    } else {
    ?>
        <script>
            alert("Invalid E-mail!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    }


    // validation for mobile number
    if (empty($_POST['contact'])) {
    ?>
        <script>
            alert("Please provide your contact number!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    }
    if (ctype_digit($_POST['contact'])) {
        $contact = trim($_POST['contact']);
    } else {
    ?>
        <script>
            alert("Invalid Contact Number!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    }

    //validation for hospital name
    if (empty($_POST['hospital'])) {
    ?>
        <script>
            alert("Please select hospital name!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    } else {
        $hospital = trim($_POST['hospital']);
    }



    //validation for Remark
    if (empty($_POST['remark'])) {
    ?>
        <script>
            alert("Please write your remark!");
            window.location.href="../contact.php";
        </script>
        <?php
        exit;
    } else {
        $remark = trim($_POST['remark']);
    }


    try {
        $query = "INSERT into compliments_tlb (name,email,contact,hospital,remark,date) 
                                    values('$name','$email','$contact','$hospital','$remark',curdate())";
        $result = mysqli_query($conn, $query);
        if ($result) {
        ?>
            <script>
                alert("Your query have been successfully sent!");
                window.location.href="../contact.php";
            </script>
        <?php
        }
    } catch (Exception $e) {
        ?>
        <script>
            alert("Try again!");
            window.location.href="../contact.php";
        </script>
        <?php
    }
}

mysqli_close($conn);

?>