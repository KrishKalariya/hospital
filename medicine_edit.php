<?php
session_start();
ob_start();
include_once("connection.php");
@include_once 'doctor_header.php';
$mname= $_SESSION['mname'];
 $q="select * from medicine where medicine_name='$mname';";
 $result=mysqli_query($conn,$q);
 while($r=mysqli_fetch_array($result))
 {
     ?>
<!DOCTYPE html>
  <html>
    <head>
        <title>
            medicine edit
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
        <div class="container"><br/><br/>
          <form method="post" action="medicine_display.php">
          <h1 class="header">Edit Data</h1>
            <label for="mname"><b>medicine Name</b></label><br/>
            <input type="text" name="mname" value="<?php echo $r[0]; ?>"readonly/><br/><br/>

            <label for="quantity"><b>Quantity</b></label><br/>
            <input type="text" name="quantity" value="<?php echo $r[1]; ?>"/><br/><br/>

            <label for="price"><b>Price</b></label><br/>
            <input type="text" name="price" value="<?php echo $r[2]; ?>"/><br/><br/>

            <button type="submit" class="registration" name="update_btn">Update</button>
          </form>
        </div>
      </section>
    </body>
  </html>
<?php
 }
?>