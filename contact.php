/* This PHP code snippet is a registration form for a website. Here's a breakdown of what the code
does: */
<?php
@include_once 'header.php';
@include_once 'connection.php';
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Contact
    </title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">
</head>

<body>

    <section class="contact" id="contact">

        <div class="container"><br /><br />
            <h1 class="heading">Registration</h1>

            <form action="contact.php" method="POST" onsubmit="return(validate123())">

                <hr>
                <label for="fname"><b>First Name</b></label><br />
                <input type="text" placeholder="Enter Firstname" name="fname" id="fn" required /><br /><br />
                <p id="fn1"></p>

                <label for="lname"><b>Last Name</b></label><br />
                <input type="text" placeholder="Enter Lastname" name="lname" id="ln" required /><br /><br />
                <p id="ln1"></p>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="em" onblur="demo(this)" required /><Br /><br />
                <p id="mail1"></p>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="pwd" required /><br /><br />
                <p id="passw"></p>

                <label for="cpsw"><b>Confirm Password</b></label><br />
                <input type="password" placeholder="Enter Confirm Password" name="cpsw" id="cpwd" required /><br /><br />
                <p id="cpassw"></p>

                <label for="mno"><b>Mobile No.</b></label><br />
                <input type="text" placeholder="Enter Mobile No." name="mno" id="no" required /><br /><br />
                </hr>
                <p id="mno1"></p>

                <label for="type"><b>Type</b></label><br />
                <input type="radio" name="type" value="Doctor" />Doctor<br />
                <input type="radio" name="type" value="Nurse" />Nurse<br />
                <input type="radio" name="type" value="Patient" />Patient<br /><br />

                <p>By creating an account you agree to our <u><a href="#">Terms & Privacy</a></u>.</p>

                <button type="submit" class="registerbtn" name="btn" style="background-color: #387ADF;">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <u><a href="d_login.php">Sign in</a></u></p>
        </div>
        </form>

    </section>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    <script src="js/registration.js"></script>
</body>

</html>

<?php

if (isset($_POST['btn'])) {
    $fname = @$_POST['fname'];
    $lname = @$_POST['lname'];
    $email = @$_POST['email'];
    $pwd = @$_POST['psw'];
    $cpwd = @$_POST['cpsw'];
    $mno = @$_POST['mno'];
    $type = @$_POST['type'];
    $q = "insert into registration values('$fname','$lname','$email','$pwd','$cpwd','$mno','$type')";
    if (mysqli_query($conn, $q)) {
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = $pwd;
        $_SESSION['mno'] = $mno;
        $_SESSION['type'] = $type;
        echo "<script type='text/javascript'> alert('Registration successful');";
        echo "window.location='sign_in.php';</script>";
    } else {
        //echo $q;
        echo "<script type='text/javascript'> alert('Errror in Registration');";
        echo "window.location='contact.php';</script>";
    }
}
?>
<?php

@include_once 'footer.php';

?>
