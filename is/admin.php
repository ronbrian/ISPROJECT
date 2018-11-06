<?php 
session_start();
include 'dbconnect.php';
$pagetitle = "Admin";
require_once("staffheader.php");

?>



<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href=" " class="simple-text logo-normal">
          admin portal
        </a>
      </div>



      <div class="sidebar-wrapper">
        <ul class="nav">




         <li class="nav-item active " id="managestaffli" >
              <a class="nav-link"   href="javascript:managestaff()"  >
                <i class="material-icons">person</i>
                <p>Manage Staff</p>
              </a>
          </li>        
          
          
          <li class="nav-item " id="viewpatientsli" >
              <a class="nav-link"    href="javascript:viewpatients()"  >
                <i class="material-icons">assignment</i>
                <p>View Patients</p>
              </a>
          </li>
          
          
           <li class="nav-item " id="viewinpatientsli" >
              <a class="nav-link"   href="javascript:viewinpatients()"  >
                <i class="material-icons">accessible</i>
                <p> View Current In- Patients</p>
              </a>
          </li>

          <li class="nav-item " id="viewreportsli" >
              <a class="nav-link"  href="javascript:viewreports()"  >
                <i class="material-icons">assessment</i>
                <p> Reports</p>
              </a>
          </li>

          <li class="nav-item " id="viewreportsli" >
              <a class="nav-link"  href="logout.php"  >
                <i class="material-icons">exit_to_app</i>
                <p> Log Out </p>
              </a>
          </li>





        </ul>
      </div>    
    </div>





    

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
 

        </div>
      </nav>
      <!-- End Navbar -->






      <div class="content">
        <div class="container-fluid">



          <div  class="row"> 
          
          
          
          
            <!--<div class="col-xl-13 col-lg-15">-->
            <div  class="col-lg-15 col-md-17">

            </div>
          </div>


          </div>
          <div class="row">


            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12" id="viewstaff" >
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Hospital Staff With Acess to the System</h4>
                    <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                  </div>
                  <div class="card-body table-responsive"  >
                  
                      <?php
                          $sql = " SELECT `Name`, `username`, `ID`, `title`, `password`   FROM `staff`  ";
      
                                                          
                                      $result = $conn->query($sql);
      
                                      if ($result->num_rows > 0) {
                                      // output data of each row
                                          
      
                                    
                                          echo "<table class='table table-hover' id='staff' >
                                        <tr>
                                        <thead class='text-warning' >
                                                <th>Name</th>
                                                <th>username</th>
                                                <th>ID</th>
                                                <th>title</th>
                                        </thead>
                                        </tr>";
    
                                    while($row = $result->fetch_assoc()) {
    
                                        $name = $row["Name"];
                                        $username =  $row["username"];
                                        $id =  $row["ID"];
                                        $title =  $row["title"];
                                        
    
                                            echo "
                                            <tr>
                                                    <td>".$name."</td>
                                                    <td>".$username."</td>
                                                    <td>".$id."</td>
                                                    <td>".$title."</td>";
                                             
                                            echo "</tr>
                                            ";
       
                                          }
                                          echo "
                                          

    
    
    
    
                                          
                                          ";
    
    
                                          echo "</table>";
                                        } else {
    
                                        //nothing goes here
    
                                    }
    
    
    
    
    
    
    
    
                      ?>
    
    
    


                </div>
              </div>
            </div>
              <div class="col-lg-6 col-md-12" id="editstaff" >
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title"> Edit Staff Details </h4>
                    <p class="card-category"> </p>
                  </div>
                  <div class="card-body table-responsive"  >
                  
                      

                </div>
              </div>
            </div>
            
            
            
            
            
            <div class="col-lg-6 col-md-12" id="viewpatients" >
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">List of Patients who have been treated</h4>
                  <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                </div>
                <div class="card-body table-responsive"  >
                 
                  <?php
                  $sql2 = " SELECT `name`, `age`, `id`, `tel`, `email`, `gender`  FROM `patient` ";

                                                  
                              $result2 = $conn->query($sql2);

                              if ($result2->num_rows > 0) {
                              // output data of each row
                                  

                             
                                  echo "<table id='patients'  class='table table-hover' >
                                  <tr>
                                  <thead class='text-warning' >
                                          <th>Name</th>
                                          <th>Age</th>
                                          <th>ID</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Gender</th>
                                  </thead>
                                  </tr>";

                              while($row = $result2->fetch_assoc()) {

                                  $name = $row["name"];
                                  $age =  $row["age"];
                                  $id =  $row["id"];
                                  $phone =  $row["tel"];
                                  $email=  $row["email"];
                                  $gender =  $row["gender"];
                                  

                                      echo "
                                      <tr>
                                              <td>".$name."</td>
                                              <td>".$age."</td>
                                              <td>".$id."</td>
                                              <td>".$phone."</td>
                                              <td>".$email."</td>
                                              <td>".$gender."</td>";
                                      echo "</tr>
                                      ";
 
                                    }


                                    echo "</table>";
                                  } else {

                                  //nothing goes here

                              }








                ?>
    
    
    


                </div>
              </div>
            </div>

          </div>

          <div class="row">
              <div class="col-lg-15 col-md-12" id="viewinpatients"  >

                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">List Of Currently Admitted In-Patients </h4>
                      <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                    </div>
                    <div class="card-body table-responsive"  >
                        <?php
                        $sql3 = " SELECT `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `ward no`, `status`, `nurse`, `nurse notes`, `doctor` FROM `inpatient` WHERE `status` = 'Admitted' ";
    
                                                        
                                    $result3 = $conn->query($sql3);
    
                                    if ($result3->num_rows > 0) {
                                    // output data of each row
               
                                        echo "<table id='inpatients'   class='table table-hover'>
                                        <tr>
                                        <thead class='text-warning' >
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Diagnosis</th>
                                                <th>Prescription</th>
                                                <th>Admission Date</th>
                                                <th>Discharge Date</th>
                                                <th>Duration</th>
                                                <th>Ward No.</th>
                                                <th>Status</th>
                                                <th>Nurse</th>
                                                <th>Doctor</th>
                                        </thead>
                                        </tr>";
    
                                    while($row = $result3->fetch_assoc()) {
    
                                        $id = $row["id"];
                                        $name =  $row["name"];
                                        $diagnosis =  $row["diagnosis"];
                                        $prescription =  $row["prescription"];
                                        $admissiondate=  $row["admission date"];
                                        $dischargedate=  $row["discharge date"];
                                        $duration=  $row["duration"];
                                        $wardno=  $row["ward no"];
                                        $status=  $row["status"];
                                        $nurse=  $row["nurse"];
                                        $doctor =  $row["doctor"];
                                        
    
                                            echo "
                                            <tr>
                                                    <td>".$id."</td>
                                                    <td>".$name."</td>
                                                    <td>".$diagnosis."</td>
                                                    <td>".$prescription."</td>
                                                    <td>".$admissiondate."</td>
                                                    <td>".$dischargedate."</td>
                                                    <td>".$duration."</td>
                                                    <td>".$wardno."</td>
                                                    <td>".$status."</td>
                                                    <td>".$nurse."</td>
                                                    <td>".$doctor."</td>";               
                                                                                    echo "</tr>
                                            ";
       
                                          }
    
    
                                          echo "</table>";
                                        } else {
    
                                        //nothing goes here
    
                                    }
    
    
    
    
    
    
    
    
                      ?>
    
                       
      
  
  
                  </div>
                </div>
              </div>
              <div class="col-lg-15 col-md-12" id="viewdischarged"  >

                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">List Of Previously Discharged Patients</h4>
                      <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                    </div>
                    <div class="card-body table-responsive"  >
                        <?php
                        $sql3 = " SELECT `id`, `name`, `diagnosis`, `prescription`, `admission date`, `discharge date`, `duration`, `ward no`, `status`, `nurse`, `nurse notes`, `doctor` FROM `inpatient` WHERE `status` = 'Discharged' ";
    
                                                        
                                    $result3 = $conn->query($sql3);
    
                                    if ($result3->num_rows > 0) {
                                    // output data of each row
               
                                        echo "<table id='inpatients'   class='table table-hover'>
                                        <tr>
                                        <thead class='text-warning' >
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Diagnosis</th>
                                                <th>Prescription</th>
                                                <th>Admission Date</th>
                                                <th>Discharge Date</th>
                                                <th>Duration</th>
                                                <th>Ward No.</th>
                                                <th>Status</th>
                                                <th>Nurse</th>
                                                <th>Doctor</th>
                                        </thead>
                                        </tr>";
    
                                    while($row = $result3->fetch_assoc()) {
    
                                        $id = $row["id"];
                                        $name =  $row["name"];
                                        $diagnosis =  $row["diagnosis"];
                                        $prescription =  $row["prescription"];
                                        $admissiondate=  $row["admission date"];
                                        $dischargedate=  $row["discharge date"];
                                        $duration=  $row["duration"];
                                        $wardno=  $row["ward no"];
                                        $status=  $row["status"];
                                        $nurse=  $row["nurse"];
                                        $doctor =  $row["doctor"];
                                        
    
                                            echo "
                                            <tr>
                                                    <td>".$id."</td>
                                                    <td>".$name."</td>
                                                    <td>".$diagnosis."</td>
                                                    <td>".$prescription."</td>
                                                    <td>".$admissiondate."</td>
                                                    <td>".$dischargedate."</td>
                                                    <td>".$duration."</td>
                                                    <td>".$wardno."</td>
                                                    <td>".$status."</td>
                                                    <td>".$nurse."</td>
                                                    <td>".$doctor."</td>";               
                                                                                    echo "</tr>
                                            ";
       
                                          }
    
    
                                          echo "</table>";
                                        } else {
    
                                        //nothing goes here
    
                                    }
    
    
    
    
    
    
    
    
                      ?>
    
                       
      
  
  
                  </div>
                </div>
              </div>
          </div>
          <div class = "row" >
              <div class="col-lg-15 col-md-12" id="viewreports"  >

                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title"> Graph Showing Number Of System Users over Months </h4>
                      <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                    </div>
                    <div id="graphdiv1" >
                    <div class="card-body table-responsive"  >

  
                  </div>
                </div>
                </div>
              </div>

          </div>


          <div class = "row" >
              <div class="col-lg-15 col-md-12" id="viewreports2"  >

                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Real-Time Graph Showing Number People With Common Diagnosis </h4>
                      <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                    </div>
                    <div id="graphdiv2" >
                    <div class="card-body table-responsive"  >

  
                  </div>
                </div>
                </div>
              </div>

          </div>


          <div class = "row" >
              <div class="col-lg-15 col-md-12" id="viewreports3"  >

                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Average Period of Admission (in Days) against Diagnosis </h4>
                      <p class="card-category">Loaded on <?php echo $time; ?> am</p>
                    </div>
                    <div id="graphdiv3" >
                    <div class="card-body table-responsive"  >

  
                  </div>
                </div>
                </div>
              </div>

          </div>



          </div>






        </div>
      </div>








    </div>
  </div>


