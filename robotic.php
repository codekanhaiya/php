<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/robotic.css" rel="stylesheet">
    <title>Robotic | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Robotics Surgery</li>
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


    <!-- Next Generation Robotic Surgeries -->

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="card roImg">
                    <img class="img-fluid image m-3" src="img/robot.jpeg" alt="Robotics Surgery Picture">
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center flex-column">
                <div class="card">
                    <h2>Related Announcements</h2>
                    <hr class="border-dark" />
                    <div class="announce">
                        <img src="img/announce.png" alt="Winner Image">
                    </div>
                    <p class="pbt">Top announcements of "Public Healthcare Portal"</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 d-flex justify-content-center flex-column">
                <div class="card">
                    <h1>Next Generation Robotic Surgery for Common Surgical Conditions</h1>
                    <p class="span">Super Speciality Hospital, Saket</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="img/covid.png" alt="Covid Help Postar">
                    <p>Free COVID-19 Consult Helpline by PHP</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="row justify-content-center">
                        <img class="img-fluid rounded" src="img/doctorsTeam.jpg" alt="Robotics Surgery Picture">
                    </div>
                    <p class="para mt-5">
                        Institute of Laparoscopic, Endoscopic and Bariatric Surgery under the Chairmanship of Padmashree
                        at PHP , Saket, Delhi has taken a giant leap in Robotic surgery with the
                        Next-Generation Robot- VERSIUS from Cambridge Medical Robotics. PHP and his team,
                        hold a massive record of performing more than 90,000 major laparoscopic surgeries and have now
                        pioneered the Next-generation robotic surgery. The vision is to provide cutting-edge technology for
                        even common surgical conditions which till now has been restricted to only complex surgeries with
                        other robots.
                    </p>
                    <p class="para">
                        Versius is designed to provide Surgical excellence for common surgical conditions with all the
                        advantages of laparoscopic surgery technique with 3-dimensional view, added precision, accuracy &
                        safety. Versius can be used for all common surgical conditions like Gallbladder stones, Hernia,
                        appendicitis, Gastro-esophageal reflux disease, Bariatric & Metabolic surgery (weight loss surgery),
                        Fundoplication & other procedures.
                    </p>
                    <p class="para">
                        Backed by Machine Learning & empowered by Artificial Intelligence, this next-generation robot
                        enables a 3D view with a greater depth perception that empowers the surgeon to achieve greater
                        precision with ease. Its robotic arms move up to 720 degrees for precise & efficient alignment which
                        is not possible with a human arm.
                    </p>
                    <p class="para">
                        Thirty years ago, the surgical fraternity witnessed a giant leap of faith from open to laparoscopic
                        surgeries. It revolutionized the surgical landscape with the minimally invasive technique causing
                        minimal pain, quick recovery and resumption of normal activities, excellent cosmetic results and
                        shorter hospital stay. Patients could move around on the same day of surgery. It brought significant
                        drop in post operative infection rates that were common due to long hospitalizations in open
                        surgeries.
                    </p>
                    <p class="para">
                        Now, with this next generation robot, the 3-dimesnional images and the easy maneuverability of the
                        robotic arms, patient outcomes are achieved with greater precision and accuracy. This next-gen robot
                        has an open console unlike other robots that have a tunnel like console and the surgeon does not
                        have direct vision of the patient. However, Versius ensures the surgeon has a direct vision of the
                        patient and has wholesome control with close monitoring of the minutest details of the patient
                        during the surgery. The patient is up and about in a couple of hours after the surgery, can be
                        discharged on the same/next day and resume normal diet and activities from the next day onwards.
                        There is minimal/no blood loss and due to very small port sizes the patient gets excellent cosmetic
                        results.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center flex-column">
                <div class="card roMan">
                    <img src="img/RobooticMan.png" alt="Customer Picture">
                </div>
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>


</body>

</html>