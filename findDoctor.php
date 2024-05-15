<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/doctor.css" rel="stylesheet">
    <title>Doctors | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Find Doctors</li>
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


    <!-- Doctor File -->
    <div class="container-fluid mt-4 mb-4">

        <!-- First Row -->
        <div class="row">

            <?php
            include 'subServer/database_connect.php';

            $query = "SELECT * FROM fregister";

            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>

                <div class="col-sm-4">
                    <div class="card mb-3 shadow" style="min-height: 225px;">
                        <div class="row g-0">
                            <div class="col-4" style="max-width: 120px; max-height:120px; object-fit:cover;">

                                <?php
                                $doctor_id = $row['reg'];
                                $sql1 = "SELECT * FROM dr_image WHERE drId='$doctor_id'";
                                $res1 = mysqli_query($conn, $sql1);
                                $row1 = mysqli_fetch_assoc($res1);

                                if (!$row1) {
                                ?>
                                    <img class="img-fluid rounded m-3" src="img/patient.jpg" alt="Profile-Picture">
                                <?php
                                } else {
                                ?>
                                    <img class="img-fluid rounded m-3" style="width: 100%; height:100%;" src="subServer/<?php echo $row1['image'] ?>" alt="Profile-Picture">
                                <?php
                                }
                                ?>                                
                            </div>

                            <div class="col-8 ">
                                <div class="card-body">

                                    <h5 class="card-title" style="color:#003a70 ;font-weight:500;font-size:16px;"><?php echo $row['name']  ?></h5>

                                    <p class="card-text" style="font-size:14px;"><small class="text-muted"></small><?php echo $row['desig']  ?></p>

                                    <button type="button" class="btn btn-primary d-flex text-left flex-column" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                        Book An Appointment
                                    </button>
                                </div>
                            </div>
                        </div>
                         <div class="container-fluid ml-1" style="width:max-content;">
                                <a href="viewDoctor.php?id=<?php echo $row['reg']  ?>">
                                    <p style="font-size:small;">View Profile</p>
                                </a>
                         </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>


    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>