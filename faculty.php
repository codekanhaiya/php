<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/faculty.css" rel="stylesheet">
    <title>Faculty | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Faculty</li>
    </ul>

    <!-- Appointment Letter -->
    <?php
    include "includes/patientSign.php";
    ?>
    <!-- patient login -->
    <?php
    include "includes/patientLogin.php";
    ?>
    <?php
    include "includes/patientReset.php";
    ?>
    <!-- chatBot -->
  <?php
  include "includes/chatBot.php"
  ?>


    <!-- faculty Registration related-->
    <?php
    include "includes/facultySign.php";
    ?>
    <?php
    include "includes/facultyLogin.php";
    ?>
     <?php
    include "includes/facultyReset.php";
    ?>
    
    <!-- Faculty Board -->
    <div class="container-fluid mb-5">

        <div class="row fac ">
            <div class="col-sm-8">
                <h2>Faculty</h2>
                <p>
                    PHP welcome you for choosing me and giving me this auspicious opportunity to serve the public with you.</p>
            </div>
            <div class="col-sm-4">
                <div class="faculty">
                    <img src="img/faculty.jpg" alt="doctor Image" />
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 facImage">
                <div class="card">
                    <img src="img/hospital.jpg" alt="Hospital Image">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <div class="facContent1">
                    <p class="facPara">For Doctors:</p>
                    <div class="btn btn-outline-primary facBtn" data-bs-toggle="modal" data-bs-target="#doctorRegisterModal">New Registration</div>
                    <div class="btn btn-outline-primary facBtn" data-bs-toggle="modal" data-bs-target="#docterLoginModal">Dashboard</div>
                    <div class="btn btn-outline-primary facBtn">Delete Account</div>
                </div>
                <div class="facContent2" style="float:left;">
                    <p class="facPara">For Other Employe:</p>
                    <div class="btn btn-outline-primary facBtn">New Registration</div>
                    <div class="btn btn-outline-primary facBtn">Dashboard</div>
                    <div class="btn btn-outline-primary facBtn">Delete Account</div>
                </div>
            </div>

        </div>
    </div>


    <?php
    include "includes/footer.php";
    ?>

</body>

</html>