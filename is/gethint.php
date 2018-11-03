<?php


include 'dbconnect.php';
$q = $_REQUEST["q"];



$sql = "SELECT `occupied` FROM `wards` WHERE `ward no` = '$q' ";
$result = $conn->query($sql);
 /*   RETRIEVING ID   */

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $x = $row["occupied"];
       
        if($x=='1'){ 
            echo "<strong style = 'color:red;'> *Ward is Occupied </strong> ";
        }elseif($x == '0'){
            echo "<strong style = 'color:green;'> Ward is Available </strong> ";
        }else{
            echo "DOESNT EXIST";
        }

    }
}




?>