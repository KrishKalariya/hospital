<?php
session_start();
include_once("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');
//date_default_timezone_set("Asia/Kolkata");
//$db_time=date("Y-m-d G:i:s", strtotime("- 5 min"));
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
        <form action="forget_pwd_form.php" method="post"><br/><br/><br/><br/><br/><br/>
            <div class="container">
                <label for="email"><b>Email</b></label><br/>
                <input type="type" class="form-control" placeholder="Enter Email" name="email"/><br/><br/>

                <button type="submit" name="sub">Submit</button>
            </div>

        </form><br/><br/><br/>
    </body>
</html>

<?php
if (isset($_POST['sub'])) {
	$em = @$_POST['email'];

	$q = "select * from registration where email='$em'";
	$count = mysqli_num_rows(mysqli_query($conn, $q));
	if ($count == 1) {
		$q1 = "select * from token1 where Email='$em'";
		$countem = mysqli_num_rows(mysqli_query($conn, $q1));
		if ($countem == 1) {
			echo "<script type='text/javascript'>alert('A Password reset link is already sent to your mail please check. New link will be generated after old link expires');</script>";
		} else {
			date_default_timezone_set("Asia/Kolkata");
			$s_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));

			$token = hash('sha512', $s_time);
			$otp = mt_rand(100000, 999999);
			$ins_token = "INSERT INTO token1 VALUES ('','$em','$s_time','$token',$otp)";
			// echo "$ins_token";
			//$db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
			//$_SESSION['db_time'] = $db_time;
			if (mysqli_query($conn, $ins_token)) {
				$link = "http://localhost/bhavya_PHP/20SDSCE01109_Savaliya%20Bhavya/verify_otp.php?email=$em&token=$token";
				//echo $link;
				$mail = new PHPMailer(true);
				try {
					//Server settings
					$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
					$mail->isSMTP();                                            //Send using SMTP
					$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
					$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
					$mail->Username   = 'bsavaliya956@rku.ac.in';                     //SMTP username
					$mail->Password   = 'Rku@123456';                               //SMTP password
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
					$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

					//Recipients
					$mail->setFrom('bsavaliya956@rku.ac.in', 'dentist Website');
					$mail->addAddress($em, 'bhavya');     //Add a recipient
					//$mail->addAddress('ellen@example.com');               //Name is optional
					$mail->addReplyTo('bsavaliya956@rku.ac.in', 'Reply');
					//$mail->addCC('cc@example.com');
					// $mail->addBCC('bcc@example.com');

					//Attachments
					// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
					//  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

					//Content
					$mail->isHTML(true);                                  //Set email format to HTML
					$mail->Subject = 'Password reset link for Student Demo Website';
					$mail->Body    = 'OTP for password reset is ' . $otp . ' <br/>This is the password reset link for your account with Student Demo Website .The link is valid for 24 hours.=> ' . @$link .  "<br/> Please use forgot password facility again if the link has expired";
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					if ($mail->send()) {
						echo '<script>alert("Password reset link has been sent to your registered email.Please check the spam also.");</script>';
					}
				} catch (Exception $e) {
					//	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					echo '<script>alert("Failed to reset the password please try again after sometime.");</script>';
				}
			}
		}
	} else {
		echo "<script type='text/javascript'>alert('No such Email address is registered'); window.location='forget_pwd_form.php';</script>";
	}
}
?>