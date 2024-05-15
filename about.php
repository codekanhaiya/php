<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/about.css" rel="stylesheet">
    <title>About | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">About</li>
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


    <!-- About -->

    <div class="container-fluid mb-3">

        <div class="row aboutCard">

            <div class="col-sm-8">
                <h1>About Us</h1>
                <div class="know">

                    <div class="row aboutRow">
                        <div class="col-md-4">
                            <img class="aboutImg" src="img/star.svg" alt="Star">
                        </div>
                        <div class="col-md-8">
                            <div class="row aboutPoint">17</div>
                            <div class="row">Facilities</div>
                        </div>
                    </div>

                    <div class="row aboutRow">
                        <div class="col-md-4">
                            <img class="aboutImg" src="img/star.svg" alt="Star">
                        </div>
                        <div class="col-md-8">
                            <div class="row aboutPoint">3400+</div>
                            <div class="row">Bed Capacity</div>
                        </div>
                    </div>

                    <div class="row aboutRow">
                        <div class="col-md-4">
                            <img class="aboutImg" src="img/star.svg" alt="Star">
                        </div>
                        <div class="col-md-8">
                            <div class="row aboutPoint">4800+</div>
                            <div class="row">Clinicians</div>
                        </div>
                    </div>

                    <div class="row aboutRow">
                        <div class="col-md-4">
                            <img class="aboutImg" src="img/star.svg" alt="Star">
                        </div>
                        <div class="col-md-8">
                            <div class="row aboutPoint">15000+</div>
                            <div class="row">Employees</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="aboutGroup">
                    <img src="img/man-group.svg" alt="Group Picture">
                </div>
            </div>

        </div>

        <div class=" mt-3 mb-3">
            <h3>Our Story</h3>
            <hr class="border-2 border-top border-dark">
            <p class="aboutPara"> Public Healthcare Portal (PHP) is one of India’s largest
                healthcare organizations. We operate 17 healthcare facilities (3400+ beds) across the NCR Delhi,
                Haryana, Punjab, Uttarakhand and Maharashtra. Almost 85% of our bed capacity is in Metro/Tier 1 cities.
                Apart from hospitals, Public Healthcare also operates a homecare business and pathology business under
                brand names PHP@Home and PHP Labs respectively. PHP@Home offers health and wellness services at home
                while PHP Lab provides Pathology Services outside our hospital network.</p>
            <p class="aboutPara">The present amalgamated company was formed subsequent to the acquisition of 49.7% stake
                in erstwhile Public Healthcare Institute Limited by Radiant Life Care Pvt. Ltd. ( “Radiant”) and the
                amalgamation of Public Healthcare with Radiant thereafter. The amalgamated entity assumed the name Public
                Healthcare Institute limited. Prior to the amalgamation, Radiant was led and promoted</p>
        </div>

        <div class=" mt-3 mb-3 mt-5">
            <h3>Our Values</h3>
            <hr class="border-2 border-top border-dark">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card abtCard">
                        <div class="card-title aboutTitle">
                            <img src="img/blog/compassion.svg" alt="icon">
                            COMPASSION
                        </div>
                        <div class="card-body aboutBody">
                            <p class="aboutPara">We have a deeper level of patient understanding and are always
                                empathetic to their needs. This encourages a culture of providing a higher standard of
                                patient-centred care. We respect each other and our patients, and ensure that their
                                needs are met with dignity. We rise to the occasion each time for we recognise the
                                positive social impact we can create.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card abtCard">
                        <div class="card-title aboutTitle">
                            <img src="img/blog/excellence.svg" alt="icon">
                            EXCELLENCE
                        </div>
                        <div class="card-body aboutBody">
                            <p class="aboutPara">We ask more of ourselves and are always passionate about achieving the
                                highest standards of medical expertise and patient care. We understand that being the
                                best is a continuous journey of becoming better versions of ourselves every day.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card abtCard">
                        <div class="card-title aboutTitle">
                            <img src="img/blog/efficiency.svg" alt="icon">
                            EFFICIENCY
                        </div>
                        <div class="card-body aboutBody">
                            <p class="aboutPara">We create a responsive healing environment, by being nimble to the
                                needs of our patients and delivering what they really need with precision and timing. We
                                are focused yet fast, personal yet practical, advanced yet seamless in delivering the
                                exact care our patients need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card abtCard">
                        <div class="card-title aboutTitle">
                            <img src="img/blog/consistency.svg" alt="icon">
                            CONSISTENCY
                        </div>
                        <div class="card-body aboutBody">
                            <p class="aboutPara">We always deliver on our commitment and ensure the highest level of
                                patient care is met at every stage, every time. We believe that only through consistency
                                can we achieve our patients’ trust and fulfil our goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>