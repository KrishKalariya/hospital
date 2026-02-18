<?php
    @include_once 'header.php';
    @include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Smile Care</title>
   <link rel="icon" type="logo.png/x-icon" href="images/logo.png">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- home section start -->
   <section class="home">
       <div class="container">
           <div class="row min-vh-100 align-items-center">
               <div class="content">
                   <h3>
                       let us brighten your smile
                   </h3>
                   <p>Your great smile beigns with a great dentist</p>
               </div>
           </div>
       </div>
   </section>
   <!-- home section end  -->

   <!-- process section start  -->

   <section class="process">

        <h1 class="heading">work process</h1>

            <div class="box-container container">

                <div class="box">
                    <img src="images/process-1.png" alt="">
                    <h3>Cosmetic Dentistry</h3>
                    <p>A cosmetic dentist is responsible 
                        for a variety of procedures — from minor 
                        fixes to major surgeries.</p>
                </div>

                <div class="box">
                    <img src="images/process-2.png" alt="">
                    <h3>Pediatric Dentistry</h3>
                    <p>Pediatric dentists are
                         dedicated to the oral health of children
                          from infancy through the teen years. </p>
                </div>

                <div class="box">
                    <img src="images/process-3.png" alt="">
                    <h3>Dental Implants</h3>
                    <p>Dental implants are replacement tooth roots.
                         Implants provide a strong foundation for fixed (permanent) or 
                         removable replacement teeth that are made to
                          match your natural teeth.</p>
                </div>

            </div>
    </section>

   <!-- process section end  -->
   <!-- custom js file link -->
   <script src="js/script.js"></script>
</body>
</html>

<?php

    @include_once 'footer.php';

?>