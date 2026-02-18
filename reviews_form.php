<?php

    @include_once 'connection.php';
    @include_once 'patient_header.php';
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
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>

        <section class="contact" id="contact">

            <h1 class="heading">Giving Reviews</h1>

            <form action="reviews_form.php" method="post">
                <span>your name :</span><br/>
                <input type="text" class="box" placeholder="enter your name" name="name" id="n" required><br/><br/>
                <p id="n1"></p>

                <span>your Mobile no. :</span>
                <input type="text" class="box" placeholder="enter your mobile number" name="mno" id="m" required><br/><br/>
                <p id="m1"></p>

                <span>Message : </span>
                <input type="text" class="box" placeholder="Write Something..." name="message" style="height: 200px;" required><br/><br/>

                <input type="submit" value="Submit" name="btn" class="link-btn">
            </form>  
        </section>
        
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    <script src="js/appointment.js"></script>

    </body>
</html>

<?php

    if(isset($_POST['btn']))
    {
        $name=@$_POST['name'];
        $mno=@$_POST['mno'];
        $message=@$_POST['message'];
        $q="INSERT INTO reviews VALUES ('$name','$mno','$message');";
        if(mysqli_query($conn,$q))
        {
            echo "<script type='text/javascript'> alert('Thank You For Giving us Reviews'); </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('error');";
        }
    }

?>

<?php

    @include_once 'footer.php';

?>