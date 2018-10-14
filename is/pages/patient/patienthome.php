<?php
session_start();
include '../../dbconnect.php';

?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../../stylingfile.css">
    <!-- EXTERNAL CSS -->
    <script src=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- EXTERNAL JAVASCRIPT -->
    <!-- EXTERNAL CSS -->
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <title> *** </title>

</head>

<body>

    <div class="header">
        <h1> <a href="##"> ### </a> </h1>
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
                <a href="../../logout.php">Log Out</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>


        <a href="https://www.google.com">&nbsp;&nbsp;&nbsp; Link 5</a>
        <a href="https://www.google.com">&nbsp;&nbsp;&nbsp; Link 6</a>

    </div>


    <br>
    <?php echo "Welcome " . $_SESSION["user"]; ?> &nbsp;&nbsp;&nbsp; <button> Chat with a Doctor </button>&nbsp;&nbsp; <button>  Emergency </button>&nbsp;&nbsp; <button> Get Directions to a Hospital Near You </button><br>

    <div class="row">
        <div class="leftcolumn">
            <div class="card" id="medicalinfo" >
                   <!-- <div style="width:624px;">
                            <iframe style="width:624px;height:470px;" title="BMI Healthy weight calculator" src="http://media.nhschoices.nhs.uk/tools/documents/healthy_weight_v3/healthy_weight.html"
                                frameborder="no" scrolling="no"></iframe>
                            <div id="assessment_webpart_branding" style="float:right;"><a href="http://nhs.uk/tools/" alt="content provided by NHS Choices"><img
                                        src="http://media.nhschoices.nhs.uk/tools/documents/self_assessments_js/images/syndication.png"
                                        width="264" height="38" border="0" alt="content provided by NHS Choices" style="margin-right:22px;" /></a></div>
                        </div>
                    -->
            </div>

        </div>

        <div class="rightcolumn">
            <div class="card" id="patientdetails">

            </div>

        </div>
    </div>

    </div>





</body>

</html>



<script type="text/javascript">// <![CDATA[




    $(document).ready(function () {
        //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
        $('#patientdetails').load('fetchpatient.php');
        $('#medicalinfo').load('fetchmedicalinfox.php');




    });
// ]]>


</script>

<script>
    
</script>