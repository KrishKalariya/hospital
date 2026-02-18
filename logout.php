<?php
session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['pwd']);
echo "<script type='text/javascript'>alert('Logout successfully'); window.location='d_login.php';</script>";
?>