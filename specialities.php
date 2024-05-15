<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/specialities.css" rel="stylesheet">
    <title>Specialities | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Specialities & Procedures</li>
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


    <!-- specialities Page-->
    <div class="container-fluid mt-4 mb-4">

        <h2>Top Procedures</h2>
        <hr class="border-dark" />

        <!-- first row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Valvular Heart Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Valvular Heart Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Knee Replacement Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Knee Replacement Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/The Da Vinci Xi Robotic Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Da Vinci Xi Robotic Surgery</p>
                </div>
            </div>
        </div>

        <!-- second row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Bone Marrow Transplant .svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Bone Marrow Transplant</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Lung Transplant.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Lung Transplant</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Liver Transplant and bs.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Total Phenectomy Surgery/p>
                </div>
            </div>
        </div>

        <!-- third row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Meniscus Repair Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Sclerotherapy</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Obstetrics And Gynaecology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Salpingo-oophorectomy (Ovary<br />removal surgery)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Prostate Laser Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Redical Prostatectomy Surgery</p>
                </div>
            </div>
        </div>

        <!-- fourth row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/minimal acsess.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Transurethral Resection of the <br /> Prostate (TURP)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/CT Coronary Angiogram.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Shoulder Replacement Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Hip Resurfacing Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Physiotherapy for Back Pain</p>
                </div>
            </div>
        </div>

        <!-- five row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Ear Nose Throat.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Artificial Cervical Disc Replacement<br />Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Bariatric Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Abdominal Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/facial implant.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Facial Plastic Surgery</p>
                </div>
            </div>
        </div>

        <!-- six row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/HIPEC.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">HIPEC Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Kidney Transplant.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Kidney Transplant</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/ACLInjury.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">ACL Ingury</p>
                </div>
            </div>
        </div>

        <!-- seven row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/CT Coronary Angiogram.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">CT Coronary Angiogram</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Hand Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Hand Plastic Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Pacemaker Implantation.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Pacemaker Implantation Surgery</p>
                </div>
            </div>
        </div>


        <h2>Centres of Excellence</h2>
        <hr class="border-dark" />
        <!-- eight row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Bariatric Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Bariatric Surgery / Metabolic</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Bone Marrow Transplant .svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Bone Marrow Transplant</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/cancer care oncology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Cancer Care / Oncology</p>
                </div>
            </div>
        </div>

        <!-- nine row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Endocrinology & Diabetes.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Endocrinology & Diabetes</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Eye Care.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Eye Care / Ophthaalmology</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Gastroenterology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Gastroenterology, Hepatology &<br />Endoscopy</p>
                </div>
            </div>
        </div>

        <!-- ten row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/speciality-white.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Gastrointestinal Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Orthopaedics.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Orthopaedics & Joint Replacement</p>
                </div>
            </div>
        </div>


        <h2>Other Specialities</h2>
        <hr class="border-dark" />
        <!-- eleven row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Aesthetic And Reconstructive Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Aesthetic And Reconstructive<br /> Surgery</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/speciality-white.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Auduiology</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Dental Care.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Dental Care</p>
                </div>
            </div>
        </div>

        <!-- tweleve row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Dermatology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Dermatology</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Ear Nose Throat.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">ENT(Ear Nose Throat)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Emergency & Trauma.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Emergency & Trauma</p>
                </div>
            </div>
        </div>

        <!-- tharteen row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/IVF.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Infertility & IVF</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Internal Medicine.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Internal Medicine</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Interventional Radiology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Interventional Radiology</p>
                </div>
            </div>
        </div>

        <!-- fourteen row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Mental Health And .svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Mental Health And Behavioural<br /> Sciences</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Nutrition and Dietetics.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">/Nutrition and Dietetics</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Paediatric (Ped).svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Paediatric (Ped) Oncology</p>
                </div>
            </div>
        </div>

        <!-- fifteen row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Pain Management.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Pain Management</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Physiotherapy & Rehabilitation Medicine.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Physiotherapy & Rehabilitation<br />Medicine</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Podiatry.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Podiatry</p>
                </div>
            </div>
        </div>

        <!-- sixteen row  -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Radiology.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Radiology</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card pt-5 pb-5 mb-3">
                    <img src="img/special/Thoracic Surgery.svg" class="card-img-center" alt="...">
                    <p class="card-text m-3">Thoracic Surgery</p>
                </div>
            </div>

        </div>



    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>