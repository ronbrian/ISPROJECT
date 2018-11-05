<?php

include 'dbconnect.php';
$q = $_REQUEST["q"];
$wardno = $_REQUEST["wardno"];



$sql = " UPDATE `inpatient` SET `status` = 'Discharged', `isactive` = '0' WHERE `id` = '$q' ";


if ($conn->query($sql) === true) {
    echo "  alert(' Details have been recorded ');";

    $sql2 = " UPDATE `wards` SET  `occupied` = '0' WHERE `ward no` = '$wardno' ";


        if ($conn->query($sql2) === true) {
            echo "  alert(' Details have been recorded ');";
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }



} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>