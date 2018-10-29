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
    
  

    <button id="myBtn" > Admit Patient </button>
    <button id="myBtn" > View Pending Admitted Patients </button>
    <button id="myBtn" > Call For Doctor </button>




    <div class="row">
        <div class="leftcolumn">



            <div class="card" id="registerpatients">
                  


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
        
        //$('#viewappointments').load('viewappointmentsx.php');
        

        //$("#patientdetails").show();

        



    });




// ]]>


</script>









</html>