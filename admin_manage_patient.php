<?php

@include_once 'connection.php';
@include_once 'admin_header.php';
ob_start();
session_start();

?>

<!-- custom css file link -->
<link rel="stylesheet" href="css/nurse.css">
<link rel="stylesheet" href="css/style.css">

<body>
    <div class="container" style="margin-top: 10%; margin-left: 3%;">
        <?php
        $q = "select * from registration where type='Patient';";
        $result = mysqli_query($conn, $q);
        echo "<table border='1' style='width: 90%'>";
        echo "<tr>";
        echo "<th> first_name </th>";
        echo "<th> last_name </th>";
        echo "<th> email </th>";
        echo "<th> password </th>";
        echo "<th> mobile_no </th>";
        echo "<th> edit </th>";
        echo "<th> delete </th>";
        echo "</tr>";
        while ($r = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $r[0] . "</td>";
            echo "<td>" . $r[1] . "</td>";
            echo "<td>" . $r[2] . "</td>";
            echo "<td>" . $r[3] . "</td>";
            echo "<td>" . $r[5] . "</td>";
        ?>
            <td> <a href="admin_patient_edit.php?email=<?php echo $r[2]; ?>"><input type="button" value="Edit" /></a></td>
            <td> <a href="admin_delete.php?email=<?php echo $r[2]; ?>"><input type="button" value="Delete" /></a></td>
        <?php
            echo "</tr>";
            $_SESSION['em'] = $r[2];
        }
        echo "</table> <br/><br/>"

        ?>
    </div>
</body>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php
@include_once 'footer.php';
?>