<?php

    session_start();

    include 'subServer/database_connect.php';

    $ids = $_GET['id'];

    $sql = "SELECT * FROM ptregister WHERE id = '$ids'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
    }

    $row = mysqli_fetch_assoc($result);
    if (!$row) {
    echo "Error !";
    }





    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf -> SetFont("Arial","","25");

    $width = $pdf -> GetPageHeight();
    $height = $pdf -> GetPageHeight();

    $gap1=35;
    $gap2=70;
    $gap3=75;
    $gap4=265;
    $gap = 2;
    
    $pdf -> Image('img/lg.png', 20, 8, 20);
    $pdf -> Image('img/rx.png', 15, 78, 10);
    $pdf -> Cell(0,15,"Appointment Letter",0,1,'C');
    $pdf -> Line($gap,$gap1,$width-$gap1,$gap1);

    $pdf -> SetFont("Arial","","10");
    $pdf -> SetTextColor(3,169,244);

    $pdf -> Cell(0,10,"Doctor Name:  " .$row['doctor'],0,0,'L');
    $pdf -> Cell(0,10,"Date: ".date("d M Y"),0,1,'R');

    $pdf -> SetFont("Arial","","16");
    $pdf -> SetTextColor(63,63,63);

    $name=$row['name'];
    $age=  (int)date("Y")-(int)$row['dob'];
    $gender=ucfirst($row['gender']);
    $aadhar=chunk_split($row['aadhar'],4," ");


    $pdf -> Cell(100,20,"Name :  ".$name ,0,0);
    $pdf -> Cell(0,20,"Age :  ".$age,0,1);
    $pdf -> Cell(100,10,"Gender :  ".$gender,0,0);
    $pdf -> Cell(0,10,"Aadhar :  ".$aadhar,0,1);

    $pdf -> Line($gap,$gap2,$width-$gap2,$gap2);

    $pdf -> Line(150,$gap3,150,$height-37);

    $pdf -> Line(10,$gap4,$width-100,$gap4);

    
    $pdf -> Cell(0,196,"",0,1,'C');

    $pdf -> SetFont("Arial","","14");
    $pdf -> Cell(0,15,"* 24x7 PHP support",0,1,'L');

    $file = $name. '.pdf';
    // $pdf->Output($file,'D');
    $pdf->Output();
?>
