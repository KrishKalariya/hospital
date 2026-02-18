<?php
    include_once("connection.php");
    
    if (isset($_GET['email'])) {
        $q="delete from registration WHERE email='{$_GET['email']}'";
        if (mysqli_query($conn,$q))
        {
            header("location:admin_manage_nurse.php");
        } 
        else 
        {
            echo "error in delete data";
        }
    } 
    else 
    {
        echo "error in variable";
    }
?>