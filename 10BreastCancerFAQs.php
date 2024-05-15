<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/blog.css" rel="stylesheet">
    <title>10 Breast Cancer FAQs | PHP</title>
</head>

<body onload="myPreLoaderFunction();">
    <?php
    include "includes/header.php";
    ?>
    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Health Blog</li>
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

    <!-- Blogs Deatails  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card mb-3 mt-4 border-0">
                    <img src="img/blog/Breast_Cancer.jpg" class="card-img-top rounded blogImage" alt="Picture">
                    <div class="card-body blog">
                        <h1 class="card-title blogH1">10 Breast Cancer FAQs</h1>
                        <hr class="border-2 border-top border-dark">
                        <p class="card-text">Looking at the number of cases increasing day by day, it is not unusual to
                            seek answers to a variety of questions about breast cancer. Surprisingly, a disturbing trend
                            noticeable in our country is the younger age in which women are falling prey to this
                            disease( &#60; 40 years) Breast cancer can originate in different areas of the breast
                            including
                            the lobules, the ducts, or in some rare cases, the tissue in between.Here are 10 breast
                            cancer FAQs that will help resolve most of the doubts one has, related to this disease.
                            If you are unable to find an answer to a question you consider important, pleasepost it
                            in the comment box below, and we at Max Healthcare will do our best to answer it.</p>
                        <h5 class="card-title blogH5">Q 1. What are the symptoms of breast cancer?</h5>
                        <p class="card-text">A1. Usual signs of breast cancer include a painless lump or mass,
                            bulging of skin, dimpling, puckering, nipple retraction, change in skin colour and
                            discharge. Having one or more of these signs and symptoms is not a sure shot sign of
                            breast cancer, however, consulting a specialist is recommended.</p>
                        <h5 class="card-title blogH5">Q2. What are the top risk factors for breast cancer?</h5>
                        <p class="card-text">A2. Though the definite cause of breast cancer is still not clear,
                            many factors increase the risk. These factors include increasing age, alcohol, late
                            pregnancy, early menstruation, late menopause, and family history, use of oral
                            contraceptives and history of radiation therapy.</p>
                        <h5 class="card-title blogH5">Q 3. How often should the breast self-examination(BSE) be
                            performed?</h5>
                        <p class="card-text">A. 3. Doctors recommend performing the breast self-exam(BSE)
                            monthly. Dimpling, palpable lump, puckering, discharge from the nipples, inversion
                            of the nipple, scaliness of the nipple/areola area and breast skin should be looked
                            for while examining the breasts. If any of these changes in the breasts are noticed,
                            contacting a specialist is advised.</p>
                        <h5 class="card-title blogH5">Q 4. Can wearing bra cause breast cancer?</h5>
                        <p class="card-text">A 4. There has been a lot of discussion around the connection
                            between bra (especially padded) and breast cancer. However, there are still no
                            studies or surveys that prove wearing a padded bra can cause cancer.</p>
                        <h5 class="card-title blogH5">Q 5. Can the risk of breast cancer be lowered?</h5>
                        <p class="card-text">A 5. Though there is no proven ways that help in preventing breast
                            cancer, certain alterations in lifestyle can lower the risk. Steps that might reduce
                            the risk include maintaining a healthy weight, having an active lifestyle, limiting
                            alcohol and timely pregnancy.</p>
                        <h5 class="card-title blogH5">Q 6. Does reproductive and menstrual history increase the
                            breast cancer risk?</h5>
                        <p class="card-text">A 6.Yes, women who get pregnant for the first time after 30 or
                            later or have no biological children are at an increased risk. Furthermore, women
                            who got their periods before the age of 12 and began menopause after 55 are also at
                            risk.</p>
                        <h5 class="card-title blogH5">Q 7. Do all pains in the breast direct to breast cancer?
                        </h5>
                        <p class="card-text">A 7. Known as mastalgia/mastodynia, soreness or pain in the breast
                            is usually associated with pre and post menstruation. Many women often suspect this
                            as a symptom of breast cancer. However, it is rare that the pain is because of
                            cancer. But, if the pain lasts for more than 3 weeks, seeking a consultation is
                            advisable.</p>
                        <h5 class="card-title blogH5">Q 8. Are all Benign Cysts cancerous?</h5>
                        <p class="card-text">A 8. Cysts are fluid-filled sacs within the breast and can rarely
                            lead to cancer. However, any lump in the breast should be immediately brought to the
                            doctor’s notice and investigated. Cyclical lumps are also common in some women. They
                            are cysts that appear before the menstrual cycle and disappear later. Though they
                            are harmless, there is no harm in getting them monitored.</p>
                        <h5 class="card-title blogH5">Q 9. Is Mammography Painful?</h5>
                        <p class="card-text">A 9. Compression of the breasts during mammography can cause slight
                            discomfort. Doctors always advise the patients to schedule the test a week after the
                            periods, so that the breasts are less tender and hurt less. To prevent discomfort,
                            the doctor may even advise a painkiller approximately 45-60 minutes before the test
                            is conducted.</p>
                        <h5 class="card-title blogH5">Q 10. What are the major side effects of chemotherapy?</h5>
                        <p class="card-text">A 10. The side effects differ from one individual to another.
                            Common side-effects of chemotherapy include nausea, anaemia, mouth sores,
                            appetite change, hair loss, fatigue, infertility, menopause, diarrhoea and
                            changes in smell or taste. </p>
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