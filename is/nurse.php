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



        <div class="rightcolumn">
            <div class="card" id="scheduleappointment">

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





    });




// ]]>


</script>


<script>
    function funcx1() {
        $("#viewinpatients").show();
        $("#admitpatient").hide();

    }
    function funcx2() {
        $("#admitpatient").show();
        $("#viewinpatients").hide();

    }
</script>









</html>