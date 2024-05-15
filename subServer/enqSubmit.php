<?php

include 'database_connect.php';

if (isset($_POST['submit'])) {


    //validation for Enquiry Type
    if (empty($_POST['enquiryType'])) {
?>
        <script>
            alert("Please select enquiry type!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    } else {
        $enquiry = trim($_POST['enquiryType']);
    }

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

    //validation for calling time
    if (empty($_POST['callingTime'])) {
    ?>
        <script>
            alert("Please select preferred time to call!");
            window.location.href="../contact.php";
        </script>
    <?php
        exit;
    } else {
        $time = trim($_POST['callingTime']);
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
        $query = "INSERT into enquiry_tlb (enquiryType,name,email,contact,hospital,callingTime,remark,date) 
                                    values('$enquiry','$name','$email','$contact','$hospital','$time','$remark',curdate())";
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