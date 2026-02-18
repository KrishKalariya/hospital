<?php

@include_once 'admin_header.php';
@include_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="reviews" id="reviews">
        <br /><br /><br />
        <h1 class="heading"> Admin Dashboard </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/nurse-avatar.jpg" width="150" height="200" alt="Avatar"><br />
                <p>
                <h1>Nurses</h1>
                </p>
                <?php
                $q = "select * from registration where type='Nurse';";
                $res = mysqli_query($conn, $q);
                $count = mysqli_num_rows($res);
                ?>
                <h3><?php echo $count; ?></h3>
            </div>

            <div class="box">
                <img src="images/patient-avatar.jpg" alt="Avatar"><br />
                <p>
                <h1>Patients</h1>
                </p>
                <?php
                $q = "select * from registration where type='Patient';";
                $res = mysqli_query($conn, $q);
                $count = mysqli_num_rows($res);
                ?>
                <h3><?php echo $count; ?></h3>
            </div>

            <div class="box">
                <img src="images/appointment.jpg" width="150" height="200" alt="Avatar"><br />
                <p>
                <h1>Appointment</h1>
                </p>
                <?php
                $q = "select * from appointment;";
                $res = mysqli_query($conn, $q);
                $count = mysqli_num_rows($res);
                ?>
                <h3><?php echo $count; ?></h3>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>

<?php
@include_once 'footer.php';
?>