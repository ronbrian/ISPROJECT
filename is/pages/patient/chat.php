
<?php
session_start();
include '../../dbconnect.php';
$patientid = $_SESSION["userid"];



echo "<input style = 'visibility:hidden;' id='userid' value='$patientid' >";


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="facivon.ico">

  <link href="style.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="script.js"></script>
</head>




<body>
  <div class="msg_boxc" style="right:290px">
    <div class="msg_head">Dr. <span id="doctorname" ></span>
      <div class="close">x</div>
    </div>
    <div class="msg_wrap">
      <div class="msg_body">
        <?php
            
                  $sql = "SELECT `no`, `post`, `type`, `doctor` FROM `messages` WHERE `id` = '$patientid'  ";
                  $result = $conn->query($sql);

                  
                  
                  if ($result->num_rows > 0) {
                  // output data of each row
                  $count=1;
                  while($row = $result->fetch_assoc()) {
                      
                      $post =  $row["post"];
                      $type =  $row["type"];
                      $doctor =  $row["doctor"];
                      $no =  $row["no"];


                      $sql2 = " UPDATE `messages` SET `viewed`= 1 WHERE `no` = '$no' AND `type`='senttopatient' ";
                      $result2 = $conn->query($sql2);

                      if($type=="senttodoctor"){
                        echo "<div class='msg_b'> $post </div>";


                      }else{
                        echo "<div class='msg_a'> $post </div>";
                      }


                  
                      $count++;


                  }
                      } else {

                      //nothing goes here

                  }


        ?>


        <div class="msg_push"></div>
      </div>
      <div class="msg_footer">
      
      <textarea class="msg_input" rows="4" id="message"  ></textarea>
      
      </div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">// <![CDATA[

$(document).ready(function () {
    //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh

   document.getElementById("doctorname").innerHTML = document.getElementById("doctor1").value ;

});

// ]]>

</script>



<script>
$("#message").keypress(function (e) {
    if(e.which == 13 && !e.shiftKey) {        
      var xyz = document.getElementById("userid").value + "&post=" + document.getElementById("message").value + "&doctor=" + document.getElementById("doctorname").innerHTML;
              if (xyz.length == 0) {

                return;
              } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                  if (this.readyState == 4 && this.status == 200) {


                  }
                };
                xmlhttp.open("GET", "savemessage.php?q=" + xyz, true);
                xmlhttp.send();
              }





    }
});
</script>

