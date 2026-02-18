<?php

    @include_once 'connection.php';
    ob_start();
    session_start();

?>

<form action="demo2.php" method="post">
    fname: <input type="text" name="fname"/><br/>
    lname: <input type="text" name="lname"/><br/>
    <input type="submit" name="btn" value="submit"/>
</form>
<?php

    if(isset($_POST['btn']))
    {
        $fname=@$_POST['fname'];
        $lname=@$_POST['lname'];
        $q="insert into demo values('$fname','$lname');";
        if(mysqli_query($conn,$q))
        {
            $_SESSION['lname']=$lname;
            header("Location: demo.php");
        }
        else
        {
            echo "error";
        }
    }

?>