<?php
session_start();
ob_start();
include_once("connection.php");
@include_once 'admin_header.php';
$e = @$_GET['email'];
$q = "select * from registration where email='$e'";
$result = mysqli_query($conn, $q);
while ($r = mysqli_fetch_array($result)) {
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
    <section class="contact" id="contact" style="margin-top: 5%;">
      <div class="container"><br /><br />

        <form method="post" action="admin_display.php">
          <h1 class="header">Edit Data</h1>
          <label for="fname"><b>First Name</b></label><br />
          <input type="text" name="fname" value="<?php echo $r[0]; ?>" /><br /><br />

          <label for="lname"><b>Last Name</b></label><br />
          <input type="text" name="lname" value="<?php echo $r[1]; ?>" /><br /><br />

          <label for="email"><b>Email</b></label><br />
          <input type="text" name="email" value="<?php echo $r[2]; ?>" readonly /><br /><br />

          <label for="mno"><b>Mobile No</b></label><br />
          <input type="text" name="mno" value="<?php echo $r[5]; ?>" /><br /><br />

          <button type="submit" class="registration" name="update_btn">Update</button>
        </form>
      </div>
    </section>
    <!-- custom js file link -->
    <script src="js/registration.js"></script>
  </body>

  </html>

<?php
}
?>

<?php

@include_once 'patient_footer.php';

?>