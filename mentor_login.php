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
            
        var mentor_email= document.getElementById("txt_mentoremail");
        var mentor_password= document.getElementById("txtPassword");
	
         
           if(notEmpty(mentor_email ,"Email Must be given") &&  emailValidator(mentor_email, "Please enter a valid email address"))
           {
            
                 if(notEmpty(mentor_password ,"Password Must be given") && lengthRestriction(pass, 8, 10))
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
            
              function emailValidator(elem, helperMsg)
              {
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp))
        {
		return true;
	}
        else
        {
		alert(helperMsg);
               elem.value="";
		elem.focus();
		return false;
	}
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
            <h2 class="text-black">Mentor Login</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">

          
       
    <form action="mentor_code_login.php" method="GET">
          
             <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor email : </div>
                    <input type="text" class="form-control" type="email" id="txt_mentoremail" name="t1"><br>
                </div>
    </div>
             <div class="form-group row">
              <!--for center-->
              <!--<div class="col-lg-3"></div>-->
                <div class="col-lg-6">
                    <div class="text-black">Mentor password : </div>
                    <input type="password" class="form-control" id="txtPassword" name="t2"> <br>
                </div>
    </div>
             <div class="form-group row">
                 <div class="col-lg-4">
                     <input type="submit" value="Login" name="btnLogin"  class="btn btn-block btn-primary"  style="width: 100px" onclick="return formValidator()">
                     
        </div>
             
             </div>
        </form>

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