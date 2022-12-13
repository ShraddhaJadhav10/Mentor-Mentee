<html>
    <head>
    <title>Coaching &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="coaching-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="coaching-master/css/jquery-ui.css">
    <link rel="stylesheet" href="coaching-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="coaching-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="coaching-master/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="coaching-master/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="coaching-master/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="coaching-master/css/aos.css">

    <link rel="stylesheet" href="coaching-master/css/style.css">
    
    </head>
    <body>
         <!--header code-->   
        <header class="site-navbar  site-navbar-target" role="banner"  style="background-color: #373a6d">
         <div class="container">
        <div class="row align-items-center">
        <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-2">Mentor Mentee Diary<span class="text-white">.</span> </a></h1>
         </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="Home_page.php" class="nav-link">Home</a></li>
                     <li><a href="Home_page.php" class="nav-link">Logout</a></li>
                
              </ul>
            </nav>
          </div>
      <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
      </div>
      </div>
   </header>


<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
//echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
//echo "Database Connected." ."</br>";
?>
         
         <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Mentor Dashboard</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">

              
                  
                  <div class="form-row">    
                      <table border="1" class="table">
            <tr>
                <td><h3>Manage</h3></td>
                <td><a href="final_project_select_design.php">Final project selection</a></td>
            </tr>
             <tr>
                <td></td>                   
                <td><a href="meeting_design.php">Meeting details</a></td>
            </tr>
             
            
            <tr>
                 <td><h3>Reports</h3></td>
                 <td><a href="reports/rpt_project_sem_topic_list.php">Project semester topic list report</a></td>
            </tr>
            
              <tr>
                 <td></td>
                 <td><a href="reports/rpt_progress_details_list.php">Progress details list report</a></td>
            </tr>
            
            
             <tr>
                 <td></td>
                 <td><a href="reports/mentorwise_mentee_dynamic_rpt.php">Mentorwise mentee dynamic report</a></td>
            </tr>
            
            <tr>
                <td></td>
                <td><a href="reports/mentorwise_meeting_dynamic_rpt.php">Mentorwise meeting dynamic report</a></td>
            </tr>
            
            <tr>
                <td></td>
                <td><a href="reports/mentorwise_project_sem_topic_dynamic_rpt.php">Mentorwise project semester topic dynamic report</a></td>
            </tr>
            
            <tr>
                <td></td>
                <td><a href="reports/classwise_mentee_dynamic.php">Classwise Mentee Details dynamic report</a></td>
            </tr>
            
            <tr>
                <td></td>
                <td><a href="reports/rpt_meeting_datewise.php">Meeting datewise report</a></td>
            </tr>
            
            <tr>
                <td></td>
                <td><a href="reports/progress_details_datewise.php">Progress details datewise report</a></td>
            </tr>
            
        </table>
                  </div>
          </div>
      </div>
         </div>
   <script src="js/jquery-3.3.1.min.js"></script>
        <script src="coaching-master/js/jquery-ui.js"></script>
  <script src="coaching-master/js/popper.min.js"></script>
  <script src="coaching-master/js/bootstrap.min.js"></script>
  <script src="coaching-master/js/owl.carousel.min.js"></script>
  <script src="coaching-master/js/jquery.countdown.min.js"></script>
  <script src="coaching-master/js/jquery.easing.1.3.js"></script>
  <script src="coaching-master/js/aos.js"></script>
  <script src="coaching-master/js/jquery.fancybox.min.js"></script>
  <script src="coaching-master/js/jquery.sticky.js"></script>
  <script src="coaching-master/js/isotope.pkgd.min.js"></script>

  
  <script src="coaching-master/js/main.js"></script>

    </body>      
                 
</html>                   
                 