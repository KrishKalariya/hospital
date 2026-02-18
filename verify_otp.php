<?php
session_start();
include_once("connection.php");
$_SESSION['token'] = $_REQUEST['token'];
$_SESSION['em'] = $_REQUEST['email'];
//echo "KKKKKKK" . $_SESSION['token'];
//echo "LLLLLLLL" . $_SESSION['em'];

if (!isset($_POST['submit'])) {

    date_default_timezone_set("Asia/Kolkata");
    $db_time = date("Y-m-d G:i:s");
    //$db_time = $_SESSION['db_time'];
    //$db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
   // echo "LL" . $db_time;
    $q = "DELETE FROM `token1` WHERE `s_time`<'$db_time'";
    mysqli_query($conn, $q);
    $token = $_REQUEST['token'];
    $em = $_REQUEST['email'];


    $q = "select * from token1 WHERE Email='$em' and token='$token'";
    // echo $q;
    $t = mysqli_query($conn, $q);
    $count = mysqli_num_rows($t);
    if ($count == 0) {
?>
        <script type="text/javascript">
            alert("Password reset token expired.");
            //window.location.href = "login.php";
        </script>
    <?php
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            verify_otp
        </title>
        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sign in.css">
    </head>
    <body>
        <form action="check_otp.php" method="post">
            <div class="container">
                <label for="password"><b>Password</b></label><br/>
                <input type="type" class="form-control" placeholder="Enter OTP" name="otp"/><br/><br/>

                <button type="submit" name="submit">Submit</button>
            </div>

        </form><br/><br/><br/>
    </body>
</html>

<?php
}
?>