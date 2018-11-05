<?php
session_start();
include 'dbconnect.php';


$name = $_REQUEST["q"];



$appointmentdate = $_REQUEST["appointmentdate"]; 
$appointmenttime = $_REQUEST["appointmenttime"];;
$service =  $_REQUEST["service"]; 





$sql = "INSERT INTO `appointments`(`user id`, `name`, `current time`, `appointment date`, `appointment time`, `service`) VALUES ('$userid','$name','$time','$appointmentdate','$appointmenttime','$service') ";


if ($conn->query($sql) === TRUE) {

   echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}






?>


