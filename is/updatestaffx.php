<?php
                                          include 'dbconnect.php';
                                        $name = $_GET["name"];
                                        $username = $_GET["username"];
                                        $id = $_GET["id"];
                                        $title = $_GET["title"];

                                        $sql2="INSERT INTO `staff`(`Name`, `username`, `ID`, `title`) VALUES ('$name', '$username', '$id', '$title')";
                                        $result2 = $conn->query($sql2);
                                        header("Location: admin.php");
?>