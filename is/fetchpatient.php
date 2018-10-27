<?php 
session_start();
include 'dbconnect.php';
$time = date("Y/m/d/h:i");

//OBTAINING THE USER ID FROM DB BASED ON THE TIME THAT IS HAS BEEN REQUESTED



$sql2 = "SELECT `id`, `time` FROM `logs` WHERE `time` = '$time'";
$result = $conn->query($sql2);
/*   RETRIEVING ID   */

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
     $id =  $row["id"];
}
} else {
echo "0 results";
}


$patientid = $id;

//OBTAINING USER PERSONAL RECORDS

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

    //nothing goes here

}



$sql3=" SELECT `height`, `weight`, `bmi`, `blood pressure`, `conditions`, `date` FROM `patient record` WHERE `id`='$patientid' ";

$result = $conn->query($sql3);
/*   RETRIEVING PATIENT DETAILS   */

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
     
    $height =  $row["height"];
    $weight =  $row["weight"];
    $bmi =  $row["bmi"];
    $bp =  $row["blood pressure"];
    $conditions =  $row["conditions"];
    $date =  $row["date"];


}
     } else {

    //nothing goes here

}


echo  "Name : ".$name."<br><br><br>";
echo  "Age : ".$age."<br><br><br>";
echo  "Gender : ".$gender."<br><br><br>";
echo  "Height : ".$height."<br><br><br>";
echo  "Weight : ".$weight."<br><br><br>";
echo  "B.M.I : ".$bmi."<br><br><br>";
echo  "Pre-Existing Conditions : ".$conditions."<br><br><br>";
echo  "Date Last Recorded : ".$date."<br><br><br>";
echo  " <form><div class=group><label  class='label'> Patient ID : </label><input id='idpatient' type='text' name='idpatient' class='input' value ='".$patientid."' disabled></div> ";
$_SESSION["idpatient"] = $patientid;




echo " 
<div>
<form>
<input id='sendname' value='".$name."' disabled>





</form>
</div>
";

if (isset($_SESSION["idpatient"])) {

}else{
 //hide the div through javascript
    echo "<script> hiding(); </script>";

}



?>

