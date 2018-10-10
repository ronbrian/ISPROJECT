<?php
 include 'dbconnect.php';

 $name = $_GET["name"];
 $age = $_GET["age"];
 $id = $_GET["id"];
 $phone = $_GET["phone"];
 $email = $_GET["email"];
 $gender = $_GET["gender"];

    //HEALTH INFO
$height = ($_GET["height"])*0.01;
$weight = $_GET["weight"];
$bp = $_GET["bp"];
$condition = $_GET["condition"];
$date = $_GET["date"];

    //id number from the database 
    $indexno ;


    //THE QUERY THAT WILL SAVE THE PATIENT DATA
$sql = "INSERT INTO `patient`(`Name`, `age`, `id`, `Tel`, `email`, `gender`) VALUES ('$name','$age','$id','$phone','$email','$gender')";

if ($conn->query($sql) === TRUE) {

   

}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location: clerk.php ");


}

$sql2 = "SELECT no FROM patient WHERE id = '$id'";
$result = $conn->query($sql2);

/*   RETRIEVING no FROM DATABASE   */

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $indexno =  $row["no"];
        }
    } else {
    echo "0 results";
    }

 

$bmi = $_GET["weight"]/$_GET["height"];

$sql3 = "INSERT INTO `patient record`(`id`, `Height`, `weight`, `bmi`, `blood pressure`, `conditions`, `date`) VALUES ('$id','$height','$weight','$bmi','$bp','$condition','$time')";
if ($conn->query($sql3) === TRUE) {

    echo "<script> alert('Patient has been recorded !!'); </script>";
    header("Location: clerk.php ");

    


}else{
    echo "<script> alert('ERROR !!'); </script>";
    header("Location: clerk.php ");

  


}



?>