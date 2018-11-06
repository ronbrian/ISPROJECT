
<?php
include '../../dbconnect.php';
session_start();

$pass = $_REQUEST["q"]; 
$pass = md5($pass);
$id= $_REQUEST["uname"];
 
 

 $sql = " UPDATE `patient` SET `password` = '$pass' WHERE `id`= '$id' ; ";
 
 
 if ($conn->query($sql) === TRUE) {

 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 


 
 $conn->close();
 
 ?>