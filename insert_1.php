<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['category']) || empty($_POST['amount']) || empty($_POST['number']) || empty($_POST['address']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $category = $_POST['category'];
            $amount = $_POST['amount'];
            $number = $_POST['number'];
            $address = $_POST['address'];

            $query = " insert into cabbage (Category,Amount, Number,Address) values('$category','$amount','$number',' $address')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view_1.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:order_1.php");
    }



?>