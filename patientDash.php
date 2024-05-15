<?php

session_start();

include "subServer/database_connect.php";

$ptid = $_SESSION['ptId'];

$ptsql = "SELECT * FROM ptregister WHERE aadhar = '$ptid'";

$ptresult = mysqli_query($conn, $ptsql);
if (!$ptresult) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$ptrow = mysqli_fetch_assoc($ptresult);
if (!$ptrow) {
    echo "Error !";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/patientDash.css" rel="stylesheet">
    <title>Patient Dashboard</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>
    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList"><?php echo $ptrow['name'] ?> | Dashboard</li>
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

    <!-- patient dashboard -->
    <div class="container mt-5 mb-5">
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img"></i>
            </div>
            <div class="col-md-8">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="profile">
                        <div class="name"><?php echo $ptrow['name'] ?></div>
                        <div class="email"><?php echo $ptrow['email'] ?></div>
                        <div class="aadhar"><?php echo chunk_split($ptid,4," ") ?></div>
                        <div class="phone">+91 <?php echo $ptrow['contact'] ?></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 d-flex justify-content-center flex-column">
                <a  href="subServer/fLogout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="container chat mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center flex-column">
                <div class="chatBot">
                    <div class="chat-header">Let's chat</div>
                    <div class="chat-body">
                        <div class="loading hide">
                            <!-- hide -->
                            <div class="circle circle-1"></div>
                            <div class="circle circle-2"></div>
                            <div class="circle circle-3"></div>
                        </div>
                    </div>
                    <div class="chat-input p-3">
                        <input class="inp form-control" type="text" placeholder="Type a Message" id="txtInput">
                        <!-- <input class="inp" type="text" placeholder="Type a Message" id="txtInput"> -->
                        <button class="send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
                <center>
                    <a href="actualLetter.php?id=<?php echo $ptrow['id']  ?>"><button type="submit" class="DownBtn">Download Appointment Letter</button></a>
                </center>
                <!-- Appointment  -->
                <div class="appointPrint" id="appointPrint">
                    <h1> Print me ! </h1>
                </div>

            </div>

            <div class="col-sm-6">
                <div class="images">
                    <div class="pics">
                        <h3>Gallery</h3>
                    </div>
                    <div class="gallery">
                        <div class="gallery-1">
                            <div class="img">
                                <img src="img/ptimg/img-1.jpg" alt="">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-3.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-5.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-7.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-9.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-11.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img13.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-15.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-17.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-19.jpeg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-2">
                            <div class="img dis">
                                <img src="img/ptimg/img-20.jpg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-2.jpg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-4.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-6.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-8.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-10.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-12.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-14.jpeg" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-16.webp" alt="img">
                            </div>
                            <div class="img">
                                <img src="img/ptimg/img-18.webp" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>


    <script>
        function downLetter() {
            // var backup = document.body.innerHTML;
            var lettContent = document.getElementById("appointPrint").innerHTML;

            // document.body.innerHTML = lettContent;
            window.print();
            document.body.innerHTML = backup;
        }
    </script>
    <script>
        function confirm(){
            alert("Your appointment letter download successfully !");
        }
    </script>
    <script type="module" src="js/dash.js" defer></script>
    <!-- <script type="text/javascript" src="js/response.js" defer></script> -->

</body>

</html>