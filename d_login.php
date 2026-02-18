<?php
@include_once 'connection.php';
@include_once 'header.php';
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Contact
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign in.css">
</head>

<body>
    <form action="d_login.php" method="post"><br /><br /><br /><br /><br /><br />
        <div class="container">
            <label for="uname"><b>Username</b></label><br />
            <input type="text" placeholder="Enter Username" name="eid" id="email" /><br /><br />

            <label for="psw"><b>Password</b></label><br />
            <input type="password" placeholder="Enter Password" name="psw" id="pwd" /><br /><br />

            <button type="submit" name="lbtn">Login</button>
        </div>

        <span class="psw">Forgot <a href="forget_pwd_form.php">Password?</a></span>
        </div>
    </form><br /><br /><br />
</body>

</html>

<?php

if (isset($_POST['lbtn'])) {
    $email = @$_POST['eid'];
    $pwd = @$_POST['psw'];
    $q = "select * from registration where email='$email' and password='$pwd'";
    $res = mysqli_query($conn, $q);
    $count = mysqli_num_rows($res);
    while ($f = mysqli_fetch_array($res)) {
        $_SESSION['type'] = $f['type'];
        if ($count == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = $pwd;

            echo $_SESSION['type'];
            if ($_SESSION['type'] == "Doctor") {
                echo "<script type='text/javascript'> window.location='doctor_admin.php'; </script>";
            } else if ($_SESSION['type'] == "Nurse") {
                header("Location: nurse_admin.php");
            }
            else if ($_SESSION['type'] == "Admin") {
                header("Location: admin_dash.php");
            }
            else {
                header("Location: patient_admin.php");
            }
        }
    }
}
?>
<?php
    @include_once 'footer.php';
?>