<?php
   $db="project";
   $dbc=mysql_connect('localhost','root','')or die("Could not connect.".mysql_error());
   //echo "Server Connected."."<br/>";
   @mysql_select_db($db)or die("Could not find database.".mysql_error());
   //echo "Database connected."."<br/>";
?>

<html>
    <head>
        <title>Mentor Mentee Diary</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="coaching-master/https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="../coaching-master/css/bootstrap.min.css">
        <link rel="stylesheet" href="../coaching-master/css/jquery-ui.css">
        <link rel="stylesheet" href="../coaching-master/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../coaching-master/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../coaching-master/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="../coaching-master/css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="../coaching-master/css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="../coaching-master/fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="../coaching-master/css/aos.css">

        <link rel="stylesheet" href="../coaching-master/css/style.css">
        <script type="text/javascript"></script>
    </head>
    <body>
       
        <header class="site-navbar  site-navbar-target" role="banner"  style="background-color: #373a6d">

            <div class="container">
                <div class="row align-items-center">
          
                <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="../coaching-master/index.html" class="h2 mb-0">Mentor Mentee Diary<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="../Homepage.php" class="nav-link">Home</a></li>
                <li><a href="../Mentor_dashboard.phps" class="nav-link">Dashboard</a></li>
                <li><a href="../Home_page.php" class="nav-link">Logout</a></li>
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
            <h2 class="text-black">Datewise Meeting Report</h2>
          </div>
        
          <div class="service bg-white" style="width: 800px;margin-left: 150px;">
        <form>
            <div class="form-row">
            <div class="col-lg-6">
                From Date : <input type="text" class="form-control" name="t1"><br><br>
            </div>
            </div>
            <div class="form-row">
            <div class="col-lg-6">
            To Date : <input type="text" class="form-control" name="t2"><br><br>
            </div>
            </div>
             <div class="col-lg-4">
            <input type="submit" name="btn" value="Show" class="btn btn-block btn-primary  " style="width: 100px">
             </div>
        </div>
        </form>
          </div>
      </div>
      <div class="form-row"> 
<?php
 if(isset($_GET["btn"]))
    {
        $fromdate=$_GET["t1"];
        $todate=$_GET["t2"];
        $query="SELECT * from meeting where meet_date between'".$fromdate."' and '".$todate."'";
        //$query= "SELECT meet_id, meet_date, mentor_nm, mentee_nm, meet_details, present_absent from meeting, mentor, mentee where meeting.mentor_id=mentor.mentor_id and meeting.mentee_id=mentee.mentee_id and meet_date between'".$fromdate."' and '".$todate."'";
        //echo $query;
        $result=mysql_query($query) or die("Query failed.".mysql_error()); 
        $num=(int)@mysql_num_rows($result);
        echo "<h1>Datewise Report For Meeting</h1>";
        echo "<table align=center class='table' border=3 cellspacing=3>";
        echo "<tr>
                <td><b> Meet Id </b></td>
                <td><b> Meet Date </b></td>
                <td><b> Mentor Name </b></td>
                <td><b> Mentee Name </b></td>
                <td><b> Meeting Details </b></td>
                <td><b> Presenty </b></td>
            </tr>";
       for($i=0;$i<$num;$i++)
       {
           $row=  mysql_fetch_array($result);
           echo "<tr>";
                        echo"<td>".$row[0]."</td>";
                        echo"<td>".$row[1]."</td>";
                        echo"<td>".$row[2]."</td>";
                        echo"<td>".$row[3]."</td>";
                        echo"<td>".$row[4]."</td>";
                        echo"<td>".$row[5]."</td>";
           echo "</tr>";
       }
       echo "</table>";
    }   
?>
 <script src="../coaching-master/js/jquery-3.3.1.min.js"></script>
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
  
        <script src="../coaching-master/js/typed.js"></script>
            <script>
                var typed = new Typed('.typed-words', 
                {
                    strings: [" Business Speakers", " Life Coach"],
                    typeSpeed: 80,
                    backSpeed: 80,
                    backDelay: 4000,
                    startDelay: 1000,
                    loop: true,
                    showCursor: true
                });
            </script>
  
  <script src="../coaching-master/js/main.js"></script>
      </div>
</body>
</html>