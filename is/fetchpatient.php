<?php 
session_start();
include 'dbconnect.php';
$time = date("Y/m/d/h:i");



$sql2 = "SELECT `id`, `time` FROM `logs` WHERE `time` = '$time'";
$result = $conn->query($sql2);
/*   RETRIEVING TITLE   */

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
     $id =  $row["id"];
}
} else {
echo "0 results";
}



$patientid = $id;

$sql="SELECT `name`, `age`, `id`, `tel`, `email`, `gender` FROM `patient` WHERE `id`= '$patientid' ";

$result = $conn->query($sql);
/*   RETRIEVING PATIENT DETAILS   */

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
     
    $name =  $row["name"];
     $age =   $row["age"];
     $id =  $row["id"];
     $tel =  $row["tel"];
     $email =  $row["email"];
     $gender =  $row["gender"];


}
} else {
    echo "<script> alert(' PATIENT NOT FOUND!!'); </script>";
}

echo $name;
echo $age;

?>