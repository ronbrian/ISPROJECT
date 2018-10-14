
<?php
session_start();
include '../../dbconnect.php';


$loginusername = $_GET["loginusername"];
$loginpassword = $_GET["loginpassword"];




$sql = " SELECT `id`, `password` FROM `patient` WHERE `id`= '$loginusername' AND `password` = '$loginpassword' ";





if ($result = mysqli_query($conn, $sql)) {

    $rowcount = mysqli_num_rows($result);

    if ($rowcount == 1) {


        $sql2 = "SELECT `name` FROM `patient` WHERE `id` = '$loginusername'";
        $result = $conn->query($sql2);
        /*   RETRIEVING NAME   */

        if ($result->num_rows > 0) {
        // output data of each row
            while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
            }
        } else {
            echo "0 results";
        }






        $_SESSION["user"] = $name;
        $_SESSION["userid"] = $loginusername;
        header("Location: patienthome.php ");


    } else {

        echo "<script> alert('USERNAME OR PASSWORD IS WRONG !!'); </script>";
        header("Location: index.php ");

    }
 

 // Free result set

}



?>


















