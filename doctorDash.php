<?php

session_start();

include "subServer/database_connect.php";

$doctor_id = $_SESSION['doctor_id'];
$pass = $_SESSION['password'];

$sql = "SELECT * FROM fregister WHERE reg='$doctor_id' And pass = '$pass'";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
if (!$row) {
    echo "Error !";
}


$sql1 = "SELECT * FROM dr_image WHERE drId='$doctor_id'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($res1);

$sql2 = "SELECT * FROM dr_work WHERE drId='$doctor_id'";
$res2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM dr_education WHERE drId='$doctor_id'";
$res3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM dr_memberships WHERE drId='$doctor_id'";
$res4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT * FROM dr_achievements WHERE drId='$doctor_id'";
$res5 = mysqli_query($conn, $sql5);

$sql6 = "SELECT * FROM dr_speciality WHERE drId='$doctor_id'";
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
    <link href="css/doctorDash.css" rel="stylesheet">
    <title><?php echo $row['name']  ?> Dashboard | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>
    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList"><a href="faculty.php">Faculty</a></li>
        <li class="breadList"><?php echo $row['name']  ?></li>
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
    <div class="container-fluid mt-4 mb-4 card">

        <div class="row main text-white">
            <div class="col-sm-4 ">
                <div class="card bg-transparent " style="max-width: 18rem; border: none;">
                    <div class="card-header">

                        <div class="frame rounded" style="max-width: 250px; max-height: 250px; object-fit:cover;">
                            <?php
                                if (!$row1) {
                                    ?>
                                    <img class="man" id="upload-img" src="img/patient.jpg">
                                    <?php
                                }else{
                                    ?>
                                    <img class="man" src="subServer/<?php echo $row1['image'] ?>" alt="Profile-Picture">
                                <?php
                                }
                            ?>

                        </div>

                        <form method="post" action="subServer/drImage.php" enctype="multipart/form-data">
                            <div class="custom-file">
                                <label for="fileupload">Upload Image</label>
                                <input type="file" name="imageFile" id="fileupload" />
                            </div>
                            <button class="custom-file" type="submit" value="submit" style="background-color:transparent; color:#fff; border:1px solid #fff;">Save Image</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-7 d-flex justify-content-center flex-column drdet">
                <h3><?php echo $row['name']  ?></h3>
                <p><?php echo $row['desig']  ?></p>
                <p style="margin:0;"><?php echo $row['email']  ?></p>
                <p style="margin:0;">+91 <?php echo $row['contact']  ?></p>
                <p><?php echo $row['gender']  ?></p>
            </div>
            <div class="col-sm-1 d-flex justify-content-center flex-column">
                <a class="btn btn-outline-primary facBtn" href="subServer/fLogout.php">Logout</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card p-4 border-0">
                    <h3>About <?php echo $row['name']  ?></h3>

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
                                <li><?php echo $row2['work']  ?><a href="subServer/drDelWork.php?id=<?php echo $row2['id']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                        <form method="post" action="subServer/drWork.php">
                            <div class="input-group m-3">
                                <input type="text" class="form-control" name="fieldValue" placeholder="Add content" aria-label="content" aria-describedby="basic-addon">
                                <span class="input-group-text" id="basic-addon"><button class="drbtn" type="submit" value="submit"><i class="fas fa-edit"></i></button></span>
                            </div>
                        </form>
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
                                <li><?php echo $row3['education']  ?><a href="subServer/drDelEdu.php?id=<?php echo $row3['id']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                        <form method="post" action="subServer/drEducation.php">
                            <div class="input-group m-3">
                                <input type="text" class="form-control" name="fieldValue" placeholder="Add content" aria-label="content" aria-describedby="basic-addon">
                                <span class="input-group-text" id="basic-addon"><button class="drbtn" type="submit" value="submit"><i class="fas fa-edit"></i></button></span>
                            </div>
                        </form>
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
                                <li><?php echo $row4['member']  ?><a href="subServer/drDelMem.php?id=<?php echo $row4['id']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                        <form method="post" action="subServer/drMem.php">
                            <div class="input-group m-3">
                                <input type="text" class="form-control" name="fieldValue" placeholder="Add content" aria-label="content" aria-describedby="basic-addon">
                                <span class="input-group-text" id="basic-addon"><button class="drbtn" type="submit" value="submit"><i class="fas fa-edit"></i></button></span>
                            </div>
                        </form>
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
                                <li><?php echo $row5['awards']  ?><a href="subServer/drDelAchi.php?id=<?php echo $row5['id']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                        <form method="post" action="subServer/drAchieve.php">
                            <div class="input-group m-3">
                                <input type="text" class="form-control" name="fieldValue" placeholder="Add content" aria-label="content" aria-describedby="basic-addon">
                                <span class="input-group-text" id="basic-addon"><button class="drbtn" type="submit" value="submit"><i class="fas fa-edit"></i></button></span>
                            </div>
                        </form>
                    </div>

                    <hr class="border-dark" />
                    <button type="button" class="collapsible">
                        <h6><img src="img/doctor/research.svg" alt="Interest icon">Speciality Interest<i class="fas fa-solid fa-caret-down float-end"></i></h6>
                    </button>
                    <div class="content">
                        <ul>

                            <?php
                            while ($row6 = mysqli_fetch_array($res6)) {
                            ?>
                                <li><?php echo $row6['special']  ?><a href="subServer/drDelSpeci.php?id=<?php echo $row6['id']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                        <form method="post" action="subServer/drSpecial.php">
                            <div class="input-group m-3">
                                <input type="text" class="form-control" name="fieldValue" placeholder="Add content" aria-label="content" aria-describedby="basic-addon">
                                <span class="input-group-text" id="basic-addon"><button class="drbtn" type="submit" value="submit"><i class="fas fa-edit"></i></button></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 border-0">
                    <h3>Your Patient:</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Profile</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $doctor_name = $row['name'];

                            $ptQuery = "SELECT * FROM ptregister WHERE doctor='$doctor_name'";

                            $ptQueryRes = mysqli_query($conn, $ptQuery);

                            $i = 0;
                            while ($ptRow = mysqli_fetch_array($ptQueryRes)) {
                            ?>
                                <tr>
                                    <td><?php echo  ++$i ?></td>
                                    <td><?php echo $ptRow['name']  ?></td>
                                    <td><i class="fa fa-eye" style="color:#03a9f4"></i></td>
                                </tr>

                            <?php
                            }

                            ?>


                        </tbody>
                    </table>
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

        // for dp upload
        $(function() {
            $("#fileupload").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#upload-img").attr("src", x);
                console.log(event);
            });
        });
    </script>

</body>

</html>