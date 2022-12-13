<?php

$db="project";
$dbc=  mysql_connect('localhost','root','') or die("Could not connect".mysql_error());
echo "Server connected." ."</br>";

@mysql_select_db($db) or die("Could not find database" .mysql_error());
echo "Database Connected." ."</br>";

$branch_id=$_GET["txt_branch_id"];
$branch_nm=$_GET["txt_branch_nm"];

$b=$_GET["btn"];

if($b=="Insert")
{
        $query="insert into branch values(" .$branch_id .",'" .$branch_nm ."')";
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
            $query="update branch set branch_nm='" .$branch_nm ."' where branch_id=" .$branch_id;
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
            $query="delete from branch where branch_id=" .$branch_id;
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


header("location:branch_design.php");
           



?>