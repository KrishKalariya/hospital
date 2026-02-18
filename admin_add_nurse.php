<?php

    @include_once 'admin_header.php';
    @include_once 'connection.php';
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Add Nurse
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

        <div class="container"><br/><br/>
        <h1 class="heading">Add Nurse</h1>

            <form action="admin_add_nurse.php" method="POST">
                    <h1>register</h1>

                    <hr>
                    <label for="fname"><b>First Name</b></label><br/>
                    <input type="text" placeholder="Enter Firstname" name="fname" id="fn" required/><br/><br/>
                    <p id="fn1"></p>

                    <label for="lname"><b>Last Name</b></label><br/>
                    <input type="text" placeholder="Enter Lastname" name="lname" id="ln" required/><br/><br/>
                    <p id="ln1"></p>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="em" onblur="demo(this)" required/><Br/><br/>
                    <p id="mail1"></p>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="pwd" required/><br/><br/>
                    <p id="passw"></p>

                    <label for="cpsw"><b>Confirm Password</b></label><br/>
                    <input type="password" placeholder="Enter Confirm Password" name="cpsw" id="cpwd" required/><br/><br/>
                    <p id="cpassw"></p>

                    <label for="mno"><b>Mobile No.</b></label><br/>
                    <input type="text" placeholder="Enter Mobile No." name="mno" id="no" required/><br/><br/>
                    </hr>
                    <p id="mno1"></p>

                    <button type="submit" class="registerbtn" name="btn">Register</button>

                </div>
            </form>
  
        </section>
    </body>
</html>

<?php

if(isset($_POST['btn']))
{
    $fname=@$_POST['fname'];
    $lname=@$_POST['lname'];
    $email=@$_POST['email'];
    $pwd=@$_POST['psw'];
    $cpwd=@$_POST['cpsw'];
    $mno=@$_POST['mno'];
    $q="insert into registration values('$fname','$lname','$email','$pwd','$cpwd','$mno','Nurse')";
	if(mysqli_query($conn,$q))
	{
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        $_SESSION['email']=$email;
        $_SESSION['pwd']=$pwd;
        $_SESSION['mno']=$mno;
		echo "<script type='text/javascript'> alert('Nurse Added succefully');";
		echo "window.location='admin_manage_nurse.php';</script>";
	}
	else
	{
		//echo $q;
		echo "<script type='text/javascript'> alert('Errror in Registration');";
		echo "window.location='admin_add_nurse.php';</script>";	
	}
}

?>