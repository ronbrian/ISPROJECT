<?php 
session_start();
include '../../dbconnect.php';




$patientid = $_SESSION["userid"];
//ORDER BY expression [ ASC | DESC ];
$sql="SELECT `no`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`, `hospital` FROM `medical info` WHERE `id` = '$patientid' ORDER BY `no` DESC ";

$result = $conn->query($sql);
/*   RETRIEVING PATIENT DETAILS   */

if ($result->num_rows > 0) {
// output data of each row
$count=1;
while($row = $result->fetch_assoc()) {
     
    $symptoms =  $row["symptoms"];
    $period =  $row["period"];
    $diagnosis =  $row["diagnosis"];
    $prescription =  $row["prescription"];
    $notes =  $row["notes"];
    $doctor =  $row["doctor"];
    $hospital =  $row["hospital"];
    $date =  $row["date"];

    echo $count."<br>";
    echo "Presenting Problems : ".$symptoms."<br>";  
    echo "For How Long / Persistence : ".$period."<br>";    
    echo "Diagnosis : ".$diagnosis."<br>";    
    echo "Prescribed Drugs : ".$prescription."<br>";    
    echo "Notes : ".$notes."<br>";    
    echo "Doctor : Dr.".$doctor."<br>";  
    echo "<input style = 'visibility: hidden;' id='doctor".$count."'  value = '".$doctor."'><br>";  
      
    echo "Hospital :".$hospital."<br>";    
    echo "Date : ".$date."<br>";
    echo "<br>- - - - - - - - - - - - - - - - - - - -<br>";
    $count++;


}
     } else {

    //nothing goes here

}




?>