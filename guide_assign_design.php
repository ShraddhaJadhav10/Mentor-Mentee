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
                    <li><a href="admin_dashboard.php" class="nav-link">Dashboard</a></li>
                     <li><a href="Home_page.php" class="nav-link">Logout</a></li>
                <!--<li><a href="#training-section" class="nav-link">Our Training</a></li>-->
                <!--<li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>-->
                <!--<li><a href="#services-section" class="nav-link">Services</a></li>-->
               
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
//    $query="SELECT MAX(guide_id) FROM guide_assign";
//    $result=  mysql_query($query) or die(mysql_error());
//    while ($row=  mysql_fetch_array($result))
//    {
//        $guide_id=$row['MAX(guide_id)'];
//        if($guide_id==0)
//        {
//            $guide_id=1;
//        }
//        else 
//        {
//            $guide_id=$guide_id+1;
//        }
//    }
//    return $guide_id;
//}




 ?>
     

        <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Guide Assign</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">
        
        
<form action="guide_assign_code.php">
    <?php
    
//    getnew id code
            if(isset($_GET['guide_id']))
            {
                $gid=$_GET['guide_id'];
                $mid=$_GET['mentor_id'];
                $meid=$_GET['mentee_id'];
                
                
              
            }
            else
            {
                 $gid="";
                 $mid="";
                 $meid="";
              
              
            }
            
            
    ?>
          <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Guide id : </div>
                    <input type="text" class="form-control" name="txt_guide_id"  value="<?php echo($gid);?>">
                </div>
          </div>
           <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor id : </div>
                <select name="txt_mentor_id" class="form-control">
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
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentee id : </div>
             <select name="txt_mentee_id" class="form-control">
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
        <?php
        if(isset($_GET['guide_id']))
            {
            ?>
        <div class="col-lg-4">
            <input type="submit"  value="Insert" name="btn" disabled="true" class="btn btn-block btn-primary"  style="width: 100px">
         </div> 
          <div class="col-lg-4">
           <input type="submit" value="Update" name="btn" class="btn btn-block btn-primary  " style="width: 100px">
          </div>
           <div class="col-lg-4">
            <input type="submit"   value="Delete" name="btn"  class="btn btn-block btn-primary"  style="width: 100px">
           </div>
            
            
            <?php
            
            }
            else
            {
             ?>
             <div class="col-lg-4">
              <input type="submit" value="Insert" name="btn" class="btn btn-block btn-primary" style="width: 100px">
             </div>
            <div class="col-lg-4">
             <input type= "submit" value="Update" name="btn" class="btn btn-block btn-primary" style="width: 100px" disabled="true"   >
            </div>
           <div class="col-lg-4">
            <input type="submit" value="Delete" name="btn" class="btn btn-block btn-primary  " style="width: 100px" disabled="true" >
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
$query="SELECT * from guide_assign";
$result=  mysql_query($query) or die("Query failed." .mysql_error());

$num=(int)@mysql_numrows($result);
echo "<table align=center class='table' border=5 cellspacing=3>";
echo 
    "<tr>
       <td><b>Select</b></td>        
        <td><b>Guide_id</b></td>
        <td><b>Mentor_id</b></td>
          <td><b>Mentee_id</b></td>
                    
        
    </tr>";
    for ($i=0;$i<$num;$i++)
    {
        $row=  mysql_fetch_array($result);
        echo "<tr>";
        echo "<td><a href='guide_assign_design.php?guide_id=".$row['guide_id'] ."&mentor_id=" .$row['mentor_id'] ."&mentee_id=" .$row['mentee_id'] ."'>Select</a></td>";
        echo "<td>" .$row[0] ."</td>";
        echo "<td>" .$row[1] ."</td>";
        echo "<td>" .$row[2] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysql_freeresult($result);
    mysql_close($dbc);
    ?>
        
        
        
        <!--footer code-->
<!--    <footer class="site-footer bg-primary">
      


        <div class="row pt-5 mt-5 text-left">
          <div class="col-md-12">
            <div class="border-top pt-5">
               Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                  class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
               Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
        
            </div>
          </div>
          
        </div>

      </div>
    </footer>-->
        
   
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
    
    ?>    
 