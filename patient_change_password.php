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
            Change Password
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
        <form action="change_password.php" method="post" onsubmit="return(validate123())"><br/><br/><br/><br/><br/><br/>
            <div class="container">
                <label for="opassword"><b>Old Password</b></label><br/>
                <input type="password" placeholder="Enter Old Password" name="opsw" id="opwd"/><br/><br/>
				<p id="opassw"></p>

                <label for="npassword"><b>New Password</b></label><br/>
                <input type="password" placeholder="Enter New Password" name="npsw" id="npwd" required/><br/><br/>
				<p id="npassw"></p>

				<label for="cpassword"><b>Confirm Password</b></label><br/>
                <input type="password" placeholder="Enter Confirm Password" name="cpsw" id="cpwd" required/><br/><br/>
				<p id="cpassw"></p>

                <button type="submit" name="ubtn">Update</button>
            </div>
        </form><br/><br/><br/>

		<!-- custom js file link -->
		<script src="js/change_pwd.js"></script>

    </body>
</html>

<?php

	if(isset($_POST['ubtn']))
	{
		$npwd=@$_POST['npsw'];
		$cpwd=@$_POST['cpsw'];
		if($npwd==$cpwd)
		{
			$q="update `registration` set `password`='$npwd' where `email`='$email';";
			if(mysqli_query($conn,$q))
			{
				$_SESSION['npwd']=$npwd;
				echo "<script type='text/javascript'> alert('Password Changed Successfully. next time you login please use the updated password'); </script> ";
			}
		}
		else
		{
			echo "<script type='text/javascript'> alert('Confirm Password and New Password does not match');";
			echo "window.location='change_password.php';</script>";
		}
	}

?>

<?php

    @include_once 'patient_footer.php';

?>