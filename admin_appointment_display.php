<?php
include_once("connection.php");
if (isset($_POST['update_btn'])) 
{
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mno = $_POST['mno'];
    $date=$_POST['date'];
    $problem=$_POST['problem'];

    $q3 = "update appointment set name='$fname',number=$mno,date='$date',problem='$problem' where email='$email'";

    if (mysqli_query($conn, $q3)) 
    {
        echo "<script>window.location='admin_appointment.php';</script>";
    } else {
        echo "error in updating data";
    }
}
// ,img_select='$img'