<?php
session_start();
include 'dbconnect.php';


$id = $_REQUEST["q"];
$post = $_REQUEST["post"];
$doctor = $_REQUEST["doctor"];


$sql = "INSERT INTO `messages`( `id`, `time`, `post`, `doctor`, `type`) VALUES ('$id','$time','$post','$doctor', 'senttopatient')";
$result = $conn->query($sql);



?>
