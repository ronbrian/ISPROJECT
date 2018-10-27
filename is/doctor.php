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
                <form action="medicalinfox.php" method="">
                    <div>

                        <div class="group">
                            <label for="user" class="label"> Symptoms / Causing Problems : </label>
                            <input id="symptoms" type="text" name="symptoms" class="input">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> For How Long ? : </label><br />
                            <input id="period" type="text" name="period" class="input">
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Diagnosis : </label><br />
                            <input id="diagnosis" type="text" name="diagnosis" class="input" onkeyup="myF2()" >
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Prescription : </label><br />
                            <input id="prescription" type="text" name="prescription" class="input" onkeyup="myF3()"   >
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Extra Optional Details/ Notes : </label><br />
                            <input id="notes" type="text" name="notes" class="input"><br /><br />
                        </div>
                        <div class="group">
                            <label for="user" class="label"> Prescribing Doctor : </label>
                            <input id="doctor" type="text" name="doctor" class="input" value="<?php echo $_SESSION["user"] ; ?>" placeholder="<?php echo $_SESSION["user"] ; ?>" disabled ><br /><br />

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

            <button id="send" onclick="send()" > Send Patient to Admission </button>

            <div class="card" id="admission">
                <form>
                <div class="">
                    <label for="id" class="label">ID</label><br>
                    <input id="id" type="text" name="id" class="input" >
                </div>
                
                <div class="">
                    <label for="name" class="label">Name</label><br>
                    <input id="name2" type="text" name="name2" class="input" >
                </div>

                <div class="">
                    <label for="diagnosis" class="label">Diagnosis</label><br>
                    <input id="diagnosis2" type="text" name="diagnosis2" class="input" >
                </div>

                <div class="">
                    <label for="prescription" class="label">Prescription</label><br>
                    <input id="prescription2" type="text" name="prescription2" class="input" >
                </div>

                <div class="">
                    <label for="" class="label">Doctor</label><br>
                    <input id="doctor2" type="text" name="doctor2" class="input" value="<?php echo $_SESSION["user"] ; ?>" >
                </div>

                <div class="group">
                   <input type="submit" class="button" value="Send">&nbsp;&nbsp;&nbsp;
                   <label for="" class="label"> Cancel </label><br>

                </div>

                


                </form>

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




    });
// ]]>


</script>

<script>
function hiding(){

$("#patientdetails").hide();
$("#medicalinfo").hide();
$("#send").hide();


}

function myF2(){

    var z = document.getElementById("diagnosis").value;
    document.getElementById("diagnosis2").value = z;




}


function myF3(){
    var zi = document.getElementById("prescription").value;
    document.getElementById("prescription2").value = zi;


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

    function send(){
        $("#admission").show();
        document.getElementById("id").value = document.getElementById("idpatient").value;
        document.getElementById("name2").value = document.getElementById("sendname").value;
        document.getElementById("").value = document.getElementById("").value;



    }







</script>




</html>