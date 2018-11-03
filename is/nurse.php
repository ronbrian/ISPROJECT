<?php 
session_start();
include 'dbconnect.php';
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
        <h1> <a href="##">Nurse's Portal</a> </h1>
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



    <button id="admitpatientbtn" onclick = "funcx2()"> Admit Patient </button>
    <button id="viewinpatientsbtn" onclick="funcx1()"> Hospital Admissions </button>
    <button id="myBtn"> Call For Doctor </button>
    <button id="myBtn"> View Wards </button>




    <div class="row">
        <div class="leftcolumn">



            <div class="card" id="viewinpatients">

            </div>

            <div class="card" id="admitpatient">
                <form action="admitpatientx.php" method="">


                    <div class="sign-in-htm">

                        <div class="group">
                            <label for="user" class="label">ID</label><br>
                            <input id="patientid" type="text" name="patientid" class="input">
                        </div>

                        <div class="group">
                            <label for="user" class="label">Full Names</label><br>
                            <input id="name" type="text" name="name" class="input">
                        </div>

                        <div class="group">
                            <label for="user" class="label">Diagnosis</label><br>
                            <input id="diagnosis" type="text" name="diagnosis" class="input">
                        </div>

                       <div class="group">
                            <label for="user" class="label">Admission Date </label><br>
                            <input id="admissiondate" type="text" name="admissiondate" class="input">
                        </div>

                       <div class="group">
                            <label for="user" class="label">Discharge Date </label><br>
                            <input id="dischargedate" type="text" name="dischargedate" class="input">
                        </div>

                        <div class="group">
                            <label for="user" class="label">Duration</label><br>
                            <input id="duration" type="text" name="duration" class="input">
                        </div>

                        <div class="group">
                            <label for="user" class="label">Ward No.</label><br>
                            <input id="wardno" type="text" name="wardno" class="input">
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="Admit Patient">
                        </div>
                        <div class="hr"></div>

                </form>
            </div>


        </div>

    </div>

    

<div class = "row">
    <div class="rightcolumn">
        <div class="card" id="appointmentupdate1">
            <form>
                    <div class="group">
                            <label for="user" class="label">Patient ID</label><br>
                            <input id="patientidupdate" type="text" name="patientidupdate" class="input">
                    </div>
                    <div class="group">
                            <label for="user" class="label">Patient Name</label><br>
                            <input id="patientnameupdate" type="text" name="patientnameupdate" class="input">
                    </div>
                    <div class="group">
                            <label for="user" class="label">Diagnosis</label><br>
                            <input id="diagnosisupdate" type="text" name="diagnosisupdate" class="input">
                    </div>
                    <div class="group">
                            <label for="user" class="label">Prescription</label><br>
                            <input id="prescriptionupdate" type="text" name="prescriptionupdate" class="input">
                    </div><br>
                    <div class="group">
                            <label for="user" class="label">Admission Date </label><br>
                            <input id="admissiondateupdate" type="date" name="admissiondateupdate" class="input">
                    </div><br>
                    <div class="group">
                            <label for="user" class="label">Discharge Date </label><br>
                            <input id="dischargedateupdate" type="date" name="dischargedateupdate"  class="input">
                    </div><br>
                    <div class="group">
                            <label for="user" class="label">Duration in Days</label><br>
                            <input id="durationupdate" type="text" name="durationupdate" class="input" onmouseover="myFunction()" >
                    </div>
                    <div class="group">
                            <label for="user" class="label">Status</label><br>
                            <input id="statusupdate" type="text" name="statusupdate"  class="input"  >
                    </div>
                    <div class="group">
                            <label for="user" class="label">Nurse In - Charge </label><br>
                            <input id="nurseupdate" type="text" name="nurseupdate" value = '<?php echo $_SESSION['user'] ?>' class="input">
                    </div>
                    <div class="group">
                            <label for="user" class="label">Doctor In - Charge </label><br>
                            <input id="doctorupdate" type="text" name="doctorupdate"  class="input">
                    </div>
                    <div class="group">
                            <input  type="submit"  class="input">
                    </div>


            </form>

        </div>

    </div>
</div>



</body>





<script type="text/javascript">// <![CDATA[




    $(document).ready(function () {
        //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh

        $('#viewinpatients').load('viewinpatientx.php');
        $("#viewinpatients").hide();
        $("#admitpatient").hide();
        $("#hiddendiv2").hide();
        $("#appointmentupdate1").hide();





    });




// ]]>


</script>


<script>
    function funcx1() {
        $("#viewinpatients").show();
        $("#admitpatient").hide();

        //setting the values from the hidden form hiddendiv2 to be the same as the ones for admitting the patient

    }
    function funcx2() {
        $("#admitpatient").show();
        $("#viewinpatients").hide();
        $("#appointmentupdate1").hide();

    }

         //FUNCTION TO SUBTRACT THE DAYS FROM THE SELECTED DATES       
        function myFunction() {
        var date_diff_indays = function (date1, date2) {
            dt1 = new Date(date1);
            dt2 = new Date(date2);
            return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
        }

        var x = document.getElementById("admissiondateupdate").value;
        var xi = document.getElementById("dischargedateupdate").value;

        document.getElementById("durationupdate").value = date_diff_indays(x, xi);
        
    }
</script>









</html>