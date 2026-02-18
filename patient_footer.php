<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dentist Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

    <style>
            .button {
                background-color: #008CBA;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: medium;
                margin: 2px 1px;
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
            }
            .button1:hover {
                background-color:#008CBA;
                color: white;
            }
        </style>

</head>
<body>
    <section class="footer" style="margin-top: 2%">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+91 9034922174</p>
                <p>+91 9773149068</p>
            </div>
   
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Suvarna Bhoomi, 1st Floor,<br/>
                   Speedwell Party Plot Chowk,<br/> 
                   Mota Mava,<br/>
                   Rajkot-360004</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>09:00am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>smilecare@gmail.com</p>
                <button class="button button1"><a href="reviews_form.php">Give Us Reviews</a></button>
            </div>
        </div>

        <div class="credit"> Made by <span>Krish & Nax</span>  </div>

    </section>
</body>
</html>