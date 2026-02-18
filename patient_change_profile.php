<?php
    @include_once 'connection.php';
    @include_once 'patient_header.php';
    ob_start();
    session_start();
    $email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            change profile
        </title>
        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <!-- bootstrap cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sign in.css">
    </head>
    <body>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/><br/>
        <form action="change_profile.php" method="post">
            <label for="fname"><b>First Name</b></label><br/>
                <input type="text" placeholder="Enter Firstname" name="fname" id="fn"/><br/><br/>
                <p id="fn1"></p>

                <label for="lname"><b>Last Name</b></label><br/>
                <input type="text" placeholder="Enter Lastname" name="lname" id="ln"><br/><br/>
                <p id="ln1"></p>
        
                <label for="email"><b>Email</b></label><br/>
                <input type="text" placeholder="Enter Email" name="email" id="em" onblur="demo(this)" value="<?php echo $_SESSION['email'] ?>"/><br/><br/>
                <p id="mail1"></p>

                <label for="mno"><b>Mobile No.</b></label><br/>
                <input type="text" placeholder="Enter Mobile No." name="mno" id="no"/><br/><br/>
                </hr>
                <p id="mno1"></p>

                <button type="submit" name="btn" class="registerbtn">Register </button><br/>
        </form>
    </body>
</html>

<?php

    if(isset($_POST['btn']))
    {
        $fname=@$_POST['fname'];
        $lname=@$_POST['lname'];
        $mno=@$_POST['mno'];
        $q="update `registration` set `first_name`='$fname',`last_name`='$lname',`mobile_no`='$mno' where `email`='$email';";
        if(mysqli_query($conn,$q))
        {
            echo "<script type='text/javascript'> alert('profile edited sucessfully'); </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('error in editing'); </script>";
        }
    }

?>

<?php

    @include_once 'patient_footer.php';

?>