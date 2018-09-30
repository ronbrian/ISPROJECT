
<?php
include 'dbconnect.php';
session_start();

 
 $name2 = $_POST['name1'];
 $user= $_SESSION["user"];
 $time = date("Y/m/d/h:i");
 $doctor = $_SESSION["user"];
 

 $sql = "INSERT INTO `logs`(`id`, `time`, `doctor`) VALUES ('$name2','$time','$doctor')";
 
 
 if ($conn->query($sql) === TRUE) {
        
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 


 
 $conn->close();
 
 ?>