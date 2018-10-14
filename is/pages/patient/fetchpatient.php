<?php 
session_start();
include '../../dbconnect.php';
$time = date("Y/m/d/h:i");



$patientid = $_SESSION["userid"];
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

//REMEBER TO APPLY NEW FORM CSS FROM TEMPLATES THAT I WILL BE USING    '' 



echo  " <div class=group><label  class='label'> Patient ID : </label><input id='idpatient' type='text' name='idpatient' class='input' value ='".$patientid."' disabled></div> ";

echo "<form action = 'updatedetailsx.php' >";//REMEBER TO CREATE A FILE CALLED UPDATE DETAILSx.PHP
echo  "Name : ".$name."<br><br>";
echo  "Age : ".$age."<br><br>";
echo  "Gender : ".$gender."<br><br>";
echo  "Height : "."<input class = 'input' id='' name='height' value ='".$height."'>"."<br><br>";
echo  "Weight : "."<input class = 'input' id='' name='weight' value ='".$weight."'>"."<br><br>";
echo  "Blood Pressure : "."<input class = 'input' id='' name='bp' value ='".$bp."'>"."<br><br>";
echo  "B.M.I : "."<input class = 'input' id='' name='bmi' value ='".$bmi." kg/m2"."'>"."<button class=''   onclick = '' >Learn More on BMI</button><br><br>";
echo  "Pre-Existing Conditions : "."<input class = 'input' id='' name='condition' value ='".$conditions."'>"."<br><br>";
echo  "Date Last Recorded : ".$date."<br><br>";
echo  "Phone Number : ".$tel."<br><br>";
echo  "Email : ".$email."<br><br>";


echo " <input type='submit' class='button' value='Update Info' onclick='' > ";
echo "</form>";




?>

