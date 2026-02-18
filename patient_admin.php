<?php

    @include_once 'connection.php';
    @include_once 'patient_header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>services</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <br/><br/><br/><br/><br/>

    <section class="services" id="services">

        <h2 class="heading">Our Services</h2>

            <div class="box-container container">

                <div class="box">
                    <img src="images/icon-1.svg" alt="">
                    <h3>Alignment specialist</h3>
                    <p>An orthodontist is a dental specialist who corrects the position of your teeth and jaws. </p>
                </div>

                <div class="box">
                    <img src="images/icon-2.svg" alt="">
                    <h3>Cosmetic dentistry</h3>
                    <p>A cosmetic dentist is responsible 
                        for a variety of procedures — from minor 
                        fixes to major surgeries.</p>
                </div>

                <div class="box">
                    <img src="images/icon-3.svg" alt="">
                    <h3>Oral hygiene experts</h3>
                    <p>This dental specialty treats problems related to the hard and soft tissues of your face, mouth, and jaw</p>
                </div>

                <div class="box">
                    <img src="images/icon-4.svg" alt="">
                    <h3>Root canal specialist</h3>
                    <p>If your tooth’s pulp becomes infected or the interior of your teeth becomes otherwise damaged or diseased</p>
                </div>

                <div class="box">
                    <img src="images/icon-5.svg" alt="">
                        <h3> Prosthodontist Specialist</h3>
                        <p>Prosthodontists restore and replace lost or damaged teeth. </p>
                </div>

                <div class="box">
                    <img src="images/icon-6.svg" alt="">
                    <h3>Cavity inspection</h3>
                    <p>Dental cavities are holes in teeth that form when acid in the mouth erodes tooth enamel.</p>
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