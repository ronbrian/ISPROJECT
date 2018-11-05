<?php


include 'dbconnect.php';
$q = $_REQUEST["q"];



$sql = "SELECT `name`,`diagnosis`,`prescription`,`admission date`,`discharge date`,`duration`,`ward no`,`status`,`nurse`,`nurse notes`,`doctor` FROM `inpatient` WHERE `isactive`=1 AND `id`='$q' AND `status`='Admitted' ";
$result = $conn->query($sql);
 /*   RETRIEVING ID   */

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $name =  $row["name"];
        $diagnosis =  $row["diagnosis"];
        $prescription =  $row["prescription"];
        $admissiondate =  $row["admission date"];
        $dischargedate = $row["discharge date"];
        $duration = $row["duration"];
        $wardno = $row["ward no"];
        $status = $row["status"];
        $nurse = $row["nurse"];
        $nursenotes = $row["nurse notes"];
        $doctor = $row["doctor"];

        

        echo "<div id='inpatientinfo' >";
        echo "<button onclick = 'dischargepatient()' > Discharge Patient </button>";
        echo "<br>";
        echo "Patient ID No. :"."<input id='id2'  value='$q' ><br><br>";
        echo "Patient Name :"."<input id='name2'  value='$name' ><br><br>";
        echo "Diagnosed illness :"."<input id='diagnosis2'  value='$diagnosis' ><br><br>";
        echo "Prescription :"."<input id='prescription2'  value='$prescription' ><br><br>";
        echo "Admission Date :"."<input id='admissiondate2'  value='$admissiondate' ><br><br>";
        echo "Discharge Date :"."<input id='dischargedate2'  value='$dischargedate' ><br><br>";
        echo "Duration :"."<input id='duration2'  value='$duration' ><br><br>";
        echo "Ward Number :"."<input id='wardno2'  value='$wardno' ><br><br>";
        echo "Status :"."<input id='status2'  value='$status' ><br><br>";
        echo "Nurse In-Charge :"."<input id='nurse2'  value='$nurse' ><br><br>";
        echo "Nurse's Notes"."<input id='nursenotes2'  value='$nursenotes' ><br><br>";
        echo "Doctor In-Charge :"."<input id='doctor2'  value='$doctor' ><br><br>";
        echo "<button id='updateinpatient2' onclick='updateinpatient()'  > Update </button>";

       echo "</div>";
       echo "<br>----------------------------<br>";
    




        $sql2 = "SELECT `height`,`weight`,`bmi`,`blood pressure`,`conditions`,`date` FROM `patient record` WHERE `id`='$q'";
        $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {    

        while($row = $result2->fetch_assoc()) {
            
            $height = $row["height"];   
            $weight = $row["weight"];   
            $bmi = $row["bmi"];   
            $bloodpressure = $row["blood pressure"];   
            $conditions = $row["conditions"];   
            $date = $row["date"];   
            


            echo "<div id='patientrecord'>";
                echo "<h5>Patient Health Data</h5>";
                echo "Height :"."<input id='height'  value='$height' ><br><br>";
                echo "Weight :"."<input id='weight'  value='$weight' ><br><br>";
                echo "BMI :"."<input id='bmi'  value='$bmi' ><br><br>";
                echo "Blood - Pressure :"."<input id='bloodpressure'  value='$bloodpressure' ><br><br>";
                echo "Pre - Existing Conditions :"."<input id='conditions'  value='$conditions' ><br><br>";
                echo "Date Last Recorded :"."<input id='date'  value='$date' ><br><br>";
                echo "<button id='updatepatientrecord' onclick='updatepatientrecord()'  > Update  </button>";


            echo "</div>";

                }
    } 





    }
}else{
    echo "<strong style='color: red;' > No Patient matches the ID Provided ! </strong> ";

}







?>