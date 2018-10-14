<?php
// Array with names

include '../../dbconnect.php';
$q = $_REQUEST["q"];
$x;


$sql = "SELECT `password` FROM `patient` WHERE `id` = '$q'";
$result = $conn->query($sql);
 /*   RETRIEVING ID   */

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $x = $row["password"];

    }
} else {
}


if (!isset($x)) {
   echo "USER DOESNT EXIST"; 
} elseif($x == "0") {
    echo "NO PASSWORD";
}else{
    echo "PASSWORD AVAILABLE";
}

//



?>