<script type="text/javascript">// <![CDATA[




$(document).ready(function () {
    //$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
    //$('#graph1').load('graph1.php');

    //$('#graph2').load('graph2.php');

    //$("#patientdetails").show();
    $("#viewpatients").hide();
    $("#viewinpatients").hide();
    $("#viewdischarged").hide();
    $("#viewreports").hide();
    $("#viewreports2").hide();
    $("#viewreports3").hide();




});





// ]]>


</script>





<script>


  function viewdashboard(){
    document.getElementById("managestaffli").className = "nav-item";
    document.getElementById("viewpatientsli").className = "nav-item";
    document.getElementById("viewinpatientsli").className = "nav-item";
    document.getElementById("viewreportsli").className = "nav-item";


  }

  function managestaff(){
    document.getElementById("managestaffli").className = "nav-item active";
    document.getElementById("viewpatientsli").className = "nav-item";
    document.getElementById("viewinpatientsli").className = "nav-item";
    document.getElementById("viewreportsli").className = "nav-item";
    $("#viewstaff").show();
    $("#editstaff").show();
    $("#viewpatients").hide();
    $("#viewinpatients").hide();
    $("#viewdischarged").hide();
    $("#viewreports").hide();
    $("#viewreports2").hide();
    $("#viewreports3").hide();




  }
  function viewpatients(){
    document.getElementById("viewpatientsli").className = "nav-item active";
    document.getElementById("managestaffli").className = "nav-item";
    document.getElementById("viewinpatientsli").className = "nav-item";
    document.getElementById("viewreportsli").className = "nav-item";
    $("#viewpatients").show();
    $("#viewstaff").hide();
    $("#editstaff").hide();
    $("#viewinpatients").hide();
    $("#viewdischarged").hide();
    $("#viewreports").hide();
    $("#viewreports2").hide();
    $("#viewreports3").hide();

  }


  function viewinpatients(){
    document.getElementById("viewinpatientsli").className = "nav-item active";
    document.getElementById("managestaffli").className = "nav-item";
    document.getElementById("viewpatientsli").className = "nav-item";
    document.getElementById("viewreportsli").className = "nav-item";
    $("#viewinpatients").show();
    $("#viewdischarged").show();
    $("#viewstaff").hide();
    $("#editstaff").hide();
    $("#viewpatients").hide();
    $("#viewreports").hide();
    $("#viewreports2").hide();
    $("#viewreports3").hide();



  }


  function viewreports(){
    document.getElementById("viewreportsli").className = "nav-item active";
    document.getElementById("managestaffli").className = "nav-item";
    document.getElementById("viewpatientsli").className = "nav-item";
    document.getElementById("viewinpatientsli").className = "nav-item";
    $("#viewreports").show();
    $("#viewreports2").show();
    $("#viewreports3").show();
    $("#viewstaff").hide();
    $("#editstaff").hide();
    $("#viewpatients").hide();
    $("#viewinpatients").hide();
    $("#viewdischarged").hide();
    $('#graphdiv1').load('graph1.php');
    $('#graphdiv2').load('graph2.php');
    $('#graphdiv3').load('graph3.php');
    



    
  }



</script>

  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function (event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function () {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function () {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function () {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>