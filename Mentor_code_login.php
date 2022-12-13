<?php
    $mentoremail=$_GET["t1"];
    $mentorpass=$_GET["t2"];
    
    $db="project";
    $dbc=mysql_connect('localhost','root','')or die("Could not connect.".mysql_error());
    //echo "Server connected."."<br >";
    mysql_select_db($db)or die("Could not find database.".mysl_error());
    //echo "Database connected."."<br >";
    $query="SELECT * from mentor where mentor_email='".$mentoremail."' and mentor_password='".$mentorpass."'";
    echo $query;
    $result=  mysql_query($query) or die("<p> Query failed:<b>".mysql_error()."</br>");
    $num=(int)@mysql_num_rows($result);
//    for($i=0;$i<num;$i++)
//    {
//            $row=  mysql_fetch_array($result);
//            $_SESSION['mrid']=$row[0];
//            $_SESSION['mrpass']=$row[1];
//    }
//        
    if($num>0)
    {
        echo "<script> alert('Login Completed Successfully.')</script>";
        echo "<script> location.href='Mentor_dashboard.php' </script>";
    }
    else 
    {
       echo "<script>alert('Email or Password incorrect ')</script>";
      echo "<script>location.href='mentor_login.php'</script>";
    }
?>