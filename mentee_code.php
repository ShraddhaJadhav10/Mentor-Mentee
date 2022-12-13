<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$mentee_id=$_GET["txt_mentee_id"];
$rollno=$_GET["txt_rollno"];
$mentee_nm=$_GET["txt_mentee_nm"];
$mentee_class=$_GET["txt_mentee_class"];
$branch_id=$_GET["txt_branch_id"];
$mentee_year=$_GET["txt_mentee_year"];
$mentee_email=$_GET["txt_mentee_email"];
$mentee_pass=$_GET["txt_mentee_pass"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into mentee values('" .$mentee_id ."'," .$rollno .",'" .$mentee_nm ."','" .$mentee_class ."','".$branch_id ."','" .$mentee_year ."','" .$mentee_email."','" .$mentee_pass ."')" ;
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
            $query="update mentee set roll_no=".$rollno .",mentee_nm='" .$mentee_nm ."',mentee_class='" .$mentee_class ."',branch_id='" .$branch_id ."',mentee_year='" .$mentee_year."',mentee_email='" .$mentee_email."',mentee_pass='" .$mentee_pass."' where mentee_id='" .$mentee_id ."'"; 
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
            $query="delete from mentee where mentee_id='" .$mentee_id ."'";
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


 header("location:mentee_design.php");          



?>