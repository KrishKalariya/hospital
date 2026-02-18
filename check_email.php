<?php
include_once('connection.php');
$eid=$_REQUEST['emailid'];
$q="select * from registration where email='$eid'";
$count=mysqli_num_rows(mysqli_query($conn,$q));
	if($count==1)
	{
		echo "error";
	}
else
    {
	echo "noerror";
    }
?>