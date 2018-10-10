<?php session_start();
include 'dbconnect.php';
$time = date("Y/m/d/h:i");
$sql2 = "SELECT `id`, `time` FROM `logs` WHERE `time` = '$time'";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
    }
} else {
    echo "0 results";
} ?>