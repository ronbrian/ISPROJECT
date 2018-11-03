<?php
session_start();
include 'dbconnect.php';


$patientid = $_REQUEST["q"]; 
$patientname =  $_REQUEST["patientname"]; 
$diagnosis =  $_REQUEST["diagnosis"]; 
$prescription =  $_REQUEST["prescription"]; 
$admissiondate =  $_REQUEST["admissiondate"]; 
$dischargedate =  $_REQUEST["dischargedate"]; 
$duration =  $_REQUEST["duration"]; 
$wardno =  $_REQUEST["wardno"]; 
$status =  $_REQUEST["status"]; 
$status = "Admitted";
$nurse =  $_REQUEST["nurse"]; 
$doctor =  $_REQUEST["doctor"]; 




$sql = "UPDATE `inpatient` SET `name`='$patientname', `diagnosis`='$diagnosis', `prescription`='$prescription', `admission date`='$admissiondate', `discharge date`='$dischargedate', `duration`='$duration', `ward no`='$wardno', `status`='$status', `nurse`='$nurse', `doctor`='$doctor' WHERE `id`='$patientid';";
if ($conn->query($sql) === TRUE) {


    echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}


$sql2 = "UPDATE `wards` SET `occupied`='1' WHERE `ward no` = '$wardno' ";
if ($conn->query($sql2) === TRUE) {


    echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}







?>


