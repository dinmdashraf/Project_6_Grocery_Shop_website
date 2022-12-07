<?php
    require_once("connection.php");
if(isset($_GET['Del']))
        {
             $UserID = $_GET['Del'];
             $query = " delete from cabbage where User_ID = '".$UserID."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:view_1.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view_1.php");
         }
		 
?>		 