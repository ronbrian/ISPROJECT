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

<script type="text/javascript">
  (function($) {
    $(document).ready(function() {

      $('#basic-table').tablechart();

      $('#barchart-table').tablechart({
        plotOptions: {
          seriesDefaults: {
            renderer: $.jqplot.BarRenderer,
          },
        }
      });
      
      $('#multiple-tables').tablechart();
      
      $('#plot-table').tablechart({
        parseX: Tablechart.parseFloat,
        plotOptions: {
          axes: {
            xaxis: {
              renderer: $.jqplot.LinearAxisRenderer,
              min: 0,
              max: 7,
              numberTicks: 8
            },
            yaxis: {
              min: 0,
              max: 40
            }
          },
          legend: {
            show: false
          }
        }
      });

      $('#multiple-axes').tablechart({
        plotOptions: {
          seriesColors: [ '#999999', '#2166ac' ],
          seriesDefaults: {
            pointLabels: { show: true },
          },
          series: [{
            renderer: $.jqplot.BarRenderer,
            yaxis: 'y2axis',
            rendererOptions: { barWidth: 18 },
          }],
          axes: {
            y2axis: { 
              min: 0,
              max: 60
            }
          }
        },
      });
      
      $('#series-options').tablechart({
        parseOptions: true,
        plotOptions: {
          axes: {
            xaxis: {
              renderer: $.jqplot.LinearAxisRenderer,
              min: 0,
              max: 100
            },
          }
        }
      });

      $('#slider').slider({
        min: 0, 
        max: 10,
        step: 0.01,
        slide: function(event, ui) {
          updateTable(ui.value);
          $('#animate-formula').tablechart();
        }
      });
      
      createTable();
      updateTable(0);
      $('#animate-formula').tablechart({
        parseX: Tablechart.parseFloat,
        plotOptions: {
          legend: {
            show: false
          },
          axes: {
            yaxis: { 
              min: -5,
              max: 5
            }
          }
        }
      });

    });
  })(jQuery);
  </script>

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



<table id="basic-table" class='table table-hover'>
  <thead class='text-warning' >

    <tr>
      <th>Month</th>
      <th>Users</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Jan</th>
      <td>1</td>
    </tr>
    <tr>
      <th>Feb</th>
      <td>3</td>
    </tr>
    <tr>
      <th>Mar</th>
      <td>2</td>
    </tr>
    <tr>
      <th>Apr</th>
      <td>8</td>
    </tr>


  </tbody>
</table>


</body>
</html>
