<?php
session_start();
include '../../dbconnect.php';



$userid = $_SESSION["userid"];
$name = $_SESSION["user"];
$currenttime = $time;


$appointmentdate = $_REQUEST["q"]; 
$appointmenttime = $_REQUEST["appointmenttime"];;
$service =  $_REQUEST["service"]; 





$sql = "INSERT INTO `appointments`(`user id`, `name`, `current time`, `appointment date`, `appointment time`, `service`) VALUES ('$userid','$name','$currenttime','$appointmentdate','$appointmenttime','$service') ";


if ($conn->query($sql) === TRUE) {

   echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}






?>


