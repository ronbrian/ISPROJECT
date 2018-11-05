<?php 
session_start();
include 'dbconnect.php';
$doctorid = $_SESSION["user"];
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
        <h1> <a href="##">Doctor's Portal</a> </h1>
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
    <?php
            //GETTING TOTAL NUMBER OF CHATS WHICH HAVENT BEEN VIEWED SO THAT THEY CAN BE PROJECTED ON THE NOTIFICATION DOT
            $sql2 ="SELECT COUNT(*) AS `count` FROM `messages` WHERE `viewed`=0 AND `doctor`='$doctorid' AND `type`='senttodoctor' ";
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

    <button id="chatpatientbtn" onclick="chatpatient()" <?php echo $notificationdot ?> > Patient Chats </button>&nbsp;&nbsp;

<span>Welcome <?php echo $doctorid; ?> </span>

    <div class="row">
        <div class="leftcolumn">




            <div class="card">
                <h2>Enter the Patient's ID Number <br> </h2>
                <form action=" " method="">
                    <div>
                        <div class="group">
                            <input id="name" type="text" name="patientid" class="input" placeholder=" ID Number">
                        </div>

                        <div class="group">
                            <input id="submit" type="submit" onclick="myFunction()" class="button" value="Submit">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card" id="medicalinfo">
                <h4> Medical Info</h4>
                <form id="medicalinfox" action="medicalinfox.php" method="">
                    <div>

                        <div class="group">
                            <label for="user" class="label"> Symptoms / Causing Problems : </label>
                            <input id="symptoms" type="text" name="symptoms" class="input" onkeyup="myF4()">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> For How Long ? : </label><br />
                            <input id="period" type="text" name="period" class="input" onkeyup="myF5()">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Diagnosis : </label><br />
                            <input id="diagnosis" type="text" name="diagnosis" class="input" onkeyup="myF2()">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Prescription : </label><br />
                            <input id="prescription" type="text" name="prescription" class="input" onkeyup="myF3()">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Extra Optional Details/ Notes : </label><br />
                            <input id="notes" type="text" name="notes" class="input" onkeyup="myF6()"><br /><br />
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Prescribing Doctor : </label>
                            <input id="doctor" type="text" name="doctor" class="input" value="<?php echo $_SESSION["user"] ; ?>" placeholder="
                            <?php echo $_SESSION["user"] ; ?>" disabled ><br /><br />

                        </div>
                        <div class="group">
                            <br /><label for="user" class="label"> Current Date : </label></br>
                            <input id="date" type="text" name="date" class="input" value="<?php echo $time;?>" disabled><br /><br />
                        </div>



                        <!-- Patient ID:<br> <input type="text" id="myText" value="<?php echo $_SESSION["idpatient"]; ?>" disabled> -->





                        <div class="group">
                            <input type="submit" class="button" value="Submit">
                        </div>
                    </div>
                </form>


            </div>

        </div>



        <div class="rightcolumn">
            <div class="card" id="patientdetails">




            </div>

            <button id="send" onclick="send()"> Send Patient to Admission </button>

            <div class="card" id="admission">
                <form>
                    <div id="hiddendiv">
                        <div class="">
                            <label for="id" class="label">ID</label><br>
                            <input id="id" type="text" name="id" class="input">
                        </div>

                        <div class="">
                            <label for="name" class="label">Name</label><br>
                            <input id="name2" type="text" name="name2" class="input">
                        </div>
                       <div class="group">
                            <label for="user" class="label"> Symptoms / Causing Problems : </label>
                            <input id="symptoms2" type="text" name="symptoms2" class="input">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> For How Long ? : </label><br />
                            <input id="period2" type="text" name="period2" class="input">
                        </div>
                        <div class="">
                            <label for="diagnosis" class="label">Diagnosis</label><br>
                            <input id="diagnosis2" type="text" name="diagnosis2" class="input">
                        </div>

                        <div class="">
                            <label for="prescription" class="label">Prescription</label><br>
                            <input id="prescription2" type="text" name="prescription2" class="input">
                        </div>

                        <div class="group">
                            <label for="user" class="label"> Extra Optional Details/ Notes : </label><br />
                            <input id="notes2" type="text" name="notes2" class="input" onkeyup="submitx()"><br /><br />
                        </div>
                        <div class="">
                            <label for="" class="label">Doctor</label><br>
                            <input id="doctor2" type="text" name="doctor2" class="input" value="<?php echo $_SESSION["user"] ; ?>" >
                        </div>

 

                        <div class="group">
                            <br /><label for="user" class="label"> Current Date : </label></br>
                            <input id="date" type="text" name="date" class="input" value="<?php echo $time;?>" disabled><br /><br />
                        </div>


                    </div>
                    <div class="group">
                        <p>Are you sure ?<br></p>
                        <input type="submit" class="button" value="Send" onclick="myfunc3()"> &nbsp;&nbsp;&nbsp;
                        <label for="" class="label"> Cancel </label><br>

                    </div>
          



                </form>

            </div>

            <div id="patientchats1" class = "card" >
                <?php

                        $sql = "  SELECT DISTINCT  `id` FROM `messages` WHERE `doctor` = '$doctorid'  ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        
                        echo "  <select name='service' id='thedropdown'>  ";
                        while($row = $result->fetch_assoc()) {
                            
                            $id =  $row["id"];

                            echo "
                            
                            
                                <option value='$id'> $id </option>


                            

                            
                            
                            ";

   

                       

                        }


                        echo" </select>  ";
                        echo" <input id='jkl'><br><input id='doctorsid' value='$doctorid' /> ";

                        echo" <button id='selectbtn' onclick = 'selectpatient()' > Select </button>  ";
                        echo "
                            <script>
                             function selectpatient(){
                                var e = document.getElementById('thedropdown');
                                var chosenpatient = e.options[e.selectedIndex].value;
                                document.getElementById('jkl').value = chosenpatient;
                                setsession();
                                           function setsession(){

                                               var xyz = chosenpatient;
                                               if (xyz.length == 0) {

                                                   return;
                                               } else {
                                                   var xmlhttp = new XMLHttpRequest();
                                                   xmlhttp.onreadystatechange = function () {
                                                       if (this.readyState == 4 && this.status == 200) {


                                                       }
                                                   };
                                                   xmlhttp.open('GET', 'setsession.php?q=' + xyz, true);
                                                   xmlhttp.send();
                                               }

                                           }
                               
                                $('#patientchats2').load('chat.php');
                                setInterval(function () {
                                    $('#patientchats2').load('chat.php');
                            }, 10000); 
            
                             }




                            </script>
                        
                        
                        ";
                        
                            } else {

                            //nothing goes here

                        }


                ?>

            </div>

            <div class="card" id="patientchats2" >

            </div>


        </div>





    </div>




