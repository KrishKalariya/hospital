<?php

    @include_once 'patient_header.php';
    @include_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<br/><br/><br/><br/><br/>
    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Dental care For Your Family</h3>
                <p> Dentists are trained professionals who help care for the teeth 
                    and mouth. Regularly seeing a dentist can help you to 
                    maintain a good level of dental health, which may have 
                    a direct impact on your overall well-being.
                </p>
            </div>
        </div>
    </section>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>

<?php

    @include_once 'patient_footer.php';

?>