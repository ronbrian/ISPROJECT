<?php
session_start();
 include 'dbconnect.php';
 $patientid = $_SESSION["idpatient"];
 $symptoms = $_GET["symptoms"];
 $period = $_GET["period"];
 $diagnosis = $_GET["diagnosis"];
 $notes = $_GET["notes"];
 $prescription = $_GET["prescrition"];
 
 $doctor = $_GET["doctor"];
 
 



 $sql = " INSERT INTO `medical info`(`id`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`) VALUES ('$patientid','$symptoms','$period','$diagnosis','$prescription','$notes','$doctor','$time') ";
 
 
 if ($conn->query($sql) === TRUE) {
    echo "  alert(' Details have been recorded ');";
    header("Location: doctor.php");
    unset($_SESSION["idpatient"]);

 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 





?>