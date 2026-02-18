<?php

    @include_once 'connection.php';
    @include_once 'admin_header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Medicine stock
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

            <h1 class="heading">Medicine</h1>

            <form action="admin_medicine_stock.php" method="post">
                <span>Medicine name :</span><br/>
                <input type="text" class="box" placeholder="enter name" name="mname"required><br/><br/>

                <span>Quantity :</span>
                <input type="text" class="box" placeholder="enter Quantity" name="quantity" required><br/><br/>

                <span>Price :</span>
                <input type="text" class="box" placeholder="enter price" name="price" required><br/><br/>

                <input type="submit" value="Submit" name="btn" class="link-btn">
            </form>  
        </section>
    </body>
</html>

<?php
    if(isset($_POST['btn']))
    {
        $mname=@$_POST['mname'];
        $quantity=@$_POST['quantity'];
        $price=@$_POST['price'];
        $q="INSERT INTO medicine VALUES('$mname','$quantity','$price');";
        if(mysqli_query($conn,$q))
        {
            echo "<script type='text/javascript'> window.location='admin_manage_medicine.php'; </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('something wrong please try again'); </script>";
            echo "<script type='text/javascript'> window.location='admin_medicine_stock.php'>; </script>";

        }
    }
?>

<?php

    @include_once 'footer.php';

?>