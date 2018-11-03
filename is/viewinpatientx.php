<?php 
session_start();
include 'dbconnect.php';







$sql="SELECT `no`, `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `status`, `nurse`, `doctor` FROM `inpatient` ORDER BY no DESC;";

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



    echo "<div id='hiddendiv2' <  style=''  >";
    //echo "<form id = 'updateappointment$count' >";
    
    echo "<input id='patientid$count' value='$id'  />";
    echo "<input id='patientname$count' value='$name'  />";
    echo "<input id='diagnosis$count' value='$diagnosis'  />";
    echo "<input id='prescription$count' value='$prescription' />";
    echo "<input id='admissiondate$count' value='$admissiondate' />";
    echo "<input id='dischargedate$count' value='$dischargedate' />";
    echo "<input id='duration$count' value='$duration' />";
    echo "<input id='status$count' value='$status' />";
    echo "<input id='nurse$count' value='$nurse' />";
    echo "<input id='doctor$count' value='$doctor' />";
    echo "<button id='btnupdate' onclick='updateappointment$count()' > Admit Patient  </button> ";
    echo "
    <script>
    function updateappointment$count(){
        $('#appointmentupdate1').show();
        document.getElementById('patientidupdate').value = document.getElementById('patientid$count').value;
        document.getElementById('patientnameupdate').value = document.getElementById('patientname$count').value;
        document.getElementById('diagnosisupdate').value = document.getElementById('diagnosis$count').value;
        document.getElementById('prescriptionupdate').value = document.getElementById('prescription$count').value;
        document.getElementById('admissiondateupdate').value = document.getElementById('admissiondate$count').value;
        document.getElementById('dischargedateupdate').value = document.getElementById('dischargedate$count').value;
         document.getElementById('statusupdate').value = document.getElementById('status$count').value;
        //skipped the one for the nurse,,,, it will be obtained from the user session
        document.getElementById('doctorupdate').value = document.getElementById('doctor$count').value;

    }

    </script>
    
    ";

    //echo "</form>";
    echo "</div> ";
    $count++;   
    echo " - - - - - - - - - - - - - - - - -<br>";
 


}
     } else {

    //nothing goes here

}








?>