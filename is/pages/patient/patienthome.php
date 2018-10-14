<?php
session_start();

echo "THIS IS USER HOME<br>";
echo "Welcome".$_SESSION["user"];
?>