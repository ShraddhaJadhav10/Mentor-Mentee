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
    
    <!--validation-->
    <script>
        function formValidator()
        {
        var meet_details = document.getElementById("txt_meetdetails");
        var present_absent = document.getElementById("txt_presentabsent");
        if(notEmpty(meet_details,"Details Must be given")) 
            {
             if(notEmpty(present_absent,"Attendance Must be given"))
             {
                 return true;
              }
         }
         return false;
     }
     
     function notEmpty(elem, helperMsg){

	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
        }
        </script>
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
                    <li><a href="Mentor_dashboard.php" class="nav-link">Dashboard</a></li>
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

//GetNewId Function
//function getNewID()
//{
//    $query="SELECT MAX(meet_id) FROM meeting";
//    $result=  mysql_query($query) or die(mysql_error());
//    while ($row=  mysql_fetch_array($result))
//    {
//      
//        if($meet_id==0)
//        {  $meet_id=$row['MAX(meet_id)'];
//            $meet_id=1;
//        }
//        else 
//        {
//            $meet_id=$meet_id+1;
//        }
//    }
//    return $meet_id;
//}
?>
        
        <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Meeting Details</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">



<form action="Meeting_code.php">
    <?php
    
    
            if(isset($_GET['meet_id']))
            {
                $mt_id=$_GET['meet_id'];
                $mt_date=$_GET['meet_date'];
                $mid=$_GET['mentor_id'];
                $meid=$_GET['mentee_id'];
                $mt_details=$_GET['meet_details'];
                $present_absent=$_GET['present_absent'];
                
              
            }
            else
            {
                 $mt_id="";
                 $mt_date="";
                 $mid="";
                $meid="";
                $mt_details="";
                $present_absent="";
                
              
               
            }
            
            
    ?>
           <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Meet id : </div>
                    <input type="text" class="form-control" name="txt_meet_id"  value="<?php echo($mt_id);?>">
                </div>
           </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Meet date : </div>
                    <input type="text" class="form-control" name="txt_meet_date" value="<?php echo($mt_date);?>" >
                </div>
    </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor id : </div>
                   <input type="text" class="form-control" name="txt_mentor_id" value="<?php echo($mid);?>" >
                </div>
    </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentee id : </div>
                     <input type="text" class="form-control" name="txt_mentee_id" value="<?php echo($meid);?>" >
                </div>
    </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Meet details : </div>
                    <input type="text" class="form-control" name="txt_meet_details" id="txt_meetdetails"value="<?php echo($mt_details);?>" >
                </div>
    </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Present-Absent : </div>
                   <input type="text" class="form-control" name="txt_present_absent" id="txt_presentabsent" value="<?php echo($present_absent);?>" >
                </div>
    </div>
    
         <div class="form-group row">  
         <?php
          
        if(isset($_GET['meet_id']))
            {
            ?>
        <div class="col-lg-4">
          <input type="submit" value="Insert" name="btn" disabled="true" class="btn btn-block btn-primary"  style="width: 100px">
        </div>
            <div class="col-lg-4"> 
           <input type="submit" value="Update" name="btn" class="btn btn-block btn-primary"  style="width: 100px">
            </div>
             <div class="col-lg-4">
            <input type="submit" value="Delete" name="btn" class="btn btn-block btn-primary"  style="width: 100px">
             </div>
            
            
            <?php
            
            }
            else
            {
             ?>
             <div class="col-lg-4">
              <input type="submit" value="Insert" name="btn" class="btn btn-block btn-primary"  style="width: 100px" onclick="return formValidator()" >
             </div>
             <div class="col-lg-4">
           <input type="submit" value="Update" name="btn" class="btn btn-block btn-primary"  style="width: 100px" disabled="true">
             </div>
           <div class="col-lg-4">
            <input type="submit" value="Delete" name="btn" class="btn btn-block btn-primary"  style="width: 100px" disabled="true">
           </div>
            <?php
            }
            ?>
         </div>
</form>
          </div>
          </div>
          </div>
 


<?php



$query="SELECT * from meeting";
$result=  mysql_query($query) or die("Query failed." .mysql_error());

$num=(int)@mysql_numrows($result);
echo "<table align=center class='table' border=2 cellspacing=3>";
echo 
    "<tr>
       <td><b>Select</b></td> 
        <td><b>Meet_id</b></td>
        <td><b>Meet_date</b></td>
          <td><b>Mentor_id</b></td>
          <td><b>Mentee_id</b></td>
          <td><b>Meet_details</b></td>
           <td><b>Present_Absent</b></td>
          
        
        
    </tr>";
    for ($i=0;$i<$num;$i++)
    {
        $row=  mysql_fetch_array($result);
        echo "<tr>";
        echo "<td><a href='meeting_design.php?meet_id=".$row['meet_id'] ."&meet_date=" .$row['meet_date'] ."&mentor_id=" .$row['mentor_id'] ."&mentee_id=" .$row['mentee_id'] ."&meet_details=" .$row['meet_details'] ."&present_absent=" .$row['present_absent'] ."'>Select</a></td>";
        echo "<td>" .$row[0] ."</td>";
        echo "<td>" .$row[1] ."</td>";
         echo "<td>" .$row[2] ."</td>";
          echo "<td>" .$row[3] ."</td>";
           echo "<td>" .$row[4] ."</td>";
            echo "<td>" .$row[5] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysql_freeresult($result);
    mysql_close($dbc);
    
    ?>  
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
 