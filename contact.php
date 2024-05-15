<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/linksBundle.php";
    ?>
    <link href="css/contact.css" rel="stylesheet">
    <title>Contact Us | PHP</title>
</head>

<body onload="myPreLoaderFunction();">

    <?php
    include "includes/header.php";
    ?>

    <!-- breadcrumb Designing -->
    <ul class="breadcrumb">
        <li class="breadList"><a href="index.php">Home</a></li>
        <li class="breadList">Contact Us</li>
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


    <!-- Contact Us -->
    <div class="container-fluid mb-5">

        <div class="row env ">
            <div class="col-sm-8">
                <h2>Contact Us</h2>
                <p>We would love to hear from you! Let us know of your experience with "Public Healthcare Portal", and keep in
                    touch. Please fill in the required details and our team will get in touch with you.</p>
            </div>
            <div class="col-sm-4">
                <div class="envelope">
                    <img src="img/envelope.png" alt="Envelope Image" />
                </div>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-sm-2 contactSide d-flex justify-content-center flex-column">
                <p>Please select one of the below:</p>
                <div class="btn btn-outline-primary frBtn" id="enquiry" onclick="myClick1();">Enquiry</div>
                <div class="btn btn-outline-primary frBtn" id="compliments" onclick="myClick2();">Compliments</div>
                <div class="btn btn-outline-primary frBtn" id="complaints" onclick="myClick3();">Complaints</div>
                <div class="btn btn-outline-primary frBtn" id="others" onclick="myClick4();">Others</div>
            </div>
            <div class="col-sm-10 contactForm">

                <div id="enquiryForm" class="card p-5">
                    <h2 class="contHead">Enquiry Form</h2>
                    <P class="contPara"><i class='far fa-hand-point-right'></i>If you have any medical, or hospital process related query, reach out to us and don't hesitate to ask. We are here to provide you transparent, seamless, and informative care
                        Please fill in the required details and our team will get in touch with you.</P>
                    <form class="row g-3" method="post" action="subServer/enqSubmit.php">
                        <div class="col-md-6 p-3">
                            <label for="inputType" class="form-label">Enquiry Type</label>
                            <select id="inputType" name="enquiryType" class="form-select">
                                <option selected value=""></option>
                                <option value="Dr. Appointment" >Dr. Appointment</option>
                                <option value="Health Packages" >Health Packages</option>
                                <option value="Healthcare At Home" >Healthcare At Home</option>
                                <option value="Lab Report" >Lab Report</option>
                                <option value="Immigration" >Immigration</option>
                            </select>
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputMob" class="form-label">Mobile No.</label>
                            <input type="text" name="contact" class="form-control" id="inputMob">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputHospital" class="form-label">Hospital</label>
                            <select id="inputHospital" name="hospital" class="form-select">
                                <option selected value=""></option>
                                <option value="Hospitals in Bahraich">Hospitals in Bahraich</option>
                                <option value="Hospitals in Gonda">Hospitals in Gonda</option>
                                <option value="Hospitals in Lucknow">Hospitals in Lucknow</option>
                                <option value="Hospitals in Barabanki">Hospitals in Barabanki</option>
                                <option value="Hospitals in Ayodhya">Hospitals in Ayodhya</option>
                            </select>
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputTime" class="form-label">Preferred Time To Call</label>
                            <select id="inputTime" name="callingTime" class="form-select">
                                <option selected value=""></option>
                                <option value="10:00 AM - 12:00 PM"> 10:00 AM - 12:00 PM </option>
                                <option value="12:00 PM - 02:00 PM"> 12:00 PM - 02:00 PM </option>
                                <option value="02:00 PM - 03:00 PM"> 02:00 PM - 03:00 PM </option>
                                <option value="03:00 PM - 05:00 PM"> 03:00 PM - 05:00 PM </option>
                            </select>
                        </div>
                        <div class="col-md-12 p-3">
                            <label for="inputRemark" class="form-label">Remark</label>
                            <textarea class="form-control" name="remark" id="inputRemark" rows="3" placeholder="Please write remark here..."></textarea>
                        </div>
                        <div class="col-12 p-3">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div id="complimentsForm" class="card p-5">
                    <h2 class="contHead">Compliment Form</h2>
                    <p class="contPara"><i class='far fa-hand-point-right'></i>We know we can do better, and we need your help in doing that. Let us know how we can serve and take care of you better.
                        Please fill in the required details and our team will get in touch with you.</p>
                    <form class="row g-3" method="post" action="subServer/complimentsSubmit.php">
                        <div class="col-md-6 p-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputMob" class="form-label">Mobile No.</label>
                            <input type="text" name="contact" class="form-control" id="inputMob">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputHospital" class="form-label">Hospital</label>
                            <select id="inputHospital" name="hospital" class="form-select">
                                <option selected value=""></option>
                                <option value="Hospitals in Bahraich">Hospitals in Bahraich</option>
                                <option value="Hospitals in Gonda">Hospitals in Gonda</option>
                                <option value="Hospitals in Lucknow">Hospitals in Lucknow</option>
                                <option value="Hospitals in Barabanki">Hospitals in Barabanki</option>
                                <option value="Hospitals in Ayodhya">Hospitals in Ayodhya</option>
                            </select>
                        </div>
                        <div class="col-md-12 p-3">
                            <label for="inputRemark" class="form-label">Remark</label>
                            <textarea class="form-control" id="inputRemark" name="remark" rows="3" placeholder="Please write remark here..."></textarea>
                        </div>
                        <div class="col-12 p-3">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div id="complaintsForm" class="card p-5">
                    <h2 class="contHead">Complaint Form</h2>
                    <p class="contPara"><i class='far fa-hand-point-right'></i>We apologise for any inconvenience that might have affected your recovery. Please let us know what went wrong and how we can serve and improve our services.
                        Please fill in the required details and our team will get in touch with you.</p>
                    <form class="row g-3" method="post" action="subServer/complaintsSubmit.php">
                        <div class="col-md-6 p-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputMob" class="form-label">Mobile No.</label>
                            <input type="text" name="contact" class="form-control" id="inputMob">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputHospital" class="form-label">Hospital</label>
                            <select id="inputHospital" name="hospital" class="form-select">
                                <option selected value=""></option>
                                <option value="Hospitals in Bahraich">Hospitals in Bahraich</option>
                                <option value="Hospitals in Gonda">Hospitals in Gonda</option>
                                <option value="Hospitals in Lucknow">Hospitals in Lucknow</option>
                                <option value="Hospitals in Barabanki">Hospitals in Barabanki</option>
                                <option value="Hospitals in Ayodhya">Hospitals in Ayodhya</option>
                            </select>
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputArea" class="form-label">Area of Concern</label>
                            <select id="inputArea" name="concern" class="form-select">
                                <option selected value=""></option>
                                <option  value="Emergency">Emergency</option>
                                <option  value="Doctor">Doctor</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Food Services">Food Services</option>
                                <option value="Diagnostics">Diagnostics</option>
                                <option value="Discharge">Discharge</option>
                                <option value="Housekeeping">Housekeeping</option>
                                <option value="Billing">Billing</option>
                            </select>
                        </div>
                        <div class="col-md-12 p-3">
                            <label for="inputRemark" class="form-label">Remark</label>
                            <textarea class="form-control" name="remark" id="inputRemark" rows="3" placeholder="Please write remark here..."></textarea>
                        </div>
                        <div class="col-12 p-3">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div id="othersForm" class="card p-5">
                    <h2 class="contHead">Others Form</h2>
                    <p class="contPara"><i class='far fa-hand-point-right'></i>We would love to hear from you! Let us know of your experience with PHP, and keep in touch.
                        Please fill in the required details and our team will get in touch with you.</p>
                    <form class="row g-3" method="post" action="subServer/otherSubmit.php">
                        <div class="col-md-6 p-3">
                            <label for="inputType" class="form-label">Other Enquiry Type</label>
                            <select id="inputType" name="enquiryType" class="form-select">
                                <option selected value=""></option>
                                <option value="Insurance/TPA">Insurance/TPA</option>
                                <option value="Business Tie Up">Business Tie Up</option>
                                <option value="Corporate Programme">Corporate Programme</option>
                                <option value="PR and Media">PR and Media</option>
                            </select>
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputMob" class="form-label">Mobile No.</label>
                            <input type="text" name="contact" class="form-control" id="inputMob">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="inputHospital" class="form-label">Hospital</label>
                            <select id="inputHospital" name="hospital" class="form-select">
                                <option selected value=""></option>
                                <option value="Hospitals in Bahraich">Hospitals in Bahraich</option>
                                <option value="Hospitals in Gonda">Hospitals in Gonda</option>
                                <option value="Hospitals in Lucknow">Hospitals in Lucknow</option>
                                <option value="Hospitals in Barabanki">Hospitals in Barabanki</option>
                                <option value="Hospitals in Ayodhya">Hospitals in Ayodhya</option>
                            </select>
                        </div>
                        <div class="col-md-12 p-3">
                            <label for="inputRemark" class="form-label">Remark</label>
                            <textarea class="form-control" name="remark" id="inputRemark" rows="3" placeholder="Please write remark here..."></textarea>
                        </div>
                        <div class="col-12 p-3">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


    <?php
    include "includes/footer.php";
    ?>

</body>

</html>