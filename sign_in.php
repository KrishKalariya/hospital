<?php
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
        <!-- font awesomr cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <!-- bootstrap cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sign in.css">
    </head>
    <body>
        <form action="sign_in.php" method="post"><br/><br/><br/><br/><br/><br/>
            <div class="container">
                <label for="uname"><b>Username</b></label><br/>
                <input type="text" placeholder="Enter Username" name="eid" id="email" value="<?php echo $_SESSION['email']; ?>" /><br/><br/>

                <label for="psw"><b>Password</b></label><br/>
                <input type="password" placeholder="Enter Password" name="pwd1" id="pwd" value="<?php echo $_SESSION['pwd']; ?>" /><br/><br/>

                <button type="submit" name="lbtn">Login</button>
            </div>

        </form><br/><br/><br/>
    </body>
</html>

<?php 

    if(isset($_POST['lbtn']))
    {
        if($_SESSION['type']=="Doctor")
        {
             header("Location: doctor_admin.php");
        }
        elseif($_SESSION['type']=="Nurse")
        {
            header("Location: nurse_admin.php");
        }
        else
        {
            header("Location: patient_admin.php");
        }
    }
?>

<?php

    @include_once 'footer.php';

?>