<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="../coaching-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="../coaching-master/css/jquery-ui.css">
    <link rel="stylesheet" href="../coaching-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../coaching-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../coaching-master/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../coaching-master/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../coaching-master/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../coaching-master/css/aos.css">

    <link rel="stylesheet" href="../coaching-master/css/style.css">
    
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
                <li><a href="../Home_page.php" class="nav-link">Home</a></li>
                <li><a href="../mentee_dashboard.php"class="nav-link">Dashboard</a></li>
                <li><a href="../Home_page.php" class="nav-link">Logout</a></li>
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
            <h2 class="text-black">Mentorwise project semester topic dynamic report</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">
<form>
 <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Select mentor name : </div> 
          <select name="txt_mentor_id">
          
              <?php
               $mentor_id=0;
               $mentor_nm="";
               $query="Select * from mentor";
               $result=  mysql_query($query);
               $num=(int)@mysql_num_rows($result);
                for($i=0;$i<$num;$i++)
                {
                    $row=mysql_fetch_array($result);
                    $mentor_id=$row['mentor_id'];
                    $mentor_nm=$row['mentor_nm'];
                
          
               ?>
              <option value="<?php echo($mentor_id);?>"><?php echo($mentor_nm);?></option>
               <?php
               
                }     
                ?>
          </select>
                </div>
 </div>
       <div class="form-group row">
          <div class="col-lg-4">   
       <input type="submit" value="Show" name="btn" class="btn btn-block btn-primary"  style="width: 100px">
          </div>
       </div>
</form>             
          </div>
      </div>
         </div>
             <?php
             if(isset($_GET["btn"])) 
            {     
                 $mentor_id=$_GET["txt_mentor_id"];
                $query= $query= "select mentee_nm, mentor_nm, type_nm, topic_nm, topic_date, topic_details from mentor, mentee, final_project_select, project_sem_topic where project_sem_topic.topic_id=final_project_select.topic_id and project_sem_topic.mentee_id=mentee.mentee_id and project_sem_topic.mentor_id=mentor.mentor_id and mentor.mentor_id='".$mentor_id."'";
                //echo $query;
                        $result=  mysql_query($query) or die("Query failed." .mysql_error());
                //echo "Query executed successfully." ."<br/>";
                      $num=(int)@mysql_numrows($result);
                echo "<table align=center class='table' border=2 cellspacing=3>";
                echo 
                 "<tr>
                    
                    <td><b>Mentee_name</b></td>
                    <td><b>Mentor_name</b></td>
                    <td><b>Type_name</b></td>
                    <td><b>Topic_name</b></td>
                    <td><b>Topic_date</b></td>
                    <td><b>Topic_details</b></td>
                    
                </tr>";
                    for ($i=0;$i<$num;$i++)
                 {
                       $row=  mysql_fetch_array($result);
                          echo "<tr>";
                          echo "<td>" .$row[0] ."</td>";
                           echo "<td>" .$row[1] ."</td>";
                            echo "<td>" .$row[2] ."</td>";
                             echo "<td>" .$row[3] ."</td>";
                              echo "<td>" .$row[4] ."</td>";
                               echo "<td>" .$row[5] ."</td>";
                              
                            
                            echo "</tr>";
                    }
                echo "</table>";
            }
    mysql_freeresult($result);
    mysql_close($dbc);
    
?>
  <script src="js/jquery-3.3.1.min.js"></script>
        <script src="../coaching-master/js/jquery-ui.js"></script>
  <script src="../coaching-master/js/popper.min.js"></script>
  <script src="../coaching-master/js/bootstrap.min.js"></script>
  <script src="../coaching-master/js/owl.carousel.min.js"></script>
  <script src="../coaching-master/js/jquery.countdown.min.js"></script>
  <script src="../coaching-master/js/jquery.easing.1.3.js"></script>
  <script src="../coaching-master/js/aos.js"></script>
  <script src="../coaching-master/js/jquery.fancybox.min.js"></script>
  <script src="../coaching-master/js/jquery.sticky.js"></script>
  <script src="../coaching-master/js/isotope.pkgd.min.js"></script>

  
  <script src="../coaching-master/js/main.js"></script>

    </body>      
                 
</html>                   
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
               
                 
       