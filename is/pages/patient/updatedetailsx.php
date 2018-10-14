<?php
session_start();
 include '../../dbconnect.php';


 $patientid = $_SESSION["userid"];
 $height = $_GET["height"];
 $weight = $_GET["weight"];
 $bp = $_GET["bp"];
 $condition = $_GET["condition"];

$x = $weight/$height;
$bmi = $x/$height  ;

 $sql = " UPDATE `patient record` SET `height`='$height',`weight`='$weight',`bmi`='$bmi',`blood pressure`='$bp',`conditions`='$condition' WHERE `id` = '$patientid' ";
 
 
 if ($conn->query($sql) === TRUE) {
    echo "  alert(' Details have been recorded ');";
    header("Location: patienthome.php");

 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 





?>