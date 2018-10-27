<?php
session_start();
include 'dbconnect.php';








$id = $_REQUEST["q"]; 
$name =  $_REQUEST["name"]; 
$diagnosis =  $_REQUEST["diagnosis"]; 
$prescription =  $_REQUEST["prescription"]; 
$doctor =  $_REQUEST["doctor"]; 




$sql = "INSERT INTO `inpatient`(`id`, `name`, `diagnosis`, `prescription`, `doctor`) VALUES ('$id','$name','$diagnosis','$prescription','$doctor')";

if ($conn->query($sql) === TRUE) {


    echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}





?>


