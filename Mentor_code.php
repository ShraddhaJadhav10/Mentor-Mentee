<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$mentor_id=$_GET["txt_mentor_id"];
$branch_id=$_GET["txt_branch_id"];
$mentor_nm=$_GET["txt_mentor_nm"];
$mentor_email=$_GET["txt_mentor_email"];
$mentor_phone=$_GET["txt_mentor_phone"];
$mentor_pass=$_GET["txt_mentor_pass"];
$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into mentor values('" .$mentor_id ."','" .$branch_id ."','" .$mentor_nm ."','" .$mentor_email ."','" .$mentor_phone ."','" .$mentor_pass ."')" ;
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
            $query="update mentor set branch_id='" .$branch_id ."', mentor_nm='" .$mentor_nm ."',mentor_email='" .$mentor_email ."',mentor_phone='" .$mentor_phone."',mentor_password='" .$mentor_pass ."' where mentor_id='" .$mentor_id ."'" ; 
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
            $query="delete from mentor where mentor_id='" .$mentor_id ."'";
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

header("location:Mentor_design.php");

           



?>