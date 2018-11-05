<?php
session_start();
include 'dbconnect.php';


$patientid = $_REQUEST["q"]; 
$height =  $_REQUEST["height"]; 
$weight =  $_REQUEST["weight"]; 
$bmi =  $_REQUEST["bmi"]; 
$bloodpressure =  $_REQUEST["bloodpressure"]; 
$conditions =  $_REQUEST["conditions"]; 
$date =  $_REQUEST["date"]; 



$sql ="UPDATE `patient record` SET `height`='$height', `weight`='$weight', `bmi`='$bmi', `blood pressure`='$bloodpressure', `conditions`='$conditions', `date`= '$date' WHERE `id`= '$patientid' ";
if ($conn->query($sql) === TRUE) {


    echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}


?>


