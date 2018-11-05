<?php
session_start();
include 'dbconnect.php';


$id = $_REQUEST["q"];
$_SESSION["patientid"] = $id;

?>
