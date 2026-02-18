<?php
@include_once 'connection.php';
@include_once 'nurse_header.php';
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- custom css file link -->
        <link rel="stylesheet" href="css/nurse.css">
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
        <div class="container" style="margin-top: 10%; margin-left: 3%;">
<?php
        $q="select * from medicine;";
        $result=mysqli_query($conn,$q);
        echo"<table border='1' style='width: 90%'>";
        echo "<tr>";
        echo "<th> Medicine_name </th>";
        echo "<th> Quantity </th>";
        echo "<th> Price </th>";
        echo "<th> edit </th>";
        echo "<th> delete </th>";
        echo "</tr>";
        while($r=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$r[0]."</td>";
            echo "<td>".$r[1]."</td>";
            echo "<td>".$r[2]."</td>";
?>
            <td> <a href="medicine_edit.php?medicine_name=<?php echo $r[0]; ?>"><input type="button" value="Edit" name="ebtn"/></a></td>
            <td> <a href="medicine_delete.php?medicine_name=<?php echo $r[0]; ?>"><input type="button" value="Delete" name="dbtn"/></a></td>
<?php
            echo "</tr>";
            $_SESSION['mname']=$r[0];
        }
        echo "</table> <br/><br/>";
?>
        </div>
        <form action="medicine_stock.php" method="post">
            <div style="margin-top: 5%; margin-left: 80%; ">
                <button class="button button1">Add Medicine</button>
            </div>
        </form>

    </body>
</html>
<?php
    echo "<div style='margin-top: 10%;'>";
    @include_once 'footer.php';
    echo "</div>";
?>