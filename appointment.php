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

            <h1 class="heading">make appointment</h1>

            <form action="appointment.php" method="post" onsubmit="return(validate123())">
                <span>your name :</span><br/>
                <input type="text" class="box" placeholder="enter your name" name="name" id="n" required><br/><br/>
                <p id="n1"></p>

                <span>your email :</span>
                <input type="email" class="box" placeholder="enter your email" name="email" id="e" onblur="demo(this)" required><br/><br/>
                <p id="e1"></p>

                <span>your Mobile no. :</span>
                <input type="text" class="box" placeholder="enter your mobile number" name="mno" id="m" required><br/><br/>
                <p id="m1"></p>

                <span>appointment date :</span>
                <input type="datetime-local" class="box" name="date" required><br/><br/>

                <span>What Happend To You? : </span>
                <input type="text" class="box" placeholder="Write Something..." name="problem" style="height: 200px;" required><br/><br/>

                <input type="submit" value="Make Appointment" name="btn" class="link-btn">
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
        $email=@$_POST['email'];
        $no=@$_POST['mno'];
        $date=@$_POST['date'];
        $problem=@$_POST['problem'];
        $q="INSERT INTO appointment VALUES ('$name','$email',$no,'$date','$problem');";
        if(mysqli_query($conn,$q))
        {
            echo "<script type='text/javascript'> alert('Appointment Successful'); </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Error in Appoinment Please Refill this Form');";
            echo "window.location='appointment.php'; </script>";
        }
    }
?>

<?php

    @include_once 'patient_footer.php';

?>