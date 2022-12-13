<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$select_id=$_GET["txt_select_id"];
$topic_id=$_GET["txt_topic_id"];
$mentor_id=$_GET["txt_mentor_id"];
$mentee_id=$_GET["txt_mentee_id"];
$accept_reject=$_GET["txt_accept_reject"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into final_project_select values('" .$select_id ."','" .$topic_id ."','" .$mentor_id ."','" .$mentee_id ."','" .$accept_reject ."')" ;
        mysql_query($query);
        //echo $query;
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
            $query="update final_project_select set topic_id='" .$topic_id ."',mentor_id='" .$mentor_id ."',mentee_id='" .$mentee_id ."',accept_reject='" .$accept_reject ."' where select_id='" .$select_id ."'";
            mysql_query($query);
            //echo $query;
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
            $query="delete from final_project_select where select_id='" .$select_id ."'";
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

header("location:final_project_select_design.php");

           



?>