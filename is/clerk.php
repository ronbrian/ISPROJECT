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
    <style>
                                body {font-family: Arial, Helvetica, sans-serif;}
                                
                                /* The Modal (background) */
                                .modal {
                                    display: none; /* Hidden by default */
                                    position: fixed; /* Stay in place */
                                    z-index: 1; /* Sit on top */
                                    padding-top: 100px; /* Location of the box */
                                    left: 0;
                                    top: 0;
                                    width: 100%; /* Full width */
                                    height: 100%; /* Full height */
                                    overflow: auto; /* Enable scroll if needed */
                                    background-color: rgb(0,0,0); /* Fallback color */
                                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                }
                                
                                /* Modal Content */
                                .modal-content {
                                    background-color: rgba(32, 35, 44, 0.9);
                                    margin: auto;
                                    padding: 20px;
                                    border: 0.001px solid #888;
                                    width: 30%;
                                    height: 500%;
                                    float: none;
                                }
                                
                                /* The Close Button */
                                .close {
                                    color: #aaaaaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }
                                
                                .close:hover,
                                .close:focus {
                                    color: #000;
                                    text-decoration: none;
                                    cursor: pointer;
                                }


                                    .badge1 {
                    position:relative;
                    }
                    .badge1[data-badge]:after {
                    content:attr(data-badge);
                    position:absolute;
                    top:-10px;
                    right:-10px;
                    font-size:.7em;
                    background:red;
                    color:white;
                    width:18px;height:18px;
                    text-align:center;
                    line-height:18px;
                    border-radius:50%;
                    box-shadow:0 0 1px #333;
                    }
    </style>
            

</head>

<body>

    <div class="header">
        <h1> <a href="##">Clerk's Portal</a> </h1>
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
    
    <?php
            //GETTING TOTAL NUMBER OF APPOINTMENTS WHICH HAVENT BEEN VIEWED SO THAT THEY CAN BE PROJECTED ON THE NOTIFICATION DOT
            $sql2 =" SELECT COUNT(*) AS `count` FROM `appointments` WHERE `viewed`=0 ";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $unread =  $row["count"];
                
                
            }
            }else{
            }
            
            $_SESSION["unread"] =$unread ;
            if($_SESSION["unread"] > 0 ){

                $notificationdot = " class = 'badge1' data-badge=$unread ";

            }else{
                $notificationdot =null;
            }
       
                
    ?>

    <button id="myBtn" > Register Patient </button>
    <button id="viewappoints" onclick="viewappoints()" <?php echo $notificationdot ?> > View Appointments </button>
    <button> Schedule Appointment </button>



    <div class="row">
        <div class="leftcolumn">



            <div class="card" id="registerpatients">
                  

                    <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content" id = "mod">
                          
                              <span class="close">&times;</span>
                              <?php require_once('Register patient.php'); ?>

                              
                            </div>
                    </div>

            </div>

            <div class="card" id="viewappointments">

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
        $('#viewappointments').load('viewappointmentsx.php');
        $("#viewappointments").hide();

        //$("#patientdetails").show();
        



    });



    function viewappoints(){
        $("#viewappointments").show();
    }
// ]]>


</script>


<script>
    // Get the modal
   

    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
         $("#mod").fadeIn("slow");
         
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>







</html>