<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-double-up' style='font-size:24px'></i></button>


<div id="mySidenav" class="sidenav">
    <a href="#" class="sideLink1"><i class="fa fa-phone"></i></a>
    <a href="#" class="sideLink2"><i class="fa fa-whatsapp"></i></a>
    <a href="#" class="sideLink3"><i class="fa fa-envelope"></i></a>
    <a href="#" class="sideLink4"><i class="fa fa-telegram"></i></a>
</div>

<!-- Menubar Designing -->
<div class="topnav ">

    <a href="index.php"><img class="logo" src="img/lg.png" /></a>
   <span class="webname" style="font-family: Aclonica; font-weight: 300; color:#fff;">Public Healthcare Portal<span style="font-size:12px; font-family: Aclonica;"> (PHP)</span></span>
    <div href="javascript:void(0)" class="icon m-3" onclick="myLinks(); myIcon(this); myNav(this);">
        <div class="l1"></div>
        <div class="l2"></div>
        <div class="l3"></div>
    </div>
</div>

<div id="navbar">
    <div id="myLinks">
        <div class="menu">
            <li class="pLink"><a class="lk" href="index.php"><i class="fas fa-home"></i></a></li>
            <li class="pLink"><a class="lk" href="about.php">About</a></li>
            <li class="pLink"><a class="lk dropdown" href="#">Patient<i class="fas fa-angle-down pl-1"></i>
                    <div class="dropdown-content pb-0">
                        <p data-bs-toggle="modal" data-bs-target="#appointmentModal">Book An Appointment</p>
                        <p data-bs-toggle="modal" data-bs-target="#patientLoginModal">login</p>
                    </div>
                </a></li>
            <li class="pLink"><a class="lk dropdown" href="faculty.php">Faculty</a></li>
            <li class="pLink"><a class="lk dropdown" href="contact.php">Contact Us</a></li>
            <li class="pLink"><a class="lk" href="findDoctor.php">Find A Doctor</a></li>
            <li class="pLink"><span class="lk" data-bs-toggle="modal" data-bs-target="#chatBot" >Help</span></li>
        </div>
    </div>
</div>

<!-- Preloader designing  -->
<div id="loading">
</div>