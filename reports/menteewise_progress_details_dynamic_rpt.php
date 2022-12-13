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
            <h2 class="text-black">Menteewise progress details dynamic report</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">
<form>
<div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Select Mentee Name : </div>  
          <select name="txt_mentee_id">
          
              <?php
               $mentee_id=0;
               $mentee_nm="";
               $query="Select * from mentee";
               $result=  mysql_query($query);
               $num=(int)@mysql_num_rows($result);
                for($i=0;$i<$num;$i++)
                {
                    $row=mysql_fetch_array($result);
                    $mentee_id=$row['mentee_id'];
                    $mentee_nm=$row['mentee_nm'];
                
          
               ?>
              <option value="<?php echo($mentee_id);?>"><?php echo($mentee_nm);?></option>
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
                 $mentee_id=$_GET["txt_mentee_id"];
                $query="SELECT progress_id,topic_nm,mentor_nm,progress_date,description from progress_details,mentee,mentor,final_project_select,project_sem_topic where progress_details.select_id=final_project_select.select_id and final_project_select.topic_id=project_sem_topic.topic_id and progress_details.mentee_id=mentee.mentee_id and progress_details.mentor_id=mentor.mentor_id and progress_details.mentee_id='" .$mentee_id ."'";
                //echo $query;
                        $result=  mysql_query($query) or die("Query failed." .mysql_error());
                //echo "Query executed successfully." ."<br/>";
                      $num=(int)@mysql_numrows($result);
                echo "<table align=center class='table' border=2 cellspacing=3>";
                echo 
                 "<tr>
                    <td><b>Progress_id</b></td>
                    <td><b>Topic_name</b></td>
                    <td><b>Mentor_name</b></td>
                    <td><b>Progress_date</b></td>
                    <td><b>Description</b></td>
                    
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
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
               
                 
       