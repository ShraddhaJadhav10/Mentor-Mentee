<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
//echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
//echo "Database Connected." ."</br>";

$topic_id=$_GET["txt_topic_id"];
$mentee_id=$_GET["txt_mentee_id"];
$mentor_id=$_GET["txt_mentor_id"];
$type_nm=$_GET["txt_type_nm"];
$topic_nm=$_GET["txt_topic_nm"];
$topic_date=$_GET["txt_topic_date"];
$topic_details=$_GET["txt_topic_details"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into project_sem_topic values('".$topic_id."','".$mentee_id."','".$mentor_id."','" .$type_nm ."','".$topic_nm ."','".$topic_date ."','".$topic_details."')";
        mysql_query($query);
        echo $query;
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
            $query="update project_sem_topic set mentee_id='" .$mentee_id ."',mentor_id='" .$mentor_id ."',type_nm='" .$type_nm ."',topic_nm='" .$topic_nm ."',topic_date='" .$topic_date ."',topic_details='" .$topic_details ."' where topic_id='" .$topic_id ."'";
            mysql_query($query);
            echo $query;
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
            $query="delete from project_sem_topic where topic_id=" .$topic_id;
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


           
header("location:project_sem_topic_design.php");


?>