<?php 
session_start();
include 'dbconnect.php';


$sql2=" UPDATE `appointments` SET`viewed`= 1  ";
$result2 = $conn->query($sql2);
header("Location: clerk.php ");




?>