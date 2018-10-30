
<?php

include 'dbconnect.php';


$loginusername = $_GET["loginusername"];
$loginpassword = $_GET["loginpassword"]; 




$sql="SELECT `username`, `password` FROM `staff` WHERE `username` ='$loginusername' AND `password`='$loginpassword' ";

if ($result=mysqli_query($conn,$sql))
 {
                /*
 // Return the number of rows in result set

 printf("Result set has %d rows",$rowcount);
       */
 $rowcount=mysqli_num_rows($result); 
 
 if($rowcount==1){
       
       session_start();
       $_SESSION["user"] = $_GET["loginusername"];


      /*   USES TITLE TO DISTINGUISH WHICH PAGE IT WILL DISPLAY TO THE USER NURSE WILL GO TO NURSE'S PAGE    */
      $sql = "SELECT title FROM staff WHERE username = '$loginusername'";
      $result = $conn->query($sql);
       /*   RETRIEVING TITLE   */

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
            $title =  $row["title"];
      }
      } else {
      echo "0 results";
      }

       if($title == "doctor"){
           
            session_start();
            $_SESSION["user"] = $_GET["loginusername"];


            if(isset($_SESSION["user"])){
                  header("Location: doctor.php");
                 

      
             }else{
                  header("Location: index.php ");
             }
   
            
      } elseif ($title == "clerk") {
           
            session_start();
            $_SESSION["user"] = $_GET["loginusername"];
            
            if(isset($_SESSION["user"])){
                  header("Location: clerk.php ");
                  
      
             }else{
                  header("Location: index.php ");
             }






       }elseif($title == "nurse"){

            session_start();
             $_SESSION["user"] = $_GET["loginusername"];

             if(isset($_SESSION["user"])){
                  header("Location: nurse.php ");
                  
      
             }else{
                  header("Location: index.php ");
             }

       }




 }else{

      echo "<script> alert('USERNAME OR PASSWORD IS WRONG !!'); </script>";
      header("Location: error.php ");

}
 

 // Free result set
 
 }



?>






