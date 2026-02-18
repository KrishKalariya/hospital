<?php

@include_once 'connection.php';
ob_start();
session_start();

?>

<!-- custom css file link -->
<link rel="stylesheet" href="css/nurse.css">
<link rel="stylesheet" href="css/style.css">
<body>
   <div class="container" style="margin-top: 10%; margin-left: 3%;">
<?php
$q="select * from reviews;";
$result=mysqli_query($conn,$q);
echo "<section class='reviews' id='reviews'>";
    echo"<h1 class='heading'> satisfied clients </h1>";
    echo "<div class='box-container container'>";
    while($r=mysqli_fetch_array($result))
    {
        echo "<div class='box'>";
            echo "<img src='images/pic-1.png' alt=''>";
            echo "<p>.$r[2].</p>";
            echo "<h3>.$r[0].</h3>";
            echo "<span>Satisfied Clients</span>";
        echo "</div>";
    }
    echo "</div>";
echo "</section>";