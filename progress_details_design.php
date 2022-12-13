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
        var description = document.getElementById("txt_description");
         if(notEmpty(description,"Description Must be given")) 
            {
             
                 return true;
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
                    <li><a href="mentee_dashboard.php" class="nav-link">Dashboard</a></li>
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
//    $query="SELECT MAX(progress_id) FROM progress_details";
//    $result=  mysql_query($query) or die(mysql_error());
//    while ($row=  mysql_fetch_array($result))
//    {
//        $progress_id=$row['MAX(progress_id)'];
//        if($progress_id==0)
//        {
//            $progress_id=1;
//        }
//        else 
//        {
//            $progress_id=$progress_id+1;
//        }
//    }
//    return $progress_id;
//}
?>

  <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Progress Details</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">
<form action="progress_details_code.php">
    <?php
    
    
            if(isset($_GET['progress_id']))
            {
                $pid=$_GET['progress_id'];
                $sid=$_GET['select_id'];
                $meid=$_GET['mentee_id'];
                $mid=$_GET['mentor_id'];
                $p_date=$_GET['progress_date'];
                $description=$_GET['description'];
                $project_copy=$_GET['project_copy'];
                
              
            }
            else
            {
                 $pid="";
                 $sid="";
                 $meid="";
                $mid="";
                $p_date="";
                $description="";
                $project_copy="";
              
               
            }
            
            
    ?>
 <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Progress id : </div>
                     <input type="text" class="form-control" name="txt_progress_id" id="txt_id"  value="<?php echo($pid);?>">
                </div>
 </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Select id : </div>
                   <input type="text" class="form-control" name="txt_select_id" value="<?php echo($sid);?>" >
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
                    <div class="text-black">Mentor id : </div>
                   <input type="text" class="form-control" name="txt_mentor_id" value="<?php echo($mid);?>" >
                </div>
    </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Progress Date : </div>
                    <input type="text" class="form-control" name="txt_progress_date" value="<?php echo($p_date);?>" >
                </div>
    </div>
  <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Description : </div>
                    <input type="text" class="form-control" name="txt_description" id="txt_description" value="<?php echo($description);?>" >
                </div>
  </div>
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Project copy : </div>
                    <input type="file" class="form-control" name="txt_project_copy" value="<?php echo($project_copy);?>" >
                </div>
    </div>
    <div class="form-group row">
    
           <?php
        if(isset($_GET['progress_id']))
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
              <input type="submit" value="Insert" name="btn" class="btn btn-block btn-primary"  style="width: 100px" onclick="return formValidator()">
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
</html>

<?php



$query="SELECT * from progress_details";
$result=  mysql_query($query) or die("Query failed." .mysql_error());

$num=(int)@mysql_numrows($result);
echo "<table align=center class='table' border=2 cellspacing=3>";
echo 
    "<tr>
       <td><b>Select</b></td>        
        <td><b>Progress_id</b></td>
        <td><b>Select_id</b></td>
          <td><b>Mentee_id</b></td>
          <td><b>Mentor_id</b></td>
          <td><b>Progress_date</b></td>
           <td><b>Description</b></td>
           <td><b>Project_copy</b></td>
          
        
        
    </tr>";
    for ($i=0;$i<$num;$i++)
    {
        $row=  mysql_fetch_array($result);
        echo "<tr>";
        echo "<td><a href='progress_details_design.php?progress_id=".$row['progress_id'] ."&select_id=" .$row['select_id'] ."&mentee_id=" .$row['mentee_id'] ."&mentor_id=" .$row['mentor_id'] ."&progress_date=" .$row['progress_date'] ."&description=" .$row['description'] ."&project_copy=" .$row['project_copy'] ."'>Select</a></td>";
        echo "<td>" .$row[0] ."</td>";
        echo "<td>" .$row[1] ."</td>";
         echo "<td>" .$row[2] ."</td>";
          echo "<td>" .$row[3] ."</td>";
           echo "<td>" .$row[4] ."</td>";
            echo "<td>" .$row[5] ."</td>";
             echo "<td>" .$row[6] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysql_freeresult($result);
    mysql_close($dbc);
    
    ?>    
 


</body>
</html>