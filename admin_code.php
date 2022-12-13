<?php
 
$admin_name=$_GET['txt_admin_name'];
$password=$_GET['txt_Pass'];
$b=$_GET['btn'];
if($b=="Login")
{
    if($admin_name=="admin" && $password=="admin")
    {

        echo "login successful";

    }
     else 
         {

         echo "login failed";
         }

    }

?>