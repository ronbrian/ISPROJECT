<?php 
session_start();
include 'dbconnect.php';






$sql=" SELECT `no`, `name`, `current time`, `appointment date`, `appointment time`, `service`, `viewed` FROM `appointments` ORDER BY `no` DESC;";

$result = $conn->query($sql);
/*   RETRIEVING APPOINTMENTS  */

if ($result->num_rows > 0) {
// output data of each row

$count=1;

echo "<a href ='markasread.php' style = 'color: blue;'> Mark all as Read  </a><br><br>";

while($row = $result->fetch_assoc()) {
    
    $no = $row["no"];
    $name =  $row["name"];
    $currenttime =  $row["current time"];
    $appointmentdate =  $row["appointment date"];
    $appointmenttime =  $row["appointment time"];
    $service =  $row["service"];
    $viewed = $row["viewed"];
  

    echo $count."<br>";
    echo "Patient Name : ".$name."<br>";  
   
    echo "Appointment Date : ".$appointmentdate."<br>";    
    echo "Appointment Time : ".$appointmenttime."<br>";    
    echo "Service : ".$service."<br>"; 
    $count++;   
    echo " - - - - - - - - - - - - - - - - -<br>";
 


}
     } else {

    //nothing goes here

}










?>