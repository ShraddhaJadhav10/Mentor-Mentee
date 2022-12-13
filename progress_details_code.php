<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$progress_id=$_GET["txt_progress_id"];
$select_id=$_GET["txt_select_id"];
$mentee_id=$_GET["txt_mentee_id"];
$mentor_id=$_GET["txt_mentor_id"];
$progress_date=$_GET["txt_progress_date"];
$description=$_GET["txt_description"];
$project_copy=$_GET["txt_project_copy"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into progress_details values('" .$progress_id ."','" .$select_id."','" .$mentee_id ."','" .$mentor_id ."','" .$progress_date ."','" .$description ."','" .$project_copy ."')" ;
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
            $query="update progress_details set select_id='" .$select_id ."',mentee_id='" .$mentee_id ."',mentor_id='" .$mentor_id."',progress_date='" .$progress_date ."',description='" .$description ."',project_copy='" .$project_copy ."' where progress_id='" .$progress_id ."'";
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
            $query="delete from progress_details where progress_id='" .$progress_id ."'";
            mysql_query($query);
        echo $query;
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


 header("location:progress_details_design.php");      



?>