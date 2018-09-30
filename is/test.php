<div class="card" >

<?php
                                
        include 'dbconnect.php';
        $sql="SELECT * FROM `updates`  ORDER BY updateid DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                // output data of each row
                $count =0;
                while($row = $result->fetch_assoc()) {
 //echo statements
                }
             } else {
                echo "0 results";
            }
                            
                                
    ?>

</div>