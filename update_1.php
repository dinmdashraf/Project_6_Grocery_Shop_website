<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $category = $_POST['category'];
        $amount = $_POST['amount'];
        $number = $_POST['number'];
        $address = $_POST['address'];

        $query = " update cabbage set Category = '".$category."', Amount = '".$amount."', Number='".$number."',Address='".$address."' where User_ID='".$UserID."'";
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