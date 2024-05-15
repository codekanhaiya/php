<?php

session_start();

include 'subServer/database_connect.php';

$ids = $_GET['id'];

$sql1 = "SELECT * FROM fregister WHERE reg='$ids'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($res1);

$sql2 = "SELECT * FROM dr_work WHERE drId='$ids'";
$res2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM dr_education WHERE drId='$ids'";
$res3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM dr_memberships WHERE drId='$ids'";
$res4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT * FROM dr_achievements WHERE drId='$ids'";
$res5 = mysqli_query($conn, $sql5);

$sql6 = "SELECT * FROM dr_speciality WHERE drId='$ids'";
$res6 = mysqli_query($conn, $sql6);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include "includes/linksBundle.php";
  ?>
  <link href="css/doctorBio.css" rel="stylesheet">
  <title><?php echo $row1['name']  ?> | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

  <?php
  include "includes/header.php";
  ?>
  <!-- breadcrumb Designing -->
  <ul class="breadcrumb">
    <li class="breadList"><a href="index.php">Home</a></li>
    <li class="breadList"><a href="findDoctor.php">Find Doctors</a></li>
    <li class="breadList"><?php echo $row1['name']  ?></li>
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


  <!-- Doctor Full Details -->
  <div class="container mt-4 mb-4 card">

    <div class="row main text-white">
      <div class="col-sm-4" style="max-width: 260px; max-height: 260px; object-fit:cover; overflow:hidden;" >

        <?php
        $sqlIm = "SELECT * FROM dr_image WHERE drId='$ids'";
        $resIm = mysqli_query($conn, $sqlIm);
        $rowIm = mysqli_fetch_assoc($resIm);

        if (!$rowIm) {
        ?>
          <img class="rounded" src="img/patient.jpg" alt="Profile-Picture">
        <?php
        } else {
          ?>
          <img class="rounded" style="width: 100%; height:100%;" src="subServer/<?php echo $rowIm['image']?>" alt="Profile-Picture">
          <?php
        }
        ?>

      </div>
      <div class="col-sm-8 d-flex justify-content-center flex-column">
        <h1><?php echo $row1['name']  ?></h1>
        <p style="font-size:larger;"><?php echo $row1['desig']  ?></p>
        <p style="margin:0;"><?php echo $row1['email']  ?></p>
        <p style="margin:0;">+91 <?php echo $row1['contact']  ?></p>
        <p><?php echo $row1['gender']  ?></p>
      </div>
    </div>

    <div class="row">
      <div class="card div p-4 border-0">
        <h1>About <?php echo $row1['name']  ?></h1>

        <hr class="border-dark" />
        <button type="button" class="collapsible">
          <h6><img src="img/doctor/work.svg" alt="Work icon">Work Experience<i class="fas fa-solid fa-caret-down float-end"></i>
          </h6>
        </button>
        <div class="content">
          <ul>

            <?php
            while ($row2 = mysqli_fetch_array($res2)) {
            ?>
              <li><?php echo $row2['work']  ?></li>
            <?php
            }
            ?>

          </ul>
        </div>

        <hr class="border-dark" />
        <button type="button" class="collapsible">
          <h6><img src="img/doctor/education.svg" alt="Education icon">Education & Training<i class="fas fa-solid fa-caret-down float-end"></i></h6>
        </button>
        <div class="content">
          <ul>

            <?php
            while ($row3 = mysqli_fetch_array($res3)) {
            ?>
              <li><?php echo $row3['education']  ?></li>
            <?php
            }
            ?>

          </ul>
        </div>

        <hr class="border-dark" />
        <button type="button" class="collapsible">
          <h6><img src="img/doctor/membership.svg" alt="Membership icon">Memberships<i class="fas fa-solid fa-caret-down float-end"></i></h6>
        </button>
        <div class="content">
          <ul>

            <?php
            while ($row4 = mysqli_fetch_array($res4)) {
            ?>
              <li><?php echo $row4['member']  ?></li>
            <?php
            }
            ?>

          </ul>
        </div>

        <hr class="border-dark" />
        <button type="button" class="collapsible">
          <h6><img src="img/doctor/award.svg" alt="Award icon">Awards<i class="fas fa-solid fa-caret-down float-end"></i></h6>
        </button>
        <div class="content">
          <ul>

            <?php
            while ($row5 = mysqli_fetch_array($res5)) {
            ?>
              <li><?php echo $row5['awards']  ?></li>
            <?php
            }
            ?>

          </ul>
        </div>

        <hr class="border-dark" />
        <button type="button" class="collapsible">
          <h6><img src="img/doctor/research.svg" alt="Interest icon">specliality Interest<i class="fas fa-solid fa-caret-down float-end"></i></h6>
        </button>
        <div class="content">
          <ul>

            <?php
            while ($row6 = mysqli_fetch_array($res6)) {
            ?>
              <li><?php echo $row6['special']  ?></li>
            <?php
            }
            ?>

          </ul>
        </div>

      </div>

    </div>

  </div>

  <?php
  include "includes/footer.php";
  ?>

  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
  </script>

</body>

</html>