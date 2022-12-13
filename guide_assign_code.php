<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$guide_id=$_GET["txt_guide_id"];
$mentor_id=$_GET["txt_mentor_id"];
$mentee_id=$_GET["txt_mentee_id"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into guide_assign values(" .$guide_id .",'" .$mentor_id ."','" .$mentee_id ."')";
        mysql_query($query);
       // echo $query;
        $num=  mysql_affected_rows();
            if($num=='1')
            {
                echo "Record inserted";
            }
          else 
            {
                echo "Record not inserted";
            }
             
}
elseif ($b=="Update") 
{
            $query="update guide_assign set mentor_id='" .$mentor_id ."',mentee_id='" .$mentee_id ."' where guide_id=" .$guide_id;
            mysql_query($query);
           // echo $query;
        $num=  mysql_affected_rows();
            if($num=='1')
            {
                echo "Record updated";
            }
          else 
            {
                echo "Record not updated";
            }
             
} 
 elseif ($b=="Delete") 
{
            $query="delete from guide_assign where guide_id=" .$guide_id;
            mysql_query($query);
        //echo $query;
        $num=  mysql_affected_rows();
            if($num=='1')
            {
                echo "Record deleted";
            }
          else 
            {
                echo "Record not deleted";
            }
             
} 


header("location:guide_assign_design.php");
           



?>