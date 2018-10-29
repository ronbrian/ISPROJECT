<?php
session_start();
include 'dbconnect.php';








$id = $_REQUEST["q"]; 






$patientid = $_REQUEST["q"]; 
$name =  $_REQUEST["name"]; 
$symptoms =  $_REQUEST["symptoms"]; 
$period =  $_REQUEST["period"]; 
$diagnosis =  $_REQUEST["diagnosis"]; 
$prescription =  $_REQUEST["prescription"]; 
$notes =  $_REQUEST["notes"]; 
$doctor =  $_REQUEST["doctor"]; 
//$time;









$sql = "INSERT INTO `inpatient`(`id`, `name`, `diagnosis`, `prescription`, `doctor`) VALUES ('$id','$name','$diagnosis','$prescription','$doctor')";

if ($conn->query($sql) === TRUE) {


    echo "SUCCESS";

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location:  ");


}





$sql2 = " INSERT INTO `medical info`(`id`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`, `hospital`) VALUES ('$patientid','$symptoms','$period','$diagnosis','$prescription','$notes','$doctor','$time','Kenyatta National Hospital') ";

if ($conn->query($sql2) === TRUE) {



}else{
    echo "<script> alert('ERROR !!'); </script>";
  


}




?>