</body>





<script type="text/javascript">// <![CDATA[




    $(document).ready(function () {
        //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
        $('#patientdetails').load('fetchpatient.php');
        //$("#patientdetails").show();
        $("#admission").hide();
        $("#hiddendiv").hide();




    });
// ]]>


</script>

<script>

    function hiding() {

        $("#patientdetails").hide();
        $("#medicalinfo").hide();
        $("#send").hide();


    }

    function myF2() {

        var z = document.getElementById("diagnosis").value;
        document.getElementById("diagnosis2").value = z;

    }


    function myF3() {
        var zi = document.getElementById("prescription").value;
        document.getElementById("prescription2").value = zi;


    }

        function myF4() {
        var zii = document.getElementById("symptoms").value;
        document.getElementById("symptoms2").value = zii;


    }

        function myF5() {
        var ziii = document.getElementById("period").value;
        document.getElementById("period2").value = ziii;


    }

    function myF6() {
        var ziiii = document.getElementById("notes").value;
        document.getElementById("notes2").value = ziiii;


    }


</script>





<script>
    function myFunction() {

        var name = document.getElementById("name").value;


        // Returns successful data submission message when the entered information is stored in database.

        var dataString = 'name1=' + name;


        if (name == '') {
            alert(" At least write one character");
        } else {
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "submitpatientidx.php",
                data: dataString,
                cache: false,
                success: function (html) {

                }
            });


        }
        return false;


    }

    function send() {

        $("#admission").show();
        document.getElementById("id").value = document.getElementById("idpatient").value;
        document.getElementById("name2").value = document.getElementById("sendname").value;
        document.getElementById("").value = document.getElementById("").value;



    }


    function myfunc3() {


        var xyz = document.getElementById("id").value + "&name=" + document.getElementById("name2").value + "&diagnosis=" + document.getElementById("diagnosis2").value + "&prescription=" + document.getElementById("prescription2").value + "&doctor=" + document.getElementById("doctor2").value + "&patientid=" + document.getElementById("id").value + "&symptoms=" + document.getElementById("symptoms2").value + "&period=" + document.getElementById("period2").value + "&notes=" + document.getElementById("notes2").value;
        if (xyz.length == 0) {

            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {


                }
            };
            xmlhttp.open("GET", "sendinpatient.php?q=" + xyz, true);
            xmlhttp.send();
        }

        alert(' Details have been sent for processing. ');
    }


 




    function submitting() {
        document.getElementById("medicalinfox").submit();



    }





</script>





</html>