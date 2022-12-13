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
        var mentor_name = document.getElementById("txt_mentor_nm");
        var mentor_email= document.getElementById("txt_mentor_email");
        var mentor_phno = document.getElementById("txt_mentor_phno");
	var pass= document.getElementById("txt_mentor_pass");
          if(notEmpty(mentor_name,"Name Must be given"))
          {
           if(notEmpty(mentor_email ,"Email Must be given") &&  emailValidator(mentor_email, "Please enter a valid email address"))
           {
             if(notEmpty(mentor_phno,"Phone No Must be given") && validmobile(mentor_phno) && isNumeric(mentor_phno, "Please enter a valid phone no"))  
             {
                 if(notEmpty(pass ,"Password Must be given") && lengthRestriction(pass, 8, 10)){
                     return true;
                 }
                }
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
        
        

        
        function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
               elem.value="";
		elem.focus();
		return false;
	}
       }
       
       function validmobile(elem){
	var uInput = elem.value;
	if(uInput.length==10){
		return true;
	}else{
		alert("Please enter valid mobile Or Phone No");
		elem.value="";
		elem.focus();
		return false;
	}
       }
        
        
        function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.value="";
		elem.focus();
		return false;
	}
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
//    $query="SELECT MAX(mentor_id) FROM mentor";
//    $result=  mysql_query($query) or die(mysql_error());
//    while ($row=  mysql_fetch_array($result))
//    {
//        $mentor_id=$row['MAX(mentor_id)'];
//        if($mentor_id==0)
//        {
//            $mentor_id=1;
//        }
//        else 
//        {
//            $mentor_id=$mentor_id+1;
//        }
//    }
//    return $mentor_id;
//}




 ?>
        
         <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Mentor</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">


    

<form action="Mentor_code.php">
    <?php
    
    
            if(isset($_GET['mentor_id']))
            {
                $mid=$_GET['mentor_id'];
                $branch_id=$_GET['branch_id'];
                $mnm=$_GET['mentor_nm'];
                $memail=$_GET['mentor_email'];
                $mphone=$_GET['mentor_phone'];
                $mpass=$_GET['mentor_password'];
                
              
            }
            else
            {
                 $mid="";
                 $branch_id="";
                 $mnm="";
                 $memail="";
                $mphone="";
                $mpass="";
              
               
            }
            
            
    ?>
 
    
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor id : </div>
                    <input type="text" class="form-control" name="txt_mentor_id"  value="<?php echo($mid);?>">
                </div>
    </div>
    
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Branch id : </div>
                <select name="txt_branch_id" class="form-control">
                <?php
                $branch_id=0;
                $branch_nm="";
                $query="Select * from branch";
                $result=  mysql_query($query);
                $num=(int)@mysql_num_rows($result);
                for($i=0;$i<$num;$i++)
                {
                    $row=mysql_fetch_array($result);
                    $branch_id=$row['branch_id'];
                    $branch_nm=$row['branch_nm'];
                
          
               ?>
              <option value="<?php echo($branch_id);?>"><?php echo($branch_nm);?></option>
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
                    <div class="text-black">Mentor name : </div>
                    <input type="text" class="form-control" name="txt_mentor_nm" id="txt_mentor_nm" value="<?php echo($mnm);?>" >
                </div>
    </div>
    
    
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor email : </div>
                    <input type="text" class="form-control" name="txt_mentor_email" id="txt_mentor_email" value="<?php echo($memail);?>" >
                </div>
    </div>
    
     <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor phone no : </div>
                    <input type="text" class="form-control" name="txt_mentor_phone" id="txt_mentor_phno" value="<?php echo($mphone);?>" >
                </div>
     </div>
    
    <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor password : </div>
                    <input type="password" class="form-control" name="txt_mentor_pass" id="txt_mentor_pass" value="<?php echo($mpass);?>" >
                </div>
    </div>
   
          <div class="form-group row">
           <?php
        if(isset($_GET['mentor_id']))
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
            <input type="submit" value="Insert" name="btn" class="btn btn-block btn-primary" style="width: 100px" onclick="return formValidator()"/>
    </div>
    <div class="col-lg-4">
           <input type="submit" value="Update" name="btn" disabled="true" class="btn btn-block btn-primary"  style="width: 100px">
    </div>
    <div class="col-lg-4">
            <input type="submit" value="Delete" name="btn" disabled="true" class="btn btn-block btn-primary"  style="width: 100px">
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



$query="SELECT * from mentor";
$result=  mysql_query($query) or die("Query failed." .mysql_error());

$num=(int)@mysql_numrows($result);
echo "<table align=center class='table' border=2 cellspacing=3>";
echo 
    "<tr>
       <td><b>Select</b></td>        
        <td><b>Mentor_id</b></td>
        <td><b>Branch_id</b></td>
        <td><b>Mentor_name</b></td>
          <td><b>Mentor_email</b></td>
          <td><b>Mentor_phone</b></td>
          <td><b>Mentor_password</b></td>
          
        
        
    </tr>";
    for ($i=0;$i<$num;$i++)
    {
        $row=  mysql_fetch_array($result);
        echo "<tr>";
        echo "<td><a href='mentor_design.php?mentor_id=".$row['mentor_id'] ."&branch_id=" .$row['branch_id'] ."&mentor_nm=" .$row['mentor_nm'] ."&mentor_email=" .$row['mentor_email'] ."&mentor_phone=" .$row['mentor_phone'] ."&mentor_password=" .$row['mentor_password'] ."'>Select</a></td>";
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
    
    
 