<?php
    @include_once 'connection.php';
    ob_start();
    session_start();
    $mname=$_SESSION['mname'];
    $q="delete from `medicine` where medicine_name='$mname';";
    if(mysqli_query($conn,$q))
    {
        echo "<script type='text/javascript'> window.location='manage_medicine.php'; </script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('something wrong'); </script>";
    }
?>