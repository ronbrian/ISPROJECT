<?php 
session_start();
include 'dbconnect.php';
$pagetitle = "Admin's Portal";
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="stylingfile.css">
    <!-- EXTERNAL CSS -->
    <script src="javascript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- EXTERNAL JAVASCRIPT -->
    <!-- EXTERNAL CSS -->
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <title> *** </title>


</head>

<body>

    <div class="header">
        <h1> <a href="##">Admin's Portal</a> </h1>
    </div>

    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Dropdown 1
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Log Out
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="logout.php">Log Out</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>


        <a href="https://www.google.com">&nbsp;&nbsp;&nbsp; Link 5</a>
        <a href="https://www.google.com">&nbsp;&nbsp;&nbsp; Link 6</a>

    </div>



    <?php echo "Welcome " . $_SESSION["user"]; ?> &nbsp;&nbsp;&nbsp;



    <button id="" onclick="">Manage Staff </button>
    <button id="" onclick="">View Patients </button>
    <button id="" onclick="">View Current In - Patients </button>
    <button id="" onclick="">Reports </button>



    <div class="row">
        <div class="leftcolumn">



            <div class="card" id="managestaff">
                <h4>Staff List</h4>
                <?php
                    $sql = " SELECT `Name`, `username`, `ID`, `title`, `password`   FROM `staff`  ";

                                                    
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    

                               
                                    echo "<table class='table table-hover' id='staff' >
                                    <tr>
                                    <thead class='text-warning' >
                                            <th>Name</th>
                                            <th>username</th>
                                            <th>ID</th>
                                            <th>title</th>
                                    </thead>
                                    </tr>";

                                while($row = $result->fetch_assoc()) {

                                    $name = $row["Name"];
                                    $username =  $row["username"];
                                    $id =  $row["ID"];
                                    $title =  $row["title"];
                                    

                                        echo "<form action = 'updatestaffx.php' method='get'>
                                        <tr>
                                                <td>"."<input type=text name='name' value ='".$name."'></td>
                                                <td>"."<input type=text name='username' value ='".$username."'></td>
                                                <td>"."<input type=text name='id' value ='".$id."'></td>
                                                <td>"."<input type=text name='title' value ='".$title."'></td>
                                                <td>"."<input type=submit name='update' value = 'update' ></td>";
                                        echo "</tr>
                                        </form>";
   
                                      }
                                      echo "
                                      
                                      <tr>
                                        <td>
                                        <td>"."<input type=text name='name' value =''></td>
                                        <td>"."<input type=text name='username' value =''></td>
                                        <td>"."<input type=text name='id' value =''></td>
                                        <td>"."<input type=text name='title' value =''></td>
                                        <td>"."<input type=submit name='update' value = 'Add New User' ></td>
                                        </td>
                                    </tr>




                                      
                                      ";


                                      echo "</table>";
                                    } else {

                                    //nothing goes here

                                }








                  ?>



            </div>

            <div class="card" id="viewpatients">
                <h4>Patient List</h4>
                <?php
                    $sql2 = " SELECT `name`, `age`, `id`, `tel`, `email`, `gender`  FROM `patient` ";

                                                    
                                $result2 = $conn->query($sql2);

                                if ($result2->num_rows > 0) {
                                // output data of each row
                                    

                               
                                    echo "<table id='staff' >
                                    <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>ID</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                    </tr>";

                                while($row = $result2->fetch_assoc()) {

                                    $name = $row["name"];
                                    $age =  $row["age"];
                                    $id =  $row["id"];
                                    $phone =  $row["tel"];
                                    $email=  $row["email"];
                                    $gender =  $row["gender"];
                                    

                                        echo "<form action = '' method='get'>
                                        <tr>
                                                <td>"."<input type=text name='name' value ='".$name."'></td>
                                                <td>"."<input type=text name='age' value ='".$age."'></td>
                                                <td>"."<input type=text name='id' value ='".$id."'></td>
                                                <td>"."<input type=text name='phone' value ='".$phone."'></td>
                                                <td>"."<input type=text name='email' value ='".$email."'></td>
                                                <td>"."<input type=text name='gender' value ='".$gender."'></td>
                                                <td>"."<input type=text name='gender' value ='".$gender."'></td>
                                                <td>"."<input type=submit name='update' value = 'update' ></td>";
                                        echo "</tr>
                                        </form>";
   
                                      }


                                      echo "</table>";
                                    } else {

                                    //nothing goes here

                                }








                  ?>
            </div>

            <div class="card" id="viewinpatients">
                <h4>Currently Admitted Patient's</h4>
                <?php
                    $sql3 = " SELECT `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `ward no`, `status`, `nurse`, `nurse notes`, `doctor` FROM `inpatient` WHERE `status` = 'Admitted' ";

                                                    
                                $result3 = $conn->query($sql3);

                                if ($result3->num_rows > 0) {
                                // output data of each row
           
                                    echo "<table id='staff' >
                                    <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Diagnosis</th>
                                            <th>Prescription</th>
                                            <th>Admission Date</th>
                                            <th>Discharge Date</th>
                                            <th>Duration</th>
                                            <th>Ward No.</th>
                                            <th>Status</th>
                                            <th>Nurse</th>
                                            <th>Nurse Comments</th>
                                            <th>Doctor</th>
                                    </tr>";

                                while($row = $result3->fetch_assoc()) {

                                    $id = $row["id"];
                                    $name =  $row["name"];
                                    $diagnosis =  $row["diagnosis"];
                                    $prescription =  $row["prescription"];
                                    $admissiondate=  $row["admission date"];
                                    $dischargedate=  $row["discharge date"];
                                    $duration=  $row["duration"];
                                    $wardno=  $row["ward no"];
                                    $status=  $row["status"];
                                    $nurse=  $row["nurse"];
                                    $nursenotes =  $row["nurse notes"];
                                    $doctor =  $row["doctor"];
                                    

                                        echo "<form action = '' method='get'>
                                        <tr>
                                                <td>"."<input type=text name='' value ='".$id."'></td>
                                                <td>"."<input type=text name='' value ='".$name."'></td>
                                                <td>"."<input type=text name='' value ='".$diagnosis."'></td>
                                                <td>"."<input type=text name='' value ='".$prescription."'></td>
                                                <td>"."<input type=text name='' value ='".$admissiondate."'></td>
                                                <td>"."<input type=text name='' value ='".$dischargedate."'></td>
                                                <td>"."<input type=text name='' value ='".$duration."'></td>
                                                <td>"."<input type=text name='' value ='".$wardno."'></td>
                                                <td>"."<input type=text name='' value ='".$status."'></td>
                                                <td>"."<input type=text name='' value ='".$nurse."'></td>
                                                <td>"."<input type=text name='' value ='".$nursenotes."'></td>
                                                <td>"."<input type=text name='' value ='".$doctor."'></td>                                                
                                                <td>"."<input type=submit name='update' value = 'update' ></td>";
                                        echo "</tr>
                                        </form>";
   
                                      }


                                      echo "</table>";
                                    } else {

                                    //nothing goes here

                                }








                  ?>

                <h4>Discharged Patients</h4>
                <?php
                    $sql4 = " SELECT `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `ward no`, `status`, `nurse`, `nurse notes`, `doctor` FROM `inpatient` WHERE `status` = 'Discharged' ";

                                                    
                                $result4 = $conn->query($sql4);

                                if ($result4->num_rows > 0) {
                                // output data of each row
           
                                    echo "<table id='staff' >
                                    <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Diagnosis</th>
                                            <th>Prescription</th>
                                            <th>Admission Date</th>
                                            <th>Discharge Date</th>
                                            <th>Duration</th>
                                            <th>Ward No.</th>
                                            <th>Status</th>
                                            <th>Nurse</th>
                                            <th>Nurse Comments</th>
                                            <th>Doctor</th>
                                    </tr>";

                                while($row = $result4->fetch_assoc()) {

                                    $id = $row["id"];
                                    $name =  $row["name"];
                                    $diagnosis =  $row["diagnosis"];
                                    $prescription =  $row["prescription"];
                                    $admissiondate=  $row["admission date"];
                                    $dischargedate=  $row["discharge date"];
                                    $duration=  $row["duration"];
                                    $wardno=  $row["ward no"];
                                    $status=  $row["status"];
                                    $nurse=  $row["nurse"];
                                    $nursenotes =  $row["nurse notes"];
                                    $doctor =  $row["doctor"];
                                    

                                        echo "<form action = '' method='get'>
                                        <tr>
                                                <td>"."<input type=text name='' value ='".$id."'></td>
                                                <td>"."<input type=text name='' value ='".$name."'></td>
                                                <td>"."<input type=text name='' value ='".$diagnosis."'></td>
                                                <td>"."<input type=text name='' value ='".$prescription."'></td>
                                                <td>"."<input type=text name='' value ='".$admissiondate."'></td>
                                                <td>"."<input type=text name='' value ='".$dischargedate."'></td>
                                                <td>"."<input type=text name='' value ='".$duration."'></td>
                                                <td>"."<input type=text name='' value ='".$wardno."'></td>
                                                <td>"."<input type=text name='' value ='".$status."'></td>
                                                <td>"."<input type=text name='' value ='".$nurse."'></td>
                                                <td>"."<input type=text name='' value ='".$nursenotes."'></td>
                                                <td>"."<input type=text name='' value ='".$doctor."'></td>                                                
                                                <td>"."<input type=submit name='update' value = 'update' ></td>";
                                        echo "</tr>
                                        </form>";
   
                                      }


                                      echo "</table>";
                                    } else {

                                    //nothing goes here

                                }








                  ?>
            </div>



            <div class = "card" id="graph1" >
                <?php include 'graph1.php'; ?>
            </div>

            <div class = "card" id="graph2" >
                   <?php  include 'graph2.php'; ?> 
            </div>

            <div class = "card" id="graph3" >
                 <?php  include 'graph3.php'; ?>
            </div>

        </div>



        <div class="rightcolumn">
            <div class="card" id="scheduleappointment">

            </div>

        </div>
    </div>




</body>





<script type="text/javascript">// <![CDATA[




    $(document).ready(function () {
        //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
        //$('#graph1').load('graph1.php');

        //$('#graph2').load('graph2.php');

        //$("#patientdetails").show();




    });





// ]]>


</script>







</html>