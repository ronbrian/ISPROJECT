<?php 
session_start();
include 'dbconnect.php';







$sql="SELECT `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `status`, `nurse`, `doctor` FROM `inpatient` ";

$result = $conn->query($sql);
/*   RETRIEVING APPOINTMENTS  */

if ($result->num_rows > 0) {
// output data of each row

$count=1;

while($row = $result->fetch_assoc()) {
     
    $id =  $row["id"];
    $name =  $row["name"];
    $diagnosis =  $row["diagnosis"];
    $prescription =  $row["prescription"];
    $admissiondate =  $row["admission date"];
    $dischargedate = $row["discharge date"];
    $duration = $row["duration"];
    $status = $row["status"];
    $nurse = $row["nurse"];
    $doctor = $row["doctor"];

    if($status == 0){
        $status = "Not Admitted";

    }elseif($status == 1){
        $status = "Admitted";

    }elseif($status == 2){
        $status = "Discharged";
    }else{
        $status = "***";
    }
    

    

    echo $count."<br><br>";
    echo "Patient Name : ".$name."<br>";  
    echo "Diagnosis : ".$diagnosis."<br>";    
    echo "Prescription : ".$prescription."<br>";    
    echo "Admission Date : ".$admissiondate."<br>"; 
    echo "Discharge Date : ".$dischargedate."<br>"; 
    echo "Duration : ".$duration."<br>"; 
    echo "Status : ".$status."<br>"; 
    echo "Nurse : ".$nurse."<br>"; 
    echo "Doctor : ".$doctor."<br>"; 
    $count++;   
    echo " - - - - - - - - - - - - - - - - -<br>";
 


}
     } else {

    //nothing goes here

}








?>