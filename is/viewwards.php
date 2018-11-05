<?php


include 'dbconnect.php';
$q = $_REQUEST["q"];


$sql = " SELECT `ward no`, `occupied` FROM `wards` WHERE `occupied`='1' ";
echo "<h4>Occupied Wards</h4><br>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $wardno =  $row["ward no"];
        $occupied =  $row["occupied"];
                $sql3 = " SELECT `name`, `id` FROM `inpatient` WHERE `ward no`='$wardno' ";
                    $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {

                while ($row = $result3->fetch_assoc()) {
                    $name =  $row["name"];
                    $id =  $row["id"];
                

                }
            }else{
            }

            echo "Ward ".$wardno."&nbsp;--.$name. --.$id.&nbsp;<br>";


    }
}else{
    echo "<strong style='color: red;' > Error Connecting to the Database ! </strong> ";

}


$sql2 = " SELECT `ward no`, `occupied` FROM `wards` WHERE `occupied`='0' ";
echo "<h4>Empty Wards</h4><br>";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {

    while ($row = $result2->fetch_assoc()) {
        $wardno =  $row["ward no"];
        $occupied =  $row["occupied"];
      
            echo "Ward ".$wardno."&nbsp;&nbsp; ,";


    }
}else{
    echo "<strong style='color: red;' > Error Connecting to the Database ! </strong> ";

}









?>