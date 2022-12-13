<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$meet_id=$_GET["txt_meet_id"];
$meet_date=$_GET["txt_meet_date"];
$mentor_id=$_GET["txt_mentor_id"];
$mentee_id=$_GET["txt_mentee_id"];
$meet_details=$_GET["txt_meet_details"];
$present_absent=$_GET["txt_present_absent"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into meeting values('" .$meet_id ."','" .$meet_date ."','" .$mentor_id ."','" .$mentee_id ."','" .$meet_details ."','" .$present_absent ."')" ;
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
            $query="update meeting set meet_date='" .$meet_date ."',mentor_id='" .$mentor_id ."',mentee_id='" .$mentee_id ."',meet_details='" .$meet_details ."',present_absent='" .$present_absent."' where meet_id='" .$meet_id ."'";
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
            $query="delete from meeting where meet_id='" .$meet_id ."'";
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


header("location:meeting_design.php");      



?>