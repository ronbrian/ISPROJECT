<?php 
date_default_timezone_set("Africa/Nairobi");
$time = date("Y/m/d/h:i");


$conn=mysqli_connect("localhost","root","qwerty","isproject");
// Check connection

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

