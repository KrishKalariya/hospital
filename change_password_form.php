<?php
session_start();
include_once("connection.php");

date_default_timezone_set("Asia/Kolkata");
$db_time = date("Y-m-d G:i:s");
//echo $db_time;
$q = "DELETE FROM `token1` WHERE `s_time`<'$db_time'";
mysqli_query($conn, $q);

$token = $_SESSION['token'];
$em = $_SESSION['em'];
//echo $token;
//echo $em;

$q = "select * from token1 WHERE Email='$em' and token='$token'";
//echo $q;
$t = mysqli_query($conn, $q);
$count = mysqli_num_rows($t);
if ($count == 0) {
?>
    <script type="text/javascript">
        alert("Password reset token expired.");
        window.location.href = "d_login.php";
    </script>
    <?php
}
// echo "$db_time";
if (isset($_POST['submit'])) {

    $login_id = $_SESSION['em'];
    $token = $_SESSION['token'];
    $passwd = $_POST['npwd'];
    //$passwd = hash('sha512',$passwd);

    $q = "select * from token1 WHERE Email='$login_id' and token='$token'";
    $t = mysqli_query($conn, $q);
    $count = mysqli_num_rows($t);
    $temp = mysqli_fetch_assoc($t);
    if ($count > 0) {
        // if ($login_id==$temp['Email'] && $token==$temp['token']) 
        // {
        $q = "UPDATE `registration` SET `Password`='$passwd' WHERE email='$login_id'";
        if (mysqli_query($conn, $q)) {

            $q = "DELETE FROM `token1` WHERE Email='$login_id'";
            if (mysqli_query($conn, $q)) {
    ?>
                <script type="text/javascript">
                    alert("Password reset Successfull.");
                    window.location.href = "d_login.php";
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    alert("Error in deleting Token");
                    window.location.href = "d_login.php";
                </script>
            <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("Error in resetting password.");
                window.location.href = "d_login.php";
            </script>
        <?php
        }
        ?>
    <?php
    } else {

    ?>
        <script type="text/javascript">
            alert("Password reset token123 expired.");
            window.location.href = "d_login.php";
        </script>
<?php
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            forget_pwd_form
        </title>
        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sign in.css">
    </head>
    <body>
        <form action="change_password_form.php" mepthod="post" onsubmit="return(validate123())"><br/><br/><br/><br/><br/><br/>
            <div class="container">
                <label for="npwd"><b>New Password</b></label><br/>
                <input type="password" class="form-control" placeholder="Enter New Password" name="npwd" id="pass"/><br/><br/>
                <p id="passw"></p>

                <label for="rnpwd"><b>REtype Password</b></label><br/>
                <input type="password" class="form-control" placeholder="Enter Retype Password" name="rnpwd" id="password1"/><br/><br/>
                <p id="passw1"></p>

                <button type="submit" name="sub">Submit</button>
            </div>

        </form><br/><br/><br/>

        <!-- custom js file link -->
        <script type="text/javascript" src="js/forget.js"></script>

    </body>
</html>