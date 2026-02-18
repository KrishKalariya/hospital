<?php
include_once("connection.php");
if (isset($_POST['update_btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];

    $q3 = "update registration set first_name='$fname',last_name='$lname',mobile_no=$mno where email='$email'";

    if (mysqli_query($conn, $q3)) {
        echo "<script>window.location='admin_manage_patient.php';</script>";
    } else {
        echo "error in updating data";
    }
}
