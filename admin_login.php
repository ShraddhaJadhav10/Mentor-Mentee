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
            
        var admin_name= document.getElementById("txt_admin_name");
        var admin_pass= document.getElementById("txt_pass");
	 if(notEmpty(admin_name,"Admin name Must be given")) 
            {
            if(notEmpty(admin_pass ,"Password Must be given"  && lengthRestriction(pass, 8, 10))
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
            
              
        
       function lengthRestriction(elem, min, max)
       {
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max)
        {
		return true;
	}else
        {
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
                
               
              </ul>
            </nav>
          </div>
      <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
      </div>
      </div>
   </header>
        
         <div class="site-section bg-light"  id="services-section" >
      <div class="container">
          <br>
          <div class=" text-center">
            <h2 class="text-black">Admin Login</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">

          
       
              <form action="admin_login.php" method="GET">
          
             <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Username : </div>
                    <input type="text" name="txt_admin_name" class="form-control" id="txt_admin_name"><br>
                </div>
    </div>
             <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black"> password : </div>
                    <input type="password" name="txt_Pass" class="form-control" id="txt_pass"> <br>
                </div>
    </div>
             <div class="form-group row">
                 <div class="col-lg-4">
                     <input type="submit" value="Login" name="btn"  class="btn btn-block btn-primary"  style="width: 100px" onclick="return formValidator()">
        </div>
             
             </div>
        </form>

          </div>
      </div>
         </div>

    
<?php
  if(isset($_GET['btn']))
            {
$admin_name=$_GET['txt_admin_name'];
$password=$_GET['txt_Pass'];
$b=$_GET['btn'];
if($b=="Login")
{
    if($admin_name=="admin" && $password=="admin")
    {

      echo "<script> alert('Login successful') </script>";
        ?><meta http-equiv="Refresh"content="0 url=admin_dashboard.php"/><?php
    }
     else 
         {

         echo "<script> alert('Login failed ') </script>";
         }

    }
            }
?>
    </body>
</html>