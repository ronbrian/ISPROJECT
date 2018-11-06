
<!DOCTYPE html>
<html>

<head>

  <script src="lib/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="lib/jqplot/excanvas.min.js" type="text/javascript"></script>
  <script src="lib/jqplot/jquery.jqplot.min.js" type="text/javascript"></script>
  <script src="lib/jqplot/plugins/jqplot.categoryAxisRenderer.js" type="text/javascript"></script>
  <script src="lib/jqplot/plugins/jqplot.barRenderer.js" type="text/javascript"></script>
  <script src="lib/jqplot/plugins/jqplot.pointLabels.js" type="text/javascript"></script>
  <script src="jquery.tablechart.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="lib/jqplot/jquery.jqplot.min.css" />

 
  <style>
    body {
      width: 1100px;
      padding: 0 20px;
      font-family: Helvetica,Arial,sans-serif;
    }
    pre {
      background-color: #eee;
      padding: 5px 10px;
      border: 1px dotted #555;
      margin-bottom: 21px;
    }
    table.data {
      min-width: 250px;
      margin-bottom: 21px;
    }
    table.data caption {
      border-bottom: 1px dotted #777;
    }
    table.data td, table.data th {
      text-align: center;
      padding: 3px 8px;
      border: 1px solid #fff;
    }
    table.data tbody td, table.data tbody th {
      background-color: #ddd;
    }  
    .tablechart {
      margin-bottom: 21px;
    }
    h2 {
      margin-top: 60px;
      border-bottom: 1px dotted #777;
    }
    .tablechart {
      float: right;
      width: 740px;
      height: 400px;
    }
    #slider { 
      width: 300px;
    }



    
  </style>
</head>

<body>



<?php
include 'dbconnect.php';
$sql2 =" SELECT `diagnosis`, AVG(duration) AS duration FROM inpatient GROUP BY diagnosis ";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {


    echo "
    <table id='multiple-axes' class='table table-hover'>
    <caption></caption>
    <thead class='text-warning' >
    <tr>
        <th>Diagnosis</th>
        <th>Duration</th>
      </tr>
    </thead>
    
    
    ";

    while($row = $result->fetch_assoc()) {
    $diagnosis =  $row["diagnosis"];        
    $duration =  $row["duration"];
    
    echo "
    

  <tbody>
    <tr>
      <th>$diagnosis</th>
      <td>$duration</td>
    </tr>
    
    
    
    ";
}

echo "
</tbody>
</table> 
    
    

";
}

?>





</body>
</html>
