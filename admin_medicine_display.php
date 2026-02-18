<?php
include_once("connection.php");
if (isset($_POST['update_btn'])) 
{
    $mname = $_POST['mname'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

    $q3 = "update medicine set quantity='$quantity',price='$price' where medicine_name='$mname'";

    if (mysqli_query($conn, $q3)) 
    {
        echo "<script type='text/javascript'>window.location='admin_manage_medicine.php';</script>";
    } else {
        echo "<script type='text/javascript'> alert('error in updating data'); </script>";
    }
}
