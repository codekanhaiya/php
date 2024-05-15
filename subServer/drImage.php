<?php

session_start();

include 'database_connect.php';

$doctor_id = $_SESSION['doctor_id'];

$file = $_FILES['imageFile']['name'];
$ext = explode(".", $file);
$count = count($ext);

if (!empty($file)) {

    if ($ext[$count - 1] == 'jpg' || $ext[$count - 1] == 'jpeg' || $ext[$count - 1] == 'png' || $ext[$count - 1] == 'JPEG' || $ext[$count - 1] == 'JPG' || $ext[$count - 1] == 'PNG') {

        $tmp = $_FILES['imageFile']['tmp_name'];
        $folder = "dp/".date("d").time().$file;

        $checkImage = "SELECT * FROM dr_image WHERE drID = '$doctor_id'";
        $checkQuery = mysqli_query($conn, $checkImage);
        $rowImgQuery = mysqli_fetch_assoc($checkQuery);

        if($rowImgQuery){
            $imgQuery = "UPDATE dr_image SET image = '$folder' WHERE drID = '$doctor_id'";
            $imgResult = mysqli_query($conn, $imgQuery);
        }
        else{
            $imgQuery = "INSERT INTO dr_image (image, drId) VALUES ('$folder','$doctor_id')";
            $imgResult = mysqli_query($conn, $imgQuery);
        }

        move_uploaded_file($tmp, $folder); //file will come in "dp" folder when Data is not redundent.  

    } else {
?>
        <script>
            alert("Sorry!\nThis file type is not allowed.\nPlese upload only 'jpeg', 'jpg', 'png' file format.");
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert("Firstly please upload your photo! ");
    </script>
<?php
}
?>
<script>
    window.location.href = "../doctorDash.php";
</script>