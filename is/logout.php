<?php   
 include 'dbconnect.php';
session_start(); //to ensure you are using same session
unset($_SESSION["idpatient"]);
unset($_SESSION["user"]);
session_unset(); 
session_destroy(); 
mysqli_close($conn);
header("Location: index.php ");
exit();

?>