<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include "includes/linksBundle.php";
  ?>
  <link href="css/index.css" rel="stylesheet">
  <title>Home | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

  <?php
  include "includes/header.php";
  ?>

  <!-- breadcrumb Designing -->
  <ul class="breadcrumb">
    <li class="breadList">Home</li>
  </ul>


  <div class="main">
    <div class="img-slider">
      <div class="slider"></div>
    </div>
  </div>

  <!-- Appointment block -->
  <div class="app">
    <div class="container-fluid cf">
      <div class="row">
        <div class="app col-md-6 d-flex justify-content-center flex-column">
          <h2>Schedule Your Appointment Online</h2>
          <h4>Get <span class=" appTxt">10% discount</span> on all In-Hospital appointments*</h4>
          <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            Book An Appointment<img src="img/chevron-right.svg" />
          </button>
        </div>
        <div class="col-md-6 indApp"><img src="img/appointment.jpg" alt=""></div>
      </div>
    </div>
  </div>

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
  

  <!-- specialization content -->

  <div class="specification_main container my-5">
    <div class="row">

      <div class="speci2 col-xl-6">
        <div class="content_doc ">
          <h1>Looking for an Expert</h1>
          <p>Public Healthcare is home to some of eminent<br />doctors in India.</p>
          <a class="find_doc" href="findDoctor.php">Find A Doctor <img src="img/arrow-right.svg" /></a>
        </div>
        <img src="img/doctor.svg" alt="Doctor Image">
      </div>

      <div class="speci1 col-xl-6 row mt-5">
        <h1>Specialities & Procedures</h1>
        <hr class="border-2 border-top border-dark">
        <div class="row">
          <div class="specialities col" onclick="myScience1();"> Specialities</div>
          <div class="procedures col" onclick="myScience2();"> Procedures</div>
        </div>


        <div id="specialIcon">
          <ul>
            <li class="lis"><img src="img/special/cancer care oncology.svg" alt="1"><a href="#">Cancer Care /
                Oncology</a></li>
            <li class="lis"><img src="img/special/cardia.svg" alt="1"><a href="#">Cardic Science</a></li>
            <li class="lis"><img src="img/special/Liver Transplant and bs.svg" alt="1"><a href="#">Liver Transplant and
                Biliary
                Science</a></li>
            <li class="lis"><img src="img/special/Orthopaedics.svg" alt="1"><a href="#">Orthopaedics & Joint
                Replacement</a>
            </li>
            <li class="lis"><img src="img/special/Neurosciences.svg" alt="1"><a href="#">Neuroscience</a></li>
          </ul>
        </div>

        <div id="proceIcon">
          <ul>
            <li class="lis"><img src="img/special/Valvular Heart Surgery.svg" alt="1"><a href="#">Valvular Heart
                Surgery</a>
            </li>
            <li class="lis"><img src="img/special/Knee Replacement Surgery.svg" alt="1"><a href="#">Knee Replacement
                Surgery</a>
            </li>
            <li class="lis"><img src="img/special/The Da Vinci Xi Robotic Surgery.svg" alt="1"><a href="#">Da Vinci
                Robotic
                Surgery</a></li>
            <li class="lis"><img src="img/special/Bone Marrow Transplant .svg" alt="1"><a href="#">Bone Marrow
                Transplant
                (BMT)</a></li>
            <li class="lis"><img src="img/special/Lung Transplant.svg" alt="1"><a href="#">Lung Transplant</a></li>
          </ul>
        </div>
        <a href="specialities.php" class="link-secondary">View All <img src="img/chevron-right.svg" /></a>
      </div>
    </div>
  </div>


  <!-- next-generation -->
  <div class="container-fluid cf">
    <div class="row">
      <div class="rob col-md-6"><img src="img/robot.jpeg" alt=""></div>
      <div class="rob col-md-6 d-flex justify-content-center flex-column">
        <h1>Next Generation Robotic Surgeries</h1>
        <hr class="border-2 border-top border-dark">
        <div class="rob_info">Info</div>
        <div class="rob_info_detail">
          Government Institute of Laparoscopic, Endoscopic and Bariatric Surgery at Government Hospital, Saket, Delhi
          has taken a
          giant leap in Robotic surgery with the Next-Generation Robot- VERSIUS from Cambridge Medical Robotics.
          Versius robot offers more flexibility, precision, and control for various surgeries such as Gallbladder
          Stones, Hernia, Appendicitis, Weight Loss (Bariatric) Surgery, Fundoplication and others.
        </div>
        <div class="rob_info_more">
          <a href="robotic.php">Read More <img src="img/arrow-right.svg" /></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Health Insureance Section -->

  <div class="about_bar container-fluid cf" id="ABOUT">
    <img class="page_img" src="img/pg1.svg" />
    <div class="about_content">
      <h2>What is a Government Health Insurance Scheme?</h2>
      <hr>
      It is a Central or State Government powered scheme that is designed to provide adequate health cover at a low-priced insurance cover. Such health insurance policies are usually offered on a yearly basis.<span id="dots">.....</span>
      <div id="more">
        <ul class="para">
          <h3>Types of Government Health Insurance Scheme</h3>
          Read ahead to know more about the several health insurance schemes by the Government of India:
          <li class="paragraph">
            <strong>1. Ayushman Bharat Yojana:</strong>Ayushman Bharat is a universal health insurance scheme of the Ministry of Health and Family Welfare, Government of India. PMJAY was launched to provide free healthcare services to more than 40% population of the country. The scheme offers a health cover of Rs 5 Lakh.
            <br>In this scheme, it covers medicines, diagnostic expenses, medical treatment, and pre-hospitalization costs. The poorest families of India can benefit from this healthcare scheme.
          </li>

          <li class="paragraph">
            <strong>2. Pradhan Mantri Suraksha Bima Yojana:</strong>Pradhan Mantri Suraksha Bima Yojana aims to provide accident insurance cover to the people of India. People in the age group of 18 years to 70 years who have an account in a bank can avail benefit from this scheme.
            <br>This policy provides an annual cover of Rs 2 lakh for total disability and death cover and Rs 1 lakh for partial disability. The policy premium gets automatically debited from the policyholder’s bank account.
          </li>

          <li class="paragraph">
            <strong>3. Aam Aadmi Bima Yojana (AABY):</strong>This is one of the latest National Health Insurance schemes having been established in the year 2007, October. It basically covers individuals from the age of 18 years-59 years. AABY insurance scheme is tailored for all those citizens living in the upcountry and in the rural areas.
            <br>It also covers the landless citizens who are tenants living both in urban and rural areas. It also includes giving scholarships to underprivileged children.
            <br>Basically, the head of the family or the earning member is the one protected by this scheme. The premium of 200 rupees per annum is shared equally by the state and the central government. Upon a natural death, the family is compensated at 30000 rupees. However, upon death caused by a permanent disability, the family is compensated at 75,000 rupees.
          </li>

          <li class="paragraph">
            <strong>4. Central Government Health Scheme (CGHS):</strong>This scheme was started in the year 1954 and provides comprehensive health care facilities for central government officials and pensioners residing in cities. Operations of this scheme take place in cities such as Kolkata, Mumbai, Lucknow, Delphi, Nagpur, and Pune.
            <br>The people covered by this scheme are required to be residing in India. This is a National Health Company Online Renewal program that includes the privilege of health education to the beneficiaries.
            <br>This scheme has the following main components: All dispensary related services including domiciliary care. In addition, the beneficiaries of this scheme have the privilege of being hospitalized each and every time they fall ill.
            <br>On the other hand, whenever you have an X-ray or laboratory examination requirements, they would be provided free under this particular scheme. The most important advantage of this National Health Insurance scheme is that it provides free specialists consultations both at hospital level and dispensaries.
          </li>

        </ul>

        <img class="page_img" src="img/page1.png">
      </div>

      <div onclick="myReading()" id="Btn">Read more</div>
    </div>
  </div>

  <!-- Health Blogs -->
  <div class="container my-4">

    <div class="row">
      <h2><u>Health Blogs</u></h2>
    </div>
    <hr class="border-2 border-top border-dark">

    <div class="row">

      <div class="col-md-3">
        <a href="MemoryBoostingFoods.php" class="blogAnchor">
          <div class="card ">
            <img src="img/shutterstock.jpg" class="card-img-top img-fluid " alt="image">
            <div class="card-body">
              <p class="card-text row txt">10 Foods that Improve Memory and Focus!</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="10BreastCancerFAQs.php" class="blogAnchor">
          <div class="card  ">
            <img src="img/canser.png" class="card-img-top img-fluid " alt="image">
            <div class="card-body">
              <p class="card-text row txt">10 Breast Cancer FAQs</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="Monkeypox.php" class="blogAnchor">
          <div class="card  ">
            <img src="img/placeholder.jpg" class="card-img-top img-fluid " alt="image">
            <div class="card-body">
              <p class="card-text row txt">Monokeypox: Causes, Symptoms. Treatment and
                Prevention</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="MeningiomaBrainTumors.php" class="blogAnchor">
          <div class="card  ">
            <img src="img/medical_background.jpg" class="card-img-top img-fluid " alt="image">
            <div class="card-body">
              <p class="card-text row txt">Meningioma Brain Tumors: Answers to Commonly Asked
                Questions</p>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>


    <!-- Footer -->
    <?php
    include "includes/footer.php";
    ?>

</body>

</html>