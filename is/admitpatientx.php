<?php
session_start();
include 'dbconnect.php';



$nurse = $_SESSION["user"];


$patientid = $_GET["patientid"];
$name = $_GET["name"];
$diagnosis = $_GET["diagnosis"];
$admissiondate = $_GET["admissiondate"];
$dischargedate = $_GET["dischargedate"];
$duration = $_GET["duration"];
$wardno = $_GET["wardno"];






$sql = "INSERT INTO `inpatient`(`id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `ward no`, `nurse`, `doctor`) VALUES ('$patientid','$name','$diagnosis','$prescription','$admissiondate','$dischargedate','$duration','$wardno','$nurse','$doctor')";

if ($conn->query($sql) === true) {
    echo "  alert(' Details have been recorded ');";
    header("Location: nurse.php");
    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





?>