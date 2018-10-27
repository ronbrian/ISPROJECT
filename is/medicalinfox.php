<?php
session_start();
include 'dbconnect.php';
$patientid = $_SESSION["idpatient"];
$symptoms = $_GET["symptoms"];
$period = $_GET["period"];
$diagnosis = $_GET["diagnosis"];
$notes = $_GET["notes"];
$prescription = $_GET["prescrition"];

$doctor = $_SESSION["user"];





$sql = " INSERT INTO `medical info`(`id`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`, `hospital`) VALUES ('$patientid','$symptoms','$period','$diagnosis','$prescription','$notes','$doctor','$time','Kenyatta National Hospital') ";


if ($conn->query($sql) === true) {
    echo "  alert(' Details have been recorded ');";
    header("Location: doctor.php");
    unset($_SESSION["idpatient"]);

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


function save()
{


    $sql = " INSERT INTO `medical info`(`id`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`, `hospital`) VALUES ('$patientid','$symptoms','$period','$diagnosis','$prescription','$notes','$doctor','$time','Kenyatta National Hospital') ";


    if ($conn->query($sql) === true) {
        echo "  alert(' Details have been recorded ');";
        header("Location: doctor.php");
        unset($_SESSION["idpatient"]);

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}





?>